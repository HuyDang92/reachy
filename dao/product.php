<?php

/**
 * đếm số lượng Sản phẩm
 */
function product_countAll()
{
    $sql = "SELECT COUNT(id_product) as pd_num FROM product;";
    return pdo_query($sql);
}

/**
 * Xuất toàn bộ sản phẩm
 */
function product_selectAll()
{
    $sql = "SELECT * FROM product";
    return pdo_query($sql);
}
/**
 * Xuất 1 sản phẩm theo mã sản phẩm
 * @param int $id_product Mã sản phẩm
 * @return array Sản phẩm theo mã sản phẩm
 */
function product_selectOne($id_product)
{
    $sql = "SELECT * FROM product WHERE id_product = ?";
    return pdo_query_one($sql, $id_product);
}
/**
 * Xuất tất cả sản phẩm theo mã loại hàng
 * @param int $id_category Mã loại hàng
 * @return array Tất cả sản phẩm theo loại hàng tương ứng
 */
function product_selectAllByIdCategory($id_category)
{
    $sql = "SELECT * FROM product WHERE id_category=?";
    return pdo_query($sql, $id_category);
}
/**
 * Xuất tất cả sản phẩm theo mã thương hiệu
 * @param int $id_brand Mã thương hiệu
 * @return array Tất cả sản phẩm theo mã thương hiệu tương ứng
 */
function product_selectAllByIdBrand($id_brand)
{
    $sql = "SELECT * FROM product WHERE id_brand=?";
    return pdo_query($sql, $id_brand);
}
/**
 * Thêm sản phẩm
 * @param int $id_category Mã loại hàng
 * @param int $id_brand Mã thương hiệu
 * @param string $name Tên sản phẩm
 * @param int $price Giá sản phẩm
 * @param int $sale_off Giảm giá
 * @param int $quantity Số lượng sản phẩm trong kho
 * @param string $feature Đặc trưng sản phẩm
 * @param string $description Mô tả sản phẩm
 */
function product_insert($id_category, $id_brand, $name, $price, $sale_off, $quantity, $feature, $description)
{
    $sql = "INSERT INTO product(id_product,id_category,id_brand,name,price,sale_off,quantity,feature,description) VALUES(NULL,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $id_category, $id_brand, $name, $price, $sale_off, $quantity, $feature, $description);
}
/**
 * Cập nhật thông tin sản phẩm
 * @param int $id_category Mã loại hàng
 * @param int $id_brand Mã thương hiệu
 * @param string $name Tên sản phẩm
 * @param int $price Giá sản phẩm
 * @param int $sale_off Giảm giá
 * @param int $quantity Số lượng sản phẩm trong kho
 * @param string $feature Đặc trưng sản phẩm
 * @param string $description Mô tả sản phẩm
 * @param int $id_product Mã sản phẩm
 */
function product_update($id_category, $id_brand, $name, $price, $sale_off, $quantity, $feature, $description, $id_product)
{
    $sql = "UPDATE product SET id_category=?,id_brand=?,name=?,price=?,sale_off=?,quantity=?,featurn=?,description=? WHERE id_product=?";
    pdo_execute($sql, $id_category, $id_brand, $name, $price, $sale_off, $quantity, $feature, $description, $id_product);
}
/**
 * Xóa sản phẩm
 * @param int $id_product Mã sản phẩm
 */
function product_delete($id_product)
{
    $sql = "DELETE FROM product WHERE id_product=?";
    pdo_execute($sql, $id_product);
}
/**
 * Tăng lượt xem
 * @param int $id_product Mã sản phẩm
 */
function product_view_increase($id_product)
{
    $sql = "UPDATE product views=views+1 WHERE id_product=?";
    pdo_execute($sql, $id_product);
}
/**
 * Giảm số lượng sản phẩm
 * @param int $id_product Mã sản phẩm
 */
function product_quantity_decrease($id_product)
{
    $sql = "UPDATE product quantity=quantity-1 WHERE id_product=?";
    pdo_execute($sql, $id_product);
}
/**
 * Chuyển sản phẩm thành sản phẩm đặc biệt
 * @param int $id_product Mã sản phẩm
 */
function product_specialOn($id_product)
{
    $sql = "UPDATE product special=1 WHERE id_product=?";
    pdo_execute($sql, $id_product);
}
/**
 * Chuyển sản phẩm đặc biệt thành sản phẩm thường
 * @param int $id_product Mã sản phẩm
 */
function product_specialOff($id_product)
{
    $sql = "UPDATE product special=0 WHERE id_product=?";
    pdo_execute($sql, $id_product);
}
/**
 * Xuất tất cả sản phẩm đặc biệt
 * @param int $id_product Mã sản phẩm
 * @return array Sản phẩm đặc biệt
 */
function product_select_special()
{
    $sql = "SELECT * FROM product WHERE special = 1";
    return pdo_query($sql);
}
/**
 * Xuất thông số chi tiết sản phẩm
 * @param int $id_product Mã sản phẩm
 * @return array Thông số chi tiết sản phẩm
 */
function product_select_specification($id_product)
{
    $sql = "SELECT * FROM specification WHERE id_product=?";
    return pdo_query_one($sql, $id_product);
}
/**
 * Xuất ra mảng ảnh của sản phẩm tương ứng
 * @param int $id_product Mã sản phẩm
 * @return array Mảng ảnh
 */
function product_selectArrayImgs($id_product)
{
    $sql = "SELECT * FROM product_img WHERE id_product=?";
    return pdo_query($sql, $id_product);
}
/**
 * Xuất ra mảng ảnh của sản phẩm tương ứng
 * @param int $id_product Mã sản phẩm
 * @return array Mảng ảnh
 */
function product_selectImgs($id_product)
{
    $sql = "SELECT * FROM product_img WHERE id_product=?";
    return pdo_query_one($sql, $id_product);
}
/**
 * Xuất 9 sản phẩm giảm giá cao nhất
 * @return array Mảng 9 phần tử sản phẩm
 */
function product_select_9SaleOff()
{
    $sql = "SELECT * FROM product ORDER BY sale_off desc limit 9";
    return pdo_query($sql);
}
/**
 * Xuất sản phẩm theo từ khóa tìm kiếm
 * @param string $keyword Từ khóa tìm kiếm
 * @return array Danh sách sản phẩm trùng khớp
 */
function product_select_ByKeyWord($keyword)
{
    $sql = "SELECT * FROM product WHERE name LIKE '%?%'";
    return pdo_query($sql, $keyword);
}
/**
 * Xuất 8 sản phẩm được yêu thích nhất
 * @return array 8 sản phẩm
 */
function product_select_8WishList()
{
    $sql = "SELECT * FROM wish_list ORDER BY id_product desc LIMIT 8";
    return pdo_query($sql);
}
/**
 * Xuất 8 sản phẩm mới nhất
 * @return array 8 sản phẩm
 */
function product_select_8DateLasted()
{
    $sql = "SELECT * FROM product where special=0 and not id_category=9 ORDER BY date desc LIMIT 8";
    return pdo_query($sql);
}
/**
 * Xuất tất cả sản phẩm có giảm giá
 * @return array Các sản phẩm đang giảm giá
 */
function product_select_AllSaleOff()
{
    $sql = "SELECT * FROM product WHERE sale_off = 20 ";
    return pdo_query($sql);
}
/**
 * Xuất danh sách slide trang chủ
 * @return array Danh sách slide
 */
function product_selectAllSlide()
{
    $sql = "SELECT * FROM slider";
    return pdo_query($sql);
}