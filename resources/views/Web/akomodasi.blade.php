@extends('layout.mainlayout')

@section('title', 'Souvenir')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('aset/images/bendungan.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Akomodasi</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Akomodasi<i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Akomodasi Desa Wisata Menari Tambaknegara</h2>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex">
                @foreach($akomodasis as $akomodasi)
                <div class="col-md-4 d-flex ftco-animate" style="background-color: white;">
                    <div class="blog-entry justify-content-end">
                        <br>
                        <a class="block-20" style="background-image: url('{{asset('image/'.$akomodasi->foto)}}');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="two">
                                    <span class="mos">Rp.{{$akomodasi->harga}}</span>
                                </div>
                            </div>
                            <h3 class="heading"><a>{{$akomodasi->nama}}</a></h3>
                            <p style="text-align: justify;">{{$akomodasi->deskripsi}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>
@endsection