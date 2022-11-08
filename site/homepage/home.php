<?php
$sql_product_new =  product_select_8DateLasted();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/home.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/root.css">

</head>

<body>
    <div class="background_header">
        <img src="<?= $CONTENT_URL ?>/imgs/interface/background.png" alt="">
    </div>
    <div class="container_main">
        <section class="banner__area">
            <div class="owl-carousel owl-theme">
                <div class="main__slide-item">
                    <div class="slide__item-left">
                        <h1>Bộ Sưu Tập Mới <br> Của Nike!</h1>
                        <p>Giày chính hãng với lịch sử hình thành và phát triển hơn 100 năm để ngày nay trở thành
                            “Thương hiệu giày thể thao được giới trẻ yêu thích”
                        </p>
                        <div class="btn__add-cart">
                            <button>
                                <a href="">
                                    <span class="material-symbols-outlined">
                                        add
                                    </span>
                                </a>
                            </button>
                            <h4>THÊM VÀO GIỎ HÀNG</h4>
                        </div>
                    </div>
                    <div class="slide__item-right">
                        <img src="<?= $CONTENT_URL ?>/imgs/interface/banner4.webp" alt="">
                    </div>
                </div>
                <div class="main__slide-item">
                    <div class="slide__item-left">
                        <h1>Bộ Sưu Tập Mới <br> Của Nike!</h1>
                        <p>Giày chính hãng với lịch sử hình thành và phát triển hơn 100 năm để ngày nay trở thành
                            “Thương hiệu giày thể thao được giới trẻ yêu thích”
                        </p>
                        <div class="btn__add-cart">
                            <button>
                                <a href="">
                                    <span class="material-symbols-outlined">
                                        add
                                    </span>
                                </a>
                            </button>
                            <h4>THÊM VÀO GIỎ HÀNG</h4>
                        </div>
                    </div>
                    <div class="slide__item-right">
                        <img src="<?= $CONTENT_URL ?>/imgs/interface/banner2.png" alt="">
                    </div>
                </div>

            </div>
        </section>
        <section class="category__sale-area">
            <div class="main__category-container">
                <div class="main__category-items">
                    <div class="category-item">
                        <img src="<?= $CONTENT_URL ?>/imgs/interface/sport1.webp" alt="">
                        <div class="overplay__cate"></div>
                        <a href=""><span>SNEAKER CHO THỂ THAO</span></a>
                    </div>
                    <div class="category-item">
                        <img src="<?= $CONTENT_URL ?>/imgs/interface/sport2.webp" alt="">
                        <div class="overplay__cate"></div>
                        <a href=""><span>SNEAKER CHO THỂ THAO</span></a>
                    </div>
                    <div class="category-item">
                        <img src="<?= $CONTENT_URL ?>/imgs/interface/sport3.webp" alt="">
                        <div class="overplay__cate"></div>
                        <a href=""><span>SNEAKER XU HƯỚNG</span></a>
                    </div>
                    <div class="category-item">
                        <img src="<?= $CONTENT_URL ?>/imgs/interface/sport4.webp" alt="">
                        <div class="overplay__cate"></div>
                        <a href=""><span>SNEAKER ĐƯỢC YÊU THÍCH</span></a>
                    </div>
                </div>
                <div class="main__category-poster">
                    <img src="<?= $CONTENT_URL ?>/imgs/interface/saleSport.png" alt="">
                </div>
            </div>
        </section>
        <section class="product__new-area">
            <div class="owl-carousel owl-theme">
                <div class="product__new-container">
                    <div class="sec__title">
                        <h1>Sản Phẩm Mới</h1>
                        <small>“Đặt sự hài lòng của khách hàng là ưu tiên số 1 trong mọi suy nghĩ hành động của mình” là
                            sứ
                            mệnh,
                            là triết lý, chiến lược.. luôn cùng REACHY tiến bước
                        </small>
                    </div>
                    <ul class="product__selection">
                        <?php foreach ($sql_product_new as $row_product_new) {
                            $imgs = product_selectImgs($row_product_new['id_product']);
                            $discount = $row_product_new['price'] + $row_product_new['price'] * ($row_product_new['sale_off'] / 100);
                        ?>
                        <li>
                            <div class="product__selection-top">
                                <a href="index.php?page=product&product_id=" target="">
                                    <img src="<?= $CONTENT_URL ?>/imgs/products/<?= $imgs['contain'] ?>" alt="">
                                </a>
                                <div class="stick_top">
                                    <span class="sale">-<?= $row_product_new['sale_off'] ?>%</span>
                                    <span class="new">NEW</span>
                                </div>
                            </div>
                            <div class="btn_add-buy">
                                <button class="cart">ADD VÀO GIỎ</button>
                                <button class="buy">MUA NGAY</button>
                            </div>
                            <div class="product__selection-info">
                                <h4 class="product__name"><?= $row_product_new['name'] ?></h4>
                                <div class="product__price"><?= number_format($row_product_new['price']) ?>₫
                                    <span><?= number_format(round($discount, -4)) ?>₫</span>
                                </div>
                            </div>
                            <div class="product__selection-tools">
                                <div class="tools">
                                    <i class="hover_tools tooltip">
                                        <a href="index.php?page=product&product_id=">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <span class="tooltiptext">Xem chi tiết</span>
                                    </i>
                                    <i class="hover_tools tooltip">
                                        <ion-icon name="heart-outline"></ion-icon>
                                        <span class="tooltiptext">Yêu thích</span>
                                    </i>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="product__new-container">
                    <div class="sec__title">
                        <h1>Sản Phẩm Sắp Ra Mắt</h1>
                        <small>“Đặt sự hài lòng của khách hàng là ưu tiên số 1 trong mọi suy nghĩ hành động của mình” là
                            sứ
                            mệnh,
                            là triết lý, chiến lược.. luôn cùng REACHY tiến bước
                        </small>
                    </div>
                    <ul class="product__selection">
                        <?php foreach ($sql_product_new as $row_product_new) {
                            $imgs = product_selectImgs($row_product_new['id_product']);
                            $discount = $row_product_new['price'] + $row_product_new['price'] * ($row_product_new['sale_off'] / 100);
                        ?>
                        <li>
                            <div class="product__selection-top">
                                <a href="index.php?page=product&product_id=" target="">
                                    <img src="<?= $CONTENT_URL ?>/imgs/products/<?= $imgs['contain'] ?>" alt="">
                                </a>
                                <div class="stick_top">
                                    <span class="sale">-<?= $row_product_new['sale_off'] ?>%</span>
                                    <span class="new">NEW</span>
                                </div>
                            </div>
                            <div class="btn_add-buy">
                                <button class="cart">ADD VÀO GIỎ</button>
                                <button class="buy">MUA NGAY</button>
                            </div>
                            <div class="product__selection-info">
                                <h4 class="product__name"><?= $row_product_new['name'] ?></h4>
                                <div class="product__price"><?= number_format($row_product_new['price']) ?>₫
                                    <span><?= number_format(round($discount, -4)) ?>₫</span>
                                </div>
                            </div>
                            <div class="product__selection-tools">
                                <div class="tools">
                                    <i class="hover_tools tooltip">
                                        <a href="index.php?page=product&product_id=">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <span class="tooltiptext">Xem chi tiết</span>
                                    </i>
                                    <i class="hover_tools tooltip">
                                        <ion-icon name="heart-outline"></ion-icon>
                                        <span class="tooltiptext">Yêu thích</span>
                                    </i>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

        </section>
        <section class="exclusive__deal-area">
            <div class="exclusive__deal-left">
                <img src="<?= $CONTENT_URL ?>/imgs/interface/exclusive.jpg.webp" alt="">
                <div class="exclusive__deal-content">
                    <div class="deal__title">
                        <h1>Ưu đãi độc quyền sẽ sớm kết thúc!</h1>
                        <p>Những người cực kỳ yêu thích hệ thống thân thiện với môi trường.</p>
                    </div>
                    <div class="deal__timer">
                        <ul>
                            <li>
                                <span id="days"></span> <br> <i>NGÀY</i>
                            </li>
                            <li>
                                <span id="hours"></span> <br> <i>GIỜ</i>
                            </li>
                            <li>
                                <span id="minute"></span> <br> <i>PHÚT</i>
                            </li>
                            <li class="second_sale">
                                <span id="second"></span> <br> <i>GIÂY</i>
                            </li>
                        </ul>
                        <a href="" class="primary-btn">MUA NGAY</a>
                    </div>
                </div>
            </div>
            <div class="exclusive__deal-right">
                <div class="owl-carouse owl-theme">
                    <div class="exclusive__product">
                        <img src="<?= $CONTENT_URL ?>/imgs/interface/exclusive_product1.webp" alt="">
                        <div class="exclusive__product-info">
                            <div class="exclusive__product-price">
                                1,500,000đ <small>2,000,000đ</small>
                            </div>
                            <div class="exclusive__product-name">
                                ADDIDAS NEW HAMMER SOLE FOR SPORTS PERSON
                            </div>
                            <a href="" class="primary-btn">MUA NGAY</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <script src="<?= $CONTENT_URL ?>/js/slide.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/countdown_timer.js"></script>
</body>

</html>