
var addBtns = document.querySelectorAll(".btn_increaseQuantityProduct");
var minusBtns = document.querySelectorAll(".btn_descreaseQuantityProduct");
var cart_rows = document.querySelectorAll(".cart-row");
cart_rows.forEach(cart_row => {
    window.addEventListener(
        "load",
        function(){
            console.log("s");
            let product_quantity = cart_row.querySelector(".product_quantity");
            let product_price = cart_row.querySelector(".cart_currentPrice");
            let product_totalPrice = cart_row.querySelector(".cart_totalPrice");
            product_totalPrice.innerHTML = new Intl.NumberFormat().format(parseInt(product_price.getAttribute('data-value'))*product_quantity.value);
        }
    )
});
addBtns.forEach(btn_add => {
    btn_add.addEventListener(
        "click",
        function(event){
            let cartRow = event.target.parentElement.parentElement;
            let product_quantity = cartRow.querySelector(".product_quantity");
            let product_price = cartRow.querySelector(".cart_currentPrice");
            let product_totalPrice = cartRow.querySelector(".cart_totalPrice");
            product_quantity.value++;
            product_totalPrice.innerHTML = new Intl.NumberFormat().format(parseInt(product_price.getAttribute('data-value'))*product_quantity.value);
        }
    )
});
minusBtns.forEach(btn_minus => {
    btn_minus.addEventListener(
        "click",
        function(event){
            let cartRow = event.target.parentElement.parentElement;
            let product_quantity = cartRow.querySelector(".product_quantity");
            let product_price = cartRow.querySelector(".cart_currentPrice");
            let product_totalPrice = cartRow.querySelector(".cart_totalPrice");
            product_quantity.value--;
            product_totalPrice.innerHTML = new Intl.NumberFormat().format(parseInt(product_price.getAttribute('data-value'))*product_quantity.value);
        }
    )
});