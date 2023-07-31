@extends('layout.mainlayout')

@section('title', 'Home')

@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('aset/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Desa</h1>
                <b>
                    <h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tambaknegara</h1>
                </b>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section services-section bg-light">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate">
                <h2 class="mb-4">Deskripsi Desa</h2>
                <p style="text-align: justify;">Desa wisata menari Tambaknegara adalah salah satu dari sekian banyak desa wisata di wilayah Banyumas yang berada di 16,5 km sebelah selatan kota Purwokerto. Berlokasi di antara gugusan bukit Serayu dan sungai Serayu dengan ketinggian 300 mdpl.

                    Mengangkat Menari sebagai brand desa wisata dengan tema Desa Wisata Seni dan Budaya, Alam dan Ekowisata yang Berwawasan Lingkungan, Desa Wisata Tambaknegara menawarkan kegiatan wisata pengalaman berupa pembelajaran dan interaksi tentang kesenian khususnya menari, alam, lingkungan hidup, pertanian, perkebunan, wirausaha, kehidupan sosial budaya, aneka seni tradisi dan kearifan lokal yang masih mengakar kuat di masyarakat dengan suasana khas pedesaan di lereng bukit Serayu.</p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="icon"><span class="fi fi-rr-home"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Homestay</h3>
                                <p style="text-align: justify;">Penginapan yang nyaman dan penuh keramahan dengan lingkungan yang tenang dan asri. Membuat pengalaman menginap yang nyaman dan berkesan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="icon"><span class="fi fi-rr-restaurant"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Makanan</h3>
                                <p style="text-align: justify;">Menghidangkan berbagai macam cita rasa makanan dan minuman yang otentik, dengan kenikmatan yang khas dan menggugah selera.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="icon"><span class="flaticon-tour-guide"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Local Guide</h3>
                                <p style="text-align: justify;">Pemandu berpengalaman akan membawa Anda menelusuri destinasi wisata yang menyenangkan. Dengan kehangatan akan memberikan pengalaman berwisata yang istimewa dan berkesan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="icon"><span class="fi fi-rr-car"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Transportasi</h3>
                                <p style="text-align: justify;">Kendaraan yang nyaman dan efisien untuk berwisata ke berbagai tempat. Memastikan perjalanan lancar dan menyenangkan selama berwisata di Desa Wisata Tambaknegara.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection