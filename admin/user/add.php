
    <div class="signup__content">
        <h2>Thêm mới tài khoản</h2>
        <form action="" method="post" enctype="multipart/form-data" class="signup__form">
            <p>Tài khoản</p>
            <input type="text" require>
            <p>Họ tên</p>
            <input type="text" require>
            <p>Email</p>
            <input type="email" require>
            <p>Số điện thoại</p>
            <input type="number" maxlength="11" require>
            <p>Địa chỉ</p>
            <input type="text">
            <p>Ảnh</p>
            <input type="file">
            <p>Mật khẩu</p>
            <input type="password" require><br>
            <p>Vai trò</p >
            <span>Người dùng</span><input type="radio" value="0">
            <span>Quản trị viên</span><input type="radio" value="1"><br>
            <input type="submit" class="login__content--action" value="Thêm mới">
            <a href="<?=$ADMIN_URL?>?user&act=list"><input type="button" value="Danh sách"></a>
        </form>
    </div>