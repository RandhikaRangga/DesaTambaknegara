@extends('layout.mainlayout')

@section('title', 'Dokumentasi')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('aset/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Dokumentasi</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Dokumentasi <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Dokumentasi Desa Wisata Menari Tambaknegara</h2>
            </div>
        </div>
        <div class="row">
            @foreach($dokums as $dokum)
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap" style="background-color: white;">
                    <a class="img" style="background-image: url({{asset('image/'.$dokum->foto)}});"></a>
                    <div class="text p-4">
                        <center><h4><a>{{$dokum->judul}}</a></h4></center>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection