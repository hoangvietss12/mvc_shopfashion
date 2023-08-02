    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <?php if(isset($_SESSION['user_name'])) : ?>
                    <a href="<?php echo _WEB_ROOT.'/index.php?controller=home&action=logout'; ?>">Đăng xuất</a>
                <?php else : ?>
                    <a href="<?php echo _WEB_ROOT.'/index.php?controller=home&action=signin'; ?>">Đăng nhập</a>
                    <a href="<?php echo _WEB_ROOT.'/index.php?controller=home&action=signup'; ?>">Đăng ký</a>
                    <a href="#">Hỏi đáp</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="./public/img/icon/search.png" alt=""></a>
            <a href="#"><img src="./public/img/icon/heart.png" alt=""></a>
            <a href="<?= isset($_SESSION['user_name']) ? _WEB_ROOT.'/index.php?controller=cart' : _WEB_ROOT.'/index.php?controller=home&action=signin' ?>"><img src="./public/img/icon/cart.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <?php if(isset($_SESSION['user_name'])) : ?>
                <p>Xin chào, <?= $_SESSION['user_name']; ?></p>
            <?php else : ?>
                <p>Đăng ký để trải nghiệm 30 ngày freeship!</p>
            <?php endif; ?>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <?php if(isset($_SESSION['user_name'])) : ?>
                                <p>Xin chào, <?= $_SESSION['user_name']; ?></p>
                            <?php else : ?>
                                <p>Đăng ký để trải nghiệm 30 ngày freeship!</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <?php if(isset($_SESSION['user_name'])) : ?>
                                    <a href="<?php echo _WEB_ROOT.'/index.php?controller=home&action=logout'; ?>">Đăng xuất</a>
                                <?php else : ?>
                                    <a href="<?php echo _WEB_ROOT.'/index.php?controller=home&action=signin'; ?>">Đăng nhập</a>
                                    <a href="<?php echo _WEB_ROOT.'/index.php?controller=home&action=signup'; ?>">Đăng ký</a>
                                    <a href="#">Hỏi đáp</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="<?php echo _WEB_ROOT.'/index.php?controller=home'; ?>"><img src="./public/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="
                                <?php if(empty($_REQUEST['controller']) || $_REQUEST['controller']=='home') echo 'active'; ?>
                            "><a href="<?php echo _WEB_ROOT.'/index.php?controller=home'; ?>">Home</a></li>
                            <li class="
                                <?php if(isset($_REQUEST['controller']) && $_REQUEST['controller']=='shop') echo 'active'; ?>
                            "><a href="<?php echo _WEB_ROOT.'/index.php?controller=shop'; ?>">Shop</a></li>
                            <li><a href="#">Mục</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo _WEB_ROOT.'/index.php?controller=about'; ?>">Về chúng tôi</a></li>
                                    <li><a href="<?= isset($_SESSION['user_name']) ? _WEB_ROOT.'/index.php?controller=cart' : _WEB_ROOT.'/index.php?controller=home&action=signin' ?>">Giỏ hàng</a></li>
                                    <li><a href="./checkout.html">Thanh toán</a></li>
                                </ul>
                            </li>
                            <li class="
                                <?php if(isset($_REQUEST['controller']) && $_REQUEST['controller']=='news') echo 'active'; ?>
                            "><a href="<?php echo _WEB_ROOT.'/news'; ?>">Tin tức</a></li>
                            <li class="
                                <?php if(isset($_REQUEST['controller']) && $_REQUEST['controller']=='contact') echo 'active'; ?>
                            "><a href="<?php echo _WEB_ROOT.'/contact'; ?>">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="./public/img/icon/search.png" alt=""></a>
                        <a href="#"><img src="./public/img/icon/heart.png" alt=""></a>
                        <a href="<?= isset($_SESSION['user_name']) ? _WEB_ROOT.'/index.php?controller=cart' : _WEB_ROOT.'/index.php?controller=home&action=signin' ?>"><img src="./public/img/icon/cart.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->