window.onload = function() {
    const minusBtn =document.querySelector(".quantity-control__minus");
    const plusBtn =document.querySelector(".quantity-control__plus");
    const quanity_inProduct =document.querySelector(".control-quantity__current");

    minusBtn.onclick = function() {
        console.log(1)
        if (quanity_inProduct.value > 1) {
            quanity_inProduct.value--
        }
    }
    plusBtn.onclick = function() {
        console.log(2)
        quanity_inProduct.value++
    }

}
