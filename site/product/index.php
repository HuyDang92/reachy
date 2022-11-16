<?php
session_start();
require '../../global.php';
require_once "../../dao/pdo.php";
require_once "../../dao/user.php";
require_once "../../dao/category.php";
require_once "../../dao/brand.php";
require_once "../../dao/product.php";
require_once "../../dao/comment.php";
if (exist_param("contact")) {
    $VIEW_NAME = "homepage/contact.php";
} else if (exist_param("product")) {
    $VIEW_NAME = "product/product-detail.php";
} else {
    $VIEW_NAME = "";
}

require '../layout-overall.php';