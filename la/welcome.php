<?php session_start(); ?>
<?php include '../html/rooms.html';?>
<?php include '../html/css.html';?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="la.css">
</head>
<body>
    <div class="body content">
        <div class="welcome">
            <br>
            <img style="width: 100px; height: 100px;" src="<?= $_SESSION['avatar'] ?>"><br />
            Welcome <span class="user"><?= $_SESSION['username'] ?></span>
            <?php
            $mysqli = new mysqli("localhost", "root", "", "hotel_reservation");
            //Select queries return a resultset
            $sql = "SELECT username, avatar FROM users";
            $result = $mysqli->query($sql); //$result = mysqli_result object
            //var_dump($result);
            ?>
            <br><br>
        </div>
    </div>

</body>
</html>