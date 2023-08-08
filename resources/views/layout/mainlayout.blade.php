<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Desa Tambaknegara</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="aset/images/icon.png">

    <link rel="stylesheet" href="aset/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="aset/css/animate.css">

    <link rel="stylesheet" href="aset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="aset/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="aset/css/magnific-popup.css">

    <link rel="stylesheet" href="aset/css/aos.css">

    <link rel="stylesheet" href="aset/css/ionicons.min.css">

    <link rel="stylesheet" href="aset/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="aset/css/jquery.timepicker.css">


    <link rel="stylesheet" href="aset/css/flaticon.css">
    <link rel="stylesheet" href="aset/css/icomoon.css">
    <link rel="stylesheet" href="aset/css/style.css">

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="background-color: #f0f1f5;">
        <div class="container">
            <a class="navbar" href="/"> <img src="aset/images/icon.png" width="80px" height="80px">&nbsp;&nbsp;<img src="aset/images/pokdarwis.png" width="120px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown show"><a href="" class="nav-link dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wisata</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/daya-tarik">Daya Tarik</a>
                            <a class="dropdown-item" href="/souvenir">Souvenir</a>
                            <a class="dropdown-item" href="/kuliner">Kuliner</a>
                            <a class="dropdown-item" href="/akomodasi">Akomodasi</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown show"><a href="" class="nav-link dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeri</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/dokumentasi">Foto</a>
                            <a class="dropdown-item" href="/video">Video</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="/paket" class="nav-link">Paket</a></li>
                    <li class="nav-item"><a href="/kontak" class="nav-link">Kontak</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div id="body">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="ftco-footer bg-bottom" style="background-color: #012269">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Tentang Kami</h2>
                        <ul class="list-unstyled footer-social">
                            <li class="ftco-animate" width="80px"><a href="https://www.youtube.com/@desawisatamenari" target="_blank" style="color: white;"><span><img src="aset/images/youtube.png" width="30" height="30"></span> Desa Wisata Menari</a></li>
                            <br>
                            <li class="ftco-animate"><a href="https://www.tiktok.com/@deswitatambaknegara?is_from_webapp=1&sender_device=pc" target="_blank" style="color: white;"><span><img src="aset/images/tik-tok (1).png" width="30" height="30"></span> @deswitatambaknegara</a></li>
                            <br>
                            <li class="ftco-animate"><a href="https://www.instagram.com/desawisata_menari/" target="_blank" style="color: white;"><span><img src="aset/images/instagram.png" width="30" height="30"></span> @desawisata_menari</span></a></li>
                        </ul>
                        <br><br><br><br><br>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <img src="aset/images/logo-wonderful.png" width="250" alt="">
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-1 ml-md-5 dropdown">
                        <h2 class="ftco-heading-2">Infromation</h2>
                        <ul class="list-unstyled">
                            <li><a href="/" class="py-2 d-block">Home</a></li>
                            <li><a href="/wisata" class="py-2 d-block">Wisata</a></li>
                            <li><a href="/dokumentasi" class="py-2 d-block">Foto</a></li>
                            <li><a href="/video" class="py-2 d-block">Video</a></li>
                            <li><a href="/paket" class="py-2 d-block">Paket</a></li>
                            <li><a href="/kontak" class="py-2 d-block">Kontak</a></li>
                        </ul>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <img src="aset/images/banyumas.png" width="200" alt="">
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Informasi Lebih Lanjut</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><a href="https://goo.gl/maps/bSaP1fWsEsohxogp6" target="_blank"><span class="icon icon-map-marker"></span><span class="text">Kalitanjung, Tambaknegara, Kec. Rawalo, Kabupaten Banyumas, Jawa Tengah</span></a></li>
                                <li><a href="https://wa.me/62882005390073" target="_blank"><span class="icon icon-phone"></span><span class="text">0882005390073</span></a></li>
                                <li><a href="mailto:desawisatamenari@gmail.com"><span class="icon icon-envelope"></span><span class="text">desawisatamenari@gmail.com</span></a></li>
                            </ul>
                            <br><br><br>
                            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                                <img src="aset/images/dolan-banyumas.png" width="300" alt="">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-12 text-center">

                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                       </p>
                </div>
            </div> -->
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="aset/js/jquery.min.js"></script>
    <script src="aset/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="aset/js/popper.min.js"></script>
    <script src="aset/js/bootstrap.min.js"></script>
    <script src="aset/js/jquery.easing.1.3.js"></script>
    <script src="aset/js/jquery.waypoints.min.js"></script>
    <script src="aset/js/jquery.stellar.min.js"></script>
    <script src="aset/js/owl.carousel.min.js"></script>
    <script src="aset/js/jquery.magnific-popup.min.js"></script>
    <script src="aset/js/aos.js"></script>
    <script src="aset/js/jquery.animateNumber.min.js"></script>
    <script src="aset/js/bootstrap-datepicker.js"></script>
    <script src="aset/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="aset/js/google-map.js"></script>
    <script src="aset/js/main.js"></script>
</body>

</html>