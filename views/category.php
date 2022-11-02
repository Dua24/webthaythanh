<?php
if (is_array($listCategory) || is_object($listCategory)) {
    foreach ($listCategory as $category) {
?>
        <li class="category-item" style="cursor:pointer">
            <a onclick="handleAjax(event,'?dm=<?= $category->getId() ?>&dm_ten=<?= $category->getTen() ?>')" href="searchPage.php?dm=<?= $category->getId() ?>&dm_ten=<?= $category->getTen() ?>" class="category-item-link">
                <?= $category->getTen() ?>
            </a>
        </li>
<?php
    }
}
?>