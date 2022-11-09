
<div class="list__container">
    <h1 class="list__heading">Quản lý bình luận</h1>
    <table border="1">
        <thead>
            <tr>
                <th colspan="2">Mã bình luận</th>
                <th>Mã sản phẩm</th>
                <th>Mã khách hàng</th>
                <th>Ngày bình luận</th>
                <th>Nội dung</th>
                <th></th>
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
                        2
                    </td>
                    <td>
                        5
                    </td>
                    <td >
                        25/1/2020
                    </td>
                    <td>
                        Đây là bình luận rất xấu xa, ai đọc dòng này là...
                    </td>
                    <td>
                        <a href="<?=$ADMIN_URL?>?comment&act=del"><button>Xóa</button></a>
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
                        2
                    </td>
                    <td>
                        5
                    </td>
                    <td >
                        25/1/2020
                    </td>
                    <td>
                        Đây là bình luận rất xấu xa, ai đọc dòng này là...
                    </td>
                    <td>
                        <a href="<?=$ADMIN_URL?>?comment&act=del"><button>Xóa</button></a>
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
                        2
                    </td>
                    <td>
                        5
                    </td>
                    <td >
                        25/1/2020
                    </td>
                    <td>
                        Đây là bình luận rất xấu xa, ai đọc dòng này là...
                    </td>
                    <td>
                        <a href="<?=$ADMIN_URL?>?comment&act=del"><button>Xóa</button></a>
                    </td>
                </tr>
                
                

        </tbody>
    </table>
    <button id="select_all">Chọn tất cả</button>
    <button id="unselect_all">Bỏ chọn tất cả</button>
    <button>Xóa các mục đã chọn</button>
</div>

