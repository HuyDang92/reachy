<?php  
    if(isset($_SESSION['login'])){
        $carts = cart_selectByUserId($_SESSION['login']);
    }else{
        echo '<script> alert("Hãy đăng nhập để sử dụng chức năng");</script>';
        $carts = array();
    }
?>
<head>
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/site_css/cart.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/site_css/home.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/site_css/form.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/root.css">

</head>

<body>
    <div class="background_header">
        <img style="width: 100%; height: 50%; position: absolute; z-index: -10; top: 0;"
            src="<?= $CONTENT_URL ?>/imgs/interface/background.png" alt="">
    </div>
    <div class="title__sign-in">
        <h1>Giỏ Hàng</h1>
        <div class="title_link">
            <a style="color: #fff;" href="<?= $SITE_URL ?>/homepage">Home</a>
            <i class="fa-solid fa-arrow-right-long"></i>Giỏ hàng
        </div>
    </div>
    <section style="display: flex; margin-bottom: 4rem;" class="cart__container">
        <div class="cart__main">
            <span style="margin-bottom: 0.5rem;">Bạn có <?=count($carts)?> sản phẩm trong giỏ hàng </span>
            <?php foreach($carts as $cart){ 
                $product_img = product_selectImgs($cart['id_product']);
                $product = product_selectOne($cart['id_product']);
            ?>
                <form action="">
                    <li class="cart-row">
                        <div style="display: flex;" class="group">
                            <input type="checkbox" name="product_select" id="">
                            <div style="margin-right: 1rem;" class="cart__product-img">
                                <img style="width: 5rem;"
                                    src="<?=$CONTENT_URL?>/imgs/products/<?=$product_img['contain']?>" alt="">
                            </div>
                            <div class="cart__product-info">
                                <h4 style="margin-bottom: 5px; margin-top: 0;"><?=$product['name']?></h4>
                                <select name="size" id="">
                                    <option <?php if($cart['size'] == "36") echo "selected" ?> value="">Size 36</option>
                                    <option <?php if($cart['size'] == "37") echo "selected" ?> value="">Size 37</option>
                                    <option <?php if($cart['size'] == "38") echo "selected" ?> value="">Size 38</option>
                                    <option <?php if($cart['size'] == "39") echo "selected" ?> value="">Size 39</option>
                                    <option <?php if($cart['size'] == "40") echo "selected" ?> value="">Size 40</option>
                                    <option <?php if($cart['size'] == "41") echo "selected" ?> value="">Size 41</option>
                                    <option <?php if($cart['size'] == "42") echo "selected" ?> value="">Size 42</option>
                                </select>
                            </div>
                        </div>
                        <div class="product-count">
                            <button type="button" class="btn_descreaseQuantityProduct">
                                <span class="material-symbols-outlined">
                                    remove
                                </span>
                            </button>
                            <input type="number" name="quantity" class="product_quantity" value="<?=$cart['quantity']?>">
                            <button type="button" class="btn_increaseQuantityProduct">
                                <span class="material-symbols-outlined">
                                    add
                                </span>
                            </button>
                        </div>
                        <div class="cart-price">
                            <?php if($product['sale_off'] != 0) {?>
                                <span class="cart_currentPrice" data-value="<?=$product['price']*(100-$product['sale_off'])/100?>"><?=number_format($product['price']*(100-$product['sale_off'])/100)?>đ </span><br>
                                <small style="text-decoration: line-through;"><?=number_format($product['price'])?></small>
                            <?php }else{ ?>
                                <span class="cart_currentPrice" data-value="<?=$product['price']?>"><?=number_format($product['price'])?>đ </span>
                            <?php } ?>
                        </div>
                        <div class="cart-total">
                            <span  style="font-size: 18px; font-weight: 600;">Thành tiền: <br> <strong class="cart_totalPrice"
                                    style="font-size: 20px;color: darkred; ">1,000,000</strong><strong style="font-size: 20px;color: darkred; ">đ</strong></span> <br>
                            <a href=""><i class="fa-solid fa-trash-can"></i></a>
                        </div>
                    </li>
                </form>
            <?php } ?>
            <div style="display: flex; justify-content: space-between;" class="cart-note">
                <div style="width: 50%; padding-right: 1rem;" class="note-left">
                    Hình
                </div>
                <ul style="width: 50%;" class="note-right">
                    <strong>Chính sách đổi trả</strong>
                    <li>Sản phẩm được hỗ trợ đổi size trong vòng 3 ngày</li>
                    <li>Sản phẩm còn đủ tem mác, chưa qua sử dụng</li>
                    <li>Đối với khách hàng ở tỉnh ngoài HCM sản phẩm được đổi size trong 7 ngày kể từ ngày nhận</li>
                    <li>Liên hệ: 09xxxxxxxx để được hỗ trợ nhanh nhất ạ</li>
                </ul>
            </div>
            <a href="">
                <button type="submit">
                    <div class="btn_submit">
                        <div class="btn_submit-border">
                            Tiếp tục mua hàng
                            <span></span><span></span><span></span><span></span>
                        </div>
                    </div>
                </button>
            </a>
        </div>
        <div class="cart_pay">
            <li>
                <h4 style="margin: 0;">Thông tin đơn hàng</h4>
            </li>
            <li>Tổng tiền: <span style="float: right; font-weight: 700;">0đ</span></li>
            <li>Bạn có thể nhập mã giảm giá ở trang thanh toán</li>
            <a href="">
                <button type="submit">
                    <div class="btn_submit">
                        <div class="btn_submit-border">
                            THANH TOÁN
                            <span></span><span></span><span></span><span></span>
                        </div>
                    </div>
                </button>
            </a>

        </div>
    </section>
    <script src="<?=$CONTENT_URL?>/js/cart.js"></script>
</body>