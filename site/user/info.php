<link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/form.css">
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
            <div>
                <label for="uploadImgBox--checkbox">
                    <img src="<?=$CONTENT_URL .'/imgs/user/'. $user['img']?>" alt="">
                    <span>
                        <ion-icon name="camera-reverse-outline"></ion-icon>
                    </span>
                </label>
                <input type="checkbox" id="uploadImgBox--checkbox">
                <div class="">
                    <form action="handle_changeAvatar.php" method="POST" enctype="multipart/form-data">
                        <div>
                            <img src="<?=$CONTENT_URL?>/imgs/interface/admin-main.png" alt="">
                            <label for="browseImg">Tài ảnh lên</label>
                            <input style="display: none" type="file" id="browseImg" required>
                            <input type="hidden" value="<?=$_SESSION['login']?>">
                            <button id="btn-save" style="display: none" type="submit">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
            <div>

            </div>
        </div>
    </div>
</body>
<script src="<?=$CONTENT_URL?>/js/user.js"></script>