<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    /* tab */
    .tabs {
        padding-right: 2rem;
        width: 22%;
    }

    .tablinks {
        border: none;
        outline: none;
        cursor: pointer;
        padding: 0.8rem 1rem;
        font-size: 13px;
        text-transform: uppercase;
        font-weight: 600;
        transition: 0.2s ease;
        border: 0.5px solid #ccc;
        width: 100%;
    }

    .tablinks:hover {
        background-image: linear-gradient(90deg, var(--blue), var(--green));
        color: #fff;
    }

    .tablinks.active {
        background-image: linear-gradient(90deg, var(--blue), var(--green));
        color: #fff;
    }

    .tabcontent {
        display: none;
    }

    .tabcontent p {
        color: #333;
        font-size: 16px;
    }

    .tabcontent.active {
        display: block;
    }

    .tabcontent h2 {
        text-align: center;
        margin-bottom: 2rem;
    }

    .wrapper_tabcontent {
        width: 80%;
    }

    /* tab order */
    .tabs_order {
        width: 100%;
    }

    .tabs_order .btn_order {
        display: flex;
    }

    .tablinks_order {
        border: none;
        outline: none;
        cursor: pointer;
        padding: 0.8rem 1rem;
        font-size: 13px;
        text-transform: uppercase;
        font-weight: 600;
        transition: 0.2s ease;
        border: 0.5px solid #ccc;
        width: 100%;
    }

    .tablinks_order:hover {
        background-image: linear-gradient(90deg, var(--blue), var(--green));
        color: #fff;
    }

    .tablinks_order.active {
        background-image: linear-gradient(90deg, var(--blue), var(--green));
        color: #fff;
    }

    .tabcontent_order {
        display: none;
    }

    .tabcontent_order p {
        color: #333;
        font-size: 16px;
    }

    .tabcontent_order.active {
        display: block;
    }

    .tabcontent_order h2 {
        text-align: center;
        margin-bottom: 2rem;
    }

    .wrapper_tabcontent_order {
        width: 80%;
    }
    </style>
</head>

<body>
    <div class="tabs">
        <div class="btn__mew-product">
            <button class="tablinks active" data-electronic="info_account">Thông tin tài khoản</button> <br>
            <button class="tablinks" data-electronic="changepw">Đổi mật khẩu</button>
            <button class="tablinks" data-electronic="order">Đơn hàng</button>
        </div>
    </div>
    <div class="wrapper_tabcontent">
        <div id="info_account" class="tabcontent active">
            <h1>1</h1>
        </div>
        <div id="changepw" class="tabcontent">
            <div class="tabs_order">
                <div class="btn_order">
                    <button class="tablinks_order active" data-electronic="order_parking">Chờ xác nhận</button> <br>
                    <button class="tablinks_order" data-electronic="order_delivering">Đang vận chuyển</button>
                    <button class="tablinks_order" data-electronic="order_finish">Đã mua</button>
                    <button class="tablinks_order" data-electronic="order_cancel">Đã hủy</button>
                </div>
            </div>
            <div class="wrapper_tabcontent_order">
                <div id="order_parking" class="tabcontent_order active">
                    <h1>1 test</h1>
                </div>
                <div id="order_delivering" class="tabcontent_order">
                    <h1>2</h1>
                </div>
                <div id="order_finish" class="tabcontent_order">
                    <h1>3</h1>
                </div>
                <div id="order_cancel" class="tabcontent_order">
                    <h1>4</h1>
                </div>
            </div>
        </div>
    </div>
    <script>
    var tabLinks = document.querySelectorAll(".tablinks");
    var tabContent = document.querySelectorAll(".tabcontent");

    tabLinks.forEach(function(el) {
        el.addEventListener("click", openTabs);
    });


    function openTabs(el) {
        var btn = el.currentTarget; // lắng nghe sự kiện và hiển thị các element
        var electronic = btn.dataset.electronic; // lấy giá trị trong data-electronic

        tabContent.forEach(function(el) {
            el.classList.remove("active");
        }); //lặp qua các tab content để remove class active

        tabLinks.forEach(function(el) {
            el.classList.remove("active");
        }); //lặp qua các tab links để remove class active

        document.querySelector("#" + electronic).classList.add("active");
        // trả về phần tử đầu tiên có id="" được add class active

        btn.classList.add("active");
        // các button mà chúng ta click vào sẽ được add class active
    }
    </script>
    <script>
    var tabLinks_order = document.querySelectorAll(".tablinks_order");
    var tabcontent_order = document.querySelectorAll(".tabcontent_order");

    tabLinks_order.forEach(function(el) {
        el.addEventListener("click", openTabs);
    });


    function openTabs(el) {
        var btn = el.currentTarget; // lắng nghe sự kiện và hiển thị các element
        var electronic = btn.dataset.electronic; // lấy giá trị trong data-electronic

        tabcontent_order.forEach(function(el) {
            el.classList.remove("active");
        }); //lặp qua các tab content để remove class active

        tabLinks_order.forEach(function(el) {
            el.classList.remove("active");
        }); //lặp qua các tab links để remove class active

        document.querySelector("#" + electronic).classList.add("active");
        // trả về phần tử đầu tiên có id="" được add class active

        btn.classList.add("active");
        // các button mà chúng ta click vào sẽ được add class active
    }
    </script>
</body>

</html>