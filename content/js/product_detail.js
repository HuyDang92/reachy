const increaseQuantityProduct = document.querySelector("#btn_increaseQuantityProduct");
const decreaseQuantityProduct = document.querySelector("#btn_descreaseQuantityProduct");
const btn_like = document.querySelector("#btn_like");
increaseQuantityProduct.addEventListener(
    "click",
    function(){
        console.log("ss");
        let quantity = document.querySelector(".product_quantity");
        quantity.value++;
    }
)
decreaseQuantityProduct.addEventListener(
    "click",
    function(){
        console.log("ss");
        let quantity = document.querySelector(".product_quantity");
        if(quantity.value!=0){
            quantity.value--;
        }
    }
)
btn_like.addEventListener(
    "click",
    function (){
        const span_like = document.querySelector("#like_span");
        console.log("🚀 ~ file: product_detail.js ~ line 26 ~ span_like", span_like)
        if(span_like.innerHTML=="favorite"){
            span_like.innerText = "favorite_border";
            span_like.style.color = "var(--blue)";
        }else{
            span_like.innerText = "favorite";
            span_like.style.color = "red";
        }
    }
)