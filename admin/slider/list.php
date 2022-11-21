<?php
    $slide = slider_selectAll();
?>
<div class="list__container">
    <h1 class="list__heading">Danh sách Slider</h1>
    <table border="1">
        <thead>
            <tr>
                <th colspan="2">Mã slider</th>
                <th>Tiêu đề</th>
                <th>Loại</th>
                <th>Thương hiệu</th>
                <th>Ảnh</th>
                <th>Nội dung</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($slide as $s){
                extract($s)?>
                <tr>
                    <td>
                        <input class="list__checkbox" type="checkbox">
                    </td>
                    <td>
                        <?=$id_slide?>
                    </td>
                    <td>
                        <?=$title?>
                    </td>
                    <td>
                        <?php
                            $cate_name = category_selectOne($id_category);
                            echo $cate_name['name'];
                        ?>
                    </td>
                    <td>
                        <?php
                            $brand_name = brand_selectOne($id_brand);
                            echo $brand_name['name'];
                        ?>
                    </td>
                    <td class="hinh">
                        <img src="<?=$CONTENT_URL?>/imgs/interface/<?=$img?>" alt="">
                    </td>
                    <td>
                        <?=$content?>
                    </td>
                    
                    <td class="list__action--container">
                        <div class="list__action">
                        <a href="<?=$ADMIN_URL?>?slider&act=update&id=<?=$id_slide?>"><button>Sửa</button></a>
                        <a href="<?=$ADMIN_URL?>?slider&act=del&id=<?=$id_slide?>"><button>Xóa</button></a>
                        </div>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
    <button id="select_all">Chọn tất cả</button>
    <button id="unselect_all">Bỏ chọn tất cả</button>
    <button>Xóa các mục đã chọn</button>
    <a href="<?=$ADMIN_URL?>?slider&act=add"><button>Nhập thêm</button></a>
</div>

