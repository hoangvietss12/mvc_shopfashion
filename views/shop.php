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
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header -->
    <?php require_once './views/default/header.php'; ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="<?php echo _WEB_ROOT.'/index.php?controller=home'; ?>">Trang chủ</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <!-- Search -->
                        <div class="shop__sidebar__search">
                            <form action="<?php echo _WEB_ROOT.'/index.php?controller=shop&action=search'; ?>" method="POST">
                                <input type="text" placeholder="Tìm kiếm..." name="keyword" value="<?= $keyword ?? '' ?>">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>

                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Danh mục</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    <?php foreach($categories as $category): ?>
                                                        <li><a href="<?php echo _WEB_ROOT.'/index.php?controller=shop&action=show&category='.$category['category_name']; ?>"><?= $category['category_name'] ?></a></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo">Nhãn hiệu</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__brand">
                                                <ul>
                                                    <?php foreach($brands as $brand): ?>
                                                        <li><a href="<?php echo _WEB_ROOT.'/index.php?controller=shop&action=show&brand='.$brand['vendor_name']; ?>"><?= $brand['vendor_name'] ?></a></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseThree">Giá</a>
                                    </div>
                                    <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__price">
                                                <ul>
                                                    <?php foreach($prices as $price): ?>
                                                        <li><a href="<?php echo _WEB_ROOT.'/index.php?controller=shop&action=show&price='.$price; ?>"><?= $price ?></a></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseFour">Kích cỡ</a>
                                    </div>
                                    <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__size">
                                                <?php foreach($sizes as $size): ?>
                                                    <label for="<?= $size['size_name'] ?>"><?= $size['size_name'] ?>
                                                        <input type="radio" id="<?= $size['size_name'] ?>">
                                                    </label>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <?php if(isset($products) && (isset($_GET['category']) || isset($_GET['brand']) || isset($_GET['price']) || isset($keyword))): ?>
                                        <p>Tất cả sản phẩm "<strong><?= $_GET['category'] ?? $_GET['brand'] ?? $_GET['price'] ?? $keyword ?></strong>"</p>
                                    <?php elseif(isset($products)): ?>
                                        <p>Tất cả sản phẩm</p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- Sorted price products -->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <div class="align-items-center d-flex">
                                        <p class="mr-2">Sắp xếp theo giá:</p>
                                        <form action="<?php echo _WEB_ROOT.'/index.php?controller=shop&action=show'; ?>" method="post" style="margin: 0;">
                                            <div class="d-flex align-items-center">
                                                <select name="option">
                                                    <option value="">Chọn</option>
                                                    <option value="desc">Cao đến thấp</option>
                                                    <option value="asc">Thấp đến cao</option>
                                                </select>
                                                <input type="submit" value="OK" class="btn btn-dark">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Show products -->
                    <div class="row">
                        <?php if(empty($products)): ?>
                            <p style="font-size: 20px; margin: auto;">Không có sản phẩm nào</p>
                        <?php else: ?>
                            <?php foreach($products as $product): ?>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="<?= './public/img/product/'.$product['product_img'] ?>">
                                            <a style="width: 100%; height: 100%; display: block;" href="<?= _WEB_ROOT.'/index.php?controller=shop&action=detail&id='.$product['product_id'] ?>">
                                                <?php if($product['product_tags'] === 'sale'): ?>
                                                    <span class="label">Sale</span>
                                                <?php elseif($product['product_tags'] === 'best'): ?>
                                                    <span class="label">Best</span>
                                                <?php elseif($product['product_tags'] === 'new'): ?>
                                                    <span class="label">New</span>
                                                <?php endif; ?>
                                                <ul class="product__hover">
                                                    <li><a href="#"><img src="./public/img/icon/heart.png" alt=""></a></li>
                                                    <li><a href="#"><img src="./public/img/icon/compare.png" alt=""> <span>So sánh</span></a>
                                                    </li>
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
                                                <label for="pc-40">
                                                    <input type="radio" id="pc-40">
                                                </label>
                                                <label class="active black" for="pc-41">
                                                    <input type="radio" id="pc-41">
                                                </label>
                                                <label class="grey" for="pc-42">
                                                    <input type="radio" id="pc-42">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                                <?php if(empty($product)): ?>

                                <?php else: ?>
                                    <a  
                                    class="active"
                                    href="<?php
                                            if (isset($_GET['action'])) {
                                                $params = $_GET;
                                                unset($params['action'], $params['controller']);
                                                echo _WEB_ROOT."/index.php?controller=shop&action=show".'&'.http_build_query($params);
                                            } else {
                                                echo _WEB_ROOT."/index.php?controller=shop" ;
                                            }
                                        ?>"
                                    ><<</a>
                                    <?php if($current_page >= 1 && $current_page < 3 && $pages > 3): ?>
                                        <?php for($i=1; $i <= 3; $i++): ?>
                                            <a  
                                                class="<?php if($current_page == $i){echo 'active__page';} ?>"
                                                href="<?php
                                                    if (isset($_GET['action'])) {
                                                        $params = $_GET;
                                                        unset($params['action'], $params['controller']);
                                                        echo _WEB_ROOT."/index.php?controller=shop&action=show&".http_build_query($params)."&page=$i";
                                                        } else {
                                                        echo _WEB_ROOT."/index.php?controller=shop&page=$i";
                                                        }
                                                    ?>"
                                            >
                                            <?= $i ?></a>
                                        <?php endfor; ?>
                                        <span>...</span>
                                    <?php elseif($current_page >= ($pages-2) && $current_page <= $pages && $pages > 3): ?>
                                        <span>...</span>
                                        <?php for($i=($pages-2); $i <= $pages; $i++): ?>
                                            <a  
                                                class="<?php if($current_page == $i){echo 'active__page';} ?>"
                                                href="<?php
                                                    if (isset($_GET['action'])) {
                                                        $params = $_GET;
                                                        unset($params['action'], $params['controller']);
                                                        echo _WEB_ROOT."/index.php?controller=shop&action=show&".http_build_query($params)."&page=$i";
                                                        } else {
                                                        echo _WEB_ROOT."/index.php?controller=shop&page=$i" ;
                                                        }
                                                    ?>"
                                            >
                                            <?= $i ?></a>
                                        <?php endfor; ?>
                                    <?php else: ?>
                                        <?php if($pages > 3): ?>
                                            <span>...</span>
                                            <?php for($i=($current_page-1); $i <= ($current_page+1); $i++): ?>
                                            <a  
                                                class="<?php if($current_page == $i){echo 'active__page';} ?>"
                                                href="<?php
                                                    if (isset($_GET['action'])) {
                                                        $params = $_GET;
                                                        unset($params['action'], $params['controller']);
                                                        echo _WEB_ROOT."/index.php?controller=shop&action=show&".http_build_query($params)."&page=$i";
                                                        } else {
                                                        echo _WEB_ROOT."/index.php?controller=shop&page=$i" ;
                                                        }
                                                    ?>"
                                            >
                                            <?= $i ?></a>
                                            <?php endfor; ?>
                                            <span>...</span>
                                        <?php else: ?>
                                            <?php for($i=1; $i <= $pages; $i++): ?>
                                            <a  
                                                class="<?php if($current_page == $i){echo 'active__page';} ?>"
                                                href="<?php
                                                    if (isset($_GET['action'])) {
                                                        $params = $_GET;
                                                        unset($params['action'], $params['controller']);
                                                        echo _WEB_ROOT."/index.php?controller=shop&action=show&".http_build_query($params)."&page=$i";
                                                        } else {
                                                        echo _WEB_ROOT."/index.php?controller=shop&page=$i" ;
                                                        }
                                                    ?>"
                                            >
                                            <?= $i ?></a>
                                        <?php endfor; ?>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <a  
                                        class="active"
                                        href="<?php
                                                    if (isset($_GET['action'])) {
                                                    $params = $_GET;
                                                    unset($params['action'], $params['controller']);
                                                    echo _WEB_ROOT."/index.php?controller=shop&action=show&".http_build_query($params)."&page=$pages";
                                                    } else {
                                                    echo _WEB_ROOT."/index.php?controller=shop&page=$pages" ;
                                                    }
                                                ?>"
                                    >>></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

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
