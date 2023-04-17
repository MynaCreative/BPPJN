@extends('layouts.app')

@section('title', 'Post')

@section('breadcrumb')
<section class="page-title page-title-mini">
    <div class="container">
        <div class="page-title-row">
            <div class="page-title-content">
                <h1>Bidang Keterpaduan Pembangunan Infrastruktur Jalan</h1>
                <span></span>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('publikasi-single') }}">Organisasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bidang Keterpaduan Pembangunan Infrastruktur Jalan</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="row gx-5 col-mb-80">
    <main class="postcontent col-lg-9">
        <h2>Tugas</h2>
        <p>
            Melaksanakan penyiapan, pelaksanaan, dan pengolahan data dan informasi jalan dan jembatan, penyusunan rencana, program, dan anggaran pembangunan dan preservasi jalan dan jembatan termasuk sistem manajemen keselamatan konstruksi dan lingkungan, pelaksanaan studi kelayakan, survei, investigasi dan evaluasi perencanaan teknis pembangunan dan preservasi jalan dan jembatan termasuk keselamatan jalan, daerah rawan bencana dan lingkungan, penyiapan rencana dan dokumen pengadaan pembangunan dan preservasi jalan dan jembatan, pelaksanaan penyusunan analisis harga satuan pekerjaan jalan dan jembatan, penyiapan program pengadaan lahan jalan nasional, pengendalian pelaksanaan pengadaan barang dan jasa kegiatan perencanaan dan pengawasan jalan dan jembatan sesuai dengan kewenangannya, pelaksanaan evaluasi kinerja penyedia jasa perencanaan dan pengawasan jalan dan jembatan, pelaksanaan analisis mengenai dampak lingkungan dan lalu lintas, evaluasi penerapan standar pelayanan minimal jalan dan jembatan, penyusunan laporan akuntabilitas kinerja balai besar, penyediaan konsultasi teknik perencanaan dan pemrograman jalan daerah termasuk konektivitas jaringan jalan, dukungan verifikasi data jaringan dan verifikasi usulan pemrograman jalan daerah, penyiapan bahan dan pendampingan dalam periode audit internal dan eksternal dalam rangka penuntasan temuan terkait perencanaan dan pemrograman jalan dan jembatan, evaluasi perencanaan teknis perbaikan kerusakan jalan dan jembatan akibat bencana alam, penyusunan rencana, program dan anggaran perbaikan kerusakan jalan dan jembatan akibat bencana alam, dan penyusunan usulan perubahan program, anggaran dan keluaran, serta rencana kegiatan pembangunan dan preservasi jalan dan jembatan.
        </p>
        <div class="card border-default my-4">
            <div class="card-body p-3">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="fs-6 fw-semibold mb-0">Share:</h6>
                    <div class="d-flex">
                        <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-facebook" title="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-twitter" title="Twitter">
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-pinterest" title="Pinterest">
                            <i class="fa-brands fa-pinterest-p"></i>
                            <i class="fa-brands fa-pinterest-p"></i>
                        </a>
                        <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-whatsapp" title="Whatsapp">
                            <i class="fa-brands fa-whatsapp"></i>
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                        <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-rss" title="RSS">
                            <i class="fa-solid fa-rss"></i>
                            <i class="fa-solid fa-rss"></i>
                        </a>
                        <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-email3 me-0" title="Mail">
                            <i class="fa-solid fa-envelope"></i>
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section call-to-action bg-light-5 call-to-action-height-1 mt-2 mb-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="call-to-action-content text-center text-md-left appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" style="animation-delay: 100ms;">
                            <h5 class="font-weight-semibold" data-uw-rm-heading="level" role="heading" aria-level="3">Apakah informasi di atas cukup membantu?</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="call-to-action-btn appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
                            <a href="https://www.pu.go.id/cta/berita/yes/34943" class="button button-border button-small button-red button-circle text-uppercase" data-uw-rm-brl="false">
                                <span class="wrap">
                                    <span>YA</span>
                                    <i class="fas fa-check"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="call-to-action-btn appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
                            <a href="https://www.pu.go.id/cta/berita/no/34943" class="button button-border button-small button-red button-circle text-uppercase" data-uw-rm-brl="false">
                                <span class="wrap">
                                    <span>TIDAK</span>
                                    <i class="fas fa-times"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('components.aside')
</div>
@endsection