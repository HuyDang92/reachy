
    <div class="signup__content">
        <h2>Cập nhật tài khoản</h2>
        <form action="" method="post" enctype="multipart/form-data" class="signup__form">
            <p>Tài khoản</p>
            <input type="text" value="" readonly>
            <p>Họ tên</p>
            <input type="text" value="" require>
            <p>Email</p>
            <input type="email" value="" require>
            <p>Số điện thoại</p>
            <input type="number" value="" maxlength="11" require>
            <p>Địa chỉ</p>
            <input type="text" value="">
            <p>Ảnh</p>
            <input type="file">
            <p>(tên ảnh cũ)</p>
            <p>Mật khẩu</p>
            <input type="password" name="mat_khau" require ><br>
            <p>Vai trò</p>
            <span>Người dùng</span><input type="radio" value="0">
            <span>Quản trị viên</span><input type="radio" value="1"><br>
            <input type="hidden" value="">
            <input type="submit" class="login__content--action" name="dangky" value="Cập nhật">
        </form>
    </div>