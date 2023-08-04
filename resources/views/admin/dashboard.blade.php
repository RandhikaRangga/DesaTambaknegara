@extends('layout.adminlayout')

@section('title','Home')

@section('content')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Halo, Selamat Datang Admin</h4>
            <p class="mb-0">Desa Wisata Menari Tambaknegara</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-one card-body">
                <div class="stat-icon d-inline-block">
                    <img src="assets/images/virtual-tour.png" alt="" width="50">
                </div>
                <div class="stat-content d-inline-block">
                    <div class="stat-text">Wisata</div>
                    <div class="stat-digit">{{ number_format($wisata) }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-one card-body">
                <div class="stat-icon d-inline-block">
                    <img src="assets/images/angklung.png" alt="" width="50">
                </div>
                <div class="stat-content d-inline-block">
                    <div class="stat-text">Budaya</div>
                    <div class="stat-digit">{{ number_format($budaya) }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-one card-body">
                <div class="stat-icon d-inline-block">
                    <img src="assets/images/cookbook.png" alt="" width="50">
                </div>
                <div class="stat-content d-inline-block">
                    <div class="stat-text">Kuliner</div>
                    <div class="stat-digit">{{ number_format($kuliner) }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-one card-body">
                <div class="stat-icon d-inline-block">
                    <img src="assets/images/gallery.png" alt="" width="50">
                </div>
                <div class="stat-content d-inline-block">
                    <div class="stat-text">Foto</div>
                    <div class="stat-digit">{{ number_format($foto) }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-one card-body">
                <div class="stat-icon d-inline-block">
                    <img src="assets/images/video.png" alt="" width="50">
                </div>
                <div class="stat-content d-inline-block">
                    <div class="stat-text">Video</div>
                    <div class="stat-digit">{{ number_format($video) }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection