<?php
if (!isset($_SESSION)) {
  session_start();
}
?>

<header id="header" class="row">
  <div class="header__top col-12">
    <div class="container d-flex h-100 justify-content-between">
      <div class="row w-100">
        <strong class="header__top-label col-xl-10 col-lg-10 col-md-12">All BLVCK Skatewear, travel clothing Good friends only.</strong>
        <ul class="header__top-list col-xl-2 col-lg-2 d-xl-flex d-lg-flex d-md-none justify-content-end">
          <li class="header__top-item">
            <a class="header__top-link">
              <i class="fa-brands fa-facebook-f"></i>
            </a>
            <div class="header__top-item-label">Follow on Facebook</div>
          </li>
          <li class="header__top-item">
            <a class="header__top-link">
              <i class="fa-brands fa-instagram"></i>
            </a>
            <div class="header__top-item-label">Follow on Instagram</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="masthead col-12">
    <div class="container d-flex align-items-center">
      <div class="row w-100">
        <div class="menu-in_md d-xl-none d-lg-none col-md-2 col-2">
          <i class="fa-solid fa-bars"></i>
          <!-- MODAL MENU -->
          <!-- class "menu" for modal-layout -->
          <div class="modal-layout modal-layout-menu">
            <div class="contain-modal">
              <div class="modal-inner modal-inner-menu">
                <form class="modal-inner__search">
                  <input autocomplete="off" type="text" class="modal-inner__search-input" name="search">
                  <button onclick="handleAjax(event,'','main-sPage-searc','search')" class="btn btn__primary">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </button>
                </form>

                <ul class="modal-inner__list">


                  <?php
                  if (isset($_SESSION["username"])) { ?>

                    <li class="modal-inner__item">
                      <a href="" class="modal-inner__item-link" style="font-weight:800; color:#453737"><?= $_SESSION["username"] ?></a>
                    </li>
                    <li class="modal-inner__item">
                      <a href="<?= $linksearchpage ?>" class="modal-inner__item-link">search page</a>
                    </li>
                    <li class="modal-inner__item">
                      <a href="<?= $linkcart ?>" class="modal-inner__item-link">cart page</a>
                    </li>
                    <?php
                    if (isset($_SESSION['role'])) { ?>
                      <li class="modal-inner__item">
                        <a href="<?= $linkadmin ?>" class="modal-inner__item-link">ADMIN MANAGER</a>
                      </li>
                    <?php
                    }
                    ?>
                    <li class="modal-inner__item">
                      <form action="<?= $linkdangxuat ?>">
                        <input autocomplete="off" style="
                                    text-decoration: none;
                                    color: rgba(102, 102, 102, .85);
                                    font-weight: 700;
                                    font-size: 1.2rem;
                                    text-transform: uppercase;
                                    border: none;
                                    padding:0;
                                    background-color: #fff;" type="submit" class="text-uppercase" value="LOG OUT">
                      </form>
                    </li>
                  <?php
                  } else { ?>
                    <li class="modal-inner__item">
                      <a href="<?= $linksearchpage ?>" class="modal-inner__item-link">search page</a>
                    </li>
                    <li class="modal-inner__item">
                      <a href="<?= $linkcart ?>" class="modal-inner__item-link">cart page</a>
                    </li>
                    <li class="modal-inner__item login">
                      <a href="#" class="modal-inner__item-link">login</a>
                    </li>
                    <li class="modal-inner__item register">
                      <a href="#" class="modal-inner__item-link">register</a>
                    </li>
                  <?php
                  }
                  ?>

                  <li class="modal-inner__item">
                    <a href="" class="modal-inner__item-link">
                      <i class="fa-brands fa-facebook-f"></i>
                      <i class="fa-brands fa-instagram"></i>
                    </a>
                  </li>
                </ul>
                <span class="modal-exit menu">
                  <i class="fa-solid fa-xmark"></i>
                </span>
              </div>
            </div>
          </div>

        </div>
        <div class="masthead__logo col-xl-2 col-lg-2 col-md-8 col-8">
          <a href="<?= $linkhome ?>" class="masthead__logo-link">
            <img src="<?= $linklogo ?>" alt="" />
          </a>
        </div>
        <ul class="masthead__list justify-content-start col-xl-5 col-lg-5 d-xl-flex d-lg-flex d-md-none d-none">
          <li class="masthead__item">
            <a href="<?= $duongdan ?>" class="masthead__item-link">SEARCH PAGE</a>
          </li>
          <li class="masthead__item">
            <a href="<?= $linkcart ?>" class="masthead__item-link">CART</a>
          </li>
          <?php
          if (isset($_SESSION['role'])) { ?>
            <li class="masthead__item" style="margin-left:20px">
              <a href="<?= $linkadmin ?>" class="masthead__item-link">ADMIN MANAGER</a>
            </li>
          <?php
          }
          ?>
        </ul>
        <ul class="masthead__list row align-items-center justify-content-end col-xl-5 col-lg-5 col-md-2 col-2 d-xl-flex d-lg-flexd-none">


          <?php
          if (isset($_SESSION['username'])) { ?>

            <li class="masthead__item d-xl-block d-lg-block d-md-none d-none">
              <div class="user">
                <span class="text-uppercase" style="color: #706f6f;
                font-weight: 700; letter-spacing:1px"><?= $_SESSION["username"] ?></span>
              </div>
            </li>
            <li class="masthead__item d-xl-block d-lg-block d-md-none d-none">
              <form action="<?= $linkdangxuat ?>">
                <input autocomplete="off" style="
                color: var(--black-color);
                font-size: 1.4rem;
                font-weight: 600;
                line-height: 1.4rem;
                border: none;
                background-color: #fff;" type="submit" class="text-uppercase" value="LOG OUT">
              </form>
            </li>
          <?php
          } else { ?>

            <li class="masthead__item masthead__item-login d-xl-block d-lg-block d-md-none d-none">
              LOGIN
            </li>
            <li class="masthead__item masthead__item-register d-xl-block d-lg-block d-md-none d-none">
              REGISTER
            </li>
          <?php
          }

          ?>


        </ul>
      </div>
    </div>
  </div>
