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
    <div class="main__sign-in">
        <div class="main__sign-in-left">
            <div class="user__avatar">
                <label for="user__uploadImg--checkbox">
                    <img src="<?=$CONTENT_URL .'/imgs/user/'. $user['img']?>" alt="">
                </label>
                <input type="checkbox" id="user__uploadImg--checkbox">
                <div class="user__uploadImg--contentbox">
                    <div>
                        <form action="handle_user.php" method="POST" enctype="multipart/form-data">
                            <img id="defaultUploadImg" src="<?=$CONTENT_URL?>/imgs/interface/admin-main.png" alt="Ảnh đại diện">
                            <label for="browseImg">Tải ảnh lên</label>
                            <input style="display: none" name="new_avatar" accept="image/*" type="file" id="browseImg" >
                            <button name="updateAvatar" id="btn-save" style="display: none" type="submit">Lưu</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="user__option">
                <div class="user__option--showInfo">
                    <button>
                        Thông tin cá nhân
                    </button>
                </div>
                <div class="user__option--changePassword">
                    <button>
                        Đổi mật khẩu
                    </button>
                </div>
            </div>
        </div>
        <div class="main__sign-in-right">
            <div class="user__info">
                <h2>Thông tin tài khoản</h2>
                <?php
                    if(isset($_SESSION['message'])){
                        $MESSAGE = $_SESSION['message'];
                        echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
                        unset($_SESSION['message']);
                    }
                ?>
                <form action="handle_user.php" method="POST">
                    <input type="text" value="<?=$user['email']?>" disabled>
                    <input type="text" name="name" value="<?=$user['name']?>">
                    <input type="number" name="phone_number" value="<?=$user['phone_number']?>">
                    <button name="updateInfo" type="submit">Lưu</button>
                </form>
            </div>
            <div class="user__changePassword">
                <h2>Đổi mật khẩu</h2>
                <?php
                    if(isset($_SESSION['message'])){
                        $MESSAGE = $_SESSION['message'];
                        echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
                        unset($_SESSION['message']);
                    }
                ?>
                <form action="handle_user.php" method="POST">
                    <input type="password" name="old_password" required>
                    <input type="password" name="new_password" required>
                    <input type="password" name="refill_new_password" required>
                    <button name="changePW" type="submit">Lưu</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="<?=$CONTENT_URL?>/js/user.js"></script>