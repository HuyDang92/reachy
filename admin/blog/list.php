<?php
    $blog = blog_selectAll();
?>
<div class="list__container">
    <h1 class="list__heading">Danh sách Blog</h1>
    <table border="1">
        <thead>
            <tr>
                <th colspan="2">Mã blog</th>
                <th>Tiêu đề</th>
                <th>Ngày đăng</th>
                <th>Ảnh</th>
                <th>Nội dung</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($blog as $bl){
                extract($bl)?>
                <tr>
                    <td>
                        <input class="list__checkbox" type="checkbox">
                    </td>
                    <td>
                        <?=$id_blog?>
                    </td>
                    <td>
                        <?=$title?>
                    </td>
                    <td>
                        <?=$date?>
                    </td>
                    <td class="hinh">
                        <img src="<?= $CONTENT_URL ?>/imgs/blogs/<?= blog_selectFirstImg($id_blog) ?> "
                            alt="" width="100%">
                    </td>
                    <td>
                        <textarea name="" id="" cols="30" rows="10" readonly style="border: none; witdh: 100%; background-color: #F8F9FF"><?=$content?></textarea>
                        
                    </td>
                    
                    <td class="list__action--container">
                        <div class="list__action">
                        <a href="<?=$ADMIN_URL?>?blog&act=update&id=<?=$id_blog?>"><button>Sửa</button></a>
                        <a href="<?=$ADMIN_URL?>?blog&act=del&id=<?=$id_blog?>"><button>Xóa</button></a>
                        </div>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
    <button id="select_all"  class="admin_btn">Chọn tất cả</button>
    <button id="unselect_all" class="admin_btn">Bỏ chọn tất cả</button>
    <button class="admin_btn">Xóa các mục đã chọn</button>
    <a href="<?=$ADMIN_URL?>?blog&act=add" class="admin_btn"><button>Nhập thêm</button></a>
</div>

