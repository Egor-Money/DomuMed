<?php
session_start();
require "vender/connectdb.php";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <title>domu_med</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.php" class="js-logo-clone">Domu Med</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="index.php">Главная</a></li>
                <li><a href="shop.php">Магазин</a></li>
                <li><a href="news.php">Новости</a></li>
                <li><a href="about.php">О нас</a></li>
                <li><a href="contact.php">Контакты</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="cart.php" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
              <?php if (!empty($_SESSION['users'])) {?>
                                <a href="vender/exit.php" class="primary-btn f-btn">Выйти</a>
                                <?php if ($_SESSION['users']['flag'] > 0) {?>
                                    <a href="vender/admin.php" class="primary-btn f-btn">Админка</a>
                                <?php }?>
                                <?php } else { ?>

            <a href="auth.php" class="icons-btn d-inline-block bag">
              <span class="icon-user"></span></a>
              <?php }?>

            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">
              <h1>Добро пожаловать</h1>
              <p>
                <a href="shop.php" class="btn btn-primary px-5 py-3">Магазин</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">ПОПУЛЯРНЫЕ ПРОДУКТЫ</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="shop-single.php"> <img src="images/product_01.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.php">КАРДИОМАГНИЛ</a></h3>
            <p class="price">155.00₽</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="shop-single.php"> <img src="images/product_02.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.php">АФОБАЗОЛ</a></h3>
            <p class="price">170.00₽</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="shop-single.php"> <img src="images/product_03.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.php">НАЙЗ</a></h3>
            <p class="price">110.00₽</p>
          </div>
        <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="shop.php" class="btn btn-primary px-4 py-3">Посмотреть еще</a>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Новая продукция</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">

              <div class="text-center item mb-4">
                <a href="shop-single.php"> <img src="images/product_03.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.php">НАЙЗ</a></h3>
                <p class="price">220.00₽</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single.php"> <img src="images/product_01.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.php">КАРДИОМАГНИЛ</a></h3>
                <p class="price">140.00₽</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single.php"> <img src="images/product_02.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.php">АФОБАЗОЛ</a></h3>
                <p class="price">130.00₽</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>Domu Med</h2>
                <p>Соблюдайте пожалуйста 1,5М дистанции.
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="https://gogov.ru/covid-19/world" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">О нас</h3>
              <p>Каждый продукт безопасен, эффективен и направлен на решение конкретных задач.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Быстрые ссылки</h3>
            <ul class="list-unstyled">
              <li><a href="#">Главная</li>
              <li><a href="#">Магазин</a></li>
              <li><a href="#">О нас</a></li>
              <li><a href="#">Контакты</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Контакты</h3>
              <ul class="list-unstyled">
                <li class="address">Россия,г.Омск</li>
                <li class="phone"><a href="tel://23923929210">+7 913 666 998</a></li>
                <li class="email">domu_med@gmail.com</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              Корпорация  &copy; 2022 Все права защищены
            </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>
</html>