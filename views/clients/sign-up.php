<?php
$username = null;
$useremail = null;
$pass = null;
$valid = new Validate();

$valid->setRules([
    'user_name' => 'required|min:5|max:30',
    'user_email' => 'required|email',
    'user_password' => 'required|min:5',
    'user_confirm_password' => 'required|match:user_password',
]);

$valid->setMessage([
    'user_name.required' => 'Tên đăng nhập không được để trống!',
    'user_name.min' => 'Tên đăng nhập phải lớn hơn 5 kí tự!',
    'user_name.max' => 'Tên đăng nhập phải nhỏ hơn 30 kí tự!',
    'user_email.required' => 'Email không được để trống!',
    'user_email.email' => 'Phải nhập vào email!',
    'user_password.required' => 'Mật khẩu không được để trống!',
    'user_password.min' => 'Mật khẩu phải lớn hơn 5 kí tự!',
    'user_confirm_password.required' => 'Nhập lại mật khẩu không được để trống!',
    'user_confirm_password.match' => 'Nhập lại mật khẩu không khớp!',
]);

if(isset($_POST['user_name']) && isset($_POST['user_email']) && isset($_POST['user_password']) && isset($_POST['user_confirm_password'])) {
    $username = $_POST['user_name'];
    $useremail = $_POST['user_email'];
    $pass = $_POST['user_password'];
    $confirm_pass = $_POST['user_confirm_password'];

    $data = $this->model_home->checkUserName($username);
         
    if(empty($data)) {

        $this->model_home->addUser(['user_name' => $username, 'user_password' => $pass, 'user_permitsion' => 1]);

        header('Location: '._WEB_ROOT.'/index.php?controller=home&action=signin');
    }else {
        $signUpFailed = $valid->validate();
        $errors = $valid->errors();
    }
}
?>

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
     <!-- Header -->
     <?php require_once './views/default/header.php'; ?>

     <!-- Content -->
    <div class="container-fluid border-top">
        <div class="row justify-content-center my-5">
            <div class="col-md-4">
                <h2 class="text-center mt-4 mb-5">ĐĂNG KÝ</h2>

                <?php if (isset($signUpFailed) && $signUpFailed) : ?>
                    <h6 class="text-center mt-4 mb-5" style="color: #e53637;">Tên đăng nhập đã tồn tại</h6>
                <?php endif; ?>

                <form action="<?php echo _WEB_ROOT.'/index.php?controller=home&action=signup'; ?>" method="POST">
                <div class="form-group">
                    <label for="user_name" style="font-weight: bold;">Tên đăng nhập</label>
                    <p style="color: #e53637; font-size: 13px; margin: 0 0 3px 0;"><?php 
                        if(!empty($errors['user_name'])) {
                            echo $errors['user_name'];
                        }
                    ?></p>
                    <input type="text" class="form-control" name = "user_name" id="username" placeholder="Nhập tên đăng nhập" value="<?= $username ?>">
                </div>
                <div class="form-group">
                    <label for="user_email" style="font-weight: bold;">Email</label>
                    <p style="color: #e53637; font-size: 13px; margin: 0 0 3px 0;"><?php 
                        if(!empty($errors['user_email'])) {
                            echo $errors['user_email'];
                        }
                    ?></p>
                    <input type="email" class="form-control" name = "user_email" id="useremail" placeholder="Nhập email" value="<?= $useremail ?>">
                </div>
                <div class="form-group">
                    <label for="user_password" style="font-weight: bold;">Mật khẩu</label>
                    <p style="color: #e53637; font-size: 13px; margin: 0 0 3px 0;"><?php 
                        if(!empty($errors['user_password'])) {
                            echo $errors['user_password'];
                        }
                    ?></p>
                    <input type="password" class="form-control" name = "user_password" id="password" placeholder="Nhập mật khẩu">
                </div>
                <div class="form-group">
                    <label for="user_confirm_password" style="font-weight: bold;">Nhập lại mật khẩu</label>
                    <p style="color: #e53637; font-size: 13px; margin: 0 0 3px 0;"><?php 
                        if(!empty($errors['user_confirm_password'])) {
                            echo $errors['user_confirm_password'];
                        }
                    ?></p>
                    <input type="password" class="form-control" name = "user_confirm_password" id="confirm_password" placeholder="Nhập lại mật khẩu">
                </div>
                <button type="submit" class="primary-btn mt-2 justify-center">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require_once './views/default/footer.php'; ?>
    
    <!-- Search -->
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