<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="./public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="./public/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="./public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="./public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="./public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="./public/css/style.css" type="text/css">
    <link rel="icon" href="./public/img/favicon.ico" type="image/x-icon">
</head>

<body>
    <?php require_once './views/default/header.php'; ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Giỏ hàng</h4>
                        <div class="breadcrumb__links">
                            <a href="<?php echo _WEB_ROOT.'/index.php?controller=home'; ?>">Trang chủ</a>
                            <a href="<?php echo _WEB_ROOT.'/index.php?controller=shop'; ?>">Shop</a>
                            <span>Giỏ hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <?php if($products == []): ?>
                <p style="font-size: 20px; text-align: center;">Không có sản phẩm nào</p>
            <?php else: ?>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="shopping__cart__table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Tổng tiền</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($products as $product): ?>
                                        <tr>
                                            <td class="product__cart__item">
                                                <a href="<?= _WEB_ROOT.'/index.php?controller=shop&action=detail' ?>">
                                                    <div class="product__cart__item__pic">
                                                        <img style="width: 90px; height: 90px;" src="./public/img/product/<?= $product['product_img'] ?>" alt="">
                                                    </div>
                                                    <div class="product__cart__item__text">
                                                        <h6><?= $product['product_name'] ?></h6>
                                                        <h5><?= number_format($product['product_price'], '0', ',', '.').'đ' ?></h5>
                                                </div>
                                                </a>
                                            </td>
                                            <td class="quantity__item">
                                                <div class="quantity">
                                                    <div class="pro-qty-2">
                                                        <input type="text" value="<?= $product['qty'] ?>">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart__price"><?= number_format($product['qty']*$product['product_price'], '0', ',', '.').'đ' ?></td>
                                            <td class="cart__close"><a href="<?php echo _WEB_ROOT.'/index.php?controller=cart&action=remove&id='.$product['product_id']; ?>"><i class="fa fa-close"></a></i></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="continue__btn">
                                    <a href="<?php echo _WEB_ROOT.'/index.php?controller=shop'; ?>">Tiếp tục mua hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart__discount">
                            <h6>Nhập mã giảm giá</h6>
                            <form action="#">
                                <input type="text" placeholder="Coupon code">
                                <button type="submit">Áp dụng</button>
                            </form>
                        </div>
                        <div class="cart__total">
                            <h6>Tổng đơn hàng</h6>
                            <ul>
                                <li>Tổng cộng <span><?= number_format($total, '0', ',', '.').'đ' ?></span></li>
                                <li>Thanh toán <span><?= number_format($total, '0', ',', '.').'đ' ?></span></li>
                            </ul>
                            <a href="#" class="primary-btn">Đặt hàng</a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    <?php require_once './views/default/footer.php'; ?>
    <?php require_once './views/default/search.php'; ?>

    <!-- Js Plugins -->
    <script src="./public/js/jquery-3.3.1.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.nice-select.min.js"></script>
    <script src="./public/js/jquery.nicescroll.min.js"></script>
    <script src="./public/js/jquery.magnific-popup.min.js"></script>
    <script src="./public/js/jquery.countdown.min.js"></script>
    <script src="./public/js/jquery.slicknav.js"></script>
    <script src="./public/js/mixitup.min.js"></script>
    <script src="./public/js/owl.carousel.min.js"></script>
    <script src="./public/js/main.js"></script>
</body>
