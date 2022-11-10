<head>
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/site_css/form.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/root.css">
</head>

<body>
    <div class="container__sign-in">
        <div class="background_header">
            <img style="width: 100%; height: 50%;" src="<?= $CONTENT_URL ?>/imgs/interface/background.png" alt="">
        </div>
        <div style="margin-left: 65%;" class="title__sign-in">
            <h1>Kích hoạt tài khoản</h1>
        </div>
        <div class="main__sign-in">
            <div class="main__sign-in-left">
                <img src="<?= $CONTENT_URL ?>/imgs/interface/fashion.jpg" alt="">
            </div>
            <div class="main__sign-in-right">
                <h2 style="margin-bottom: 1.5rem;">Kích hoạt tài khoảng</h2>
                <?php
                    if(strlen($MESSAGE)){
                        echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
                    }
                ?>
                <form style="margin-left: 37%; margin-bottom: 3rem;" class="active__form" action="handle_activate.php" method="POST">
                    <?php extract($_REQUEST); ?>
                    <input style="padding: 0.5rem; border: 1px solid #ccc; font-size: 20px;" type="text" name="code_ipt"
                        placeholder="Điền mã xác minh">
                    <input type="hidden" name="email" value="<?= $email ?>">
                    <input type="hidden" name="password" value="<?= $password ?>">
                    <button name="btn-sendmail" type="submit">
                        <div class="btn_submit">
                            <div style="width: 6rem;" class="btn_submit-border">
                                Gửi lại
                                <span></span><span></span><span></span><span></span>
                            </div>
                        </div>
                    </button>
                    <button name="btn-comfirm" type="submit">
                        <div class="btn_submit">
                            <div style="width: 10rem;" class="btn_submit-border">
                                Xác nhận
                                <span></span><span></span><span></span><span></span>
                            </div>
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>