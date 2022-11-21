<?php  
    /**
    * Xuất danh sách tin tức
    * @return array  Danh sách tin tức
    */
    function blog_selectAll(){
        $sql = "SELECT * FROM blog";
        return pdo_query($sql);
    }
    /**
    * Xuất tin tức theo mã tin tức
    * @param int $id_blog Mã tin tức
    * @return array Tin tức theo mã tương ứng
    */
    function blog_selectById($id_blog){
        $sql = "SELECT * FROM blog WHERE id_blog = ?";
        return pdo_query_one($sql,$id_blog);
    }
        /**
    * Xóa tin tức theo mã tin tức
    * @param int $id_blog Mã tin tức
    * @return array Tin tức theo mã tương ứng
    */
    function blog_delete($id_blog){
        $sql = "DELETE FROM blog WHERE id_blog = ?";
        pdo_execute($sql,$id_blog);
    }
    /**
    * Lấy ảnh bìa tin tức
    * @param int $id_blog Mã tin tức
    * @return string Ảnh
    */
    function blog_selectFirstImg($id_blog){
        $blog = blog_selectById($id_blog);
        $firstImg = explode("`",$blog['img']);
        return $firstImg[0];
    }
?>