<div class="row" style="margin-top:40px">
    <?php
    function updateCond($value)
    {
        $giatri = (isset($_GET['act']) && $_GET['act'] === "updatedm") ? $value : '';
        return $giatri;
    }
    ?>
    <div class="col-4"></div>
    <div class="col-2">
        <form action="../admin/admin.php?act=updatedm" method="POST" style="display: flex;
                                flex-direction: column;">
            <input type="hidden" name='dm_id' value="<?= isset($_GET['dm_id']) ? updateCond($_GET['dm_id']) : '' ?>">
            <label for="dm_ten">Tên danh mục</label>
            <input type="text" name='dm_ten' id="dm_ten" value="<?= isset($_GET['dm_ten']) ? updateCond($_GET['dm_ten']) : '' ?>">
            <br>
            <?php
            if (isset($_GET['act']) && $_GET['act'] == 'updatedm') {
            ?>
                <input class='submit' type="submit" name="submit" value="Update">
            <?php
            } else { ?>
                <input class='submit' type="submit" name="submit" value="Add">
            <?php
            }
            ?>
            <a href="../admin/admin.php?act=dm"><input style='width: 100%;
                                                            margin-top: 12px;
                                                            background-color: #bababa;
                                                            font-size: 15px;
                                                            font-weight: 500;' type="Button" name="submit" value="Clear"></a>
        </form>
    </div>
    <div class="col-6">


        <div class="row headingdm">
            <span class="col-1">ID</span>
            <span class="col-7">Tên danh mục</span>
            <span class="col-4">Action</span>

        </div>

        <?php
        require_once "../../modules/db_module.php";
        $link = null;
        taoKetNoi($link);
        if (isset($_GET['act']) && isset($_GET['dm_id']) && $_GET['act'] == 'deldm') {
            $result = chayTruyVanKhongTraVeDL($link, "DELETE FROM tbl_danhmuc WHERE dm_id = " . $_GET['dm_id'] . "");
        }
        if (isset($_POST['submit']) && $_POST['submit'] === "Update") {
            $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_danhmuc SET dm_ten='" . $_POST['dm_ten'] . "' WHERE dm_id = " . $_POST['dm_id'] . "");
        }
        if (isset($_POST['submit']) && $_POST['submit'] === "Add") {
            $count = chayTruyVanTraVeDL($link, "select count(*) from tbl_danhmuc");
            $id = ((float)(mysqli_fetch_row($count)[0]) + 1);
            $result = chayTruyVanKhongTraVeDL($link, "INSERT into tbl_danhmuc values ($id,'" . $_POST['dm_ten'] . "')");
        }
        $result = chayTruyVanTraVeDL($link, "select * from tbl_danhmuc");


        while ($rows = mysqli_fetch_object($result)) {
            $url = "../admin/admin.php?act=updatedm&dm_id=$rows->dm_id&dm_ten=$rows->dm_ten";
        ?>
            <div class="row">
                <span class="col-1"><input type="text" value="<?= $rows->dm_id ?>"></span>
                <span class="col-7"><input style="width:100%" type="text" value="<?= $rows->dm_ten ?>"></span>
                <span class="col-4"><a class="action" href="<?= $url ?>">Sửa</a> || <a class="action" href="../admin/admin.php?act=deldm&dm_id=<?= $rows->dm_id ?>">Xóa</a></span>
            </div>
        <?php

        }
        giaiPhongBoNho($link, $result);

        ?>
    </div>
</div>