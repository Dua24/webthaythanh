<div class="row" style="margin-top:40px">
    <?php
    function updateCond($value)
    {
        $giatri = (isset($_GET['act']) && $_GET['act'] === "updatetk") ? $value : '';
        return $giatri;
    }

    ?>
    <div class="col-3"></div>
    <div class="col-2">
        <form action="../admin/admin.php?act=updatetk" method="POST">
            <input type="hidden" name="user_id" value="<?= isset($_GET['user_id']) ? updateCond($_GET['user_id']) : '' ?>" style="width:100%">
            <label for="">Username:</label>
            <input type="text" name='user_name' value="<?= isset($_GET['user_name']) ? updateCond($_GET['user_name']) : '---' ?>" style="width:100%">
            <label for="">Password:</label>
            <input type="password" name='user_password' value="<?= isset($_GET['user_password']) ? updateCond($_GET['user_password']) : '' ?>" style="width:100%">
            <?php
            if (isset($_GET['act']) && $_GET['act'] == 'updatetk') {
            ?>
                <input class='submit' type="submit" name="submit" value="Update" style="width:100%;margin-top:12px">
            <?php
            } else { ?>
                <input class='submit' type="submit" name="submit" value="Add" style="width:100%;margin-top:12px">
            <?php
            }
            ?>
            <a href="../admin/admin.php?act=tk"><input style='width: 100%;
                                                            margin-top: 12px;
                                                            background-color: #bababa;
                                                            font-size: 15px;
                                                            font-weight: 500;' type="Button" name="submit" value="Clear"></a>
        </form>
    </div>
    <div class="col-7">

        <table>
            <tr>
                <th>ID</th>
                <th>UserName</th>
                <th>Password</th>

            </tr>
            <?php
            include_once "../../modules/db_module.php";
            $link = null;
            taoKetNoi($link);
            if (isset($_GET['act']) && isset($_GET['user_id']) && $_GET['act'] == 'deltk') {
                $result = chayTruyVanKhongTraVeDL($link, "DELETE FROM tbl_user WHERE user_id = " . $_GET['user_id'] . "");
            }
            if (isset($_POST['submit']) && $_POST['submit'] === "Update") {
                if (strlen($_POST['user_password']) >= 8 && strlen($_POST['user_name']) >= 8) {
                    $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_user SET user_name='" . $_POST['user_name'] . "',user_password ='" . md5($_POST['user_password']) . "' WHERE user_id = " . $_POST['user_id'] . "");
                }
            }
            if (isset($_POST['submit']) && $_POST['submit'] === "Add") {
                if (strlen($_POST['user_password']) >= 8 && strlen($_POST['user_name']) >= 8) {
                    $countsp = chayTruyVanTraVeDL($link, "select count(*) from tbl_user");
                    $id = ((float)(mysqli_fetch_row($countsp)[0]) + 1);
                    $result = chayTruyVanKhongTraVeDL($link, "INSERT into tbl_user values ($id,'" . $_POST['user_name'] . "','" . md5($_POST['user_password']) . "',1)");
                }
            }
            $result = chayTruyVanTraVeDL($link, "select * from tbl_user where role=1");
            while ($rows = mysqli_fetch_object($result)) {
                $url = "../admin/admin.php?act=updatetk&user_id=$rows->user_id&user_name=$rows->user_name&user_password=$rows->user_password";
            ?>
                <tr>
                    <td><input type="text" value="<?= $rows->user_id ?>"></td>
                    <td><input type="text" value="<?= $rows->user_name ?>"></td>
                    <td><input type="password" value="<?= $rows->user_password ?>"></td>
                    <td><a class="action" href="<?= $url ?>">Sửa</a> || <a class="action" href="../admin/admin.php?act=deltk&user_id=<?= $rows->user_id ?>">Xóa</a></td>
                </tr>
            <?php

            }
            giaiPhongBoNho($link, $result);

            ?>

        </table>
    </div>
</div>