<?php
$sql_deal = product_select_AllSaleOff();
if (isset($_GET['id_product'])) {
    $id_product = $_GET['id_product'];
    $sql_product = product_selectOne($id_product);
    $discount_product = $sql_product['price'] + $sql_product['price'] * ($sql_product['sale_off'] / 100);
}
$sql_category = category_selectOne($sql_product['id_category']);
$sql_imgs = product_selectArrayImgs($id_product);
$i = 0;

// foreach ($sql_imgs as $row_imgs) {
//     print_r($row_imgs['contain']);
// }
?>

<head>
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/site_css/product-detail.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/site_css/home.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/site_css/form.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/root.css">
</head>

<body>
    <div class="background_header">
        <img style="width: 100%; height: 50%; position: absolute; z-index: -10; top: 0;"
            src="<?= $CONTENT_URL ?>/imgs/interface/background.png" alt="">
    </div>
    <section class="product__detail-container">
        <div class="title__sign-in">
            <h1>Chi Tiết</h1>
            <div class="title_link">
                <a style="color: #fff;" href="<?= $SITE_URL ?>/homepage">Home</a>
                <i class="fa-solid fa-arrow-right-long"></i> <a href=""><?= $sql_category['name'] ?></a>
                <i class="fa-solid fa-arrow-right-long"></i> Product_name
            </div>
        </div>
        <div class="product__detail-content">
            <div class="product__detail-left">
                <div class="product-slide">
                    <?php foreach ($sql_imgs as $row_imgs) {
                    ?>
                    <div class="mySlides">
                        <img src="<?= $CONTENT_URL ?>/imgs/products/<?= $row_imgs['contain'] ?>" style="width:100%">
                    </div>
                    <?php } ?>
                </div> -->
                <div class="row">
                    <?php
                    foreach ($sql_imgs as $row_imgs) {
                        $i++;
                        print_r($i);
                    ?>
                    <div class="column">
                        <img class="demo cursor" src="<?= $CONTENT_URL ?>/imgs/products/<?= $row_imgs['contain'] ?>"
                            style="width:100%" onclick="currentSlide($i)" alt="">
                    </div>
                    <?php }
                    ?>
                    <!-- <div class="column">
                            <img class="demo cursor" src="<?= $CONTENT_URL ?>/imgs/products/<?= $row_imgs['contain'] ?>"
                                style="width:100%" onclick="currentSlide(2)" alt="">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="<?= $CONTENT_URL ?>/imgs/products/<?= $row_imgs['contain'] ?>"
                                style="width:100%" onclick="currentSlide(3)" alt="">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="<?= $CONTENT_URL ?>/imgs/products/<?= $row_imgs['contain'] ?>"
                                style="width:100%" onclick="currentSlide(4)" alt="">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="<?= $CONTENT_URL ?>/imgs/products/<?= $row_imgs['contain'] ?>"
                                style="width:100%" onclick="currentSlide(5)" alt="">
                        </div> -->
                </div>
            </div>
            <div class="product__detail-right">
                <div class="product__detail-top">
                    <h1><?= $sql_product['name'] ?></h1>
                    <span>MSP: <?= $sql_product['id_product'] ?></span>
                    <h1><?= number_format($sql_product['price']) ?>đ <small
                            style="text-decoration: line-through;"><?= number_format(round($discount_product, -4)) ?>đ</small>
                    </h1>
                    <hr>
                </div>
                <div class="product__detail-bottom">
                    <div class="product-size">
                        <div class="col-size">
                            <input type="radio" name="size" hidden id="s36">
                            <label for="s36">36</label>
                        </div>
                        <div class="col-size">
                            <input type="radio" name="size" hidden id="s37">
                            <label for="s37">37</label>
                        </div>
                        <div class="col-size">
                            <input type="radio" name="size" hidden id="s38">
                            <label for="s38">38</label>
                        </div>
                        <div class="col-size">
                            <input type="radio" name="size" hidden id="s39">
                            <label for="s39">39</label>
                        </div>
                        <div class="col-size">
                            <input type="radio" name="size" hidden id="s40">
                            <label for="s40">40</label>
                        </div>
                        <div class="col-size">
                            <input type="radio" name="size" hidden id="s41">
                            <label for="s41">41</label>
                        </div>
                        <div class="col-size">
                            <input type="radio" name="size" hidden id="s42">
                            <label for="s42">42</label>
                        </div>
                    </div>
                    <div class="product-tool">
                        <small style="color: green;">Còn hàng</small> <br>
                        <button type="submit">
                            <div class="btn_submit">
                                <div class="btn_submit-border">
                                    MUA NGAY
                                    <span></span><span></span><span></span><span></span>
                                </div>
                            </div>
                        </button>
                        <span class="material-symbols-outlined">
                            shopping_cart
                        </span>
                        <span class="material-symbols-outlined">
                            favorite
                        </span>
                    </div>
                    <p> (Description feature) </p>
                    <div class="product__bottom-bh">
                        <ul style="font-weight: 700;" class="product_content-bh">
                            <li>- Hàng chính hãng</li>
                            <li>- Giao hàng Toàn Quốc</li>
                            <li>- Thanh Toán khi nhận hàng</li>
                            <li>- Bảo hành chính hãng trọn đời sản phẩm</li>
                            <li>- Bảo hành keo , chỉ trọn đời sản phẩm</li>
                            <li>- Giao hàng Nhanh 60p tại Sài Gòn</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product__tabs-container">
        <div class="tabs">
            <button class="tablinks active" data-electronic="description">Mô Tả</button> <br>
            <button class="tablinks" data-electronic="pd_detail">Chi Tiết</button>
            <button class="tablinks" data-electronic="comment">Bình luận</button>
            <button class="tablinks" data-electronic="rate">Đánh giá</button>
        </div>
        <div class="wrapper_tabcontent">
            <div id="description" class="tabcontent active">
                <p>
                    Đây là một trong những đôi giày trắng với thiết kế cực đẹp và tinh tế đến từ nhà Nike Air Force
                    1.

                    Được làm từ chất liệu da mịn, phần mũi giày tạo điểm nhấn bằng các thiết kế đục lỗ cho phép
                    không khí lưu thông giúp cho đôi chân chúng ta thông thoáng và thoải mái cả ngày. Theo phong
                    cách đặc trưng của Nike AF1, hai bên thân giày được hoàn thiện bằng dấu Swoosh mang tính biểu
                    tượng của thương hiệu và dây buộc được hoàn thiện bằng một lacestag màu bạc đánh bóng nổi bật và
                    mang lại cái nhìn sang trọng hơn. Với điểm nhấn thương hiệu ở gót chân, đế giày được trang bị bộ
                    phận Air của Nike có tác dụng phân bổ đều trọng lượng của bạn từ gót chân đến bàn chân trước để
                    tạo sự ổn định và thoải mái tối ưu.

                    Có thể nói, những chiếc Air Force 1 này sẽ là một sự kết hợp hoàn hảo với mọi thứ, từ quần jean,
                    quần chạy bộ đến váy. Các khả năng phối outfit thực sự là vô tận!

                    Sản phẩm được phân phối trực tiếp tại Reachy Shop.
                </p>
            </div>
            <div id="pd_detail" class="tabcontent">Chi tiết</div>
            <div id="comment" class="tabcontent">Bình luận</div>
            <div id="rate" class="tabcontent">Đánh giá</div>
        </div>
    </section>
    <section class="deal__week-area">
        <div class="deal__week-title">
            <h1>Ưu Đãi Trong Tuần</h1>
        </div>
        <div class="deal__week-container">
            <ul class="deal__week-content">
                <?php foreach ($sql_deal as $row_deal) {
                    $imgs_deal = product_selectImgs($row_deal['id_product']);
                    $discount_deal = $row_deal['price'] + $row_deal['price'] * ($row_deal['sale_off'] / 100);
                ?>
                <li>
                    <a href="<?= $SITE_URL ?>/product?product&id_product=<?= $row_deal['id_product'] ?>">
                        <img src="<?= $CONTENT_URL ?>/imgs/products/<?= $imgs_deal['contain'] ?>" alt="">
                    </a>
                    <div class="deal__info">
                        <h3><?= $row_deal['name'] ?></h3>
                        <div class="deal__price">
                            <?= number_format($row_deal['price']) ?>đ
                            <small><?= number_format(round($discount_deal, -4)) ?>đ</small>
                        </div>
                    </div>
                </li>
                <?php } ?>
            </ul>
            <div class="deal__banner"><img src="<?= $CONTENT_URL ?>/imgs/interface/deal_week.png" alt=""></div>
        </div>
    </section>
    </div>
    <script src="<?= $CONTENT_URL ?>/js/slide_product.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/tabs.js"></script>
</body>

</html>