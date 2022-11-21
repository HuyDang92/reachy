<?php
$sql_category = category_selectAll();

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/site_css/header.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/root.css">
    <?php if (exist_param("contact")) { ?>
    <style>
    li.contact>a {
        color: var(--blue);
    }
    </style>
    <?php } else if (exist_param("category")) { ?>
    <style>
    li.cate>a {
        color: var(--blue);
    }
    </style>
    <?php } else if (exist_param("blogs")) { ?>
    <style>
    li.blogs>a {
        color: var(--blue);
    }
    </style>
    <?php } else if (exist_param("introduce")) { ?>
    <style>
    li.introduce>a {
        color: var(--blue);
    }
    </style>
    <?php } else { ?>
    <style>
    li.home>a {
        color: var(--blue);
    }
    </style>
    <?php } ?>
</head>

<body>

    <div class="container_header" id="main-menu__fixed">
        <div class="header">
            <div class="header__right">
                <a href="<?= $SITE_URL ?>/homepage">
                    <div class="header_right-logo">
                        <img src="<?= $CONTENT_URL ?>/imgs/interface/logo.svg" alt="logo">
                        <h2>REACHY</h2>
                    </div>
                </a>
            </div>
            <div class="header__left">
                <ul class="header__left-menu">
                    <li class="home">
                        <a href="<?= $SITE_URL ?>/homepage">TRANG CHỦ</a>
                    </li>
                    <li class="cate">
                        <a href="">DANH MỤC</a>
                        <div class="category__title">
                            <?php foreach ($sql_category as $row_category) { ?>
                            <a
                                href="<?= $SITE_URL ?>/homepage?category&id_category=<?= $row_category[0] ?>&page_num=1"><?= $row_category['name'] ?></a>
                            <?php } ?>
                        </div>
                    </li>
                    <li class="blogs">
                        <a href="<?= $SITE_URL ?>/homepage?blogs">BLOGS</a>
                    </li>
                    <li class="introduce">
                        <a href="<?= $SITE_URL ?>/homepage?introduce">GIỚI THIỆU</a>
                    </li>
                    <li class="contact">
                        <a href="<?= $SITE_URL ?>/homepage?contact">LIÊN HỆ</a>
                    </li>
                </ul>
                <ul class="header__left-control">
                    <li style="padding: 1.3rem 1rem;" class="control__user">
                        <?php if (isset($_SESSION['login'])) {
                            $id_user = $_SESSION['login'];
                            $img_user = user_selectImgs($id_user);
                            $user = user_selectById($id_user);
                        ?>
                        <img src="<?= $CONTENT_URL ?>/imgs/user/<?= $img_user['img'] ?>" alt="Ảnh đại diện">
                        <div class="sub__menu">
                            <a href="<?= $SITE_URL ?>/user?info">
                                <div class="sub__menu-user">THÔNG TIN CÁ NHÂN</div>
                            </a>
                            <?php if ($user['role'] == 1 || $user['role'] == 2) { ?>
                            <a href="<?= $ADMIN_URL ?>/">
                                <div class="sub__menu-user">QUẢN LÍ CỬA HÀNG</div>
                            </a>
                            <?php } ?>
                            <a href="<?= $SITE_URL ?>/user?sign_out">
                                <div class="sub__menu-user">ĐĂNG XUẤT</div>
                            </a>
                        </div>
                        <?php } else { ?>
                        <span class="material-symbols-outlined">account_circle</span>
                        <div class="sub__menu">
                            <a href="<?= $SITE_URL ?>/user?sign_in">
                                <div class="sub__menu-user">ĐĂNG NHẬP</div>
                            </a>
                            <a href="<?= $SITE_URL ?>/user?sign_up">
                                <div class="sub__menu-user">ĐĂNG KÝ</div>
                            </a>
                        </div>
                        <?php } ?>
                    </li>
                    <li>
                        <a href="<?= $SITE_URL ?>/product?cart">
                            <span class="material-symbols-outlined">garden_cart</span>
                        </a>
                    </li>
                    <li>
                        <input type="checkbox" id="search_btn" hidden>
                        <label for="search_btn"><span class="material-symbols-outlined">search</span></label>
                        <form class="header__form-search" action="<?= $SITE_URL ?>/homepage/" method="GET">
                            <input type="text" name="search" placeholder="Nhập từ khóa " required>
                            <label for="search_btn">
                                <span class="material-symbols-outlined">
                                    close
                                </span>
                            </label>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script>
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {
        myFunction()
    };

    // Get the header
    var header = document.getElementById("main-menu__fixed");

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
    </script>
</body>