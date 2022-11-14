const productSort = document.querySelector('#product__sort');
productSort.addEventListener(
    "change",
    function (){
        let sortForm = document.querySelector("#sort__form");
        sortForm.submit();
    }
)
