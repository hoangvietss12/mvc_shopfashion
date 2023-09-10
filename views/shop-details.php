<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion</title>

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

    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic" style="height: 400px; padding: 25px 0 25px; margin-bottom: 40px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb" style="margin-bottom: 0px;">
                            <a href="<?= _WEB_ROOT.'/index.php?controller=home' ?>">Trang chủ</a>
                            <a href="<?= _WEB_ROOT.'/index.php?controller=shop' ?>">Shop</a>
                            <span><?= $product['product_name'] ?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img style="width: 350px; height: 350px;" src="<?= './public/img/product/'.$product['product_img'] ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4><?= $product['product_name'] ?></h4>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <span> - 0 Reviews</span>
                            </div>
                            <h3><?= number_format($product['product_price'], '0', ',', '.').'đ' ?></h3>
                            <p>
                                <?php 
                                    $start = "Thông tin sản phẩm:";
                                    $end = "Chi tiết sản phẩm"; 

                                    $start_position = strpos($product['product_description'], $start) + strlen($start);
                                    $end_position = strpos($product['product_description'], $end);

                                    echo substr($product['product_description'], $start_position, $end_position - $start_position);
                                ?>
                            </p>
                            <div class="product__details__option">
                                <div class="product__details__option__size">
                                    <span>Size:</span>
                                    <label for="xxl">xxl
                                        <input type="radio" id="xxl">
                                    </label>
                                    <label for="xl">xl
                                        <input type="radio" id="xl">
                                    </label>
                                    <label for="l">l
                                        <input type="radio" id="l">
                                    </label>
                                    <label for="sm">s
                                        <input type="radio" id="sm">
                                    </label>
                                </div>
                                <div class="product__details__option__color">
                                    <span>Color:</span>
                                    <label class="c-1" for="sp-1">
                                        <input type="radio" id="sp-1">
                                    </label>
                                    <label class="c-2" for="sp-2">
                                        <input type="radio" id="sp-2">
                                    </label>
                                    <label class="c-3" for="sp-3">
                                        <input type="radio" id="sp-3">
                                    </label>
                                    <label class="c-4" for="sp-4">
                                        <input type="radio" id="sp-4">
                                    </label>
                                    <label class="c-9" for="sp-9">
                                        <input type="radio" id="sp-9">
                                    </label>
                                </div>
                            </div>
                            <div class="product__details__cart__option">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                </div>
                                <a href="<?php echo isset($_SESSION['user_name']) 
                                                    ? _WEB_ROOT.'/index.php?controller=cart&action=store&id='.$product['product_id']
                                                    : _WEB_ROOT.'/index.php?controller=home&action=signin'; 
                                        ?>
                                " class="primary-btn">Thêm vào giỏ hàng </a>
                            </div>
                            <div class="product__details__btns__option">
                                <a href="#"><i class="fa fa-heart"></i> Yêu thích</a>
                                <a href="#"><i class="fa fa-exchange"></i> So sánh</a>
                            </div>
                            <div class="product__details__last__option">
                                <h5><span>Thanh toán an toàn đảm bảo</span></h5>
                                <img src="./public/img/shop-details/details-payment.png" alt="">
                                <ul>
                                    <li><span>Danh mục:</span> <?= $product['category_name'] ?></li>
                                    <li><span>Tags:</span> <?= $product['category_name'] ?>, <?= $product['product_tags'] ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                                    role="tab">Mô tả sản phẩm</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Đánh giá</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Thông tin thêm</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <div class="product__details__tab__content__item">
                                            <h5>Thông tin sản phẩm:</h5>
                                            <p>
                                                <?php 
                                                    $start = "Thông tin sản phẩm:";
                                                    $end = "Chi tiết sản phẩm"; 

                                                    $start_position = strpos($product['product_description'], $start) + strlen($start);
                                                    $end_position = strpos($product['product_description'], $end);

                                                    echo substr($product['product_description'], $start_position, $end_position - $start_position);
                                                ?>
                                            </p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Chi tiết sản phẩm:</h5>
                                            <ul style="padding-left: 15px">
                                                <?php 
                                                    $start = "Chi tiết sản phẩm:"; 
                                                    $start_position = strpos($product['product_description'], $start) + strlen($start);
                                                    $string = substr($product['product_description'], $start_position);

                                                    $arr = explode("- ", $string);
                                                    for($i=1; $i < count($arr); $i++) {
                                                        echo "<li>".$arr[$i]."</li>" . "<br>";
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-6" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <div class="product__details__tab__content__item">

                                        </div>
                                        <div class="product__details__tab__content__item">

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-7" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <div class="product__details__tab__content__item">

                                        </div>
                                        <div class="product__details__tab__content__item">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->

    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Sản phẩm liên quan</h3>
                </div>
            </div>
            <div class="row">
                <?php foreach ($relatedProducts as $relatedProduct): ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix best">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?= './public/img/product/'.$relatedProduct['product_img'] ?>">
                                <a style="width: 100%; height: 100%; display: block;" href="<?= _WEB_ROOT.'/index.php?controller=shop&action=detail&id='.$relatedProduct['product_id'] ?>">
                                        <?php if($relatedProduct['product_tags'] === 'sale'): ?>
                                            <span class="label">Sale</span>
                                        <?php elseif($relatedProduct['product_tags'] === 'best'): ?>
                                            <span class="label">Best</span>
                                        <?php elseif($relatedProduct['product_tags'] === 'new'): ?>
                                            <span class="label">New</span>
                                        <?php endif; ?>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="./public/img/icon/heart.png" alt=""></a></li>
                                        <li><a href="#"><img src="./public/img/icon/compare.png" alt=""> <span>So sánh</span></a></li>
                                        <li><a href="#"><img src="./public/img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </a>
                            </div>
                            <div class="product__item__text">
                                <h6><?= $relatedProduct['product_name'] ?></h6>
                                <a href="<?php echo isset($_SESSION['user_name']) 
                                                    ? _WEB_ROOT.'/index.php?controller=cart&action=store&id='.$relatedProduct['product_id']
                                                    : _WEB_ROOT.'/index.php?controller=home&action=signin'; 
                                        ?>
                                " class="add-cart">+ Thêm vào giỏ hàng</a>
                                <div class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5><?= number_format($relatedProduct['product_price'], '0', ',', '.').'đ' ?></h5>
                                <div class="product__color__select">
                                    <label for="pc-4">
                                        <input type="radio" id="pc-4">
                                    </label>
                                    <label class="active black" for="pc-5">
                                        <input type="radio" id="pc-5">
                                    </label>
                                    <label class="grey" for="pc-6">
                                        <input type="radio" id="pc-6">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Related Section End -->

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
