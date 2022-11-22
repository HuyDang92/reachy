<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- css -->
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/root.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/site_css/order.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/site_css/form.css">

</head>
<?php
$user_order = user_selectById($_SESSION['login']);
?>

<body>

    <div class="container-order">
        <div class="order-left">
            <h4 style="margin: 0;">THÔNG TIN GIAO HÀNG</h4>
            <!-- <span style="margin-bottom: 1rem;">Bạn có tài khoản
                <a style="color: darkturquoise;" href="<?= $SITE_URL ?>/user?sign_in">
                    Đăng nhập
                </a>
            </span> -->
            <form action="">
                <span>Họ và tên</span> <br>
                <input type="text" name="" id="" value="<?= $user_order['name'] ?>" readonly> <br>
                <div class="box-flex">
                    <label style="margin-right: 0.5rem; width: 70%;">
                        <span>Email</span> <br>
                        <input type="text" name="" value="<?= $user_order['email'] ?>" readonly>
                    </label>
                    <label>
                        <span>Số điện thoại</span> <br>
                        <input type="text" name="" value="<?= $user_order['phone_number'] ?>" readonly>
                    </label>
                </div>
                <div class="deliver">
                    <!-- <input type="radio" name="ship" id="home">
                    <label for="home">Giao tận nơi</label> -->
                    <div class="home">
                        <span>Địa chỉ</span> <br>
                        <input type="text" name="" id="" placeholder="VD: Tên đường, số nhà...">
                        <div class="box-flex">
                            <select name="" id="city" aria-label=".form-select-sm">
                                <option value="">Chọn tỉnh / thành</option>
                            </select>
                            <select name="" id="district" aria-label=".form-select-sm">
                                <option value="">Chọn quận / huyện</option>
                            </select>
                            <select name="" id="ward" aria-label=".form-select-sm">
                                <option value="">Chọn phường / xã</option>
                            </select>
                        </div>
                    </div>
                    <!-- <input type="radio" name="ship" id="shop">
                    <label for="shop">Nhận tại shop</label>
                    <div class="shop">
                        <select name="" id="">
                            <option value="">Chọn tỉnh / thành</option>
                        </select>
                        <input type="radio" name="" id="branch" placeholder="Chi nhánh còn hàng">
                        <label for="branch">HCM</label>
                    </div> -->
                </div>
                <span>Ghi chú</span> <br>
                <div class="cart-note">
                    <textarea name="" id="" cols="30" rows="5"
                        placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn giao hàng chi tiết hơn."></textarea>
                    <!-- <ul style="width: 50%;" class="note-right">
                        <strong>Chính sách đổi trả</strong>
                        <li>Sản phẩm được hỗ trợ đổi size trong vòng 3 ngày</li>
                        <li>Sản phẩm còn đủ tem mác, chưa qua sử dụng</li>
                        <li>Đối với khách hàng ở tỉnh ngoài HCM sản phẩm được đổi size trong 7 ngày kể từ ngày nhận</li>
                        <li>Liên hệ: 09xxxxxxxx để được hỗ trợ nhanh nhất ạ</li>
                    </ul> -->
                </div>
            </form>
        </div>
        <div class="order-right">
            <h4 style="margin: 0 0 1rem 0;">ĐƠN HÀNG CỦA BẠN</h4>
            <div class="bill">
                <ul class="product-rows">
                    <li class="product-row">
                        <div class="product-row-left">
                            <div class="pd-thumbal">
                                <img src="<?= $CONTENT_URL ?>/imgs/products/293e08e8-e661-4010-b852-e65b2d7db7e5.webp"
                                    alt="">
                                <span class="amount">1</span>
                            </div>
                            <div style="margin: 0 0 0.5rem 0.5rem;" class="pd-info">
                                <p style="margin-top: 0;">Name product</p>
                                <span style="font-size: 15px; color: #ccc;">Size 40</span>
                            </div>
                        </div>
                        <div class="pd-price">
                            <span>1,000,000đ</span>
                        </div>
                    </li>
                </ul>
                <div class="code-discount">
                    <input type="text" name="" id="" placeholder="Mã giảm giá">
                    <button>Sử dụng</button>
                </div>
                <div class="bill-total">
                    <div style="margin-bottom: 0.5rem;" class="price-pd">Tạm tính <span>1,000,000đ</span></div>
                    <div class="price-pd">Phí vận chuyển <span>30,000đ</span></div>
                </div>
                <div class="price-total">
                    <span>Tổng cộng</span>
                    <h2>1,000,000đ</h2>
                </div>
                <form class="payment" action="">
                    <div class="pay-row">
                        <input type="radio" name="payment" id="cash" checked>
                        <label for="cash">Trả tiền mặt khi nhận hàng</label>
                    </div>
                    <div style="display: block;" class="pay-row">
                        <input type="radio" name="payment" id="card">
                        <label for="card">Chuyển khoản ngân hàng</label> <br>
                        <p>Thực hiện thanh toán vào ngay tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng Mã đơn hàng
                            của bạn trong phần Nội dung thanh toán. Đơn hàng sẽ đươc giao sau khi tiền đã chuyển.</p>
                    </div>
                    <div class="pay-row">
                        <input type="radio" name="payment" id="momo">
                        <label for="momo">Quét mã MoMo</label>
                        <img src="<?= $CONTENT_URL ?>/imgs/momo 1.svg" alt="">
                    </div>
                    <div class="pay-row">
                        <input type="radio" name="payment" id="zalo">
                        <label for="zalo">Quét mã ZaloPay</label>
                        <img src="<?= $CONTENT_URL ?>/imgs/zaloPay 1.svg" alt="">

                    </div>
                    <div class="pay-row">
                        <input type="radio" name="payment" id="viettel">
                        <label for="viettel">Quét mã ViettelPay</label>
                        <img src="<?= $CONTENT_URL ?>/imgs/viettel 1.svg" alt="">

                    </div>
                    <div style="margin-top: 1rem; display: flex;" class="agree">
                        <input style="margin-right: 0.5rem;" type="checkbox" id="agree">
                        <label for="agree">Tôi đã đọc và
                            đồng ý với điều khoản và
                            điều kiện của
                            website</label>
                    </div>
                </form>
            </div>

            <a href="">
                <button type="submit">
                    <div class="btn_submit">
                        <div style="width: 10rem; margin: 1rem 0; " class="btn_submit-border">
                            ĐẶT HÀNG
                            <span></span><span></span><span></span><span></span>
                        </div>
                    </div>
                </button>
            </a>
            <p style="color: #bbbbbb;">Thông tin cá nhân của bạn sẽ được sử dụng để xử lý đơn hàng, tăng trải nghiệm sử
                dụng website, và cho các
                mục đích cụ thể khác đã được mô tả trong chính sách riêng tư của chúng tôi.</p>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
    var citis = document.getElementById("city");
    var districts = document.getElementById("district");
    var wards = document.getElementById("ward");
    var Parameter = {
        url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
        method: "GET",
        responseType: "application/json",
    };
    var promise = axios(Parameter);
    promise.then(function(result) {
        nderCity(result.data);
    });

    function renderCity(data) {
        for (const x of data) {
            citis.options[citis.options.length] = new Option(x.Name, x.Id);
        }
        citis.onchange = function() {
            district.length = 1;
            ward.length = 1;
            if (this.value != "") {
                const result = data.filter(n => n.Id === this.value);

                for (const k of result[0].Districts) {
                    district.options[district.options.length] = new Option(k.Name, k.Id);
                }
            }
        };
        district.onchange = function() {
            ward.length = 1;
            const dataCity = data.filter((n) => n.Id === citis.value);
            if (this.value != "") {
                const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                for (const w of dataWards) {
                    wards.options[wards.options.length] = new Option(w.Name, w.Id);
                }
            }
        };
    }
    </script>

</body>

</html>