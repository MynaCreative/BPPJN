@extends('layouts.app')

@section('title', 'Post')

@section('breadcrumb')
<section class="page-title page-title-mini">
    <div class="container">
        <div class="page-title-row">
            <div class="page-title-content">
                <h1>Tugas dan Fungsi</h1>
                <span></span>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('publikasi-single') }}">Profil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tugas dan Fungsi</li>
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
            Balai Besar Pelaksanaan Jalan Nasional mempunyai tugas melaksanakan pemrograman, perencanaan, pengadaan, pembangunan, preservasi dan pengendalian penerapan norma, standar, pedoman dan kriteria bidang jalan dan jembatan termasuk konektivitas jaringan jalan sesuai dengan ketentuan peraturan perundang-undangan
        </p>
        <h2>Fungsi</h2>
        <ol type="a">
            <li>Penyusunan rencana, program, dan anggaran pembangunan dan preservasi jalan dan jembatan</li>
            <li>Penyiapan, pelaksanaan, dan pengolahan data dan informasi jalan dan jembatan, serta verifikasi data jaringan jalan daerah, dan verifikasi usulan pemrograman jalan daerah</li>
            <li>Pelaksanaan studi kelayakan, survei, investigasi, dan evaluasi perencanaan teknis bidang jalan dan jembatan termasuk keselamatan jalan, daerah rawan bencana, dan lingkungan</li>
            <li>Penyiapan program, pengendalian, dan pengawasan pengadaan lahan jalan nasional, jalan bebas hambatan, dan jalan tol</li>
            <li>Penyusunan rencana, program, dan anggaran penanganan jalan dan jembatan termasuk sistem manajemen keselamatan konstruksi dan lingkungan serta perubahannya</li>
            <li>Penyiapan rencana dan dokumen pengadaan bidang jalan dan jembatan termasuk penyusunan dan pengawasan penerapan analisis harga satuan pekerjaan bidang jalan dan jembatan</li>
            <li>Pengendalian dan pelaksanaan pengadaan barang dan jasa kegiatan penanganan jalan dan jembatan sesuai dengan ketentuan peraturan perundang-undangan</li>
            <li>Sertifikasi laik operasi mesin pencampur aspal (asphalt mixing plant)</li>
            <li>Pengendalian pelaksanaan pekerjaan dan perubahan kontrak pekerjaan bidang jalan dan jembatan termasuk evaluasi kinerja penyedia jasa</li>
            <li>Penerapan hasil pengembangan teknologi bahan dan peralatan jalan dan jembatan</li>
            <li>Pengendalian penerapan sistem manajemen keselamatan konstruksi dan lingkungan di bidang jalan dan jembatan</li>
            <li>Pelaksanaan pengujian, pemantauan, dan pengendalian bahan dan hasil pekerjaan konstruksi serta evaluasi terhadap hasil pengujian</li>
            <li>Pelaksanaan analisis dampak lingkungan dan lalu lintas</li>
            <li>Penyiapan rencana kerja pengendalian dan pengawasan, serta pemanfaatan sumber daya konstruksi penanganan jalan termasuk jalan bebas hambatan dan jalan tol yang dilaksanakan konstruksinya oleh pemerintah</li>
            <li>Pelaksanaan koordinasi, evaluasi, dan pengawasan terhadap pembangunan jalan tol yang dilaksanakan oleh Badan Usaha Jalan Tol</li>
            <li>Koordinasi dan pemantauan kegiatan operasi dan pemeliharaan jalan bebas hambatan dan jalan tol serta koordinasi pelaksanaan uji teknis dan operasi jalan tol dalam rangka laik fungsi jalan tol yang berada di wilayah kerjanya</li>
            <li>Pelaksanaan program kelaikan jalan dan jembatan nasional termasuk uji laik fungsi</li>
            <li>Pengadaan atau penyediaan, penyimpanan, pemeliharaan, penggunaan, dan pemantauan bahan dan peralatan untuk jalan dan jembatan termasuk suku cadang sesuai dengan kewenangan</li>
            <li>Evaluasi dan penerapan standar pelayanan minimal jalan dan jembatan</li>
            <li>Penyusunan rencana, program dan anggaran, serta evaluasi perencanaan teknis perbaikan kerusakan jalan dan jembatan akibat bencana alam</li>
            <li>Pencegahan atau mitigasi dan pengendalian pelaksanaan penanggulangan bencana yang berdampak pada jalan dan jembatan</li>
            <li>Pelaksanaan audit keselamatan jalan dan jembatan</li>
            <li>Penyediaan konsultasi teknik penanganan jalan dan jembatan pada jalan daerah termasuk konektivitas jaringan jalan</li>
            <li>Penyusunan laporan akuntabilitas kinerja balai besar</li>
            <li>Penyiapan bahan dan pendampingan dalam periode audit internal dan eksternal dalam rangka penuntasan temuan terkait penanganan jalan dan jembatan</li>
            <li>Pelaksanaan penyusunan laporan akuntansi keuangan dan akuntansi barang milik negara selaku unit akuntansi wilayah serta laporan kinerja pelaksanaan urusan tata usaha, kepegawaian, keuangan, umum, barang milik negara, hukum, komunikasi publik dan rumah tangga, serta koordinasi dengan instansi terkait</li>
        </ol>
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