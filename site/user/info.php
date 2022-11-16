<link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/site_css/form.css">
<link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/user.css">
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
                        <input type="checkbox" id="user__uploadImg--checkbox">
                        <div class="user__uploadImg--contentbox">
                            <form action="handle_user.php" method="POST" enctype="multipart/form-data">
                                <img id="defaultUploadImg" src="<?= $CONTENT_URL ?>/imgs/interface/admin-main.png"
                                    alt="Ảnh đại diện"> <br>
                                <label for="browseImg">Tải ảnh lên</label> <br>
                                <input style="display: none" value="<?= $CONTENT_URL . '/imgs/user/' . $user['img'] ?>" name="new_avatar" accept="image/*" type="file"
                                    id="browseImg">
                                <input type="hidden" name="old_img" value="<?=$user['img']?>">
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
                        <div style="display: flex; flex-wrap: wrap;" class="flex">
                            <input type="text" value="<?= $user['email'] ?>" disabled>
                            <input type="text" name="name" value="<?= $user['name'] ?>">
                            <input type="number" name="phone_number" value="<?= $user['phone_number'] ?>">
                            <input type="date" name="" id="" placeholder="Ngày sinh">
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
        </div>
    </div>
</body>
<script src="<?= $CONTENT_URL ?>/js/user.js"></script>