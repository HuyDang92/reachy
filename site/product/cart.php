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
            <i class="fa-solid fa-arrow-right-long"></i> <a href="">Giỏ hàng
        </div>
    </div>
    <section class="cart__container">
        <div class="cart__title">
            <h1>Giỏ Hàng Của Bạn</h1>
            <small>Có 01 sản phẩm trong giỏ hàng</small>
        </div>
        <div class="cart__main">
            <li style="margin-bottom: 1rem; border-bottom: 1px dotted #ccc; padding-bottom: 1rem;" class="cart-row">
                <div class="cart-left">
                    <div class="cart__product-img">
                        <img src="<?= $SITE_URL ?>/imgs/products/chunkyline2.webp" alt="">
                    </div>
                    <div class="cart__product-info">
                        <h4 style="margin-bottom: 5px;">Name Product</h4>
                        <select name="" id="">
                            <option value="">Size 36</option>
                            <option value="">Size 37</option>
                            <option value="">Size 38</option>
                        </select>
                        <div class="product-count">
                            <button id="btn_addQuantityProduct">
                                <span class="material-symbols-outlined">
                                    remove
                                </span>
                            </button>
                            <input type="number" value="1">
                            <button id="btn_minusQuantityProduct">
                                <span class="material-symbols-outlined">
                                    add
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="cart-right">
                    <i style="text-align: end; font-size: 25px; margin-top: 1rem;" class="fa-solid fa-xmark"></i>
                    <span style="font-size: 23px; font-weight: 600;">Giá: 1,000,000đ</span>
                </div>
            </li>
        </div>
        <div class="cart__bottom">
            <div class="price-sum">Tổng tiền: <span style="font-size: 40px; font-weight: 700;">5,000,000đ</span></div>
            <button type="submit">
                <div class="btn_submit">
                    <div class="btn_submit-border">
                        THANH TOÁN
                        <span></span><span></span><span></span><span></span>
                    </div>
                </div>
            </button>
        </div>
    </section>
</body>