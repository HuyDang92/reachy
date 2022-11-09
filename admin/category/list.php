
<div class="list__container">
    <h1 class="list__heading">Danh sách loại</h1>
    <table border="1">
        <thead>
            <tr>
                <th colspan="2">Mã loại</th>
                <th colspan="2">Tên loại</th>
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
                    Giày cuồng nộ
                </td>
                <td>
                    <a href="<?=$ADMIN_URL?>?category&act=update"><button>Sửa</button></a>
                    <a href="<?=$ADMIN_URL?>?category&act=del"><button>Xóa</button></a>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="list__checkbox" type="checkbox">
                </td>
                <td>
                    2
                </td>
                <td>
                    Giày bạc
                </td>
                <td>
                    <a href="<?=$ADMIN_URL?>"><button>Sửa</button></a>
                    <a href="<?=$ADMIN_URL?>"><button>Xóa</button></a>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="list__checkbox" type="checkbox">
                </td>
                <td>
                    3
                </td>
                <td>
                    Giày vò cuộc sống
                </td>
                <td>
                    <a href="<?=$ADMIN_URL?>"><button>Sửa</button></a>
                    <a href="<?=$ADMIN_URL?>"><button>Xóa</button></a>
                </td>
            </tr>
        </tbody>
    </table>
    <button id="select_all">Chọn tất cả</button>
    <button id="unselect_all">Bỏ chọn tất cả</button>
    <button>Xóa các mục đã chọn</button>
    <a href="<?=$ADMIN_URL?>?category&act=add"><button>Nhập thêm</button></a>
</div>

