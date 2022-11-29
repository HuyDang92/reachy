<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/demo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>

<body>
    <button name="btn_addCart" class="cart-cir">
        <span class="add-to-cart"><i class="fa-solid fa-cart-shopping"></i></span>
        <span class="added"><i class="fa-solid fa-cart-shopping"></i></span>
        <i class="fa fa-shopping-cart"></i> <i class="fa fa-square"></i>
    </button>
    <script>
    // hiệu ứng add 
    // document.addEventListener("DOMContentLoaded", function(event) {


    const cartButtons = document.querySelectorAll('.cart-cir');

    cartButtons.forEach(button => {

        button.addEventListener('click', cartClick);

    });

    function cartClick() {
        let button = this;
        button.classList.toggle('clicked');
    }

    // });
    </script>
</body>

</html>