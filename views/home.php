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
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header -->
    <?php require_once './views/default/header.php'; ?>

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="./public/img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Bộ sưu tập mùa hè</h6>
                                <h2>Bộ sưu tập Thu - Đông 2023</h2>
                                <p>Một nhãn hiệu chuyên biệt tạo ra những sản phẩm thiết yếu sang trọng. Được chế tác một cách có đạo đức với sự kiên định cam kết chất lượng vượt trội.</p>
                                <a href="<?php echo _WEB_ROOT.'/index.php?controller=shop'; ?>" class="primary-btn">Mua sắm ngay <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="./public/img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Dành cho tín đồ thời trang</h6>
                                <h2>Thương hiệu thời trang Gucci sale lớn 20%</h2>
                                <p>Gucci là thương hiệu thời trang hàng đầu thế giới với những sản phẩm chất lượng được nhiều người nổi tiếng tin dùng.</p>
                                <a href="<?php echo _WEB_ROOT.'/index.php?controller=shop'; ?>" class="primary-btn">Mua sắm ngay <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <section class="banner spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="./public/img/banner/banner-1.jpg" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Trang phục</h2>
                            <a href="<?php echo _WEB_ROOT.'/index.php?controller=shop'; ?>">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="./public/img/banner/banner-2.jpg" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Phụ kiện</h2>
                            <a href="<?php echo _WEB_ROOT.'/index.php?controller=shop'; ?>">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="./public/img/banner/banner-3.jpg" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Giày dép</h2>
                            <a href="<?php echo _WEB_ROOT.'/index.php?controller=shop'; ?>">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li data-filter=".best">Bán chạy nhất</li>
                        <li data-filter=".new">Hàng mới</li>
                        <li data-filter=".sale">Hàng giảm giá</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                <!-- Tag best -->
                <?php foreach ($productsTagBest as $product): ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix best">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?= './public/img/product/'.$product['product_img'] ?>">
                                <a style="width: 100%; height: 100%; display: block;" href="<?= _WEB_ROOT.'/index.php?controller=shop&action=detail&id='.$product['product_id'] ?>">
                                    <span class="label">Best</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="./public/img/icon/heart.png" alt=""></a></li>
                                        <li><a href="#"><img src="./public/img/icon/compare.png" alt=""> <span>So sánh</span></a></li>
                                        <li><a href="#"><img src="./public/img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </a>
                            </div>
                            <div class="product__item__text">
                                <h6><?= $product['product_name'] ?></h6>
                                <a href="<?php echo isset($_SESSION['user_name']) 
                                                    ? _WEB_ROOT.'/index.php?controller=cart&action=store&id='.$product['product_id']
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
                                <h5><?= number_format($product['product_price'], '0', ',', '.').'đ' ?></h5>
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
                <!-- Tag new -->
                <?php foreach ($productsTagNew as $product): ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?= './public/img/product/'.$product['product_img'] ?>">
                                <a style="width: 100%; height: 100%; display: block;" href="<?= _WEB_ROOT.'/index.php?controller=shop&action=detail&id='.$product['product_id'] ?>">
                                    <span class="label">New</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="./public/img/icon/heart.png" alt=""></a></li>
                                        <li><a href="#"><img src="./public/img/icon/compare.png" alt=""> <span>So sánh</span></a></li>
                                        <li><a href="#"><img src="./public/img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </a>
                            </div>
                            <div class="product__item__text">
                                <h6><?= $product['product_name'] ?></h6>
                                <a href="<?php echo isset($_SESSION['user_name']) 
                                                ? _WEB_ROOT.'/index.php?controller=cart&action=store&id='.$product['product_id']
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
                                <h5><?= number_format($product['product_price'], '0', ',', '.').'đ' ?></h5>
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
                <!-- Tag sale -->
                <?php foreach ($productsTagSale as $product): ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix sale">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?= './public/img/product/'.$product['product_img'] ?>">
                                <a style="width: 100%; height: 100%; display: block;" href="<?= _WEB_ROOT.'/index.php?controller=shop&action=detail&id='.$product['product_id'] ?>">
                                    <span class="label">Sale</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="./public/img/icon/heart.png" alt=""></a></li>
                                        <li><a href="#"><img src="./public/img/icon/compare.png" alt=""> <span>So sánh</span></a></li>
                                        <li><a href="#"><img src="./public/img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </a>
                            </div>
                            <div class="product__item__text">
                                <h6><?= $product['product_name'] ?></h6>
                                <a href="<?php echo isset($_SESSION['user_name']) 
                                                ? _WEB_ROOT.'/index.php?controller=cart&action=store&id='.$product['product_id']
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
                                <h5><?= number_format($product['product_price'], '0', ',', '.').'đ' ?></h5>
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
    <!-- Product Section End -->

    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2>Quần áo chất <br /> <span>Giày hiệu</span> <br /> Phụ kiện VIP</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="./public/img/product-sale.png" alt="">
                        <div class="hot__deal__sticker">
                            <span>Giảm giá</span>
                            <h5>15.000.000đ</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Giá chất mỗi tuần</span>
                        <h2>Túi đeo ngực nhiều túi màu đen</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>3</span>
                                <p>Ngày</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Giờ</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Phút</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Giây</p>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                        <div class="instagram__pic__item set-bg" data-setbg="./public/img/instagram/instagram-1.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="./public/img/instagram/instagram-2.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="./public/img/instagram/instagram-3.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="./public/img/instagram/instagram-4.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="./public/img/instagram/instagram-5.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="./public/img/instagram/instagram-6.jpg"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Instagram</h2>
                        <p>Theo dõi chúng tôi trên Instagram để nắm bắt được xu hướng mới nhất, những sự kiện, giảm giá cực chất mỗi ngày. Theo dõi ngay thôi!</p>
                        <h3>#Male_Fashion</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Tin tức mới nhất</span>
                        <h2>Xu hướng thời trang mới</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="./public/img/blog/blog-1.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="./public/img/icon/calendar.png" alt=""> 16 Tháng Năm 2023</span>
                            <h5>Máy uốn tóc nào là tốt nhất</h5>
                            <a href="#">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="./public/img/blog/blog-2.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="./public/img/icon/calendar.png" alt=""> 21 Tháng Name 2023</span>
                            <h5>Ban nhạc vĩnh cửu tồn tại mãi mãi</h5>
                            <a href="#">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="./public/img/blog/blog-3.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="../public/img/icon/calendar.png" alt=""> 28 Tháng Năm 2023</span>
                            <h5>Lợi ích sức khỏe của kính râm</h5>
                            <a href="#">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

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
