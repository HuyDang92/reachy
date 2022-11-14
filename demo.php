<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $SITE_URL ?>/homepage/owlcarousel/assets/owl.carousel.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?= $SITE_URL ?>/homepage/owlcarousel/owl.carousel.min.js"></script>
    <style>
    /*Time for the CSS*/
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background: #ccc;
    }

    .slider {
        width: 640px;
        /*Same as width of the large image*/
        position: relative;
        /*Instead of height we will use padding*/
        padding-top: 320px;
        /*That helps bring the labels down*/

        margin: 100px auto;

        /*Lets add a shadow*/
        box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.75);
    }


    /*Last thing remaining is to add transitions*/
    .slider>img {
        width: 100%;
        position: absolute;
        left: 0;
        top: 0;
        transition: all 0.5s;
    }

    .slider input[name='slide_switch'] {
        display: none;
    }

    .slider label {
        /*Lets add some spacing for the thumbnails*/
        margin: 18px 0 0 18px;
        border: 3px solid #999;

        float: left;
        cursor: pointer;
        transition: all 0.5s;

        /*Default style = low opacity*/
        opacity: 0.6;
    }

    .slider label img {
        display: block;
    }

    /*Time to add the click effects*/
    .slider input[name='slide_switch']:checked+label {
        border-color: #666;
        opacity: 1;
    }

    /*Clicking any thumbnail now should change its opacity(style)*/
    /*Time to work on the main images*/
    .slider input[name='slide_switch']~img {
        opacity: 0;
        transform: scale(1.1);
    }

    /*That hides all main images at a 110% size
On click the images will be displayed at normal size to complete the effect
*/
    .slider input[name='slide_switch']:checked+label+img {
        opacity: 1;
        transform: scale(1);
    }

    /*Clicking on any thumbnail now should activate the image related to it*/

    /*We are done :)*/
    </style>
</head>

<body>
    <div class="slider">
        <input type="radio" name="slide_switch" id="id1" />
        <label for="id1">
            <img src="/content/imgs/products/adidasxgucci1.avif" width="100" />
        </label>
        <img src="/content/imgs/products/adidasxgucci1.avif" />

        <!--Lets show the second image by default on page load-->
        <input type="radio" name="slide_switch" id="id2" checked="checked" />
        <label for="id2">
            <img src="/content/imgs/products/adidasxgucci2.avif" width="100" />
        </label>
        <img src="/content/imgs/products/adidasxgucci2.avif" />

        <input type="radio" name="slide_switch" id="id3" />
        <label for="id3">
            <img src="/content/imgs/products/adidasxgucci3.avif" width="100" />
        </label>
        <img src="/content/imgs/products/adidasxgucci3.avif" />

        <input type="radio" name="slide_switch" id="id4" />
        <label for="id4">
            <img src="/content/imgs/products/adidasxgucci4.avif" width="100" />
        </label>
        <img src="/content/imgs/products/adidasxgucci4.avif" />

        <input type="radio" name="slide_switch" id="id5" />
        <label for="id5">
            <img src="/content/imgs/products/adidasxgucci5.avif" width="100" />
        </label>
        <img src="/content/imgs/products/adidasxgucci5.avif" />
    </div>

    <!-- We will use PrefixFree - a script that takes care of CSS3 vendor prefixes
You can download it from http://leaverou.github.com/prefixfree/ -->
    <!-- <script src="http://thecodeplayer.com/uploads/js/prefixfree.js" type="text/javascript"></script> -->

    </div>

</body>

</html>