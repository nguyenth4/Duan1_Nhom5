<!DOCTYPE html>
<html lang="en">

<head>
    <title>Waggy - Free eCommerce Pet Shop HTML Website Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="assets/client/css/vendor.css">
<link rel="stylesheet" type="text/css" href="assets/client/style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Montserrat:wght@300;400;500&display=swap"
    rel="stylesheet">

</head>

<body>
    <section class="cart-section">
        <link rel="stylesheet" href="assets/client/css/cart.css">
        <div class="container">

            <h1 class="cart-title">Giỏ hàng</h1>

            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Hình ảnh</th>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng</th>
                        <th>Xóa</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><img src="img/chair1.png" class="cart-img"></td>
                        <td>Kính Mắt 1</td>
                        <td>49.000đ</td>
                        <td>
                            <div class="qty-box">
                                <button>-</button>
                                <input type="text" value="1">
                                <button>+</button>
                            </div>
                        </td>
                        <td>49.000đ</td>
                        <td class="remove">x</td>
                    </tr>

                    <tr>
                        <td><img src="img/chair2.png" class="cart-img"></td>
                        <td>Kính Mắt 2</td>
                        <td>49.000đ</td>
                        <td>
                            <div class="qty-box">
                                <button>-</button>
                                <input type="text" value="1">
                                <button>+</button>
                            </div>
                        </td>
                        <td>49.000đ</td>
                        <td class="remove">x</td>
                    </tr>

                </tbody>
            </table>

            <div class="cart-actions">
                <button class="btn-dark">Cập nhật giỏ hàng</button>
                <button class="btn-dark">Tiếp tục mua sắm</button>
            </div>

            <div class="cart-bottom">

                <div class="coupon-box">
                    <h3>Mã giảm giá</h3>
                    <p>Nhập mã giảm giá nếu bạn có.</p>

                    <div class="coupon-input">
                        <input type="text" placeholder="Nhập mã giảm giá">
                        <button class="btn-dark">Áp dụng mã</button>
                    </div>
                </div>

                <div class="cart-totals">
                    <h3>TỔNG GIỎ HÀNG</h3>

                    <ul>
                        <li>
                            <span>Tạm tính</span>
                            <span class="bold">230.000đ</span>
                        </li>
                        <li>
                            <span>Tổng cộng</span>
                            <span class="bold">230.000đ</span>
                        </li>
                    </ul>

                    <button class="btn-checkout">Tiến hành thanh toán</button>
                </div>

            </div>

        </div>
    </section>

    <script src="assets/client/js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="assets/client/js/plugins.js"></script>
    <script src="assets/client/js/script.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    
</body>

</html>