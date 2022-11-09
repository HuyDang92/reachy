
    <div class="container_header" id="main-menu__fixed">
        <header class="header">
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
                    <li>
                        <a style="color: #21D1F5" href="<?= $SITE_URL ?>/homepage">TRANG CHỦ</a>
                    </li>
                    <li>
                        <a href="<?=$ADMIN_URL?>?category&act=add">LOẠI HÀNG</a>
                    </li>
                    <li>
                        <a href="<?=$ADMIN_URL?>?product&act=add">SẢN PHẨM</a>
                    </li>
                    <li>
                        <a href="<?=$ADMIN_URL?>?comment&act=list">BÌNH LUẬN</a>
                    </li>
                    <li>
                        <a href="<?=$ADMIN_URL?>?user&act=add">TÀI KHOẢN</a>
                    </li>
                    <li>
                        <a href="<?=$ADMIN_URL?>?stastitic">THỐNG KÊ</a>
                    </li>
                </ul>
                <ul class="header__left-control">
                    <li class="control__user">
                        <span class="material-symbols-outlined">account_circle</span>
                        <?php if(isset($_SESSION['login'])){ ?>
                            <div class="sub__menu">
                            <a href="<?= $SITE_URL ?>/user?info">
                                <div class="sub__menu-user">THÔNG TIN CÁC NHÂN</div>
                            </a>
                            <a href="<?= $SITE_URL ?>/user?sign_out">
                                <div class="sub__menu-user">ĐĂNG XUẤT</div>
                            </a>
                        </div>
                        <?php }else{ ?>
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
                        <span class="material-symbols-outlined">garden_cart</span>
                    </li>
                    <li>
                        <input type="checkbox" id="search_btn" hidden>
                        <label for="search_btn"><span class="material-symbols-outlined">search</span></label>
                        <form class="header__form-search" action="" method="GET">
                            <input type="text" name="search" placeholder="Nhập từ khóa ">
                            <label for="search_btn"><span class="material-symbols-outlined">
                                    close
                                </span></label>
                        </form>
                    </li>
                </ul>
            </div>
        </header>
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
