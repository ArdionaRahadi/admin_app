<?php
include "../config/controller.php";
//Ketika Tombol Signup Di Click
if (isset($_POST["register"])) {
  //Menangkap Inputan User
  $email = mysqli_real_escape_string($db_conn,
    htmlspecialchars(strtolower($_POST["email"]))
  );
  $username = mysqli_real_escape_string($db_conn, htmlspecialchars($_POST["username"]));
  $password = mysqli_real_escape_string($db_conn, htmlspecialchars($_POST["password"]));
  $confirmPassword = mysqli_real_escape_string($db_conn, 
    htmlspecialchars($_POST["confirmPassword"])
  );

  //Validasi Form Jika User Tidak Menginputkan Apa Apa (Form Kosong)
  if (
    $username == "" ||
    $email == "" ||
    $password == "" ||
    $confirmPassword == ""
  ) {
    $eror = true;

    //Validasi Ketika Konfirmasi Password Tidak Sama Dengan Password
  } elseif ($confirmPassword !== $password) {
    $erorPw = true;

    //Mengenkripsi Password
  } else {
    $hasedPw = password_hash($password, PASSWORD_DEFAULT);
    $select_email = mysqli_query(
      $db_conn,
      "SELECT * FROM t_users WHERE email = '$email'"
    );
    $select_username = mysqli_query(
      $db_conn,
      "SELECT * FROM t_users WHERE username = '$username'"
    );

    //Mengecek Apakah Inputan User Ada Di Database
    if (mysqli_num_rows($select_email) > 0) {
      $erorEmail = true;
    } elseif (mysqli_num_rows($select_username) > 0) {
      $erorUsername = true;
    } else {
      $success = true;

      //Membuat Tabel Pemasukan
      mysqli_query(
        $db_conn,
        "CREATE TABLE `t_pemasukan_$username` (
          id INT PRIMARY KEY AUTO_INCREMENT,
          nama VARCHAR(255),
          harga INT(11),
          banyaknya INT(11)
          );"
      );

      //Membuat Tabel Pengeluaran
      mysqli_query(
        $db_conn,
        "CREATE TABLE `t_pengeluaran_$username` (
            id INT PRIMARY KEY AUTO_INCREMENT,
            nama VARCHAR(255),
            harga_satuan INT(11),
            banyaknya INT(11)
          );"
      );
      
      //Memasukkan Inputan Form Registrasi Ke Database
      mysqli_query(
        $db_conn,
        "INSERT INTO t_users VALUES(NULL, '$email', '$username', '$hasedPw')"
      );
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
    <title>AdminApp - SignUp</title>
</head>

<body style="background-color: #eaeaea">
    <div class="container_form">
        <form method="post" accept-charset="utf-8">
            <h1>Sign up</h1>

            <?php if (isset($eror)): ?>
            <span>Semua Inputan Wajib Di Isi</span>
            <?php endif; ?>

            <?php if (isset($erorEmail)): ?>
            <span>Email Sudah Terdaftar</span>
            <?php endif; ?>

            <?php if (isset($success)): ?>
            <span class="success">Registrasi Berhasil Silahkan Login</span>
            <?php endif; ?>
            <div class="form_content">
                <label for="email"><i class="bx bx-envelope"></i></label>
                <input class="email username" type="email" name="email" id="email" placeholder="Email" required />
            </div>

            <?php if (isset($erorUsername)): ?>
            <span class="eror">Username Sudah Digunakan, Gunakan Username Lain</span>
            <?php endif; ?>
            <div class="form_content">
                <label for="username"><i class="bx bx-user"></i></label>
                <input class="username" type="text" name="username" id="username" placeholder="Username" required />
            </div>
            <div class="form_content">
                <label for="password"><i class="bx bx-lock"></i></label>
                <input class="password" type="password" name="password" id="password" placeholder="Password" required />
            </div>

            <?php if (isset($erorPw)): ?>
            <span class="eror">Password Tidak Sama</span>
            <?php endif; ?>
            <div class="form_content">
                <label for="password"><i class="bx bx-lock"></i></label>
                <input class="password" type="password" name="confirmPassword" id="confirmPasswordPpassword"
                    placeholder="Confirm Password" required />
            </div>

            <div class="checkbox showpw">
                <input onclick="showPasswd()" id="showPw" type="checkbox" />
                <label for="showPw">Show Password</label>
            </div>
            <div class="checkbox">
                <input id="checkbox" type="checkbox" required />
                <label for="checkbox">I Accept <a href="#">Terms and Services</a></label>
            </div>

            <button type="submit" name="register">Sign up</button>

            <p class="register">Have Account? <a href="../login/">Login</a></p>
        </form>
    </div>
    <script src="../js/script.js"></script>
</body>

</html>