<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Male-Fashion Admin</title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"/>

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css" rel="stylesheet" />

  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<!-- Sidebar  -->
<?php require_once './includes/sidebar.php' ?>

<main class="main-content border-radius-lg ">
<!-- Navbar -->
<?php require_once './includes/navbar.php' ?>

<!-- Content -->
<div class="container-fluid py-4">
  <div class="row min-vh-80 h-100">
    <div class="col-12">
        <div class="card card-plain mb-4">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-lg-6">
                <div class="d-flex flex-column h-100">
                  <h2 class="font-weight-bolder mb-0">Thông số chung</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
          
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="card mb-2">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">weekend</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Bookings</p>
                  <h4 class="mb-0">281</h4>
                </div>
              </div>
          
              <hr class="dark horizontal my-0">

              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6">
            <div class="card mb-2">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">leaderboard</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Today's Users</p>
                  <h4 class="mb-0">2,300</h4>
                </div>
              </div>
          
              <hr class="dark horizontal my-0">

              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6">
            <div class="card mb-2">
              <div class="card-header p-3 pt-2 bg-transparent">
                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">store</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize ">Revenue</p>
                  <h4 class="mb-0 ">34k</h4>
                </div>
              </div>
          
              <hr class="horizontal my-0 dark">

              <div class="card-footer p-3">
                <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1% </span>than yesterday</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6">
            <div class="card ">
              <div class="card-header p-3 pt-2 bg-transparent">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">person_add</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize ">Followers</p>
                  <h4 class="mb-0 ">+91</h4>
                </div>
              </div>
          
              <hr class="horizontal my-0 dark">

              <div class="card-footer p-3">
                <p class="mb-0 ">Just updated</p>
              </div>
            </div>
          </div>

        </div>
    </div>
  </div>
</div>

<!-- Footer -->
<?php require_once './includes/footer.php' ?>
</main>


<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>

<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

</body>
</html>
