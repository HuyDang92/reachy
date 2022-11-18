
var addBtns = document.querySelectorAll(".btn_increaseQuantityProduct");
var minusBtns = document.querySelectorAll(".btn_descreaseQuantityProduct");
var cart_rows = document.querySelectorAll(".cart-row");
var cart_selecters = document.querySelectorAll(".cart_selecter");
cart_rows.forEach(cart_row => {
    window.addEventListener(
        "load",
        function(){
            let product_quantity = cart_row.querySelector(".product_quantity");
            let product_price = cart_row.querySelector(".cart_currentPrice");
            let product_totalPrice = cart_row.querySelector(".cart_totalPrice");
            product_totalPrice.innerHTML = new Intl.NumberFormat().format(parseInt(product_price.getAttribute('data-value'))*product_quantity.value);
            product_totalPrice.setAttribute("data-value",parseInt(product_price.getAttribute('data-value'))*product_quantity.value);
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
            product_totalPrice.setAttribute("data-value",parseInt(product_price.getAttribute('data-value'))*product_quantity.value);
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
            product_totalPrice.setAttribute("data-value",parseInt(product_price.getAttribute('data-value'))*product_quantity.value)
        }
    )
});
cart_selecters.forEach(cart_selecter => {
    cart_selecter.addEventListener(
        "click",
        function(event){
            if(event.target.checked == true){
                let cartRow = event.target.parentElement.parentElement;
                let product_totalPrice = cartRow.querySelector(".cart_totalPrice");
                let final_price = document.querySelector("#cart_finalPrice");
                let old_price = final_price.getAttribute("data-value");
                let new_price = parseInt(old_price) + parseInt(product_totalPrice.getAttribute("data-value"));
                final_price.innerHTML = new Intl.NumberFormat().format(new_price) +"đ";
                final_price.setAttribute("data-value",new_price);
            }else{
                let cartRow = event.target.parentElement.parentElement;
                let product_totalPrice = cartRow.querySelector(".cart_totalPrice");
                let final_price = document.querySelector("#cart_finalPrice");
                let old_price = final_price.getAttribute("data-value");
                let new_price = parseInt(old_price) - parseInt(product_totalPrice.getAttribute("data-value"));
                final_price.innerHTML = new Intl.NumberFormat().format(new_price) +"đ";
                final_price.setAttribute("data-value",new_price);
            }
        }
    )
});
var size_selecters = document.querySelectorAll(".size_selecter");
size_selecters.forEach(size_selecter => {
    size_selecter.addEventListener(
        "change",
        function (event){
            let cartRow = event.target.parentElement.parentElement.parentElement;
            console.log("🚀 ~ file: cart.js ~ line 76 ~ cartRow", cartRow)
            cartRow.submit();
        }
    )
});