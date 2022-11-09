<?php
// Định nghĩa các url cần thiết được sử dụng trong website
$ROOT_URL = "/reachy"; //đường dẫn gốc của website
$CONTENT_URL = "$ROOT_URL/content"; //đường dẫn chứa tài nguyên tĩnh (img, css, js)
$DAO_URL = "$ROOT_URL/dao"; //đường dẫn chứa tài nguyên tĩnh (img, css, js)
$ADMIN_URL = "$ROOT_URL/admin"; //đường dẫn vào phần quản trị
$SITE_URL = "$ROOT_URL/site"; //đường dẫn vào ohần site
// đường dẫn chứa hình khi upload
$IMAGE_DIR = $_SERVER["DOCUMENT_ROOT"] . "/content/images";

// 2 biến toàn cục để chia sẻ giữa controller và view
$VIEW_NAME = "index.php";
$MESSAGE = "";
//Kiểm tra sự tồn tại của 1 tham số trong request, trả về true nếu tồn tại
function exist_param($fieldname)
{
    return array_key_exists($fieldname, $_REQUEST);
}
/* Lưu file upload vào folder
        * $fieldname là tên field trong form, $target_dir là folder lưu file
        * trả về tên file đã upload
        */
function save_file($fieldname, $target_dir)
{
    $file_uploaded = $_FILES[$fieldname];
    $file_name = basename($file_uploaded["name"]);
    $target_path = $target_dir . $file_name;
    move_uploaded_file($file_uploaded["tmp_name"], $target_path);
    return $file_name;
}
/* Tạo cookie
        * $name là tên cookie, $value là giá trị cookie
        * $day là số ngày tồn tại cookie
        */
function add_cookie($name, $value, $day)
{
    setcookie($name, $value, time() + (86400 * $day), "/");
}
/* Xóa cookie, $name là tên cookie muốn xóa
        */
function delete_cookie($name)
{
    add_cookie($name, "", -1);
}
/* Đọc giá trị cookie
        * $name là tên cookie, trả vể giá trị của cookie
        */
function get_cookie($name)
{
    return $_COOKIE[$name] ?? '';
}
/**
 * Tạo session
 */
function add_session($name, $value)
{
    $_SESSION[$name] = $value;
}
/*
        * Tạo mã xác nhận ngẫu nhiên và gửi mã về email đầu vào
        */
function sendEmail($emailAddress)
{
    $CONTENT_URL = $GLOBALS['CONTENT_URL'];
    $code = rand(1000, 10000);
    $mail__content = file_get_contents("$CONTENT_URL/doc/send-mail.txt");
    $mail__content = str_replace('{code}', $code, $mail__content);
    require "$CONTENT_URL/PHPMailer/src/Exception.php";
    require "$CONTENT_URL/PHPMailer/src/SMTP.php";
    require "$CONTENT_URL/PHPMailer/src/PHPMailer.php";
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    try {
        $mail->IsSMTP(); // enable SMTP
        // $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
        $mail->CharSet = "utf-8";
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = "reachy432@gmail.com";
        $mail->Password = "qrqlcdfwmguahvzy";
        $mail->SetFrom("nguyenthanhtai0371@gmail.com");
        $mail->Subject = "Electech xác nhận email của bạn: "; //Tiêu đề
        $mail->Body =  $mail__content;
        $mail->AddAddress("$emailAddress");
        $mail->Send();
        return $code;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}