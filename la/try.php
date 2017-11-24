<div class="body-content">
  <div class="module">
    <h1>Login</h1>
    <form class="form" action="try.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>

<?php
$mysqli = new mysqli("localhost", "root", "", "hotel_reservation");
//the form has been submitted with post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = $mysqli->query("SELECT * FROM users");
    $row = mysqli_fetch_array($result);

    $email = $_POST['email'];
    $password = $_POST['password'];

    while ($row = mysqli_fetch_array($result)) {
        if ($row[3]==$email) {
            header("location: welcome.php");
        }
    }
}
?>