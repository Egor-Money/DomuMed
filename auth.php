<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GUNS</title>

        <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
        <link href='fonts/Lato-Medium.css' rel='stylesheet' type='text/css'>
        <link href='fonts/Lato-Heavy.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png">
        <link rel="shortcut icon" type="image/png" href="img/fav-icon.png"/>  
    </head>
    
    <body>
           <div class="fullwidth-cotnent-block hero-bg-1">
        <div class="fullwidth-content-tablecell">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
                        <div class="login-style-1">
                            <div class="login-logo">
                                <h1>GUNS</h1>
                            </div>
                            <h2>Авторизация</h2>
                            <div class="login-form-style-1">
                                <form action="vender/authAction.php" method="POST">
                                <p><input type="text" name="login" required  placeholder="Введите ваш логин"></p>
                                <p><input type="password" name="password" required placeholder="Введите пароль"></p>
                                <p><input type="submit" name="singin" value="Авторизоваться"> </i></p>
                                <p><a href="reg.php">Регистрация</a></p>
                                </form>
                                <?php 
                                if ($_SESSION["message"]){
                                $alert = $_SESSION["message"];
                                echo "<p style = 'color:red;'> $alert</p>";
                                unset($_SESSION["message"]);  
                                }
 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
        <script src="js/vendor/jquery.1.11.1.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.easing.1.3.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script>
            <script type="text/javascript">new WOW().init();</script>
        <script src="js/main.js"></script>
    </body>
</html>