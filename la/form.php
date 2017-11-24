<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli("localhost", "root", "", "hotel_reservation");

//the form has basename(path)een submitted with post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //two passwords are equal to each other
    if ($_POST['password'] == $_POST['confirmpassword']) {
        
        //set all the post variables
        $first_name = $mysqli->real_escape_string($_POST['first']);
        $last_name = $mysqli->real_escape_string($_POST['last']);
        $username = $mysqli->real_escape_string($_POST['email']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = md5($_POST['password']); //md5 has password for security
        $avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);
        
        //make sure the file type is image
        if (preg_match("!image!",$_FILES['avatar']['type'])) {
            
            //copy image to images/ folder 
            if (copy($_FILES['avatar']['tmp_name'], $avatar_path)){
                
                //set session variables
                $_SESSION['username'] = $username;
                $_SESSION['avatar'] = $avatar_path;

                //insert user data into database
                $sql = "INSERT INTO users (first_name, last_name, email, password, avatar) "
                        . "VALUES ('$first_name', '$last_name', '$email', '$password', '$avatar_path')";
                
                //if the query is successsful, redirect to welcome.php page, done!
                if ($mysqli->query($sql) === true){
                    $_SESSION['message'] = "Registration succesful! Added $username to the database!";
                    header("location: welcome.php");
                }
                else {
                    $_SESSION['message'] = 'User could not be added to the database!';
                }
                $mysqli->close();          
            }
            else {
                $_SESSION['message'] = 'File upload failed!';
            }
        }
        else {
            $_SESSION['message'] = 'Please only upload GIF, JPG or PNG images!';
        }
    }
    else {
        $_SESSION['message'] = 'Two passwords do not match!';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="lala.css">
</head>
<body>
    <div class="body-content">
        <div class="module">
           <h1>Create an account</h1>
            <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
                    <label>First Name</label>
                    <input type="text" placeholder="First Name" name="first" required />
                    <br><br><label>Last Name</label>
                    <input type="text" placeholder="Last Name" name="last" required />
                    <br><br><label>User Name</label>
                    <input type="text" placeholder="User Name" name="username" required />
                    <br><br><label>E-mail</label><input type="email" placeholder="Email" name="email" required />
                    <br><br><label>Password</label>
                    <input type="password" placeholder="Password(6-8)" name="password" autocomplete="new-password" required />
                    <br><br><label> Password</label><input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
                    <br><br><div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
                    <br><br><input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
                    <br><br><br>
            </form>
        </div>
    </div>
</body>
</html>