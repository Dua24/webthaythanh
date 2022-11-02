<?php
if (!isset($_SESSION)) {
    session_start();
}

include '../models/sanpham.php';
include '../models/listsanpham.php';
if (!isset($_SESSION['giohang3'])) {
    $_SESSION['giohang3'] = [];
}
if (isset($_GET['delcart']) && $_GET['delcart']) unset($_SESSION['giohang3']);
if (isset($_GET['delItem']) && $_GET['delItem'] >= 0) {
    array_splice($_SESSION['giohang3'], $_GET['delItem'], 1);
}
if (isset($_POST['addcart']) && $_POST['addcart']) {
    $tensp = $_POST['tensp'];
    $imgsp = $_POST['imgsp'];
    $gia = $_POST['gia'];
    $quantity = $_POST['quantity'];
    $size = $_POST['size'];

    // check sp da ton tai cart -> + sl
    $p = 0;
    for ($i = 0; $i < sizeof($_SESSION['giohang3']); $i++) {
        if ($_SESSION['giohang3'][$i][0] == $tensp && $_SESSION['giohang3'][$i][3] == $size) {
            $p = 1;
            $newQuantity = $quantity + $_SESSION['giohang3'][$i][4];;
            $_SESSION['giohang3'][$i][4] = $newQuantity;
            break;
        }
    }

    if ($p == 0) {
        $sp = [$tensp, $gia, $imgsp, $size, $quantity];
        $_SESSION['giohang3'][] = $sp;
    }
}
function formatNum($num)
{
    if (strlen($num) == 4) {
        $dau =  substr($num, 0, 1);
        $cuoi = substr($num, 1);
        return  "" . $dau . "." . $cuoi . "";
    } else if (strlen($num) == 5) {
        $dau =  substr($num, 0, 2);
        $cuoi = substr($num, 2);
        return "" . $dau . "." . $cuoi . "";
    }
    return $num;
}


function showgiohang3()
{
    if (isset($_SESSION['giohang3']) && is_array($_SESSION['giohang3']) && sizeof($_SESSION['giohang3']) > 0) { ?>

        <table class="table" style="font-size:14px">
            <thead style="color:#909090">
                <tr class="row">
                    <th class="col-6 col-md-4" scope="col">PRODUCT</th>
                    <th class="col-md-2 d-md-block d-none" scope="col">PRICE</th>
                    <th class="col-md-2 d-md-block d-none" scope="col">SIZE</th>
                    <th class="col-4 col-md-2" scope="col">QUANTITY</th>
                    <th class="col-2 col-md-2" scope="col">SUBTOTAL</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                for ($i = 0; $i < sizeof($_SESSION['giohang3']); $i++) {
                    $subtotal = $_SESSION['giohang3'][$i][1] * $_SESSION['giohang3'][$i][4];
                    $total += $subtotal; ?>


                    <tr class="row" style="font-weight:500">
                        <th class="col-6 col-md-4" scope="row">
                            <a class="delItem" onclick="handleAjax(event,'?delItem=<?= $i ?>','delItem')" style="    
              margin-right: 20px;
              width: 37px;
              height: 24px;
              font-size: 15px !important;
              border-radius: 100%;
              color: #ccc;
              font-weight: bold;
              text-align: center;
              border: 2px solid currentColor;
              padding: 1px 6px;
              cursor:pointer;
          ">X</a>
                            <img src="<?= $_SESSION["giohang3"][$i][2] ?>" alt="" class="" style="width:10%;margin-right:10px" />
                            <span><?= $_SESSION["giohang3"][$i][0] ?>
                                <span class="d-inline d-md-none"> - <?= $_SESSION["giohang3"][$i][3] ?></span>
                            </span>

                        </th>
                        <td class="col-md-2 d-md-block d-none"><?= formatNum($_SESSION["giohang3"][$i][1]) ?>.000đ</td>
                        <td class="col-md-2 d-md-block d-none"><?= $_SESSION["giohang3"][$i][3] ?></td>
                        <td class="col-4 col-md-2"><?= $_SESSION["giohang3"][$i][4] ?><span class="d-inline d-md-none"> x <?= formatNum($_SESSION["giohang3"][$i][1]) ?>.000đ</span></td>
                        <td class="col-2 col-md-2"><?= formatNum($subtotal) ?>.000đ</td>
                    </tr>
                <?php
                } ?>

                <tr class="row" style="font-weight: 700;color: #740303;">
                    <td class="col-10 col-md-10">
                        <span>TỔNG</span>
                    </td>
                    <td class="col-2 col-md-2">
                        <span><?= formatNum($total) ?>.000đ</span>
                    </td>
                </tr>
                <tr class="row controlShopCart">
                    <td class="col-12">
                        <a href="searchPage.php"><button style="width: 100%;
          height: 45px;
          font-weight: 600;
          background-color: #0080004a;
      ">Tiếp tục mua hàng</button></a>
                    </td>
                </tr>
                <tr class="row controlShopCart">
                    <td class="col-12">
                        <a onclick="handleAjax(event,'?delcart=1','delcart')"><button style="width: 100%;
          height: 45px;
          font-weight: 600;
          background-color:#c2424263;
      ">Xóa giỏ hàng</button></a>
                    </td>
                </tr>
            </tbody>
        </table>

    <?php
    } else { ?>
        <span class="header-cart-noCart">No products in the cart.</span>
        <a href="searchPage.php" class="controlShopCart">
            <button style="width: 100%;
              height: 45px;
              font-weight: 600;
              background-color: #0080004a;
              font-size:14px">
                Quay lại mua hàng
            </button>
        </a>


<?php
    }
}
?>
<div class="container container-cart">
    <h2 style="text-align:center; margin: 30px 0; font-size: 36px;">SHOPPING CART</h2>
    <?php
    showgiohang3();
    ?>
</div>