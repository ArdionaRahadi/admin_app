<?php
include "../config/controller.php";
$eror = "";
$erorPasswd = "";
if (isset($_POST["register"])) {
  $email = $_POST["email"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["confirmPassword"];

  if($username == "" || $email == "" || $password == "" || $confirmPassword == ""){
    $eror = true;
  } 
  if ($confirmPassword !== $password){
    $erorPasswd = true;
  }
}
?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- boxicon -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- my css -->
    <link rel="stylesheet" href="css/style.css" />
    <title>Sign up</title>
</head>

<body style="background-color: #eaeaea">
    <div class="container_form">
        <form method="post" accept-charset="utf-8">
            <h1>Sign up</h1>

            <?php if($eror) : ?>
            <span>Semua Inputan Wajib Di Isi</span>
            <?php endif ?>

            <div class="form_content">
                <label for="email"><i class="bx bx-envelope"></i></label>
                <input class="email username" type="email" name="email" id="email" placeholder="Email" />
            </div>
            <div class="form_content">
                <label for="username"><i class="bx bx-user"></i></label>
                <input class="username" type="text" name="username" id="username" placeholder="Username" />
            </div>
            <div class="form_content">
                <label for="password"><i class="bx bx-lock"></i></label>
                <input class="password" type="password" name="password" id="password" placeholder="Password" />
            </div>
            <div class="form_content">
                <label for="password"><i class="bx bx-lock"></i></label>
                <input class="password" type="password" name="confirmPassword" id="confirmPasswordPpassword"
                    placeholder="Confirm Password" />
            </div>
            <?php if($erorPasswd) : ?>
            <span>Password Tidak Sama</span>
            <?php endif ?>
            <div class="checkbox showpw">
                <input onclick="showPasswd()" id="showPw" type="checkbox" />
                <label for="showPw">Show Password</label>
            </div>
            <div class="checkbox">
                <input onclick="showPasswd()" id="showPw" type="checkbox" />
                <label for="showPw">I Accept <a href="#">Terms and Services</a></label>
            </div>

            <button type="submit" name="register">Sign up</button>

            <p class="register">Have Account? <a href="login.php">Login</a></p>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>

</html>