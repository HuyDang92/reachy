<?php
$sql_deal = product_select_AllSaleOff();
if (isset($_GET['id_product'])) {
    $id_product = $_GET['id_product'];
    $sql_product = product_selectOne($id_product);
    $discount_product = $sql_product['price'] + $sql_product['price'] * ($sql_product['sale_off'] / 100);
}
$sql_category = category_selectOne($sql_product['id_category']);
$sql_imgs = product_selectArrayImgs($id_product);
// foreach ($sql_imgs as $row_imgs) {
//     print_r($contain);
//     print_r($sql_imgs['contain']);
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
                <div id="slide">
                    <?php foreach ($sql_imgs as $row_imgs) {
                        extract($row_imgs);
                    ?>
                    <div class="item">
                        <img src="<?= $CONTENT_URL ?>/imgs/products/<?= $contain ?>" alt="ảnh giày">
                    </div>
                    <?php } ?>
                </div>

                <div class="buttons">
                    <button id="prev"><i class="fa-solid fa-angle-left"></i></button>
                    <button id="next"><i class="fa-solid fa-angle-right"></i></button>
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
                    <div class="product-count">
                        <button>
                            <span class="material-symbols-outlined">
                                remove
                            </span>
                        </button>
                        <input type="number" value="1">
                        <button>
                            <span class="material-symbols-outlined">
                                add
                            </span>
                        </button>
                    </div>
                    <div class="product-tool">
                        <small style="color: green;">Còn hàng</small> <br>
                        <a href="">
                            <button type="submit">
                                <div class="btn_submit">
                                    <div class="btn_submit-border">
                                        MUA NGAY
                                        <span></span><span></span><span></span><span></span>
                                    </div>
                                </div>
                            </button>
                        </a>
                        <span class="material-symbols-outlined">
                            shopping_cart
                        </span>
                        <span class="material-symbols-outlined">
                            favorite
                        </span>
                    </div>
                    <p> <?= $sql_product['feature'] ?> </p>
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
            <button class="tablinks " data-electronic="description">Mô Tả</button> <br>
            <button class="tablinks" data-electronic="pd_detail">Chi Tiết</button>
            <button class="tablinks" data-electronic="comment">Bình luận</button>
            <button class="tablinks" data-electronic="rate">Đánh giá</button>
        </div>
        <div class="wrapper_tabcontent">
            <div id="description" class="tabcontent active">
                <p>
                    <?= $sql_product['description'] ?>
                </p>
            </div>
            <div id="pd_detail" class="tabcontent">Chi tiết</div>
            <!-- bình luận -->
            <div id="comment" class="tabcontent">
                <div class="box_container">
                    <div class="content_box">
                        <div class="user-row">
                            <div class="user-info">
                                <div class="user-info-left">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHUvOd8Q-VihyupbJCdgjIR2FxnjGtAgMu3g&usqp=CAU"
                                        alt="">
                                    <div class="user-name">
                                        <h3>NAME USER</h3>
                                        <i>Date time</i>
                                    </div>
                                </div>
                                <div class="user-reply">
                                    <button>Trả lời</button>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo
                            </p>
                        </div>
                        <div class="comment-row">
                            <div class="user-info">
                                <div class="user-info-left">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHUvOd8Q-VihyupbJCdgjIR2FxnjGtAgMu3g&usqp=CAU"
                                        alt="">
                                    <div class="user-name">
                                        <h3>NAME USER</h3>
                                        <i>Date time</i>
                                    </div>
                                </div>
                                <div class="user-reply">
                                    <button>Trả lời</button>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo
                            </p>
                        </div>

                    </div>
                    <form class="comment_form">
                        <h1>Bình Luận</h1>
                        <input type="text" name="name" id="" placeholder="Họ Tên"> <br>
                        <input type="email" name="email" id="" placeholder="Email"> <br>
                        <input type="number" name="phone_number" id="" placeholder="SDT"> <br>
                        <textarea name="" id="" cols="30" rows="5" placeholder="Nội dung"></textarea>
                        <button type="submit">
                            <div class="btn_submit">
                                <div class="btn_submit-border">
                                    ĐĂNG
                                    <span></span><span></span><span></span><span></span>
                                </div>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
            <!-- Đánh giá -->
            <div id="rate" class="tabcontent">

                <div class="box_container">
                    <div class="content_box">
                        <div class="overall-container">
                            <div class="overall-left">
                                <h2>Tổng Đánh Giá</h2>
                                <strong>5.0</strong> <br>
                                <span>(04 Đánh giá)</span>
                            </div>
                            <div class="overall-right">
                                <h4 style="margin: 0;">Tất cả đánh giá</h4>
                                <ul class="rate-all">
                                    <li>
                                        5 Sao
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        01
                                    </li>
                                    <li>
                                        4 Sao
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i> 01
                                    </li>
                                    <li>
                                        3 Sao
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i> 01
                                    </li>
                                    <li>
                                        2 Sao
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        01
                                    </li>
                                    <li>
                                        1 Sao
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        01
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="user-row">
                            <div class="user-info">
                                <div class="user-info-left">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHUvOd8Q-VihyupbJCdgjIR2FxnjGtAgMu3g&usqp=CAU"
                                        alt="">
                                    <div class="user-name">
                                        <h3>NAME USER</h3>
                                        <i>Date time</i>
                                        <div class="user-rate">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo
                            </p>
                        </div>
                        <div class="comment-row">
                            <div class="user-info">
                                <div class="user-info-left">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHUvOd8Q-VihyupbJCdgjIR2FxnjGtAgMu3g&usqp=CAU"
                                        alt="">
                                    <div class="user-name">
                                        <h3>NAME USER</h3>
                                        <i>Date time</i>
                                        <div class="user-rate">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo
                            </p>
                        </div>

                    </div>
                    <form class="comment_form">
                        <h1>Đánh Giá</h1>
                        <textarea name="" id="" cols="30" rows="5" placeholder="Nội dung"></textarea>
                        <button type="submit">
                            <div class="btn_submit">
                                <div class="btn_submit-border">
                                    ĐĂNG
                                    <span></span><span></span><span></span><span></span>
                                </div>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
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