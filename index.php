<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/homePage/css/style.css" />
  <link rel="stylesheet" href="assets/public/css/base.css" />
  <link rel="stylesheet" href="assets/public/css/header.css" />
  <link rel="stylesheet" href="assets/public/css/footer.css" />
  <link rel="stylesheet" href="assets/public/css/modal.css" />
  <link rel="stylesheet" href="assets/public/fonts/fontawesome-free-6.1.2-web/css/all.min.css" />
  <link rel="stylesheet" href="assets/public/fonts/themify-icons/themify-icons.css" />

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />
  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/public/header.js"></script>
  <title>Home Page</title>
</head>

<body>
  <div class="container-fluid">
    <!-- header -->
    <?php
    $duongdan = "views/searchPage.php";
    $linklogo = "assets/public/img/masthead_logo.jpg";
    $linkhome = "";
    $linksearchpage = "views/searchPage.php";
    $linkcart = "views/cart.php";
    $linkadmin = "views/admin/admin.php";
    $linkdangxuat = "controller/dangxuat.php";
    include "views/header.php";
    ?>
    <!-- main -->
    <main class="row">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-md-12 col-12 d-flex align-items-center justify-content-center">
            <img src="assets/public/img/main-home-img.jpg" alt="" class="main__img" />
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12 d-flex flex-column main__slider">
            <h2 class="main__slider-heading">
              <b></b>
              <span class="main__slider-text">NEW REALEASE</span>
              <b></b>
            </h2>
            <!-- slider -->
            <div id="demo" class="carousel slide" data-ride="carousel" style="user-select:none">
              <!-- The slideshow -->
              <div class="carousel-inner d-flex m-auto">
                <div class="carousel-item active">
                  <div class="row">
                    <ul class="row carousel-item-list">
                      <li class="col-xl-3 col-lg-3 col-md-4 col-6 carousel-item-product">
                        <img src="assets/homePage/img/main_product-2.jpg" alt="" />
                      </li>
                      <li class="col-xl-3 col-lg-3 col-md-4 col-6 carousel-item-product">
                        <img src="assets/homePage/img/main_product-3.jpg" alt="" />
                      </li>
                      <li class="col-xl-3 col-lg-3 col-md-4 d-xl-block d-lg-block d-md-block d-none  carousel-item-product">
                        <img src="assets/homePage/img/main_product-4.jpg" alt="" />
                      </li>
                      <li class="col-xl-3 col-lg-3 d-xl-block d-lg-block d-md-none d-none carousel-item-product">
                        <img src="assets/homePage/img/main_product-5.jpg" alt="" />
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="carousel-item">
                  <ul class="row carousel-item-list">
                    <li class="col-xl-3 col-lg-3 col-md-4 col-6 carousel-item-product">
                      <img src="assets/homePage/img/main_img.png" alt="" />
                    </li>
                    <li class="col-xl-3 col-lg-3 col-md-4 col-6 carousel-item-product">
                      <img src="assets/homePage/img/main_product-5.jpg" alt="" />
                    </li>
                    <li class="col-xl-3 col-lg-3 col-md-4 col-md-4 d-xl-block d-lg-block d-md-block d-none carousel-item-product">
                      <img src="assets/homePage/img/main_product-4.jpg" alt="" />
                    </li>
                    <li class="col-xl-3 col-lg-3 col-md-4 d-xl-block d-lg-block d-md-none d-none carousel-item-product">
                      <img src="assets/homePage/img/main_product-3.jpg" alt="" />
                    </li>
                  </ul>
                </div>
                <div class="carousel-item">
                  <ul class="row carousel-item-list">
                    <li class="col-xl-3 col-lg-3 col-md-4 col-6 carousel-item-product">
                      <img src="assets/homePage/img/main_product-2.jpg" alt="" />
                    </li>
                    <li class="col-xl-3 col-lg-3 col-md-4 col-6 carousel-item-product">
                      <img src="assets/homePage/img/main_product-5.jpg" alt="" />
                    </li>
                    <li class="col-xl-3 col-lg-3 col-md-4 col-md-4 d-xl-block d-lg-block d-md-block d-none carousel-item-product">
                      <img src="assets/searchPage/img/main_product.jpg" alt="" />
                    </li>
                    <li class="col-xl-3 col-lg-3 col-md-4 d-xl-block d-lg-block d-md-none d-none carousel-item-product">
                      <img src="assets/homePage/img/main_product-4.jpg" alt="" />
                    </li>
                  </ul>
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="carousel-control-prev d-flex justify-content-start carousel-control" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next d-flex justify-content-end carousel-control" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12 d-flex flex-column main__slider">
            <h2 class="main__slider-heading">
              <b></b>
              <span class="main__slider-text">ALL BLVCK SKATEWEAR, TRAVEL CLOTHING.</span>
              <b></b>
            </h2>
            <div class="row">
              <div class="card col-xl-6 col-md-6 col-12 main__product justify-content-center align-items-center">
                <div class="card-body">
                  <img src="assets/homePage/img/type_img.png" alt="" class="main__product-img " />
                </div>
              </div>
              <div class="card col-xl-6 col-md-6 col-12 main__product justify-content-center align-items-center">
                <div class="card-body">
                  <img src="assets/homePage/img/type_img2.png" alt="" class="main__product-img " />
                </div>
              </div>
              <div class="card col-xl-6 col-md-6 col-12 main__product justify-content-center align-items-center">
                <div class="card-body">
                  <img src="assets/homePage/img/type_img3.png" alt="" class="main__product-img " />
                </div>
              </div>
              <div class="card col-xl-6 col-md-6 col-12 main__product justify-content-center align-items-center">
                <div class="card-body">
                  <img src="assets/homePage/img/type_img4.png" alt="" class="main__product-img " />
                </div>
              </div>
              <div class="card col-xl-6 col-md-6 col-12 main__product justify-content-center align-items-center">
                <div class="card-body">
                  <img src="assets/homePage/img/type_img5.png" alt="" class="main__product-img " />
                </div>
              </div>
              <div class="card col-xl-6 col-md-6 col-12 main__product justify-content-center align-items-center">
                <div class="card-body">
                  <img src="assets/homePage/img/type_img6.png" alt="" class="main__product-img " />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12 d-flex flex-column main__slider">
            <h2 class="main__slider-heading">
              <b></b>
              <span class="main__slider-text">HAVE FUN WITH THE HOMIES - LIFE STYLE</span>
              <b></b>
            </h2>
            <div class="row">
              <div class="card col-xl-4 col-lg-4 col-md-4 main__subProduct">
                <div class="card-body">
                  <img src="assets/public/img/masthead_logo.jpg" alt="" />
                </div>
              </div>
              <div class="card col-xl-4 col-lg-4 col-md-4 main__subProduct">
                <div class="card-body">
                  <img src="assets/homePage/img/main_subProduct.jpg" alt="" />
                </div>
              </div>
              <div class="card col-xl-4 col-lg-4 col-md-4 main__subProduct">
                <div class="card-body">
                  <img src="assets/homePage/img/life-style__img.jpg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- footer -->
    <footer class="footer row">
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="col-xl-3 col-lg-3 col-md-6 col-6">
            <img src="assets/public/img/masthead_logo.jpg" alt="" class="footer_img" />
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-6">
            <ul class="footer-list">
              <li class="footer-item">All BLACK</li>
              <li class="footer-item">Skatewear, travel clothing</li>
              <li class="footer-item">
                <span class="footer-item-social">
                  <i class="fa-brands fa-facebook-f"></i>
                </span>
                <span class="footer-item-social">
                  <i class="fa-brands fa-instagram"></i>
                </span>
              </li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-6">
            <ul class="footer-list">
              <li class="footer-item">SUPPORT</li>
              <li class="footer-item">Sales Policy</li>
              <li class="footer-item">About Us</li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-6">
            <img src="assets/public/img/footer-img.jpg" alt="" class="footer_img" />
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!-- MODAL_LOGIN -->
  <!-- add class "login" for modal-layout -->
  <div class="modal-layout modal-layout-login">
    <div class="contain-modal">
      <div class="modal-inner modal-inner-login">
        <h2 class="modal-heading modal-heading__login">Login</h2>
        <form action='controller/xulydangnhap.php' method='post'>
          <div class="form-group form-group__wrapper">
            <label for="loginUsername">Username</label>
            <input type="text" class="form-control" id="loginUsername" name="lusername" placeholder="Enter user name">
          </div>
          <div class="form-group form-group__wrapper">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="lpassword" placeholder="Password">
          </div>
          <div class="form-check form-check__wrapper">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
          </div>
          <button type="submit" class="btn btn__primary">Log in</button>
          <span class="lost-pw">Lost your password?</span>
        </form>
        <span class="modal-exit">
          <i class="fa-solid fa-xmark"></i>
        </span>
      </div>
    </div>
  </div>
  <!-- MODAL_register -->
  <!-- add class "register" for modal-layout -->
  <div class="modal-layout modal-layout-register">
    <div class="contain-modal">
      <div class="modal-inner modal-inner-register">
        <h2 class="modal-heading modal-heading__register">register</h2>
        <form action="controller/xulydangky.php" method="post">
          <div class="form-group form-group__wrapper">
            <label for="registerUsername">Username</label>
            <input type="text" class="form-control" id="registerUsername" name='rusername' placeholder="Enter user name">
          </div>
          <div class="form-group form-group__wrapper">
            <label for="exampleInputPassword2">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword2" name='rpassword' placeholder="Password">
          </div>
          <div class="form-group form-group__wrapper">
            <label for="exampleInputPassword3">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword3" name='repassword' placeholder="Password">
          </div>
          <button type="submit" class="btn btn__primary">Register</button>
        </form>
        <span class="modal-exit">
          <i class="fa-solid fa-xmark"></i>
        </span>
      </div>
    </div>
  </div>
  </div>
</body>

</html>