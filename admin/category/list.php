<?php
    $loai = category_selectAll();
?>
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
        <?php foreach($loai as $l){
                extract($l)?>
                <tr>
                    <td>
                        <input class="list__checkbox" type="checkbox">
                    </td>
                    <td>
                        <?=$id_category?>
                    </td>
                    <td>
                        <?=$name?>
                    </td>
                    <td>
                        <a href="<?=$ADMIN_URL?>?category&act=update&id=<?=$id_category?>"><button>Sửa</button></a>
                        <a href="<?=$ADMIN_URL?>?category&act=del&id=<?=$id_category?>"><button>Xóa</button></a>    
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
    <button id="select_all">Chọn tất cả</button>
    <button id="unselect_all">Bỏ chọn tất cả</button>
    <button>Xóa các mục đã chọn</button>
    <a href="<?=$ADMIN_URL?>?category&act=add"><button>Nhập thêm</button></a>
</div>

