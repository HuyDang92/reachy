<?php
session_start();
require '../../global.php';
require_once "../../dao/pdo.php";
require_once "../../dao/user.php";
require_once "../../dao/category.php";
require_once "../../dao/brand.php";
require_once "../../dao/product.php";
require_once "../../dao/comment.php";
require_once "../../dao/cart.php";
if (exist_param("product")) {
    $VIEW_NAME = "product/product-detail.php";
} else if (exist_param("cart")) {
    $VIEW_NAME = "product/cart.php";
} else if (exist_param("buy")) {
    $VIEW_NAME = "product/order.php";
} else {
    $VIEW_NAME = "";
}

require '../layout-overall.php';