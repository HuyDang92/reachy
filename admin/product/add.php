
<div class="add__container">
    <h1>Thêm mới sản phẩm</h1>
    <form action="../main/index.php?san_pham&act=add" method='post' enctype="multipart/form-data" class="addloai__form">
        <p>Mã sản phẩm</p>
        <input type="text" disabled class="add_input">
        <p>Tên sản phẩm</p>
        <input type="text" class="add_input">
        <p>Mã loại</p>
        <select id="">

            <option value="">1 - Giày gì gì đấy</option>
            <option value="">2 - Giày gì gì đấy</option>
            
        </select>
        <p>Thương hiệu</p>
        <select id="">

            <option value="">1 - Thương hiệu gì gì đấy</option>
            <option value="">2 - Thương hiệu gì gì đấy</option>
            
        </select>
        <p>Giá</p>
        <input type="number" class="add_input">
        <p>Giảm giá</p>
        <input type="number" class="add_input">
        <p>Ảnh</p>
        <input type="file" class="add_input">
        <p>Ngày nhập</p>
        <input type="date" class="add_input">
        <p>Mô tả ngắn</p>
        <textarea class="add_input" col="30" row="10"></textarea>
        <p>Mô tả dài</p>
        <textarea class="add_input" col="30" row="10"></textarea>
        <p>Nổi bật</p>
        <span>Có</span><input type="radio" id="" value="1" class="noibat"> |
        <span>Không</span><input type="radio" id="" value="0" class="noibat"><br>

        <input type="submit" value="Thêm mới">
        <input type="reset" value="Nhập lại">
        <a href="<?=$ADMIN_URL?>?product&act=list"><input type="button" value="Danh sách"></a>
    </form>
</div>