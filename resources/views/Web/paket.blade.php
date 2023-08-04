@extends('layout.mainlayout')

@section('title', 'Paket')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('aset/images/bendungan.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Paket Wisata</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Paket Wisata <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <br>
                <h2 class="mb-4">Wisata Live In Desa Tambaknegara</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="" data-toggle="modal" data-target="#gondolio" class="img" style="background-image: url(aset/images/Gondolio-2.png);"></a>
                    <div class="text p-4">
                        <a href="" data-toggle="modal" data-target="#gondolio">
                            <span class="price">Rp. 365.000/Orang</span>
                            <span class="days">Paket 1 Hari 1 Malam</span>
                            <h3>Paket Gondolio</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="" data-toggle="modal" data-target="#kenthongan" class="img" style="background-image: url(aset/images/destination-1.jpg);"></a>
                    <div class="text p-4">
                        <a href="" data-toggle="modal" data-target="#kenthongan">
                            <span class="price">Rp. 635.000/Orang</span>
                            <span class="days">Paket 2 Hari 2 Malam</span>
                            <h3>Paket Kenthongan</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="" data-toggle="modal" data-target="#gamelan" class="img" style="background-image: url(aset/images/gamelan.png);"></a>
                    <div class="text p-4">
                        <a href="" data-toggle="modal" data-target="#gamelan">
                            <span class="price">Rp. 850.000/Orang</span>
                            <span class="days">Paket 4 Hari 3 Malam</span>
                            <h3>Paket Gamelan</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="gondolio" tabindex="-1" role="dialog" aria-labelledby="gondolioLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="gondolioLabel">Paket Gondolio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="color: black;">
                <b>
                    <h6>Paket 1 Hari 1 Malam</h6>
                </b>
                <table border="0">
                    <tr>
                        <td style="vertical-align: top;">Penyambutan</td>
                        <td style="vertical-align: top;">:</td>
                        <td>
                            <ul>
                                <li>Tari Tradisional Jawa</li>
                                <li>Penjelasan Program</li>
                                <li>Pembagian Homestay</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Eksplorasi Alam Desa</td>
                        <td style="vertical-align: top;">:</td>
                        <td>
                            <ul>
                                <li>Jelajah Desa</li>
                                <li>Bajak Sawah</li>
                                <li>Tanam Padi</li>
                                <li>Tangkap Ikan</li>
                                <li>Susur Sungai</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Eksplorasi Seni Budaya</td>
                        <td style="vertical-align: top;">:</td>
                        <td>
                            <ul>
                                <li>Belajar Gamelan</li>
                                <li>Kreasi Janur</li>
                                <li>Wayang Suket</li>
                                <li>Belajar Tari Tradisonal</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Harga Paket</td>
                        <td style="vertical-align: top;">:</td>
                        <td>Rp.365.000/Orang (Min. 40 Orang)</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <a href="https://wa.link/e16hjs" target="_blank"><button type="button" class="btn btn-success"><i class="fa-brands fa-whatsapp"></i> Pesan Sekarang</button></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="kenthongan" tabindex="-1" role="dialog" aria-labelledby="kenthonganLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kenthonganLabel">Paket Kenthongan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="color: black;">
                <b>
                    <h6>Paket 2 Hari 2 Malam</h6>
                </b>
                <table border="0">
                    <tr>
                        <td style="vertical-align: top;">Penyambutan</td>
                        <td style="vertical-align: top;">:</td>
                        <td>
                            <ul>
                                <li>Tari Tradisional Jawa</li>
                                <li>Penjelasan Program</li>
                                <li>Pembagian Homestay</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Eksplorasi Alam Desa</td>
                        <td style="vertical-align: top;">:</td>
                        <td>
                            <ul>
                                <li>Jelajah Desa</li>
                                <li>Bajak Sawah</li>
                                <li>Tanam Padi</li>
                                <li>Tangkap Ikan</li>
                                <li>Susur Sungai</li>
                                <li>Perikanan</li>
                                <li>Peternakan</li>
                                <li>Bola Lumpur</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Eksplorasi Seni Budaya</td>
                        <td style="vertical-align: top;">:</td>
                        <td>
                            <ul>
                                <li>Belajar Gamelan</li>
                                <li>Kreasi Janur</li>
                                <li>Wayang Suket</li>
                                <li>Belajar Tari Tradisonal</li>
                                <li>Kenduri</li>
                                <li>Membatik</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Eksplorasi Ekonomi Desa</td>
                        <td style="vertical-align: top;">:</td>
                        <td>
                            <ul>
                                <li>UMKM Tempe</li>
                                <li>UMKM Kopi</li>
                                <li>UMKM Jamur/Ubi</li>
                                <li>Kebun Inspirasi</li>
                                <li>Bakti Sosial : Bersih Dusun/Penghijauan</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Harga Paket</td>
                        <td style="vertical-align: top;">:</td>
                        <td>Rp.635.000/Orang (Min. 40 Orang)</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <a href="https://wa.link/e16hjs" target="_blank"><button type="button" class="btn btn-success"><i class="fa-brands fa-whatsapp"></i> Pesan Sekarang</button></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="gamelan" tabindex="-1" role="dialog" aria-labelledby="gamelanLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="gamelanLabel">Paket Gamelan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="color: black;">
                <b>
                    <h6>Paket 4 Hari 3 Malam</h6>
                </b>
                <table border="0">
                    <tr>
                        <td style="vertical-align: top;">Penyambutan</td>
                        <td style="vertical-align: top;">:</td>
                        <td>
                            <ul>
                                <li>Tari Tradisional Jawa</li>
                                <li>Penjelasan Program</li>
                                <li>Pembagian Homestay</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Eksplorasi Alam Desa</td>
                        <td style="vertical-align: top;">:</td>
                        <td>
                            <ul>
                                <li>Jelajah Desa</li>
                                <li>Bajak Sawah</li>
                                <li>Tanam Padi</li>
                                <li>Tangkap Ikan</li>
                                <li>Susur Sungai</li>
                                <li>Perikanan</li>
                                <li>Peternakan</li>
                                <li>Bola Lumpur</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Eksplorasi Seni Budaya</td>
                        <td style="vertical-align: top;">:</td>
                        <td>
                            <ul>
                                <li>Belajar Gamelan</li>
                                <li>Kreasi Janur</li>
                                <li>Wayang Suket</li>
                                <li>Belajar Tari Tradisonal</li>
                                <li>Kenduri</li>
                                <li>Membatik</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Eksplorasi Ekonomi Desa</td>
                        <td style="vertical-align: top;">:</td>
                        <td>
                            <ul>
                                <li>UMKM Tempe</li>
                                <li>UMKM Kopi</li>
                                <li>UMKM Jamur/Ubi</li>
                                <li>Kebun Inspirasi</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Bakti Sosial</td>
                        <td style="vertical-align: top;">:</td>
                        <td>
                            <ul>
                                <li>Bersih Dusun</li>
                                <li>Penghijauan</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Fun Game</td>
                        <td style="vertical-align: top;">:</td>
                        <td>Permainan outbound dan malam api unggun/spontanitas</td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Lava Tour Merapi</td>
                        <td style="vertical-align: top;">:</td>
                        <td>Menjelajahi lereng dengan Jeep Off Road (Menikmati lereng Merapi dan sisa erupsi)</td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Harga Paket</td>
                        <td style="vertical-align: top;">:</td>
                        <td>Rp.850.000/Orang (Min. 40 Orang)</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <a href="https://wa.link/e16hjs" target="_blank"><button type="button" class="btn btn-success"><i class="fa-brands fa-whatsapp"></i> Pesan Sekarang</button></a>
            </div>
        </div>
    </div>
</div>
@endsection