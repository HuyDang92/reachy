<?php
    if(isset($_GET['id'])){
        $id_product = $_GET['id'];
        $comment = comment_selectById($id_product);
        $comment_export = comment_exportById($id_product);
        if(count($comment_export)>0){
            $product_name = product_selectOne($comment['id_product']);
            $user__name = user_selectById($comment['id_user']);
        }        
    }
?>
<div class="list__container">
    <h1 class="list__heading">Quản lý bình luận</h1>
    <?php
        if(count($comment_export)>0){?>
            <p>Tên sản phẩm: <?=$product_name["name"]?></p>
            <table border="1">
                <thead>
                    <tr>
                        <th colspan="2">Mã bình luận</th>
                        <th>Khách hàng</th>
                        <th>Ngày bình luận</th>
                        <th>Nội dung</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($comment_export as $cmt){?>
                    <tr>
                        <td>
                            <input class="list__checkbox" type="checkbox">
                        </td>
                        <td>
                            <?=$cmt['id_comment']?>
                        </td>
                        <td>
                            <?=$user__name['name']?>
                        </td>
                        <td >
                            <?=$cmt['date']?>
                        </td>
                        <td>
                            <?=$cmt['content']?>
                        </td>
                        <td class="list__action--container">
                            <div class="list__action">
                                <a href="<?=$ADMIN_URL?>?comment&act=del&id=<?=$id_product?>&id_cmt=<?=$cmt['id_comment']?>"><button>Xóa</button></a>
                            </div>
                        </td>
                    </tr>
                    
                    <?php }?>
                </tbody>
            </table>
            <button id="select_all">Chọn tất cả</button>
            <button id="unselect_all">Bỏ chọn tất cả</button>
            <button>Xóa các mục đã chọn</button>
        <?php }else{
            echo '<p style="margin-top: 20px"> Không có bình luận nào cho sản phẩm này</p>';
        }
    ?>
</div>

