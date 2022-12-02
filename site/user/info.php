<link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/site_css/form.css">
<link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/user.css">
<style>
    .order__row--fullProduct{
        display: none;
    }
    #productDropdown-checkbox:checked ~ .order__row--fullProduct{
        display: block;
    }
</style>
<?php
$user = user_selectById($_SESSION['login']);
?>
<body>
    <div class="background_header">
        <img style="width: 100%; height: 50%;" src="<?= $CONTENT_URL ?>/imgs/interface/background.png" alt="">
    </div>
    <div class="title__sign-in">
        <h1>Tài khoản</h1>
        <div class="title_link">
            <a href="<?= $SITE_URL ?>/homepage">Home</a> <i class="fa-solid fa-arrow-right-long"></i> Tài khoản
        </div>
    </div>
    <div class="user__info-container">
        <div class="tabs">
            <div class="btn__mew-product">
                <button class="tablinks active" data-electronic="info_account">Thông tin tài khoản</button> <br>
                <button class="tablinks" data-electronic="changepw">Đổi mật khẩu</button>
                <button class="tablinks" data-electronic="order">Đơn hàng</button>
            </div>
        </div>
        <div class="wrapper_tabcontent">
            <div id="info_account" class="tabcontent active">
                <?php
                if (isset($_SESSION['message'])) {
                    $MESSAGE = $_SESSION['message'];
                    echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
                    unset($_SESSION['message']);
                }
                ?>
                <h2>Thông tin tài khoản</h2>

                <div class="user_info-flex">
                    <div class="user__avatar">
                        <label class="position" for="user__uploadImg--checkbox">
                            <span class="material-symbols-outlined">
                                photo_camera
                            </span>
                            <img class="hover" src="<?= $CONTENT_URL . '/imgs/user/' . $user['img'] ?>" alt="">
                        </label>
                        <input class="overplay_on" type="checkbox" id="user__uploadImg--checkbox">
                        <label class="overplay" for="user__uploadImg--checkbox"></label>
                        <div class="user__uploadImg--contentbox">
                            <form action="handle_user.php" method="POST" enctype="multipart/form-data">
                                <input style="display: none" name="new_avatar" accept="image/*" type="file"
                                    id="browseImg">
                                <label class="add_img" for="browseImg">
                                    <img id="defaultUploadImg" src="<?= $CONTENT_URL ?>/imgs/user/default-avatar.jpg"
                                        alt="Ảnh đại diện">
                                    <i class="fa-solid fa-camera"></i>
                                </label> <br>
                                <button type="submit" name="updateAvatar" id="btn-save">
                                    <div class="btn_submit">
                                        <div class="btn_submit-border">
                                            LƯU
                                            <span></span><span></span><span></span><span></span>
                                        </div>
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>
                    <form action="handle_user.php" method="POST">
                        <div class="flex" style="display: flex; flex-wrap: wrap;">
                            <label>
                                Email <br>
                                <input type="text" value="<?= $user['email'] ?>" disabled>
                            </label>
                            <label>
                                Họ Tên <br>
                                <input type="text" name="name" value="<?= $user['name'] ?>">
                            </label>
                            <label>
                                SDT <br>
                                <input type="number" name="phone_number" value="<?= $user['phone_number'] ?>">
                            </label>
                            <label>
                                Ngày Sinh <br>
                                <input type="date" name="" id="" placeholder="Ngày sinh">
                            </label>
                        </div>
                        <br>
                        <button name="updateInfo" type="submit">
                            <div class="btn_submit">
                                <div class="btn_submit-border">
                                    LƯU
                                    <span></span><span></span><span></span><span></span>
                                </div>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
            <div id="changepw" class="tabcontent">
                <h2>Đổi mật khẩu</h2>
                <?php
                if (isset($_SESSION['message'])) {
                    $MESSAGE = $_SESSION['message'];
                    echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
                    unset($_SESSION['message']);
                }
                ?>
                <form class="form_change-pw" action="handle_user.php" method="POST">
                    <input type="password" name="old_password" required placeholder="Nhập mật khẩu cũ"> <br>
                    <input type="password" name="new_password" required placeholder="Nhập mật khẩu mới"> <br>
                    <input type="password" name="refill_new_password" required placeholder="Nhập lại mật khẩu mới">
                    <br>
                    <button name="changePW" type="submit">
                        <div class="btn_submit">
                            <div class="btn_submit-border">
                                LƯU
                                <span></span><span></span><span></span><span></span>
                            </div>
                        </div>
                    </button>
                </form>
            </div>
            <div id="order" class="tabcontent">
                <!-- <button class="tablinks" data-electronic="order_parking">Đang vận chuyển</button> -->
                <div id="order_parking">
                    <ul class="order__rows--container">
                        <?php
                            $orders_parking = bill_selectAllByStatusParking($_SESSION['login']);
                            foreach($orders_parking as $order_parking){ 
                            $bill_details = bill_detail_selectByIdBill($order_parking['id_bill']); 
                            $firstProduct_info = product_selectOne($bill_details[0]['id_product']);
                            $firstProduct_img = product_selectImgs($firstProduct_info['id_product']);
                            $countProducts = count($bill_details);
                            $total_price = 0;
                            foreach($bill_details as $bill_detail){
                                $product_row = product_selectOne($bill_detail['id_product']);
                                $total_price += $bill_detail['amount']*$product_row['price'];
                            }
                        ?>
                            <li class="order__row">
                                <div class="order__row--left">
                                    <div>
                                        <img width="50px" height="50px" src="<?=$CONTENT_URL?>/imgs/products/<?=$firstProduct_img['contain'] ?>" alt="<?=$firstProduct_info['name']?>">
                                    </div>
                                    <span class="product-info">
                                        <b><?=$firstProduct_info['name']?></b>
                                        <i>Kích thước: <?=$bill_details[0]['size']?></i>
                                        <i>Số lượng: <?=$bill_details[0]['amount']?></i>
                                    </span>
                                    <br>
                                    <div>
                                        <i><label for="productDropdown-checkbox">Và <?=$countProducts-1?> sản phẩm khác</label></i>
                                        <input type="checkbox" name="" id="productDropdown-checkbox">
                                        <div class="order__row--fullProduct">
                                            <ul>
                                                <?php for($i = 1;$i<count($bill_details);$i++){ 
                                                $product_row = product_selectOne($bill_details[$i]['id_product']);
                                                ?>
                                                    <li>
                                                        <div>
                                                            <div>
                                                                <img width="50px" height="50px" src="<?=$CONTENT_URL?>/imgs/products/<?=$firstProduct_img['contain'] ?>" alt="<?=$firstProduct_info['name']?>">
                                                            </div>
                                                            <div class="product-info">
                                                                <b><?=$product_row['name']?></b>
                                                                <i>Kích thước: <?=$bill_details[$i]['size']?></i>
                                                                <i>Số l
                                                            </div>ượng: <?=$bill_details[$i]['amount']?></i>
                                                            <span>Giá:<?=number_format($product_row['price'])?>đ</span>
                                                        </div>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="order__row--middle">
                                    <span>Tổng giá: </span> <br>
                                    <b><?=number_format($total_price)?>đ</b>
                                </div>
                                <div class="order__row--right">
                                    <a href="<?=$SITE_URL?>/product/handle_order.php?cancel=<?=$order_parking['id_bill']?>" target="frame">
                                        Hủy đơn hàng
                                    </a>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="order_delivering">
                    <ul class="order__rows--container">
                        <?php
                            $orders_delivering = bill_selectAllByStatusDelivering($_SESSION['login']);
                            foreach($orders_delivering as $order_delivering){ 
                            $bill_details = bill_detail_selectByIdBill($order_delivering['id_bill']); 
                            $firstProduct_info = product_selectOne($bill_details[0]['id_product']);
                            $firstProduct_img = product_selectImgs($firstProduct_info['id_product']);
                            $countProducts = count($bill_details);
                            $total_price = 0;
                            foreach($bill_details as $bill_detail){
                                $product_row = product_selectOne($bill_detail['id_product']);
                                $total_price += $bill_detail['amount']*$product_row['price'];
                            }
                        ?>
                            <li class="order__row">
                                <div class="order__row--left">
                                    <div>
                                        <img width="50px" height="50px" src="<?=$CONTENT_URL?>/imgs/products/<?=$firstProduct_img['contain'] ?>" alt="<?=$firstProduct_info['name']?>">
                                    </div>
                                    <span class="product-info">
                                        <b><?=$firstProduct_info['name']?></b>
                                        <i>Kích thước: <?=$bill_details[0]['size']?></i>
                                        <i>Số lượng: <?=$bill_details[0]['amount']?></i>
                                    </span>
                                    <br>
                                    <div>
                                        <i><label for="productDropdown-checkbox">Và <?=$countProducts-1?> sản phẩm khác</label></i>
                                        <input type="checkbox" name="" id="productDropdown-checkbox">
                                        <div class="order__row--fullProduct">
                                            <ul>
                                                <?php for($i = 1;$i<count($bill_details);$i++){ 
                                                $product_row = product_selectOne($bill_details[$i]['id_product']);
                                                ?>
                                                    <li>
                                                        <div>
                                                            <div>
                                                                <img width="50px" height="50px" src="<?=$CONTENT_URL?>/imgs/products/<?=$firstProduct_img['contain'] ?>" alt="<?=$firstProduct_info['name']?>">
                                                            </div>
                                                            <div class="product-info">
                                                                <b><?=$product_row['name']?></b>
                                                                <i>Kích thước: <?=$bill_details[$i]['size']?></i>
                                                                <i>Số l
                                                            </div>ượng: <?=$bill_details[$i]['amount']?></i>
                                                            <span>Giá:<?=number_format($product_row['price'])?>đ</span>
                                                        </div>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="order__row--middle">
                                    <span>Tổng giá: </span> <br>
                                    <b><?=number_format($total_price)?>đ</b>
                                </div>
                                <div class="order__row--right">
                                    <a href="<?=$SITE_URL?>/product/handle_order.php?taken=<?=$order_delivering['id_bill']?>" target="frame">
                                        Đã nhận được hàng
                                    </a>
                                </div>
                            </li>
                        <?php } ?>                                
                    </ul>
                </div>
                <div class="order_finish">
                    <ul class="order__rows--container">
                        <?php
                            $orders_finish = bill_selectAllByStatusFinish($_SESSION['login']);
                            foreach($orders_finish as $order_finish){ 
                            $bill_details = bill_detail_selectByIdBill($order_finish['id_bill']); 
                            $firstProduct_info = product_selectOne($bill_details[0]['id_product']);
                            $firstProduct_img = product_selectImgs($firstProduct_info['id_product']);
                            $countProducts = count($bill_details);
                            $total_price = 0;
                            foreach($bill_details as $bill_detail){
                                $product_row = product_selectOne($bill_detail['id_product']);
                                $total_price += $bill_detail['amount']*$product_row['price'];
                            }
                        ?>
                            <li class="order__row">
                                <div class="order__row--left">
                                    <div>
                                        <img width="50px" height="50px" src="<?=$CONTENT_URL?>/imgs/products/<?=$firstProduct_img['contain'] ?>" alt="<?=$firstProduct_info['name']?>">
                                    </div>
                                    <span class="product-info">
                                        <b><?=$firstProduct_info['name']?></b>
                                        <i>Kích thước: <?=$bill_details[0]['size']?></i>
                                        <i>Số lượng: <?=$bill_details[0]['amount']?></i>
                                    </span>
                                    <br>
                                    <div>
                                        <i><label for="productDropdown-checkbox">Và <?=$countProducts-1?> sản phẩm khác</label></i>
                                        <input type="checkbox" name="" id="productDropdown-checkbox">
                                        <div class="order__row--fullProduct">
                                            <ul>
                                                <?php for($i = 1;$i<count($bill_details);$i++){ 
                                                $product_row = product_selectOne($bill_details[$i]['id_product']);
                                                ?>
                                                    <li>
                                                        <div>
                                                            <div>
                                                                <img width="50px" height="50px" src="<?=$CONTENT_URL?>/imgs/products/<?=$firstProduct_img['contain'] ?>" alt="<?=$firstProduct_info['name']?>">
                                                            </div>
                                                            <div class="product-info">
                                                                <b><?=$product_row['name']?></b>
                                                                <i>Kích thước: <?=$bill_details[$i]['size']?></i>
                                                                <i>Số l
                                                            </div>ượng: <?=$bill_details[$i]['amount']?></i>
                                                            <span>Giá:<?=number_format($product_row['price'])?>đ</span>
                                                        </div>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="order__row--middle">
                                    <span>Tổng giá: </span> <br>
                                    <b><?=number_format($total_price)?>đ</b>
                                </div>
                                <div class="order__row--right">
                                    <a href="<?=$SITE_URL?>/product/handle_order.php?cancel=<?=$order_parking['id_bill']?>" target="frame">
                                        Đánh giá sản phẩm
                                    </a>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <iframe name="frame" hidden></iframe>
</body>
<script src="<?= $CONTENT_URL ?>/js/user.js"></script>