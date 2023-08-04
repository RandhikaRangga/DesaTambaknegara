@extends('layout.mainlayout')

@section('title', 'Video')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('aset/images/bendungan.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Video</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Video <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Video Desa Wisata Menari Tambaknegara</h2>
            </div>
        </div>
        <div class="row">
            @foreach($videos as $video)
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap" style="background-color: white;">
                    <center><iframe width="348" height="200" src="https://www.youtube.com/embed/{{ $video->url }}" frameborder="0" allowfullscreen></iframe></center>
                    <div class="text p-4">
                        <center>
                            <h4><a>{{$video->judul}}</a></h4>
                        </center>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection