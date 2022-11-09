
<div class="list__container">
    <h1 class="list__heading">Danh sách sản phẩm</h1>
    <table border="1">
        <thead>
            <tr>
                <th colspan="2">Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Mã loại</th>
                <th>Hình</th>
                <th>Giá</th>
                <th colspan="2">Số lượng</th>
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
                        Giày
                    </td>
                    <td>
                        Giày đẹp
                    </td>
                    <td class="hinh">
                        <img src="<?= $CONTENT_URL ?>/imgs/interface/logo.svg" alt="">
                    </td>
                    <td>
                        100k
                    </td>
                    <td>
                        59
                    </td>
                    <td>
                        <a href="<?=$ADMIN_URL?>?product&act=update"><button>Sửa</button></a>
                        <a href="<?=$ADMIN_URL?>?product&act=del"><button>Xóa</button></a>
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
                        Giày
                    </td>
                    <td>
                        Giày đẹp
                    </td>
                    <td class="hinh">
                        <img src="<?= $CONTENT_URL ?>/imgs/interface/logo.svg" alt="">
                    </td>
                    <td>
                        100k
                    </td>
                    <td>
                        59
                    </td>
                    <td>
                        <a href="<?=$ADMIN_URL?>?product&act=update"><button>Sửa</button></a>
                        <a href="<?=$ADMIN_URL?>?product&act=del"><button>Xóa</button></a>
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
                        Giày
                    </td>
                    <td>
                        Giày đẹp
                    </td>
                    <td class="hinh">
                        <img src="<?= $CONTENT_URL ?>/imgs/interface/logo.svg" alt="">
                    </td>
                    <td>
                        100k
                    </td>
                    <td>
                        59
                    </td>
                    <td>
                        <a href="<?=$ADMIN_URL?>?product&act=update"><button>Sửa</button></a>
                        <a href="<?=$ADMIN_URL?>?product&act=del"><button>Xóa</button></a>
                    </td>
                </tr>

        </tbody>
    </table>
    <button id="select_all">Chọn tất cả</button>
    <button id="unselect_all">Bỏ chọn tất cả</button>
    <button>Xóa các mục đã chọn</button>
    <a href="<?=$ADMIN_URL?>?product&act=add"><button>Nhập thêm</button></a>
</div>

