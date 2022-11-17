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
            <span style="margin-bottom: 0.5rem;">Bạn có 03 sản phẩm trong giỏ hàng </span>
            <li class="cart-row">
                <div style="display: flex;" class="group">
                    <div style="margin-right: 1rem;" class="cart__product-img">
                        <img style="width: 5rem;"
                            src="/reachy/content/imgs/products/293e08e8-e661-4010-b852-e65b2d7db7e5.webp" alt="">
                    </div>
                    <div class="cart__product-info">
                        <h4 style="margin-bottom: 5px; margin-top: 0;">Name Product</h4>
                        <select name="" id="">
                            <option value="">Size 36</option>
                            <option value="">Size 37</option>
                            <option value="">Size 38</option>
                        </select>
                    </div>
                </div>
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
                <div class="cart-price">
                    <span>1,000,000đ </span><br>
                    <small style="text-decoration: line-through;">(2,000,000đ)</small>
                </div>
                <div class="cart-total">
                    <span style="font-size: 18px; font-weight: 600;">Thành tiền: <br> <strong
                            style="font-size: 20px;color: darkred; ">1,000,000đ</strong></span> <br>
                    <a href=""><i class="fa-solid fa-trash-can"></i></a>
                </div>
            </li>
            <div style="display: flex; justify-content: space-between;" class="cart-note">
                <div style="width: 50%; padding-right: 1rem;" class="note-left">
                    <strong>Ghi chú đơn hàng</strong> <br>
                    <textarea style="width: 100%; margin-top: 0.5rem;" name="" id="" cols="30" rows="7"></textarea>
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
            <li>Tổng tiền: <span style="float: right; font-weight: 700;">1,000,000đ</span></li>
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
</body>