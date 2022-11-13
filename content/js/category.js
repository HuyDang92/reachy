const productSort = document.querySelector('#product__sort');
productSort.addEventListener(
    "change",
    function (){
        let currentUrl = document.URL;
        currentUrl = currentUrl.concat("&sort=",productSort.value);
        console.log("🚀 ~ file: category.js ~ line 6 ~ currentUrl", currentUrl)
        window.location.href = currentUrl;        
    }
)