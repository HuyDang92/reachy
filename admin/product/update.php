
<div class="add__container">
    <h1>Sửa sản phẩm</h1>
    <form action="../main/index.php?san_pham&act=updatesp" method='post' enctype="multipart/form-data" class="addloai__form">
        <p>Mã sản phẩm</p>
        <input type="text" readonly class="add_input" value="">
        <p>Tên sản phẩm</p>
        <input type="text" class="add_input" value="">
        <p>Mã loại</p>
        <select name="maloai" id="">
            
            <option value="">1 - Mã loại gì đấy</option>
            <option value="">1 - Mã loại gì đấy</option>
            
        </select>
        <p>Mã thương hiệu</p>
        <select name="maloai" id="">
            
            <option value="">1 - Thương hiệu 1</option>
            <option value="">1 - Thương hiệu 1</option>
            
        </select>
        <p>Giá</p>
        <input type="number" class="add_input" value="">
        <p>Giảm giá</p>
        <input type="number" class="add_input" value="">
        <p>Ảnh</p>
        <input type="file" class="add_input">
        <p>(tên ảnh cũ)</p>
        <p>Ngày nhập</p>
        <input type="date" class="add_input" value="">
        <p>Mô tả ngắn</p>
        <textarea class="add_input" col="30" row="10"></textarea>
        <p>Mô tả dài</p>
        <textarea class="add_input" col="30" row="10"></textarea>
        <p>Nổi bật</p>
        <span>Có</span><input type="radio" id="" value="1" class="noibat"  > |
        <span>Không</span><input type="radio" id="" value="0" class="noibat" ><br>

        <input type="hidden" value="">
        <input type="submit" value="Thêm mới">
        <input type="reset" value="Nhập lại">
        <a href="<?=$ADMIN_URL?>?product&act=list"><input type="button" value="Danh sách"></a>
    </form>
</div>