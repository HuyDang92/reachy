const productSort = document.querySelector('.product__sort');
productSort.addEventListener(
    "change",
    function (){
        console.log(document.URL);
        let currentUrl = document.URL;
        currentUrl += productSort.value;
        window.location.href = currentUrl;        
    }
)