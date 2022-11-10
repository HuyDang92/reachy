<?php
require '../global.php';

if (exist_param("category")) {
    $VIEW_NAME = "category/index.php";
} else if (exist_param("product")) {
    $VIEW_NAME = "product/index.php";
} else if (exist_param("comment")) {
    $VIEW_NAME = "comment/index.php";
} else if (exist_param("user")) {
    $VIEW_NAME = "user/index.php";
} else if (exist_param("stastitic")) {
    $VIEW_NAME = "stastitic/index.php";
} else {
    $VIEW_NAME = "layout/main-admin.php";
}

require 'layout-overall.php';