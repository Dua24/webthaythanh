<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <style>
        body {
            font-size: 14.5px;
        }

        .hadmin {
            color: #00000094;
            background-color: #999;
            margin: 0 -100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            letter-spacing: 2.4px;
        }

        .control nav {
            border-bottom: 1px solid #999;
            padding: 16px 0;
        }

        .hadmin img {
            width: 100px;
            margin-right: 40px;
        }

        .cot {
            min-width: 50px;
        }

        .message {
            color: #4d9a4dc7 !important;
            font-weight: 700 !important;
            text-align: center !important;
            font-size: 16px !important;
            margin-top: 24px !important;
        }

        .warning {
            color: #e40f09 !important;
            font-weight: 700 !important;
            text-align: center !important;
            font-size: 16px !important;
            margin-top: 24px !important;
        }

        .submit {
            font-weight: 500;
            background-color: #47b447;
            font-size: 15px;
        }

        .action {
            color: #444;
            font-weight: 500;
            font-size: 16px;
        }

        .navAdmin {
            color: #000;
            font-weight: 600;
            font-size: 15px;
            margin: 8px 18px;
            display: inline-block;
        }

        .navAdmin.active {
            color: red;
        }

        .headingdm {
            margin-bottom: 10px;
            font-weight: 700;
        }
    </style>
    <?php
    function checkAct($cond)
    {
        $active = 'active';
        if (isset($_GET['act'])) {
            switch ($cond) {
                case $_GET['act']:
                    return $active;
            }
        }
    }
    function checklengthPass($message)
    {
        if (isset($_GET['act']) && $_GET['act'] == 'updatetk') {
            if (strlen($_POST['user_password']) >= 8 && strlen($_POST['user_name']) >= 8) {
                echo "<h4 class='message'>" . $message . " thành công!!!</h4>";
            } else {
                echo " <h4 class='warning'>Tài khoản hoặc mật khẩu tối thiểu 8 kí tự</h4>";
            }
        } else {
            echo "<h4 class='message'>" . $message . " thành công!!!</h4>";
        }
    }
    ?>
    <div class="container-fluid">
        <div class="control" style="text-align:center">
            <h1 class="hadmin">
                <a href="../../index.php"><img src="../../assets/public/img/masthead_logo.jpg" alt=""></a>

                ADMIN
            </h1>

            <nav>
                <a class="navAdmin" href="../../index.php">Trang chủ</a>
                <a class="navAdmin <?= checkAct('sp') ?>" href="admin.php?act=sp">Sản phẩm</a>
                <a class="navAdmin <?= checkAct('dm') ?>" href="admin.php?act=dm">Danh mục</a>
                <a class="navAdmin <?= checkAct('tk') ?>" href="admin.php?act=tk">Tài khoản admin</a>
            </nav>
            <?php
            if (isset($_GET['act'])) {
                if ($_GET['act'] == 'deldm' || $_GET['act'] == 'delsp' || $_GET['act'] == 'deltk') { ?>
                    <h4 class="message">Đã xóa thành công!!!</h4>
            <?php
                }
            }
            if (isset($_POST['submit'])) {
                if ($_POST['submit'] == 'Update') {
                    checklengthPass("Cập nhật");
                } else if ($_POST['submit'] == 'Add') {
                    checklengthPass("Thêm mới");
                }
            }
            ?>
        </div>
        <?php
        include '../../link.php';
        if (isset($_GET['act'])) {
            switch ($_GET['act']) {
                case 'sp':
                case 'updatesp':
                case 'delsp':
                    include '../admin/sp.php';
                    break;
                case 'dm':
                case 'deldm':
                case 'updatedm':
                case 'adddm':
                    include '../admin/dm.php';
                    break;
                case 'tk':
                case 'updatetk':
                case 'deltk':
                    include '../admin/tk.php';
                    break;
                default:
                    include '../../index.php';
                    break;
            }
        }

        ?>

    </div>
</body>


<script>
    function handleAjax(e, sufUrl, className, name) {
        e.preventDefault();
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


</html>