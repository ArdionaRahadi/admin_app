<?php
session_start();
include "config/controller.php";

if (!isset($_SESSION["username"]) && !isset($_SESSION["login"])) {
  header("location: login/");
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
    <link rel="stylesheet" href="css/style.css" />
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
                        <a href="logout/"><i class="bx bx-log-out-circle"></i>
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
                <img loading="lazy" src="assets/img/raiden ei thumb.jpg" alt="Profil" />
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
                <a class="active" href="#">
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
                <a href="pemasukan/">
                    <i class="bx bxs-dashboard table"></i>
                    <span>Pemasukan</span>
                </a>
            </li>
            <li>
                <a href="pengeluaran/">
                    <i class="bx bx-line-chart table"></i>
                    <span>Pengeluaran</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- SIDEBAR -->

    <!-- MAIN -->
    <section class="main">
        <div class="main_container">
            <div class="header">
                <h1>Dashboard</h1>
                <ul>
                    <li>
                        <p>Home</p>
                    </li>
                    <li>
                        <p>/</p>
                    </li>
                    <li>
                        <p>Dashboard</p>
                    </li>
                </ul>
            </div>
            <div class="wrapper">
                <div class="card">
                    <div class="loader"></div>
                    <img onload="myFunction()" loading="lazy" src="assets/img/Furina.png" alt="Furina Genshin Impact"
                        title="Furina Genshin Impact" />
                </div>
                <div class="card">
                    <div class="loader"></div>
                    <img onload="myFunction()" loading="lazy" src="assets/img/Tighnari.png"
                        alt="Tighnari Genshin Impact" title="Tighnari Genshin Impact" />
                </div>
                <div class="card">
                    <div class="loader"></div>
                    <img onload="myFunction()" loading="lazy" src="assets/img/Emili.png" alt="Emili Genshin Impact"
                        title="Emili Genshin Impact" />
                </div>
                <div class="card">
                    <div class="loader"></div>
                    <img onload="myFunction()" loading="lazy" src="assets/img/Ayaka dan Yoimiya.jpg"
                        alt="Ayaka dan Yoimiya Genshin Impact" title="Ayaka dan Yoimiya Genshin Impact" />
                </div>
                <div class="card">
                    <div class="loader"></div>
                    <img onload="myFunction()" loading="lazy" src="assets/img/Yae Miko dan Raiden.jpg"
                        alt="Yae Miko dan Raiden Genshin Impact" title="Yae Miko dan Raiden Genshin Impact" />
                </div>
                <div class="card">
                    <div class="loader"></div>
                    <img onload="myFunction()" loading="lazy" src="assets/img/Genshin_Impact_Anniversary.jpg"
                        alt="Genshin Impact Anniversary" title="Genshin Impact Anniversary" />
                </div>
                <div class="card">
                    <div class="loader"></div>
                    <img onload="myFunction()" loading="lazy" src="assets/img/Furina dan Traveler.jpg"
                        alt="Furina dan Traveler Genshin Impact" title="Furina dan Traveler Genshin Impact" />
                </div>
                <div class="card">
                    <div class="loader"></div>
                    <img onload="myFunction()" loading="lazy" src="assets/img/Acheron.jpeg"
                        alt="Acheron Honkai Star Rail" title="Acheron Honkai Star Rail" />
                </div>
                <div class="card">
                    <div class="loader"></div>
                    <img onload="myFunction()" loading="lazy" src="assets/img/Firefly.jpeg"
                        alt="Firefly Honkai Star Rail" title="Firefly Honkai Star Rail" />
                </div>
                <div class="card">
                    <div class="loader"></div>
                    <img onload="myFunction()" loading="lazy" src="assets/img/Jingliu.jpeg"
                        alt="Jingliu Honkai Star Rail" title="Jingliu Honkai Star Rail" />
                </div>
                <div class="card">
                    <div class="loader"></div>
                    <img onload="myFunction()" loading="lazy" src="assets/img/Kiana.jpeg" alt="Kiana Honkai Impact"
                        title="Kiana Honkai Impact" />
                </div>
                <div class="card">
                    <div class="loader"></div>
                    <img onload="myFunction()" loading="lazy" src="assets/img/Veliona.jpeg" alt="Veliona Honkai Impact"
                        title="Veliona Honkai Impact" />
                </div>
                <div class="card">
                    <div class="loader"></div>
                    <img onload="myFunction()" loading="lazy" src="assets/img/Seele dan Veliona.jpeg"
                        alt="Seele dan Veliona Honkai Impact" title="Seele dan Veliona Honkai Impact" />
                </div>
                <div class="card">
                    <div class="loader"></div>
                    <img onload="myFunction()" loading="lazy" src="assets/img/crownless_vs_rover_wuthering_waves.jpg"
                        alt="Crownless vs Rover Wuthering Waves" title="Crownless vs Rover Wuthering Waves" />
                </div>
                <div class="card">
                    <div class="loader"></div>
                    <img onload="myFunction()" loading="lazy" src="assets/img/Changli.jpg" alt="Changli Wuthering Waves"
                        title="Changli Wuthering Waves" />
                </div>
                <div class="card">
                    <div class="loader"></div>
                    <img onload="myFunction()" loading="lazy" src="assets/img/Jinshi.jpeg" alt="Jinshi Wuthering Waves"
                        title="Jinshi Wuthering Waves" />
                </div>
            </div>
        </div>
    </section>
    <!-- MAIN -->

    <script src="js/script.js"></script>
</body>

</html>