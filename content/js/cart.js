
var addBtns = document.querySelectorAll(".btn_increaseQuantityProduct");
var minusBtns = document.querySelectorAll(".btn_descreaseQuantityProduct");
var cart_rows = document.querySelectorAll(".cart-row");
var cart_selecters = document.querySelectorAll(".cart_selecter");
var size_selecters = document.querySelectorAll(".size_selecter");
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
            console.log("🚀 ~ file: cart.js ~ line 23 ~ cartRow", cartRow)
            let product_quantity = cartRow.querySelector(".product_quantity");
            let product_price = cartRow.querySelector(".cart_currentPrice");
            let product_totalPrice = cartRow.querySelector(".cart_totalPrice");
            product_quantity.value++;
            product_totalPrice.innerHTML = new Intl.NumberFormat().format(parseInt(product_price.getAttribute('data-value'))*product_quantity.value);
            product_totalPrice.setAttribute("data-value",parseInt(product_price.getAttribute('data-value'))*product_quantity.value);
            let ipt_request = document.createElement("input");
            ipt_request.setAttribute("name","btn_quantity");
            ipt_request.setAttribute("type","hidden");
            cartRow.appendChild(ipt_request);
            cartRow.submit();
        }
    )
});
minusBtns.forEach(btn_minus => {
    btn_minus.addEventListener(
        "click",
        function(event){
            let cartRow = event.target.parentElement.parentElement;
            console.log("🚀 ~ file: cart.js ~ line 42 ~ cartRow", cartRow)
            let product_quantity = cartRow.querySelector(".product_quantity");
            let product_price = cartRow.querySelector(".cart_currentPrice");
            let product_totalPrice = cartRow.querySelector(".cart_totalPrice");
            if(product_quantity.value>0){
                product_quantity.value--;
            }
            product_totalPrice.innerHTML = new Intl.NumberFormat().format(parseInt(product_price.getAttribute('data-value'))*product_quantity.value);
            product_totalPrice.setAttribute("data-value",parseInt(product_price.getAttribute('data-value'))*product_quantity.value)
            let ipt_request = document.createElement("input");
            ipt_request.setAttribute("name","btn_quantity");
            ipt_request.setAttribute("type","hidden");
            cartRow.appendChild(ipt_request);
            cartRow.submit();
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
size_selecters.forEach(size_selecter => {
    size_selecter.addEventListener(
        "change",
        function (event){
            let cartRow = event.target.parentElement.parentElement.parentElement;
            cartRow.submit();
        }
    )
});
size_selecters.forEach(size_selecter => {
    size_selecter.addEventListener(
        "change",
        function (){
            console.log("ss");
            let quantity = document.querySelectorAll(".product_quantity");
            for (let index = 0; index < cart_selecters.length; index++) {
                for (let index1 = 0; index1 < quantity.length; index1++) {
                    if(cart_selecters[index].value == cart_selecters[index1].value){
                        quantity[index1].value += quantity[index].value;
                        console.log('s');
                        // cart_rows[index].remove();
                    }
                }
            }
        }
    )
});
// hiệu ứng add 
document.addEventListener("DOMContentLoaded", function(event) {


    const cartButtons = document.querySelectorAll('.cart');

    cartButtons.forEach(button => {

        button.addEventListener('click', cartClick);

    });

    function cartClick() {
        let button = this;
        button.classList.add('clicked');
    }

});