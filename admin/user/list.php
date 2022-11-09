
<div class="list__container">
    <h1 class="list__heading">Danh sách tài khoản</h1>
    <table border="1">
        <thead>
            <tr>
                <th colspan="2">Mã khách hàng(Tài khoản)</th>
                <th>Tên khách hàng</th>
                <th>Mật khẩu</th>
                <th>Hình</th>
                <th>Email</th>
                <th colspan="2">Vai trò</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>
                        <input class="list__checkbox" type="checkbox">
                    </td>
                    <td>
                        1
                    </td>
                    <td>
                        Nguyễn Văn A
                    </td>
                    <td>
                        123
                    </td>
                    <td class="hinh">
                        <img src="<?= $CONTENT_URL ?>/imgs/interface/logo.svg" alt="">
                    </td>
                    <td>
                        abc@gmail.com
                    </td>
                    <td>
                        User
                    </td>
                    <td>
                        <a href="<?=$ADMIN_URL?>?user&act=update"><button>Sửa</button></a>
                        <a href="<?=$ADMIN_URL?>?user&act=del"><button>Xóa</button></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="list__checkbox" type="checkbox">
                    </td>
                    <td>
                        1
                    </td>
                    <td>
                        Nguyễn Văn A
                    </td>
                    <td>
                        123
                    </td>
                    <td class="hinh">
                        <img src="<?= $CONTENT_URL ?>/imgs/interface/logo.svg" alt="">
                    </td>
                    <td>
                        abc@gmail.com
                    </td>
                    <td>
                        User
                    </td>
                    <td>
                        <a href="<?=$ADMIN_URL?>?user&act=update"><button>Sửa</button></a>
                        <a href="<?=$ADMIN_URL?>?user&act=del"><button>Xóa</button></a>
                    </td>
                </tr>
        </tbody>
    </table>
    <button id="select_all">Chọn tất cả</button>
    <button id="unselect_all">Bỏ chọn tất cả</button>
    <button>Xóa các mục đã chọn</button>
    <a href="<?=$ADMIN_URL?>?user&act=add"><button>Nhập thêm</button></a>
</div>

