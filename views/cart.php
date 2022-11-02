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
  <title>Cart Page</title>
  <style>
    .delItem:hover {
      color: #333 !important;
      text-decoration: none;
      transition: all linear 0.3s;
    }

    .controlShopCart:hover {
      filter: brightness(0.3);
      transition: all linear 0.1s;

    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <!-- header -->
    <?php
    $duongdan = "searchPage.php";
    $linklogo = "../assets/public/img/masthead_logo.jpg";
    $linkhome = "../index.php";
    $linksearchpage = "searchPage.php";
    $linkcart = "";
    $linkadmin = "../views/admin/admin.php";
    $linkdangxuat = "../controller/dangxuat.php";
    include "header.php";
    include 'detail_cart.php';
    ?>

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
  </div>

  <!-- MODAL_LOGIN -->
  <!-- add class "login" for modal-layout -->
  <div class="modal-layout modal-layout-login">
    <div class="contain-modal">
      <div class="modal-inner modal-inner-login">
        <h2 class="modal-heading modal-heading__login">Login</h2>
        <form action='../controller/xulydangnhap.php' method='post'>
          <div class="form-group form-group__wrapper">
            <label for="loginUsername">Username</label>
            <input autocomplete="off" type="text" class="form-control" id="loginUsername" name="lusername" placeholder="Enter user name">
          </div>
          <div class="form-group form-group__wrapper">
            <label for="exampleInputPassword1">Password</label>
            <input autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" name="lpassword" placeholder="Password">
          </div>
          <div class="form-check form-check__wrapper">
            <input autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
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
            <input autocomplete="off" type="text" class="form-control" id="registerUsername" name='rusername' placeholder="Enter user name">
          </div>
          <div class="form-group form-group__wrapper">
            <label for="exampleInputPassword2">Password</label>
            <input autocomplete="off" type="password" class="form-control" id="exampleInputPassword2" name='rpassword' placeholder="Password">
          </div>
          <div class="form-group form-group__wrapper">
            <label for="exampleInputPassword3">Confirm Password</label>
            <input autocomplete="off" type="password" class="form-control" id="exampleInputPassword3" name='repassword' placeholder="Password">
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
    function handleAjax(e, sufUrl, add) {
      e.preventDefault();
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementsByClassName("container-cart")[0].innerHTML = this.responseText
        }
      }
      if (add === "delItem" || add === "delcart") {
        xmlhttp.open("GET", "detail_cart.php" + sufUrl, true);
        xmlhttp.send();
      }
    }
  </script>
</body>

</html>