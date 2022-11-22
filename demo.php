<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background-color: #eee
    }

    /* .buttons {
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center
    } */

    .cart {
        position: relative;
        outline: 0;
        background-color: blue;
        color: #fff;
        height: 50px;
        width: 140px;
        /* padding: 10px; */
        border-radius: 30px;
        line-height: 0px;
        overflow: hidden;
        cursor: pointer;
        border: none;
        margin-right: 1rem;
    }

    .cart:focus {
        outline: none !important
    }

    .cart .fa-shopping-cart {
        position: absolute;
        z-index: 2;
        top: 50%;
        left: -20%;
        font-size: 1.8em;
        transform: translate(-50%, -50%)
    }

    .cart .fa-square {
        position: absolute;
        z-index: 1;
        top: -20%;
        left: 53%;
        font-size: 0.8em;
        transform: translate(-50%, -50%)
    }

    .cart span {
        position: absolute;
        left: 50%;
        top: 50%;
        color: #fff;
        transform: translate(-50%, -50%);
        width: 100%;
    }

    .cart span.added {
        opacity: 0
    }

    .cart.clicked .fa-shopping-cart {
        animation: cart 2s ease-in forwards
    }

    .cart.clicked .fa-square {
        animation: box 2s ease-in forwards
    }

    .cart.clicked span.add-to-cart {
        animation: addcart 2s ease-in forwards
    }

    .cart.clicked span.added {
        animation: added 2s ease-in forwards
    }

    @keyframes cart {
        0% {
            left: -10%
        }

        40%,
        60% {
            left: 50%
        }

        100% {
            left: 110%
        }
    }

    @keyframes box {

        0%,
        40% {
            top: -20%
        }

        60% {
            top: 36%;
            left: 53%
        }

        100% {
            top: 40%;
            left: 112%
        }
    }

    @keyframes addcart {

        0%,
        30% {
            opacity: 1
        }

        30%,
        100% {
            opacity: 0
        }
    }

    @keyframes added {

        0%,
        80% {
            opacity: 0
        }

        100% {
            opacity: 1
        }
    }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="buttons">
        <button class="cart">
            <span class="add-to-cart">Add to cart</span>
            <span class="added">Item added</span>
            <i class="fa fa-shopping-cart"></i> <i class="fa fa-square"></i>
        </button>
    </div>
    <script>
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
    </script>
</body>

</html>