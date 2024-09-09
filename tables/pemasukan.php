<?php
session_start();
include "../config/controller.php";

if (!isset($_SESSION["username"]) && !isset($_SESSION["login"])) {
  header("location: loginPage/index.php");
} else {
  
  //Membuat Fungsi Select
  $sql = select("SELECT * FROM t_pemasukan_" . $_SESSION["username"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- boxicon -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- my css -->
    <link rel="stylesheet" href="../css/style.css" />
    <title>AdminApp</title>
</head>

<body>
    <!-- TOPBAR -->
    <header class="top_bar">
        <i id="menu" class="bx bx-menu menu"></i>
        <form>
            <div class="input_group">
                <i class="bx bx-search search"></i>
                <input placeholder="search..." type="text" name="search" class="search" id="search" />
            </div>
        </form>
        <div class="profile">
            <div id="profile_setting" class="profile_setting">
                <ul class="setting_list">
                    <li>
                        <a href="#">
                            <i class="bx bx-user-circle"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="notif">
                        <a href="#">
                            <i class="bx bx-bell"></i>
                            <span>Notification</span>
                        </a>
                    </li>
                    <li class="notif">
                        <a href="#">
                            <i class="bx bx-message-dots"></i>
                            <span>Message</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="bx bx-cog"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="../loginPage/logout.php"><i class="bx bx-log-out-circle"></i>
                            <span>Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="icon_container">
                <i class="bx bx-bell notif_icon"></i>
                <i class="bx bx-message-dots notif_icon"></i>
            </div>
            <div id="img_thumb" class="img_thumb">
                <img loading="lazy" src="../assets/img/raiden ei thumb.jpg" alt="Profil" />
            </div>
        </div>
    </header>
    <!-- TOPBAR -->

    <!-- SIDEBAR -->
    <nav id="sidebar" class="sidebar">
        <h1>AdminApps</h1>
        <div class="sub">
            <span>Main</span>
        </div>
        <ul class="menu_list">
            <li>
                <a href="../index.php">
                    <i class="bx bxs-dashboard dahsboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-line-chart chart"></i>
                    <span>Charts</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-widget widget"></i>
                    <span>Widgets</span>
                </a>
            </li>
        </ul>
        <div class="sub">
            <span>Tables</span>
        </div>
        <ul class="menu_list">
            <li>
                <a class="active" href="#">
                    <i class="bx bxs-dashboard table"></i>
                    <span>Pemasukan</span>
                </a>
            </li>
            <li>
                <a href="pengeluaran.php">
                    <i class="bx bx-line-chart table"></i>
                    <span>Pengeluaran</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- SIDEBAR -->

    <!-- PEMASUKAN -->
    <section class="main">
        <div class="main_container">
            <div class="header">
                <h1>Pemasukan</h1>
                <ul>
                    <li>
                        <p>Home</p>
                    </li>
                    <li>
                        <p>/</p>
                    </li>
                    <li>
                        <p>Pemasukan</p>
                    </li>
                </ul>
            </div>
            <div class="table">
                <button class="button_tambah" id="button_tambah">Tambah Data</button>
                <table class="main_table" cellspacing="0">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Banyaknya</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach ($sql as $data): ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $data["nama"]; ?></td>
                        <td><?php echo $data["harga"]; ?></td>
                        <td><?php echo $data["banyaknya"]; ?> Buah</td>
                        <td><?php echo $data["harga"] *
                          $data["banyaknya"]; ?></td>
                        <td><i class="bx bx-edit"></i></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </section>
    <!-- PEMASUKAN -->

    <script src="../js/script.js"></script>
</body>

</html>