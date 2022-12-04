<link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/site_css/form.css">
<link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/user.css">
<style>
.order__row--fullProduct {
    display: none;
}

#productDropdown-checkbox:checked~.order__row--fullProduct {
    display: block;
}

#rating_checkbox:checked~.rating_container {
    display: block;
}

.rating_container {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    background-color: white;
    border: 1px solid black;
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
                <button class="tablinks" data-electronic="order">Đơn hàng</button>
                <button class="tablinks" data-electronic="changepw">Đổi mật khẩu</button>
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
                <div class="tabs_order">
                    <div class="btn_order">
                        <button class="tablinks_order active" data-electronic="order_parking">Chờ lấy hàng</button> <br>
                        <button class="tablinks_order" data-electronic="order_delivering">Đang vận chuyển</button>
                        <button class="tablinks_order" data-electronic="order_finish">Đã mua</button>
                        <button class="tablinks_order" data-electronic="order_cancel">Đã hủy</button>
                    </div>
                </div>
                <div class="wrapper_tabcontent_order">
                    <div id="order_parking" class="tabcontent_order active">
                        <ul class="order__rows--container" style="margin-top: 1rem;">
                            <?php
                            $orders_parking = bill_selectAllByStatusParking($_SESSION['login']);
                            foreach ($orders_parking as $order_parking) {
                                $bill_details = bill_detail_selectByIdBill($order_parking['id_bill']);
                                $firstProduct_info = product_selectOne($bill_details[0]['id_product']);
                                $firstProduct_img = product_selectImgs($firstProduct_info['id_product']);
                                $countProducts = count($bill_details);
                                $total_price = 0;
                                foreach ($bill_details as $bill_detail) {
                                    $product_row = product_selectOne($bill_detail['id_product']);
                                    $total_price += $bill_detail['amount'] * $product_row['price'];
                                }
                            ?>
                            <li class="order__row">
                                <div class="order__row--left">
                                    <div>
                                        <img width="50px" height="50px"
                                            src="<?= $CONTENT_URL ?>/imgs/products/<?= $firstProduct_img['contain'] ?>"
                                            alt="<?= $firstProduct_info['name'] ?>">
                                    </div>
                                    <span class="product-info">
                                        <b><?= $firstProduct_info['name'] ?></b> <br>
                                        <div class="order_info">
                                            <i>Size: <?= $bill_details[0]['size'] ?></i>
                                            <i>SL: <?= $bill_details[0]['amount'] ?></i>
                                            <i>Giá: <?= number_format($firstProduct_info['price']) ?>đ</i>
                                        </div>
                                    </span>
                                    <br>
                                    <?php if (count($bill_details) > 1) { ?>
                                    <!-- <div>
                                        <i><label for="productDropdown-checkbox">Và <?= $countProducts - 1 ?> sản phẩm
                                                khác</label></i>
                                        <input type="checkbox" name="" id="productDropdown-checkbox">
                                        <div class="order__row--fullProduct">
                                            <ul>
                                                <?php for ($i = 1; $i < count($bill_details); $i++) {
                                                    $product_row = product_selectOne($bill_details[$i]['id_product']);
                                                    $product_img = product_selectImgs($product_row['id_product']);
                                                ?>
                                                <li>
                                                    <div>
                                                        <div>
                                                            <img width="50px" height="50px"
                                                                src="<?= $CONTENT_URL ?>/imgs/products/<?= $product_img['contain'] ?>"
                                                                alt="<?= $product_row['name'] ?>">
                                                        </div>
                                                        <div class="product-info">
                                                            <b><?= $product_row['name'] ?></b>
                                                            <i>Size: <?= $bill_details[$i]['size'] ?></i>
                                                            <i>SL: <?= $bill_details[$i]['amount'] ?></i>
                                                        </div>
                                                        <span>Giá:<?= number_format($product_row['price']) ?>đ</span>
                                                    </div>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div> -->
                                    <?php } ?>
                                </div>
                                <div class="box_right--order">
                                    <div class="order__row--middle">
                                        <span>Tổng giá: </span> <br>
                                        <b><?= number_format($total_price) ?>đ</b>
                                    </div>
                                    <div class="order__row--right">
                                        <a href="<?= $SITE_URL ?>/product/handle_order.php?cancel=<?= $order_parking['id_bill'] ?>"
                                            target="frame">
                                            Hủy đơn hàng
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div id="order_delivering" class="tabcontent_order">
                        <ul class="order__rows--container">
                            <?php
                            $orders_cancel = bill_selectAllByStatusDelivering($_SESSION['login']);
                            foreach ($orders_cancel as $order_cancel) {
                                $bill_details = bill_detail_selectByIdBill($order_cancel['id_bill']);
                                $firstProduct_info = product_selectOne($bill_details[0]['id_product']);
                                $firstProduct_img = product_selectImgs($firstProduct_info['id_product']);
                                $countProducts = count($bill_details);
                                $total_price = 0;
                                foreach ($bill_details as $bill_detail) {
                                    $product_row = product_selectOne($bill_detail['id_product']);
                                    $total_price += $bill_detail['amount'] * $product_row['price'];
                                }
                            ?>
                            <li class="order__row">
                                <div class="order__row--left">
                                    <div>
                                        <img width="50px" height="50px"
                                            src="<?= $CONTENT_URL ?>/imgs/products/<?= $firstProduct_img['contain'] ?>"
                                            alt="<?= $firstProduct_info['name'] ?>">
                                    </div>
                                    <span class="product-info">
                                        <b><?= $firstProduct_info['name'] ?></b>
                                        <div class="order_info">
                                            <i>Size: <?= $bill_details[0]['size'] ?></i>
                                            <i>SL: <?= $bill_details[0]['amount'] ?></i>
                                            <i>Giá: <?= number_format($firstProduct_info['price']) ?>đ</i>
                                        </div>
                                    </span>
                                    <br>
                                    <?php if (count($bill_details) > 1) { ?>
                                    <div>
                                        <i><label for="productDropdown-checkbox">Và <?= $countProducts - 1 ?> sản phẩm
                                                khác</label></i>
                                        <input type="checkbox" name="" id="productDropdown-checkbox">
                                        <div class="order__row--fullProduct">
                                            <ul>
                                                <?php for ($i = 1; $i < count($bill_details); $i++) {
                                                            $product_row = product_selectOne($bill_details[$i]['id_product']);
                                                            $product_img = product_selectImgs($product_row['id_product']);
                                                        ?>
                                                <li>
                                                    <div>
                                                        <div>
                                                            <img width="50px" height="50px"
                                                                src="<?= $CONTENT_URL ?>/imgs/products/<?= $product_img['contain'] ?>"
                                                                alt="<?= $product_row['name'] ?>">
                                                        </div>
                                                        <div class="product-info">
                                                            <b><?= $product_row['name'] ?></b>
                                                            <i>Size: <?= $bill_details[$i]['size'] ?></i>
                                                            <i>SL: <?= $bill_details[$i]['amount'] ?></i>
                                                        </div>
                                                        <span>Giá:<?= number_format($product_row['price']) ?>đ</span>
                                                    </div>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="box_right--order">
                                    <div class="order__row--middle">
                                        <span>Tổng giá: </span> <br>
                                        <b><?= number_format($total_price) ?>đ</b>
                                    </div>
                                    <div class="order__row--right">
                                        <a href="<?= $SITE_URL ?>/product/handle_order.php?taken=<?= $order_cancel['id_bill'] ?>"
                                            target="frame">
                                            Đã nhận được hàng
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div id="order_finish" class="tabcontent_order">
                        <ul class="order__rows--container">
                            <?php
                            $orders_finish = bill_selectAllByStatusFinish($_SESSION['login']);
                            foreach ($orders_finish as $order_finish) {
                                $bill_details = bill_detail_selectByIdBill($order_finish['id_bill']);
                                $firstProduct_info = product_selectOne($bill_details[0]['id_product']);
                                $firstProduct_img = product_selectImgs($firstProduct_info['id_product']);
                                $countProducts = count($bill_details);
                                $total_price = 0;
                                foreach ($bill_details as $bill_detail) {
                                    $product_row = product_selectOne($bill_detail['id_product']);
                                    $total_price += $bill_detail['amount'] * $product_row['price'];
                                }
                            ?>
                            <li class="order__row">
                                <div class="order__row--left">
                                    <div>
                                        <img width="50px" height="50px"
                                            src="<?= $CONTENT_URL ?>/imgs/products/<?= $firstProduct_img['contain'] ?>"
                                            alt="<?= $firstProduct_info['name'] ?>">
                                    </div>
                                    <span class="product-info">
                                        <b><?= $firstProduct_info['name'] ?></b>
                                        <div class="order_info">
                                            <i>Size: <?= $bill_details[0]['size'] ?></i>
                                            <i>SL: <?= $bill_details[0]['amount'] ?></i>
                                            <i>Giá: <?= number_format($firstProduct_info['price']) ?>đ</i>
                                        </div>
                                    </span>
                                    <br>
                                    <?php if (count($bill_details) > 1) { ?>
                                    <div>
                                        <i><label for="productDropdown-checkbox">Và <?= $countProducts - 1 ?> sản phẩm
                                                khác</label></i>
                                        <input type="checkbox" name="" id="productDropdown-checkbox">
                                        <div class="order__row--fullProduct">
                                            <ul>
                                                <?php for ($i = 1; $i < count($bill_details); $i++) {
                                                            $product_row = product_selectOne($bill_details[$i]['id_product']);
                                                            $product_img = product_selectImgs($product_row['id_product']);
                                                        ?>
                                                <li>
                                                    <div>
                                                        <div>
                                                            <img width="50px" height="50px"
                                                                src="<?= $CONTENT_URL ?>/imgs/products/<?= $product_img['contain'] ?>"
                                                                alt="<?= $product_row['name'] ?>">
                                                        </div>
                                                        <div class="product-info">
                                                            <b><?= $product_row['name'] ?></b>
                                                            <i>Size: <?= $bill_details[$i]['size'] ?></i>
                                                            <i>SL: <?= $bill_details[$i]['amount'] ?></i>
                                                        </div>
                                                        <span>Giá:<?= number_format($product_row['price']) ?>đ</span>
                                                    </div>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="box_right--order">
                                    <div class="order__row--middle">
                                        <span>Tổng giá: </span> <br>
                                        <b><?= number_format($total_price) ?>đ</b>
                                    </div>
                                    <div class="order__row--right">
                                        <label for="rating_checkbox">Đánh giá sản phẩm</label>
                                        <input type="checkbox" name="" id="rating_checkbox" hidden>
                                        <div class="rating_container">
                                            <label for="rating_checkbox">X</label>
                                            <?php
                                                foreach ($bill_details as $bill_detail) {
                                                    $product_row = product_selectOne($bill_detail['id_product']);
                                                    $product_img = product_selectImgs($product_row['id_product']);
                                                ?>
                                            <form action="<?= $SITE_URL ?>/product/handle_order.php" method="POST"
                                                target="frame">
                                                <div>
                                                    <img width="50px" height="50px"
                                                        src="<?= $CONTENT_URL ?>/imgs/products/<?= $product_img['contain'] ?>"
                                                        alt="<?= $product_row['name'] ?>">
                                                </div>
                                                <div class="product-info">
                                                    <b><?= $product_row['name'] ?></b>
                                                    <i>Size: <?= $bill_detail['size'] ?></i>
                                                    <i>SL: <?= $bill_detail['amount'] ?></i>
                                                </div>
                                                <div>
                                                    <div>
                                                        <label for="star1"> <span class="material-icons-outlined">
                                                                star_border
                                                            </span> </label>
                                                        <label for="star2"> <span class="material-icons-outlined">
                                                                star_border
                                                            </span> </label>
                                                        <label for="star3"> <span class="material-icons-outlined">
                                                                star_border
                                                            </span> </label>
                                                        <label for="star4"> <span class="material-icons-outlined">
                                                                star_border
                                                            </span> </label>
                                                        <label for="star5"> <span class="material-icons-outlined">
                                                                star_border
                                                            </span> </label>
                                                        <input type="radio" name="rating_star" id="star1" hidden>
                                                        <input type="radio" name="rating_star" id="star2" hidden>
                                                        <input type="radio" name="rating_star" id="star3" hidden>
                                                        <input type="radio" name="rating_star" id="star4" hidden>
                                                        <input type="radio" name="rating_star" id="star5" hidden>
                                                    </div>
                                                    <input type="text" name="rating_content"
                                                        placeholder="Nội dung đánh giá">
                                                    <button name="rating">Đánh giá</button>
                                                </div>
                                            </form>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div id="order_cancel" class="tabcontent_order">
                        <ul class="order__rows--container">
                            <?php
                            $orders_cancel = bill_selectAllByStatusCancel($_SESSION['login']);
                            foreach ($orders_cancel as $order_cancel) {
                                $bill_details = bill_detail_selectByIdBill($order_cancel['id_bill']);
                                $firstProduct_info = product_selectOne($bill_details[0]['id_product']);
                                $firstProduct_img = product_selectImgs($firstProduct_info['id_product']);
                                $countProducts = count($bill_details);
                                $total_price = 0;
                                foreach ($bill_details as $bill_detail) {
                                    $product_row = product_selectOne($bill_detail['id_product']);
                                    $total_price += $bill_detail['amount'] * $product_row['price'];
                                }
                            ?>
                            <li class="order__row">
                                <div class="order__row--left">
                                    <div>
                                        <img width="50px" height="50px"
                                            src="<?= $CONTENT_URL ?>/imgs/products/<?= $firstProduct_img['contain'] ?>"
                                            alt="<?= $firstProduct_info['name'] ?>">
                                    </div>
                                    <span class="product-info">
                                        <b><?= $firstProduct_info['name'] ?></b>
                                        <div class="order_info">
                                            <i>Size: <?= $bill_details[0]['size'] ?></i>
                                            <i>SL: <?= $bill_details[0]['amount'] ?></i>
                                            <i>Giá: <?= number_format($firstProduct_info['price']) ?>đ</i>
                                        </div>
                                    </span>
                                    <br>
                                    <?php if (count($bill_details) > 1) { ?>
                                    <div>
                                        <i><label for="productDropdown-checkbox">Và <?= $countProducts - 1 ?> sản phẩm
                                                khác</label></i>
                                        <input type="checkbox" name="" id="productDropdown-checkbox">
                                        <div class="order__row--fullProduct">
                                            <ul>
                                                <?php for ($i = 1; $i < count($bill_details); $i++) {
                                                            $product_row = product_selectOne($bill_details[$i]['id_product']);
                                                            $product_img = product_selectImgs($product_row['id_product']);
                                                        ?>
                                                <li>
                                                    <div>
                                                        <div>
                                                            <img width="50px" height="50px"
                                                                src="<?= $CONTENT_URL ?>/imgs/products/<?= $product_img['contain'] ?>"
                                                                alt="<?= $product_row['name'] ?>">
                                                        </div>
                                                        <div class="product-info">
                                                            <b><?= $product_row['name'] ?></b>
                                                            <i>Size: <?= $bill_details[$i]['size'] ?></i>
                                                            <i>SL: <?= $bill_details[$i]['amount'] ?></i>
                                                        </div>
                                                        <span>Giá:<?= number_format($product_row['price']) ?>đ</span>
                                                    </div>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
<<<<<<< HEAD
                                <div class="order__row--middle">
                                    <span>Tổng giá: </span> <br>
                                    <b><?=number_format($total_price)?>đ</b>
                                </div>
                                <div class="order__row--right">
                                    <a href="<?=$SITE_URL?>/product/handle_order.php?repurchase=<?=$order_cancel['id_bill']?>" target="frame">
                                        Mua lại
                                    </a>
=======
                                <div class="box_right--order">
                                    <div class="order__row--middle">
                                        <span>Tổng giá: </span> <br>
                                        <b><?= number_format($total_price) ?>đ</b>
                                    </div>
                                    <div class="order__row--right">
                                        <a href="<?= $SITE_URL ?>/product/handle_order.php?repurchase=<?= $order_cancel['id_bill'] ?>"
                                            target="frame">
                                            Mua lại
                                        </a>
                                    </div>
>>>>>>> 2a24ba2def22a7f01c656509f6fb1ba35d51e48d
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <iframe name="frame" hidden></iframe>
    <script src="<?= $CONTENT_URL ?>/js/user.js"></script>
    <script>
    var tabLinks = document.querySelectorAll(".tablinks");
    var tabContent = document.querySelectorAll(".tabcontent");

    tabLinks.forEach(function(el) {
        el.addEventListener("click", openTabs);
    });


    function openTabs(el) {
        var btn = el.currentTarget; // lắng nghe sự kiện và hiển thị các element
        var electronic = btn.dataset.electronic; // lấy giá trị trong data-electronic

        tabContent.forEach(function(el) {
            el.classList.remove("active");
        }); //lặp qua các tab content để remove class active

        tabLinks.forEach(function(el) {
            el.classList.remove("active");
        }); //lặp qua các tab links để remove class active

        document.querySelector("#" + electronic).classList.add("active");
        // trả về phần tử đầu tiên có id="" được add class active

        btn.classList.add("active");
        // các button mà chúng ta click vào sẽ được add class active
    }
    </script>
    <script>
    var tabLinks_order = document.querySelectorAll(".tablinks_order");
    var tabcontent_order = document.querySelectorAll(".tabcontent_order");

    tabLinks_order.forEach(function(el) {
        el.addEventListener("click", openTabs);
    });


    function openTabs(el) {
        var btn = el.currentTarget; // lắng nghe sự kiện và hiển thị các element
        var electronic = btn.dataset.electronic; // lấy giá trị trong data-electronic

        tabcontent_order.forEach(function(el) {
            el.classList.remove("active");
        }); //lặp qua các tab content để remove class active

        tabLinks_order.forEach(function(el) {
            el.classList.remove("active");
        }); //lặp qua các tab links để remove class active

        document.querySelector("#" + electronic).classList.add("active");
        // trả về phần tử đầu tiên có id="" được add class active

        btn.classList.add("active");
        // các button mà chúng ta click vào sẽ được add class active
    }
    </script>
</body>