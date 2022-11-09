<div class="add__container">
    <h1>Cập nhật loại hàng</h1>
    <form action="" method='post' class="addloai__form">
        <p>Mã loại</p>
        <input type="text" readonly class="add_input" value="">
        <p>Tên loại</p>
        <input type="text" class="add_input" autofocus ><br>
        <input type="hidden" value="">
        <input type="submit" value="Cập nhật">
        <input type="reset" value="Nhập lại">
        <a href="<?=$ADMIN_URL?>?category&act=list"><input type="button" value="Danh sách"></a>
    </form>
</div>