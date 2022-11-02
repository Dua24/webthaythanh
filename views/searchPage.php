<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/public/css/header.css" />
  <link rel="stylesheet" href="../assets/public/css/footer.css">
  <link rel="stylesheet" href="../assets/public/css/base.css">
  <link rel="stylesheet" href="../assets/public/css/modal.css">
  <link rel="stylesheet" href="../assets/public/css/category.css">
  <link rel="stylesheet" href="../assets/detailPage/css/detailPage.css">
  <link rel="stylesheet" href="../assets/searchPage/css/searchPage.css">
  <link rel="stylesheet" href="../assets/public/fonts/fontawesome-free-6.1.2-web/css/all.min.css">
  <link rel="stylesheet" href="../assets/public/fonts/themify-icons/themify-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/public/header.js"></script>

  <title>Search Page</title>
</head>

<body>
  <div class="container-fluid">
    <!-- header -->
    <?php
    $duongdan = "searchPage.php";
    $linklogo = "../assets/public/img/masthead_logo.jpg";
    $linkhome = "../index.php";
    $linksearchpage = "";
    $linkcart = "cart.php";
    $linkadmin = "../views/admin/admin.php";
    $linkdangxuat = "../controller/dangxuat.php";
    include "header.php";
    ?>

    <!-- main -->
    <main class="main-sPage row">
      <div class="container">
        <div class="row">
          <div class="col-12 row main-sPage__header d-flex align-items-center  justify-content-center">
            <nav class="breadcrumbs_list col-lg-4 col-12">
              <a href="../index.php" class="breadcrumb__link breadcrumb__link-prev">HOME</a>
              <span class="divider">/</span>
              <?php
              include 'breadcrumb.php';
              ?>
            </nav>
            <!-- search input -->
            <form style="height:30px; font-size:15px" class="col-lg-4 d-lg-flex d-none">
              <input autocomplete="off" type="text" class="main-sPage-searc" name="search">
              <input onclick="handleAjax(event,'','main-sPage-searc','search')" autocomplete="off" style="background-color:#000; color:#fff; border-radius:none; font-weight:600; margin-left:2px" type="submit" value="Tìm kiếm">
            </form>
            <div class="menu-filter-mobile d-lg-none d-block">
              <i class="fa-solid fa-bars"></i>
              Filter

              <!-- modal filter -->
              <!-- class filter -->
              <div class="modal-layout modal-layout-filter">
                <div class="modal-inner modal-inner-filter">
                  <ul class="category-list">
                    <?php
                    include '../controller/categoryController.php';
                    $modal_category = new Category_Controller();
                    $modal_category->invoke();
                    ?>
                  </ul>
                  <span class="modal-exit">
                    <i class="fa-solid fa-xmark"></i>
                  </span>
                  <!--  -->

                </div>
              </div>
            </div>
            <div class="row col-lg-4 col-12 main-sPage__header-sort">
              <form>
                <select onchange="handleAjax(event,'','control-sort','sort')" class="form-control control-sort" name="sort">
                  <option value="">Default select</option>
                  <option value="desc">Sort by price: Giảm dần</option>
                  <option value="asc">Sort by price: Tăng dần</option>

                </select>
              </form>
            </div>
          </div>
          <div class="col-12 main-sPage__content">
            <div class="row">
              <!-- Category -->
              <div class="col-xl-3 col-lg-3 d-xl-block d-lg-block d-none d-sm-none main-sPage__content-category">
                <ul class="category-list">

                  <?php
                  $main_category = new Category_Controller();
                  $main_category->invoke();
                  ?>

                </ul>
              </div>
              <!-- Product -->
              <div class="col-xl-9 col-lg-9 col-md-12 col sPage__content-product">
                <!-- product -->
                <div class="sPage__content-product-main">
                  <?php
                  include '../controller/productController.php';
                  $product = new Product_Controller();
                  $product->invoke();
                  ?>
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
            <img src="../assets/public/img/masthead_logo.jpg" alt="" class="footer_img" />
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
            <img src="../assets/public/img/footer-img.jpg" alt="" class="footer_img" />
          </div>
        </div>
      </div>
    </footer>

    <!-- MODAL_LOGIN -->
    <!-- add class "login" for modal-layout -->
    <div class="modal-layout modal-layout-login">
      <div class="contain-modal">
        <div class="modal-inner modal-inner-login">
          <h2 class="modal-heading modal-heading__login">Login</h2>
          <form action='../controller/xulydangnhap.php' method='post'>
            <div class="form-group form-group__wrapper">
              <label for="loginUsername">Username</label>
              <input type="text" class="form-control" id="loginUsername" name="lusername" placeholder="Enter user name">
            </div>
            <div class="form-group form-group__wrapper">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" autocomplete="off" id="exampleInputPassword1" name="lpassword" placeholder="Password">
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
          <form action="../controller/xulydangky.php" method="post">
            <div class="form-group form-group__wrapper">
              <label for="registerUsername">Username</label>
              <input type="text" class="form-control" id="registerUsername" name='rusername' placeholder="Enter user name">
            </div>
            <div class="form-group form-group__wrapper">
              <label for="exampleInputPassword2">Password</label>
              <input type="password" class="form-control" autocomplete="off" id="exampleInputPassword2" name='rpassword' placeholder="Password">
            </div>
            <div class="form-group form-group__wrapper">
              <label for="exampleInputPassword3">Confirm Password</label>
              <input type="password" class="form-control" autocomplete="off" id="exampleInputPassword3" name='repassword' placeholder="Password">
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
  <script>
    function handleAjax(e, sufUrl, className, name) {
      e.preventDefault();
      document.getElementsByClassName("modal-layout-menu")[0].classList.remove("menu")
      document.getElementsByClassName("modal-layout-filter")[0].classList.remove("filter")
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementsByClassName("sPage__content-product-main")[0].innerHTML = this.responseText
        }
      }


      if (name) {
        xmlhttp.open("GET", "productView.php" + "?" + name + "=" + document.getElementsByClassName(className)[0].value, true);
        document.getElementsByClassName(className)[0].value = "";
        xmlhttp.send();
      } else {
        xmlhttp.open("GET", "productView.php" + sufUrl, true);
        xmlhttp.send();
      }

    }
  </script>
</body>

</html>