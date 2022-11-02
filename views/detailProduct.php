<div class="row mb-30">
  <input style="display:none" type="radio" checked="true" value="<?= $_GET["id"] ?>" name="id">
  <div class="col-lg-6 col-12">
    <div class="card contain-detail__product-main">
      <div class="card-body">
        <div class="control-detail__img-product">
          <span class="detail-control-product detail__pre-product">
            <i class="fa-solid fa-chevron-left"></i>
          </span>
          <div>
            <img src="<?= $product->getImg() ?>" alt="" class="detail__product-main-img">
          </div>
          <span class="detail-control-product  detail__next-product">
            <i class="fa-solid fa-chevron-right"></i>
          </span>
        </div>
        <span class="product-zoom__btn">
          <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
        </span>
      </div>
    </div>
  </div>

  <div class="col-lg-6 col-12">
    <div class="detail__product-specific col-12">
      <h1 class="detail__product-name"><?= $product->getTen() ?></h1>
      <span class="h-divider"></span>
      <div class="detail__product-contain-price">
        <span class="detail__product-price"><?= $product->getGia() ?>.000</span>
        <span class="detail__product-symbolP">₫</span>
      </div>
      <form action="cart.php" method="post">
        <div class="form-cart__contain-size">
          <label for="" class="form-cart__size-label">Size</label>
          <div>
            <label for="szs" class="form-cart__size-item active">S</label>
            <input style="display:none" type="radio" class="" checked="true" value="S" name="size" id="szs">
            <label for="szl" class="form-cart__size-item">L</label>
            <input style="display:none" type="radio" class="" value="L" name="size" id="szl">
            <label for="szxl" class="form-cart__size-item">XL</label>
            <input style="display:none" type="radio" class="" value="XL" name="size" id="szxl">
          </div>
        </div>
        <div class="form-cart__contain-add">
          <div class="form-cart__control-quantity">
            <span class="quantity-control quantity-control__minus">
              <span>-</span>
            </span>
            <input value="1" type="number" class="control-quantity__current" min="1" max="10" name="quantity">
            <span class="quantity-control quantity-control__plus">
              <span>+</span>
            </span>

          </div>
          <input type="submit" class="btn btn__add-cart" name="addcart" value="ADD TO CART">
        </div>
        <input type="hidden" name="tensp" value="<?= $product->getTen() ?>">
        <input type="hidden" name="imgsp" value="<?= $product->getImg() ?>">
        <input type="hidden" name="gia" value="<?= $product->getGia() ?>">
      </form>
    </div>
    <div class="detail__product-ship-calculator col-12">
      <h4 class="ship-calculator__title">Expected Delivery Information</h4>
      <div class="ship-calculator__content">
        <p class="ship-calculator__p">Enter your address to view shipping options. -</p>
        <span class="ship-calculator__btn">Calculate shipping</span>
      </div>
    </div>
    <div class="detail__product-meta col-12">
      <span class="sku-wrapper">
        SKU:
        <span class="sku">N/A</span>
      </span>

    </div>
  </div>
</div>