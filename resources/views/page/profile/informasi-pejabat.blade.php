@extends('layouts.app')

@section('title', 'Post')

@section('breadcrumb')
<section class="page-title page-title-mini">
    <div class="container">
        <div class="page-title-row">
            <div class="page-title-content">
                <h1>Informasi Pejabat</h1>
                <span></span>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('publikasi-single') }}">Profil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Informasi Pejabat</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="row gx-5 col-mb-80">
    <main class="postcontent col-lg-9">
        <div class="row">
            <div class="col-md-12 mb-4 text-center appear-animation animated fadeInUpShorter appear-animation-visible d-flex justify-content-center" data-appear-animation="fadeInUpShorter">
                <a href="https://pu.go.id/profile-pejabat/dr-ir-m-basuki-hadimuljono-msc" data-uw-rm-brl="false">
                    <div class="image-frame image-frame-style-9 m-0a image-frame-effect-2 image-frame-effect-1">
                        <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-flip-front image-frame-flip-front image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                            <img src="https://pu.go.id/assets/admin/img/20201201155224Pejabat-1-M_Basuki_Hadimulyono.jpg" class="img-fluid" alt="Dr. Ir. Mochamad Basoeki Hadimoeljono, M.Sc., Ph.D." height="300" data-uw-rm-ima-original="dr. ir. mochamad basoeki hadimoeljono, m.sc., ph.d.">
                        </div>
                        <div class="image-frame-action">
                            <span class="text-color-light font-weight-semibold">Menteri Pekerjaan Umum dan Perumahan Rakyat</span>
                        </div>
                    </div>
                    <h2 class="fs-6 fw-bold mt-3 mb-3">Dr. Ir. M. Basuki Hadimuljono, M.Sc</h2>
                </a>
            </div>

            <div class="col-md-4 mb-4 text-center appear-animation animated fadeInUpShorter appear-animation-visible d-flex justify-content-center" data-appear-animation="fadeInUpShorter">
                <a href="https://pu.go.id/profile-pejabat/ir-mohammad-zainal-fatah" data-uw-rm-brl="false">
                    <div class="image-frame image-frame-style-9 m-0a image-frame-effect-2 image-frame-effect-1">
                        <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-flip-front image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                            <img src="https://pu.go.id/assets/admin/img/2022093021503301__Ir. Mohammad Zainal Fatah.jpeg" class="img-fluid" alt="Jhon Wempi Wetipo, SH, MH" data-uw-rm-ima-original="jhon wempi wetipo, sh, mh">
                        </div>
                        <div class="image-frame-action">
                            <span class="text-color-light font-weight-semibold">Sekretaris Jenderal</span>
                        </div>
                    </div>
                    <h2 class="fs-6 fw-bold mt-3 mb-3">Ir. Mohammad Zainal Fatah</h2>
                </a>
            </div>
            <div class="col-md-4 mb-4 text-center appear-animation animated fadeInUpShorter appear-animation-visible d-flex justify-content-center" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">
                <a href="https://pu.go.id/profile-pejabat/ir-t-iskandar-mt" data-uw-rm-brl="false">
                    <div class="image-frame image-frame-style-9 m-0a image-frame-effect-2 image-frame-effect-1">
                        <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-flip-front image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                            <img src="https://pu.go.id/assets/admin/img/2022093021522602__Ir. T. Iskandar, M.T..jpeg" class="img-fluid" alt="Jhon Wempi Wetipo, SH, MH" data-uw-rm-ima-original="jhon wempi wetipo, sh, mh">
                        </div>
                        <div class="image-frame-action">
                            <span class="text-color-light font-weight-semibold">Inspektur Jenderal</span>
                        </div>
                    </div>
                    <h2 class="fs-6 fw-bold mt-3 mb-3">Ir. T. Iskandar, M.T.</h2>
                </a>
            </div>
            <div class="col-md-4 mb-4 text-center appear-animation animated fadeInUpShorter appear-animation-visible d-flex justify-content-center" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">
                <a href="https://pu.go.id/profile-pejabat/ir-jarot-widyoko-sp-1" data-uw-rm-brl="false">
                    <div class="image-frame image-frame-style-9 m-0a image-frame-effect-2 image-frame-effect-1">
                        <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-flip-front image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                            <img src="https://pu.go.id/assets/admin/img/20221214151401Jarot-Widyoko.jpg" class="img-fluid" alt="Jhon Wempi Wetipo, SH, MH" data-uw-rm-ima-original="jhon wempi wetipo, sh, mh">
                        </div>
                        <div class="image-frame-action">
                            <span class="text-color-light font-weight-semibold">Direktur Jenderal Sumber Daya Air</span>
                        </div>
                    </div>
                    <h2 class="fs-6 fw-bold mt-3 mb-3">Ir. Jarot Widyoko Sp-1</h2>
                </a>
            </div>
            <div class="col-md-4 mb-4 text-center appear-animation animated fadeInUpShorter appear-animation-visible d-flex justify-content-center" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">
                <a href="https://pu.go.id/profile-pejabat/dr-ir-hedy-rahadian-msc" data-uw-rm-brl="false">
                    <div class="image-frame image-frame-style-9 m-0a image-frame-effect-2 image-frame-effect-1">
                        <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-flip-front image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                            <img src="https://pu.go.id/assets/admin/img/2022093021545204__Dr. Ir. Hedy Rahadian, M.Sc.jpeg" class="img-fluid" alt="Jhon Wempi Wetipo, SH, MH" data-uw-rm-ima-original="jhon wempi wetipo, sh, mh">
                        </div>
                        <div class="image-frame-action">
                            <span class="text-color-light font-weight-semibold">Direktur Jenderal Bina Marga</span>
                        </div>
                    </div>
                    <h2 class="fs-6 fw-bold mt-3 mb-3">Dr. Ir. Hedy Rahadian, M.Sc.</h2>
                </a>
            </div>
            <div class="col-md-4 mb-4 text-center appear-animation animated fadeInUpShorter appear-animation-visible d-flex justify-content-center" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">
                <a href="https://pu.go.id/profile-pejabat/ir-diana-kusumastuti-mt" data-uw-rm-brl="false">
                    <div class="image-frame image-frame-style-9 m-0a image-frame-effect-2 image-frame-effect-1">
                        <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-flip-front image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                            <img src="https://pu.go.id/assets/admin/img/2022093021563805__Ir. Diana Kusumastuti, M.T..jpeg" class="img-fluid" alt="Jhon Wempi Wetipo, SH, MH" data-uw-rm-ima-original="jhon wempi wetipo, sh, mh">
                        </div>
                        <div class="image-frame-action">
                            <span class="text-color-light font-weight-semibold">Direktur Jenderal Cipta Karya</span>
                        </div>
                    </div>
                    <h2 class="fs-6 fw-bold mt-3 mb-3">Ir. Diana Kusumastuti, M.T.</h2>
                </a>
            </div>
            <div class="col-md-4 mb-4 text-center appear-animation animated fadeInUpShorter appear-animation-visible d-flex justify-content-center" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">
                <a href="https://pu.go.id/profile-pejabat/iwan-suprijanto-st-mt" data-uw-rm-brl="false">
                    <div class="image-frame image-frame-style-9 m-0a image-frame-effect-2 image-frame-effect-1">
                        <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-flip-front image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                            <img src="https://pu.go.id/assets/admin/img/2022093021581506__Iwan Suprijanto, S.T., M.T.jpeg" class="img-fluid" alt="Jhon Wempi Wetipo, SH, MH" data-uw-rm-ima-original="jhon wempi wetipo, sh, mh">
                        </div>
                        <div class="image-frame-action">
                            <span class="text-color-light font-weight-semibold">Direktur Jenderal Perumahan</span>
                        </div>
                    </div>
                    <h2 class="fs-6 fw-bold mt-3 mb-3">Iwan Suprijanto, S.T., M.T.</h2>
                </a>
            </div>
        </div>
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