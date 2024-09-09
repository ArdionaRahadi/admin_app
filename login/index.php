<?php
session_start();
include "../config/controller.php";

if(isset($_SESSION["username"]) || isset($_SESSION["login"])) {
  header("location: ../");
}

//Ketika Tombol Login Di Klik
if (isset($_POST["login"])) {
  
  //Mengambil Inputan User
  $username = mysqli_real_escape_string(
    $db_conn,
    htmlspecialchars(strtolower($_POST["username"]))
  );
  $password = mysqli_real_escape_string(
    $db_conn,
    htmlspecialchars($_POST["password"])
  );

  //Jika User Tidak Menginputkan Apa-Apa
  if ($username == "" || $password == "") {
    $eror = true;
  } else {
    
    //Telusuri Tabel Di Databse
    $select = mysqli_query(
      $db_conn,
      "SELECT * FROM t_users WHERE email = '$username' OR username = '$username'"
    );

    //Mengambil Data Dari Tabel Di Database
    $row = mysqli_fetch_assoc($select);

    //Jika Ada
    if (mysqli_num_rows($select) > 0) {
      //Cek Passwordnya
      if (password_verify($password, $row["password"])) {
        
        //Memberi Session Sesuai Nama User (Di Ambil Dari Kolom Username) dan Session Login
        $_SESSION["username"] = $row["username"];
        $_SESSION["login"] = true;

        //Mengarahkan Ke Halaman Utama
        header("location: ../");
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
    <link rel="stylesheet" href="../css/style.css" />
    <title>AdminApp - Login</title>
</head>

<body style="background-color: #eaeaea">
    <div class="container_form">
        <form method="post" accept-charset="utf-8" autocomplete="off">
            <h1>Login</h1>
            <?php if (isset($eror)): ?>
            <span>Semua Inputan Wajib Di Isi</span>
            <?php endif; ?>

            <?php if (isset($erorUsernameOrEmail)): ?>
            <span class="eror">Username Atau Email Belum Terdaftar</span>
            <?php endif; ?>
            <div class="form_content">
                <label for="username"><i class="bx bx-user"></i></label>
                <input class="username" type="text" name="username" id="username" placeholder="Username Or Email"
                    required />
            </div>

            <?php if (isset($erorPassword)): ?>
            <span class="eror">Password Salah</span>
            <?php endif; ?>
            <div class="form_content">
                <label for="password"><i class="bx bx-lock"></i></label>
                <input class="password" type="password" name="password" id="password" placeholder="Password" required />
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
                Dont Have Account? <a href="../signup/">Sign Up</a>
            </p>
        </form>
    </div>
    <script src="../js/script.js"></script>
</body>

</html>