</header>
<?php
//
if (!isset($_GET['msg']) && !isset($_SESSION['username'])) {
} else if (isset($_GET['msg'])) {
  if ($_GET['msg'] == "done") {
    echo "<div style='text-align:center; margin: 6px 0 10px 0;font-size:1.3rem;font-weight:500; color:#008000cc'>Bạn đã đăng ký tài khoản thành công</div>";
  } else if ($_GET['msg'] == "unvalid-data") {
    echo "<div style='text-align:center; margin: 6px 0 10px 0;font-size:1.3rem;font-weight:500; color:#aaaa11'>Vui lòng kiểm tra lại dữ liệu nhập vào</div>";
  } else if ($_GET['msg'] == "duplicate") {
    echo "<div style='text-align:center; margin: 6px 0 10px 0;font-size:1.3rem;font-weight:500; color:#aaaa11'>Tài khoản của bạn đã tồn lại</div>";
  } else if ($_GET['msg'] == "login-fail") {
    echo "<div style='text-align:center; margin: 6px 0 10px 0;font-size:1.3rem;font-weight:500; color:#8a0707'>Tài khoản và mật khẩu không đúng. Vui lòng kiểm tra lại !</div>";
  } else if ($_GET['msg'] == 'log-out') {
    echo "<div style='text-align:center; margin: 6px 0 10px 0;font-size:1.3rem;font-weight:500; color:#787878'>Bạn đã đăng xuất... :((</div>";
  } else if ($_GET['msg'] == 'login-success') {
    echo "<div style='text-align:center; margin: 6px 0 10px 0;font-size:1.3rem;font-weight:500; color:#008000cc'>Đăng nhập thành công :)) </div>";
  }
}
?>