<?php
$sql_product_new =  product_select_8DateLasted();
$sql_product_special = product_select_special();
$sql_deal = product_select_AllSaleOff();
$sql_slide = product_selectAllSlide();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/site_css/home.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/root.css">
</head>

<body>
    <div class="background_header">
        <img src="<?= $CONTENT_URL ?>/imgs/interface/background.png" alt="">
    </div>
    <div class="container_main">
        <section class="banner__area">
            <div class="owl-carousel owl-theme">
                <?php foreach($sql_slide as $slide){ ?>
                    <a href="<?= $SITE_URL ?>/homepage?category&id_category=<?= $slide['id_category'] ?>&id_brand=<?=$slide['id_brand']?>">
                        <div class="main__slide-item">
                            <div class="slide__item-left">
                                <h1><?=$slide['title']?></h1>
                                <p><?=$slide['content']?></p>
                                <!-- <div class="btn__add-cart">
                                    <button>
                                        <a href="">
                                            <span class="material-symbols-outlined">
                                                add
                                            </span>
                                        </a>
                                    </button>
                                    <h4>THÊM VÀO GIỎ HÀNG</h4>
                                </div> -->
                            </div>
                            <div class="slide__item-right">
                                <img src="<?= $CONTENT_URL ?>/imgs/interface/<?=$slide['img']?>" alt="">
                            </div>
                        </div>
                    </a>
                <?php } ?>
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
                            $imgs__product_new = product_selectImgs($row_product_new['id_product']);
                            $discount_product_new = $row_product_new['price'] + $row_product_new['price'] * ($row_product_new['sale_off'] / 100);
                        ?>
                        <li>
                            <div class="product__selection-top">
                                <a href="index.php?page=product&product_id=" target="">
                                    <img src="<?= $CONTENT_URL ?>/imgs/products/<?= $imgs__product_new['contain'] ?>"
                                        alt="">
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
                                    <span><?= number_format(round($discount_product_new, -4)) ?>₫</span>
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
                                    <a <?php if(isset($_SESSION['login']) && product_checkLiked($row_product_new['id_product'],$_SESSION['login'])) echo 'style="color: red;"'?> href="<?=$SITE_URL?>/product/handle_addWishList.php?id_product=<?=$row_product_new['id_product']?>" class="hover_tools tooltip btn-like">
                                        <?php if(isset($_SESSION['login']) && product_checkLiked($row_product_new['id_product'],$_SESSION['login'])){ ?>
                                            <ion-icon name="heart"></ion-icon>
                                        <?php }else{ ?>
                                            <ion-icon name="heart-outline"></ion-icon>
                                        <?php } ?>
                                        <span class="tooltiptext">Yêu thích</span>
                                    </a>
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
                                    <a <?php if(isset($_SESSION['login']) && product_checkLiked($row_product_new['id_product'],$_SESSION['login'])) echo 'style="color: red;"'?> href="<?=$SITE_URL?>/product/handle_addWishList.php?id_product=<?=$row_product_new['id_product']?>" class="hover_tools tooltip btn-like">
                                        <?php if(isset($_SESSION['login']) && product_checkLiked($row_product_new['id_product'],$_SESSION['login'])){ ?>
                                            <ion-icon name="heart"></ion-icon>
                                        <?php }else{ ?>
                                            <ion-icon name="heart-outline"></ion-icon>
                                        <?php } ?>
                                        <span class="tooltiptext">Yêu thích</span>
                                    </a>
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
                <div class="owl-carousel owl-theme">
                    <?php foreach ($sql_product_special as $row_product_special) {
                        $imgs_special = product_selectImgs($row_product_special['id_product']);
                        $discount_special = $row_product_special['price'] + $row_product_special['price'] * ($row_product_special['sale_off'] / 100);
                    ?>

                    <div class="exclusive__product">
                        <img src="<?= $CONTENT_URL ?>/imgs/products/<?= $imgs_special['contain'] ?>" alt="">
                        <div class="exclusive__product-info">
                            <div class="exclusive__product-price">
                                <?= number_format($row_product_special['price']) ?>đ
                                <small><?= number_format(round($discount_special, -4)) ?>đ</small>
                            </div>
                            <div class="exclusive__product-name">
                                <?= $row_product_special['name'] ?>
                            </div>
                            <a href="" class="primary-btn">MUA NGAY</a>
                        </div>
                    </div>
                    <?php } ?>
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
                        <a href="">
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
        <section class="policy-area">
            <ul class="policy-container">
                <li>
                    <a href="">
                        <span class="material-symbols-outlined">
                            local_shipping
                        </span>
                        <h3>Giao hàng miễn phí</h3>
                        <p>Cho đơn hàng trên 800K
                            (áp dụng với sản phẩm KHÔNG giảm giá)
                        </p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="material-symbols-outlined">
                            autorenew
                        </span>
                        <h3>Chính sách hoàn trả</h3>
                        <p>
                            Đổi hàng khi đủ điều kiện
                        </p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="material-symbols-outlined">
                            support_agent
                        </span>
                        <h3>Hỗ trợ 24/7</h3>
                        <p>
                            Holine: 0999999999
                        </p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="material-symbols-outlined">
                            credit_card
                        </span>
                        <h3>Thanh toán an toàn</h3>
                        <p>
                            Nhiều phương toán thanh toán an toàn
                        </p>
                    </a>
                </li>
            </ul>
        </section>
    </div>
</body>
<script src="<?= $CONTENT_URL ?>/js/slide.js"></script>
<script src="<?= $CONTENT_URL ?>/js/countdown_timer.js"></script>
<?php if(isset($_SESSION['message'])){ ?>
    <script>
        alert("<?=$_SESSION['message'];?>")
    </script>
    
<?php unset($_SESSION['message']); } ?>
</html>