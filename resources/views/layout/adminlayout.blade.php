<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Dashboard - @yield('title')</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/icon.png">
  <link href="./assets/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
  <link href="./assets/vendor/chartist/css/chartist.min.css" rel="stylesheet">
  <link href="./assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Datatable -->
  <link href="./assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

</head>

<body>

  <!--*******************
        Preloader start
    ********************-->
  <div id="preloader">
    <div class="sk-three-bounce">
      <div class="sk-child sk-bounce1"></div>
      <div class="sk-child sk-bounce2"></div>
      <div class="sk-child sk-bounce3"></div>
    </div>
  </div>
  <!--*******************
        Preloader end
    ********************-->


  <!--**********************************
        Main wrapper start
    ***********************************-->
  <div id="main-wrapper">

    <!--**********************************
            Nav header start
        ***********************************-->
    <div class="nav-header">
      <a href="index.html" class="brand-logo">
        <img class="brand-icon" src="./assets/images/icon.png" width="50" alt="">
        <img class="logo-compact" src="./assets/images/icon-text.png" width="150" alt="">
        <img class="brand-title" src="./assets/images/icon-text.png" width="150">
      </a>

      <div class="nav-control">
        <div class="hamburger">
          <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
      </div>
    </div>
    <!--**********************************
            Nav header end
        ***********************************-->

    <!--**********************************
            Header start
        ***********************************-->
    <div class="header">
      <div class="header-content">
        <nav class="navbar navbar-expand">
          <div class="collapse navbar-collapse justify-content-between">
            <div class="header-left">
            </div>

            <ul class="navbar-nav header-right">
              <li class="nav-item dropdown header-profile">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <button type="submit" class="btn btn-md" style="background-color:#593bdb; color:white">Logout</button>
                </form>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

    <!--**********************************
            Sidebar start
        ***********************************-->
    <div class="quixnav">
      <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
          <li class="nav-label first">Main Menu</li>
          <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->
          <!-- Main Menu -->
          <li><a href="/dashboard" aria-expanded="false"><img src="assets/images/dashboard.png" alt="" width="35"></i><span class="nav-text"> Dashboard</span></a></li>

          <!-- Wisata -->
          <li class="nav-label">Wisata</li>
          <li><a href="/admin-wisata" aria-expanded="false"><img src="assets/images/virtual-tour.png" alt="" width="35"><span class="nav-text"> Wisata</span></a></li>
          <li><a href="/admin-budaya" aria-expanded="false"><img src="assets/images/angklung.png" alt="" width="35"><span class="nav-text"> Budaya</span></a></li>
          <li><a href="/admin-kuliner" aria-expanded="false"><img src="assets/images/cookbook.png" alt="" width="35"><span class="nav-text"> Kuliner</span></a></li>
          <li><a href="/admin-souvenir" aria-expanded="false"><img src="assets/images/gift-bag.png" alt="" width="35"><span class="nav-text"> Souvenir</span></a></li>
          <li><a href="/admin-akomodasi" aria-expanded="false"><img src="assets/images/homestay.png" alt="" width="35"><span class="nav-text"> Akomodasi</span></a></li>


          <!-- Dokumentasi -->
          <li class="nav-label">Galeri</li>
          <li><a href="/admin-dokum" aria-expanded="false"><img src="assets/images/gallery.png" alt="" width="35"><span class="nav-text"> Foto</span></a></li>
          <li><a href="/admin-video" aria-expanded="false"><img src="assets/images/video.png" alt="" width="35"><span class="nav-text"> Video</span></a></li>
        </ul>
      </div>
    </div>
    <!--**********************************
            Sidebar end
        ***********************************-->

    <!--**********************************
            Content Start
        ***********************************-->
    <div class="content-body">
      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
    <!--**********************************
            Content end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


  </div>
  <!--**********************************
        Main wrapper end
    ***********************************-->

  <!--**********************************
        Scripts
    ***********************************-->
  <!-- Required vendors -->
  <script src="./assets/vendor/global/global.min.js"></script>
  <script src="./assets/js/quixnav-init.js"></script>
  <script src="./assets/js/custom.min.js"></script>

  <script src="./assets/vendor/chartist/js/chartist.min.js"></script>

  <script src="./assets/vendor/moment/moment.min.js"></script>
  <script src="./assets/vendor/pg-calendar/js/pignose.calendar.min.js"></script>


  <script src="./assets/js/dashboard/dashboard-2.js"></script>
  <!-- Circle progress -->

  <!-- Datatable -->
  <script src="./assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="./assets/js/plugins-init/datatables.init.js"></script>


</body>

</html>