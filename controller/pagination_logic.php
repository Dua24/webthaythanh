<?php
include "../typeProduct/typeProduct.php";
include '../truyvandb/pagination_render.php';

if (isset($slg)) {
    if (mysqli_fetch_row($slg)[0] <= 12) {
    }
} else {
    if ($page == 1) { ?>

        <div class="row d-flex align-items-center justify-content-center">
            <ul class="pagination sPage-pagination">
            <?php
        } else { ?>
                <div class="row d-flex align-items-center justify-content-center">
                    <ul class="pagination sPage-pagination">
                        <li class="page-item">
                            <a onclick="handleAjax(event,'?page=<?= ($page - 1) ?>')" class="page-link">
                                <i class="fa-solid fa-chevron-left"></i>
                            </a>
                        </li>
                        <?php
                    }
                    for ($i = 1; $i <= $total; $i++) {
                        if ($i != $page) { ?>
                            <li class="page-item">
                                <a class="page-link" onclick="handleAjax(event,'?page=<?= $i ?><?= (isset($_GET['sort']) ? '&sort=' . $_GET['sort'] . '' : '') ?>')">
                                    <?= $i ?>
                                </a>
                            </li>
                        <?php
                        } else { ?>
                            <li class=" page-item">
                                <a class="page-link active">
                                    <?= $i ?>
                                </a>
                            </li>
                        <?php
                        }
                    }


                    if ($page == $total) { ?>
                    </ul>
                </div>
            <?php
                    } else { ?>
                <li class="page-item">
                    <a class="page-link" onclick="handleAjax(event,'?page=<?= ($page + 1) ?>')">
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </li>
            </ul>
        </div>
<?php
                    }
                }
?>