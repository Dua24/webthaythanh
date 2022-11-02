<div class="row" style="margin-top:40px">
    <?php
    function updateCond($value)
    {
        $giatri = (isset($_GET['act']) && $_GET['act'] === "updatesp") ? $value : '';
        return $giatri;
    }
    ?>
    <div class="col-2">
        <form action="../admin/admin.php?act=updatesp" method="POST" style="display: flex;
                                flex-direction: column;">
            <input type="hidden" name='id_sp' value="<?= isset($_GET['id_sp']) ? updateCond($_GET['id_sp']) : '' ?>">
            <label for="">Tên Sản phẩm</label>
            <input type="text" name='ten_sp' value="<?= isset($_GET['ten_sp']) ? updateCond($_GET['ten_sp']) : '' ?>">
            <br>
            <label for="">Giá Sản phẩm</label>

            <input type="text" name='gia_sp' value="<?= isset($_GET['gia_sp']) ? updateCond($_GET['gia_sp']) : '' ?>">
            <br>
            <label for="">Link ảnh Sản phẩm</label>
            <input type="text" name='img_sp' src="" alt="Submit" value="<?= isset($_GET['img_sp']) ? updateCond($_GET['img_sp']) : '' ?>">
            <br>
            <label for="">Loại danh mục</label>
            <select class="form-control" id="dm_ten" name="dm_ten">
                <?php
                $result = chayTruyVanTraVeDL($link, "select * from tbl_danhmuc");
                $rows = mysqli_fetch_object($result);
                while ($rows = mysqli_fetch_object($result)) {
                    if ($rows->dm_ten === $_GET['dm_ten']) { ?>
                        <option selected><?= $rows->dm_ten ?></option>
                    <?php
                    } else {
                    ?>
                        <option><?= $rows->dm_ten ?></option>
                <?php
                    }
                }
                ?>
            </select>
            <br>
            <?php
            if (isset($_GET['act']) && $_GET['act'] == 'updatesp') {
            ?>
                <input class='submit' type="submit" name="submit" value="Update">
            <?php
            } else { ?>
                <input class='submit' type="submit" name="submit" value="Add">
            <?php
            }
            ?>
            <a href="../admin/admin.php?act=sp"><input style='width: 100%;
                                                            margin-top: 12px;
                                                            background-color: #bababa;
                                                            font-size: 15px;
                                                            font-weight: 500;' type="Button" name="submit" value="Clear"></a>
        </form>
    </div>
    <div class="col-10">

        <table style="max-height: 500px;
                        display: flex;
                        overflow: scroll;">
            <tbody style="margin: 0 auto">

                <tr>
                    <th class="cot">ID</th>
                    <th class="cot">Tên sản phẩm</th>
                    <th class="cot">Giá sản phẩm</th>
                    <th class="cot">Hình ảnh</th>
                    <th class="cot">Loại danh mục</th>
                    <th class="cot">Action</th>
                </tr>
                <?php
                include_once "../../modules/db_module.php";
                $link = null;
                taoKetNoi($link);
                if (isset($_GET['act']) && isset($_GET['id_sp']) && $_GET['act'] == 'delsp') {
                    $result = chayTruyVanKhongTraVeDL($link, "DELETE FROM tbl_sanpham WHERE id_sp = " . $_GET['id_sp'] . "");
                }
                if (isset($_POST['submit']) && $_POST['submit'] === "Update") {
                    $id_dm = chayTruyVanTraVeDL($link, "select dm_id from tbl_danhmuc where dm_ten = '" . $_POST['dm_ten'] . "'");
                    $rowid = mysqli_fetch_row($id_dm)[0];
                    $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_sanpham SET ten_sp='" . $_POST['ten_sp'] . "',gia_sp=" . $_POST['gia_sp'] . ",img_sp='" . $_POST['img_sp'] . "',dm_id='" . $rowid . "'  WHERE id_sp = " . $_POST['id_sp'] . "");
                }
                if (isset($_POST['submit']) && $_POST['submit'] === "Add") {
                    $id_dm = chayTruyVanTraVeDL($link, "select dm_id from tbl_danhmuc where dm_ten = '" . $_POST['dm_ten'] . "'");
                    $rowid = mysqli_fetch_row($id_dm)[0];
                    $countsp = chayTruyVanTraVeDL($link, "select count(*) from tbl_sanpham");
                    $id = ((float)(mysqli_fetch_row($countsp)[0]) + 1);
                    $result = chayTruyVanKhongTraVeDL($link, "INSERT into tbl_sanpham values ($id,'" . $_POST['ten_sp'] . "'," . $_POST['gia_sp'] . ",'" . $_POST['img_sp'] . "'," . $rowid . ")");
                }
                $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham sp,tbl_danhmuc dm where sp.dm_id = dm.dm_id");
                $rows = mysqli_fetch_object($result);
                while ($rows = mysqli_fetch_object($result)) {
                    $url = "../admin/admin.php?act=updatesp&id_sp=$rows->id_sp&ten_sp=$rows->ten_sp&gia_sp=$rows->gia_sp&img_sp=$rows->img_sp&dm_ten=$rows->dm_ten";
                ?>
                    <tr style="margin:10px 0">

                        <td class="cot"><input type="text" value="<?= $rows->id_sp ?>" readonly></td>
                        <td class="cot"><input type="text" value="<?= $rows->ten_sp ?>" readonly></td>
                        <td class="cot"><input type="text" value="<?= $rows->gia_sp ?>" readonly></td>
                        <td class="cot"><input type="text" value="<?= $rows->img_sp ?>" readonly></td>
                        <td class="cot"><input type="text" value="<?= $rows->dm_ten ?>" readonly></td>
                        <td class="cot"><a class="action" href="<?= $url ?>">Sửa</a> || <a class="action" href="../admin/admin.php?act=delsp&id_sp=<?= $rows->id_sp ?>">Xóa</a></td>
                    </tr>
                <?php

                }
                giaiPhongBoNho($link, $result);
                ?>
            </tbody>

        </table>
    </div>
</div>