<?php
if(isset($_GET['id_category'])) $id_category = $_GET['id_category'];
$sql_category = category_selectAll();
$sql_brand = brand_selectAll_byCateId($id_category);
$sql_deal = product_select_AllSaleOff();
?>
<?php
$page_num = 1;
$page_size = 9;
if (isset($_GET['page_num'])) $page_num = $_GET['page_num'] + 0;
if ($page_num <= 0) $page_num = 1;
$base_url = "$SITE_URL/homepage/?category&id_category=$id_category";
$total_products = count(product_selectAllByIdCategory($id_category));
$sql_product = getRowInPage("product", $page_num, $page_size);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/site_css/category.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/site_css/form.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/site_css/home.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/root.css">
</head>

<body>
    <div class="background_header">
        <img style="width: 100%; height: 50%; position: absolute; z-index: -10; top: 0;"
            src="<?= $CONTENT_URL ?>/imgs/interface/background.png" alt="">
    </div>
    <div class="category__container">
        <div class="title__sign-in">
            <h1>Danh Mục</h1>
            <div class="title_link">
                <a style="color: #fff;" href="<?= $SITE_URL ?>/homepage">Home</a> <i
                    class="fa-solid fa-arrow-right-long"></i> Category
            </div>
        </div>
        <div class="category_content">
            <div class="category__content-left">
                <div class="category__details">
                    <h3>Danh Mục</h3>
                    <ul class="category__detail">
                        <?php foreach ($sql_category as $row_category) { ?>
                        <li>
                            <a href="<?=$SITE_URL?>/homepage/?category&id_category=<?=$row_category['id_category']?>&page_num=1">
                                <?= $row_category['name'] ?>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="category__details">
                    <h3>Thương Hiệu</h3>
                    <ul class="category__detail">
                        <?php foreach ($sql_brand as $row_sql_brand) { ?>
                        <li>
                            <a href="<?=$SITE_URL?>/homepage/?category&id_category=<?=$row_sql_brand['id_brand']?>&page_num=1">
                                <?= $row_sql_brand['name'] ?>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="category__details">
                    <h3>Giá</h3>
                    <ul class="category__detail">
                        <li>
                            <a href="">Dưới 500,000đ</a>
                        </li>
                        <li>
                            <a href="">500,000đ - 1,000,000đ</a>
                        </li>
                        <li>
                            <a href="">1,000,000đ - 2,000,000đ</a>
                        </li>
                        <li>
                            <a href="">2,000,000đ - 5,000,000đ</a>
                        </li>
                        <li>
                            <a href="">Trên 5,000,000đ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="category__content-right">
                <div class="product__container">
                    <div class="btn_page">
                        <select class="product__sort" name="" id="">
                            <option value="">Sắp xếp mặc định</option>
                            <option value="">Sản phẩm bán chạy</option>
                            <option value="">Theo bảng chữ cái từ A - Z</option>
                            <option value="">Theo bảng chữ cái từ Z - A</option>
                            <option value="">Giá từ cao đến thấp</option>
                            <option value="">Giá từ thấp đến cao</option>
                            <option value="">Sản phẩm mới nhất</option>
                            <option value="">Sản phẩm cũ nhất</option>
                        </select>
                        <?php
                        echo createMultiPage($base_url, $total_products, $page_num, $page_size);
                        ?>

                    </div>
                    <ul class="row-3">
                        <?php 
                            if($total_products==0){
                                echo "Hết hàng";
                            }
                        ?>
                        <?php foreach ($sql_product as $row_product) {
                            $imgs__product = product_selectImgs($row_product['id_product']);
                            $discount_product = $row_product['price'] + $row_product['price'] * ($row_product['sale_off'] / 100);
                        ?>
                        <li>
                            <div class="product__selection-top">
                                <a href="index.php?page=product&product_id=" target="">
                                    <img src="<?= $CONTENT_URL ?>/imgs/products/<?= $imgs__product['contain'] ?>"
                                        alt="">
                                </a>
                                <div class="stick_top">
                                    <span class="sale">-<?= $row_product['sale_off'] ?>%</span>
                                    <span class="new">NEW</span>
                                </div>
                            </div>
                            <div class="btn_add-buy">
                                <button class="cart">ADD VÀO GIỎ</button>
                                <button class="buy">MUA NGAY</button>
                            </div>
                            <div class="product__selection-info">
                                <h4 class="product__name"><?= $row_product['name'] ?></h4>
                                <div class="product__price"><?= number_format($row_product['price']) ?>₫
                                    <span><?= number_format(round($discount_product, -4)) ?>₫</span>
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
                    <div class="btn_page">
                        <select class="product__sort" name="" id="">
                            <option value="">Sắp xếp mặc định</option>
                            <option value="">Sản phẩm bán chạy</option>
                            <option value="">Theo bảng chữ cái từ A - Z</option>
                            <option value="">Theo bảng chữ cái từ Z - A</option>
                            <option value="">Giá từ cao đến thấp</option>
                            <option value="">Giá từ thấp đến cao</option>
                            <option value="">Sản phẩm mới nhất</option>
                            <option value="">Sản phẩm cũ nhất</option>
                        </select>
                        <?php
                        echo createMultiPage($base_url, $total_products, $page_num, $page_size);
                        ?>

                    </div>
                </div>

            </div>
        </div>
        <div class="deal__week-area">
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
        </div>
    </div>
    <script src="<?= $CONTENT_URL ?>/js/cumstomSelect.js"></script>
</body>