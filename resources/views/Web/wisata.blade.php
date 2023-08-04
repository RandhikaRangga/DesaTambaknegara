@extends('layout.mainlayout')

@section('title', 'Wisata')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('aset/images/bendungan.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Wisata</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Wisata<i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Daya Tarik Wisata Buatan</h2>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex">
                @foreach($wisatas as $wisata)
                <div class="col-md-4 d-flex ftco-animate" style="background-color: white;">
                    <div class="blog-entry justify-content-end">
                        <br>
                        <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('image/'.$wisata->foto)}}');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="two">
                                    <span class="mos">Rp.{{$wisata->harga}}</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">{{$wisata->nama}}</a></h3>
                            <p style="text-align: justify;">{{$wisata->deskripsi}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Daya Tarik Kebudayaan</h2>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex">
                @foreach($budayas as $budaya)
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('image/'.$budaya->foto)}}');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="two">
                                    <span class="mos">{{$budaya->harga}}</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">{{$budaya->nama}}</a></h3>
                            <p style="text-align: justify;">{{$budaya->deskripsi}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Daya Tarik Kuliner</h2>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex">
                @foreach($kuliners as $kuliner)
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('image/'.$kuliner->foto)}}');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="two">
                                    <!-- <span class="yr">Mulai Dari</span> -->
                                    <span class="mos">{{$kuliner->harga}}</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">{{$kuliner->nama}}</a></h3>
                            <p style="text-align: justify;">{{$kuliner->deskripsi}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>
@endsection