<?php
if (is_array($listProduct) || is_object($listProduct)) {
?>
    <div class="row">
        <?php
        foreach ($listProduct as $product) { ?>

            <a href="detailPage.php?id=<?= $product->getId() ?>" class="card  col-xl-4 col-lg-4 col-6 col-md-4 sPage__content-product-item">
                <img src="<?= $product->getImg() ?>" alt="" class="sPage__content-product-img">
                <div class="sPage__content-product-desc">
                    <span class="sPage__content-product-name"><?= $product->getTen() ?></span>
                    <span class="sPage__content-product-price"><?= $product->getGia() ?>.000
                        <span class="symbolmoney">₫</span>
                    </span>
                </div>
            </a>
        <?php
        } ?>
    </div>

<?php
    include "../controller/pagination_logic.php";
}
?>