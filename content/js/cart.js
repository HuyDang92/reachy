
var addBtns = document.querySelectorAll(".btn_increaseQuantityProduct");
var minusBtns = document.querySelectorAll(".btn_descreaseQuantityProduct");
var cart_rows = document.querySelectorAll(".cart-row");
var cart_selecters = document.querySelectorAll(".cart_selecter");
var size_selecters = document.querySelectorAll(".size_selecter");
var cart_quantity = document.querySelectorAll(".product_quantity");
var cart_delete = document.querySelectorAll(".btn_delete");
/**
* Tính tổng tiền theo từng hàng khi load trang
*/
cart_rows.forEach(cart_row => {
    window.addEventListener(
        "load",
        solve_cartRow_totalPrice(cart_row)
    )
});
/**
* Tính tổng tiền theo từng hàng sản phẩm
*/
function solve_cartRow_totalPrice(cart_row){
    let product_quantity = cart_row.querySelector(".product_quantity");
    let product_price = cart_row.querySelector(".cart_currentPrice");
    let product_totalPrice = cart_row.querySelector(".cart_totalPrice");
    product_totalPrice.innerHTML = new Intl.NumberFormat().format(parseInt(product_price.getAttribute('data-value'))*product_quantity.value);
    product_totalPrice.setAttribute("data-value",parseInt(product_price.getAttribute('data-value'))*product_quantity.value);
}
/**
* Tăng số lượng sản phẩm và thay đổi giá
*/
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
            solve_cartRow_totalPrice(cartRow);
            cartRow.submit();
        }
    )
});
/**
* Giảm số lượng sản phẩm và thay đổi giá
*/
minusBtns.forEach(btn_minus => {
    btn_minus.addEventListener(
        "click",
        function(event){
            let cartRow = event.target.parentElement.parentElement;
            console.log("🚀 ~ file: cart.js:60 ~ cartRow ", cartRow )
            let product_quantity = cartRow.querySelector(".product_quantity");
            let product_price = cartRow.querySelector(".cart_currentPrice");
            let product_totalPrice = cartRow.querySelector(".cart_totalPrice");
            console.log(product_quantity.value);
            if(product_quantity.value>1){
                product_quantity.value--;
                product_totalPrice.innerHTML = new Intl.NumberFormat().format(parseInt(product_price.getAttribute('data-value'))*product_quantity.value);
                product_totalPrice.setAttribute("data-value",parseInt(product_price.getAttribute('data-value'))*product_quantity.value)
                let ipt_request = document.createElement("input");
                ipt_request.setAttribute("name","btn_quantity");
                ipt_request.setAttribute("type","hidden");
                cartRow.appendChild(ipt_request);
                cartRow.submit();
            }else{
                cartRow_prt = cartRow.parentElement;
                cartRow_prt.style.display = "none";
                cartRow.submit();
            }

        }
    )
});

function final_price(cartRow,opr){
    let product_totalPrice = cartRow.querySelector(".cart_totalPrice");
    let final_price = document.querySelector("#cart_finalPrice");
    let old_price = final_price.getAttribute("data-value");
    if(opr=="+"){
        let new_price = parseInt(old_price) + parseInt(product_totalPrice.getAttribute("data-value"));
        final_price.innerHTML = new Intl.NumberFormat().format(new_price) +"đ";
        final_price.setAttribute("data-value",new_price);
    }else{
        let new_price = parseInt(old_price) - parseInt(product_totalPrice.getAttribute("data-value"));
        final_price.innerHTML = new Intl.NumberFormat().format(new_price) +"đ";
        final_price.setAttribute("data-value",new_price);
    }
}
/**
* Chọn sản phẩm muốn mua và hiển thị giá
*/
cart_selecters.forEach(cart_selecter => {
    cart_selecter.addEventListener(
        "click",
        function(event){
            if(event.target.checked == true){
                let cartRow = event.target.parentElement.parentElement;
                final_price(cartRow,"+");
            }else{
                let cartRow = event.target.parentElement.parentElement;
                final_price(cartRow,"-");
            }
        }
    )
});
/**
* Chọn size và xóa các hàng trùng size + cộng dồn số lượng sản phẩm
*/
size_selecters.forEach(size_selecter => {
    size_selecter.addEventListener(
        "change",
        function (event){
            let cartRow = event.target.parentElement.parentElement.parentElement;
            remove_cartRow_sizeExisted(cartRow);
            cartRow.submit();
        }
    )
});
/**
* Hàm xóa hàng sản phẩm trùng size
*/
function remove_cartRow_sizeExisted_sizeExisted(cartRow){
    let check = 0;
    let cartRow_div = cartRow.parentElement;
    let seleter = cartRow.querySelector(".size_selecter");
    let quantity = cartRow.querySelector(".product_quantity");
    for (let index = 0; index < cart_rows.length; index++) {
        if(seleter.value==size_selecters[index].value){
            check++;
        }
        if(check==2){
            cart_quantity[index].value = parseInt(cart_quantity[index].value) + parseInt(quantity.value);
            cartRow_div.style.display = "none";
            break;
        }   
    }
}
cart_delete.forEach(btn_delete => {
    btn_delete.addEventListener(
        "click",
        function(event){
            let cartRow = event.target.parentElement.parentElement.parentElement.parentElement;
            let cart_quantity = document.querySelector("#cart_quantity");
            cartRow.style.display = "none";
            cart_quantity.innerHTML = parseInt(cart_quantity.innerHTML) - 1;
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