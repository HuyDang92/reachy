<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
          body{
            background-color: #eaeaea;
            overflow: hidden;
        }
        .product__detail-left{
            position: absolute;
            left:50%;
            top:50%;
            transform: translate(-50%,-50%);
            width:500px;
            height:500px;
            padding:50px;
            background-color: #f5f5f5;
            box-shadow: 0 30px 50px #dbdbdb;
        }
        #slide{
            width:max-content;
            margin-top:50px;
        }
        .item{
            width:150px;
            height:150px;
            background-position: 50% 50%;
            display: inline-block;
            transition: 0.5s;
            background-size: cover;
            position: absolute;
            z-index: 1;
            top:90%;
            transform: translateX(-150%);
            border-radius: 20px;
            box-shadow:  0 30px 50px #505050;
        }
        .item:nth-child(1),
        .item:nth-child(2){
            left:0;
            top:0;
            transform: translate(0,0);
            border-radius: 0;
            width:100%;
            height:100%;
            box-shadow: none;
        }
        .item:nth-child(3){
            left:50%;
        }
        .item:nth-child(4){
            left:calc(50% + 170px);
        }
        .item:nth-child(5){
            left:calc(50% + 340px);
        }
        .item:nth-child(n+6){
            left:calc(50% + 510px);
            /* opacity: 0; */
        }
        .item .content{
            position: absolute;
            top:50%;
            left:100px;
            width:300px;
            text-align: left;
            padding:0;
            color:#eee;
            transform: translate(0,-50%);
            display: none;
            font-family: system-ui;
        }
        .item:nth-child(2) .content{
            display: block;
            z-index: 11111;
        }
        .item .name{
            font-size: 40px;
            font-weight: bold;
            opacity: 0;
            animation:showcontent 1s ease-in-out 1 forwards
        }
        .item .des{
            margin:20px 0;
            opacity: 0;
            animation:showcontent 1s ease-in-out 0.3s 1 forwards
        }
        .item button{
            padding:10px 20px;
            border:none;
            opacity: 0;
            animation:showcontent 1s ease-in-out 0.6s 1 forwards
        }
        @keyframes showcontent{
            from{
                opacity: 0;
                transform: translate(0,100px);
                filter:blur(33px);
            }to{
                opacity: 1;
                transform: translate(0,0);
                filter:blur(0);
            }
        }
        .buttons{
            position: absolute;
            top: 50%;
            z-index: 100;
            width:100%;
        }
        .buttons>#prev{
            position: absolute;
            left: -1rem;
            top: 50%;
        }
        .buttons>#next{
            position: absolute;
            right: 4rem;
            top: 50%;
        }
        .buttons button{
            width:50px;
            height:50px;
            border-radius: 50%;
            border:1px solid #ccc;
            transition: 0.5s;
        }.buttons button:hover{
            background-color: #bac383;
        }
  
    </style>
</head>
<body>
    <div class="product__detail-left">
        <div id="slide">
            <div class="item" style="background-image: url(/content/imgs/products/adizeropro1.webp);">
                <div class="content">
                    
                </div>
            </div>
            <div class="item" style="background-image: url(/content/imgs/products/adizeropro2.webp);">
                <div class="content">
                    
                </div>
            </div>
            <div class="item" style="background-image: url(/content/imgs/products/adizeropro3.webp);">
                <div class="content">
                    
                </div>
            </div>
            <div class="item" style="background-image: url(/content/imgs/products/adizeropro4.webp);">
                <div class="content">
                    
                </div>
            </div>
            <div class="item" style="background-image: url(/content/imgs/products/adizeropro5.webp);">
                <div class="content">
                    
                </div>
            </div>
            
           
        </div>
        <div class="buttons">
            <button id="prev"><i class="fa-solid fa-angle-left"></i></button>
            <button id="next"><i class="fa-solid fa-angle-right"></i></button>
        </div>
    </div>

    <script>
          document.getElementById('next').onclick = function(){
        let lists = document.querySelectorAll('.item');
        document.getElementById('slide').appendChild(lists[0]);
    }
    document.getElementById('prev').onclick = function(){
        let lists = document.querySelectorAll('.item');
        document.getElementById('slide').prepend(lists[lists.length - 1]);
    }
    
    </script>
</body>
</html>
  