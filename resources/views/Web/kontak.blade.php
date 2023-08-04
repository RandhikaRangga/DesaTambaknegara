@extends('layout.mainlayout')

@section('title', 'Kontak')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('aset/images/bendungan.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Kontak</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Kontak <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb contact-section">
    <div class="container">
        <div class="row d-flex contact-info">
            <div class="col-md-4 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-map-signs"></span>
                    </div>
                    <h3 class="mb-2">Alamat</h3>
                    <p><a href="https://goo.gl/maps/bSaP1fWsEsohxogp6">Kalitanjung, Tambaknegara, Kec. Rawalo, Kabupaten Banyumas, Jawa Tengah</a></p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-phone2"></span>
                    </div>
                    <h3 class="mb-2">Kontak</h3>
                    <p><a href="https://wa.me/62882005390073">0882005390073</a></p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-paper-plane"></span>
                    </div>
                    <h3 class="mb-2">Alamat Email</h3>
                    <p><a href="mailto:desawisatamenari@gmail.com">desawisatamenari@gmail.com</a></p>
                </div>
            </div>
            <!-- <div class="col-md-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-globe"></span>
                    </div>
                    <h3 class="mb-2">Website</h3>
                    <p><a href="#">yoursite.com</a></p>
                </div>
            </div> -->
        </div>
    </div>
</section>
@endsection