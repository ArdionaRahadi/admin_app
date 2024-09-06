<?php
session_start();
include "../config/controller.php";
if (isset($_POST["login"])) {
  $username = strtolower($_POST["username"]);
  $password = $_POST["password"];

  if ($username == "" || $password == "") {
    $eror = true;
  } else {
    $select = mysqli_query(
      $db_conn,
      "SELECT * FROM t_users WHERE email = '$username' OR username = '$username'"
    );
    $row = mysqli_fetch_assoc($select);
    if (mysqli_num_rows($select) > 0) {
      if (password_verify($password, $row["password"])) {
        $_SESSION["username"] = $row["username"];
        $_SESSION["login"] = true;
        header("location: ../index.php");
      } else {
        $erorPassword = true;
      }
    } else {
      $erorUsernameOrEmail = true;
    }
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
    <title>Login</title>
</head>

<body style="background-color: #eaeaea">
    <div class="container_form">
        <form method="post" accept-charset="utf-8">
            <h1>Login</h1>
            <?php if (isset($eror)): ?>
            <span>Semua Inputan Wajib Di Isi</span>
            <?php endif; ?>
            
            <?php if (isset($erorUsernameOrEmail)): ?>
            <span>Username Atau Email Belum Terdaftar</span>
            <?php endif; ?>
            <div class="form_content">
                <label for="username"><i class="bx bx-user"></i></label>
                <input class="username" type="text" name="username" id="username" placeholder="Username" />
            </div>
            
            <?php if (isset($erorPassword)): ?>
            <span>Password Salah</span>
            <?php endif; ?>
            <div class="form_content">
                <label for="password"><i class="bx bx-lock"></i></label>
                <input class="password" type="password" name="password" id="password" placeholder="Password" />
            </div>
            <div class="checkbox showpw">
                <input onclick="showPasswd()" id="showPw" type="checkbox" />
                <label for="showPw">Show Password</label>
            </div>

            <a class="forgot" href="#">
                <p>Forgot Password?</p>
            </a>

            <button type="submit" name="login">Login</button>

            <p class="register">
                Dont Have Account? <a href="register.php">Sign Up</a>
            </p>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>

</html>