<?php
session_start();
require "connectdb.php";

if (empty($_SESSION['users'] OR $_SESSION['users']['flag'] == 0)) {
    header("location: ../index.php");
} ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Darim | Фитнес-клуб">
    <meta name="keywords" content="Activitar, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DomuMed</title>

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">

    <!--Css Styles-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/loader.css" type="text/css">
    <link rel="stylesheet" href="../css/head.css" type="text/css">
    <link rel="stylesheet" href="../css/shapka.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/admin.css" type="text/css">
</head >

<body style="background-color: #005f9e">
    <header class="header-section">
        <div class="container-fluid">
            <div class="logo">
                <a href="../index.php">
                    <img src="../img/logo.png" alt="">
                </a>
            </div>
            <div class="container">
                <div class="nav-menu">
                    <nav class="mainmenu mobile-menu">
                        <ul>
                            <li class="active"><a href="../index.php">На главную</a></li>
                            <li><a href="?section=product">Продукты</a></li>
                        
                            <li><a href="?section=users">Пользователи</a></li>
                            <a href="exit.php" class="primary-btn f-btn">Выйти</a>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    
    <div class="container admin-container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                $section = $_GET['section'];
                if (!empty($section)) {
                    require "admin{$section}.php";
                }
                ?>
            </div>
        </div>
    </div>
    </section>

	<script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/masonry.pkgd.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>
