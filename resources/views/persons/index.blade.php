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
                <a href="#" data-uw-rm-brl="false">
                    <div class="image-frame image-frame-style-9 m-0a image-frame-effect-2 image-frame-effect-1">
                        <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-flip-front image-frame-flip-front image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                            <img src="{{ url('storage/'.$lead->thumbnail) }}" class="img-fluid" alt="Dr. Ir. Mochamad Basoeki Hadimoeljono, M.Sc., Ph.D." height="300" data-uw-rm-ima-original="dr. ir. mochamad basoeki hadimoeljono, m.sc., ph.d.">
                        </div>
                        <div class="image-frame-action">
                            <span class="text-color-light font-weight-semibold">{!! $lead->description !!}</span>
                        </div>
                    </div>
                    <h2 class="fs-6 fw-bold mt-3 mb-3">{{ $lead->name }}</h2>
                </a>
            </div>
        </div>

        @foreach ($collections as $rows)
        <div class="row">
            @foreach ($rows as $key => $item)
            <div class="col-md-{{ count($rows) === 3 ? '4' : (count($rows) === 2 ? '6' : '12') }} mb-4 text-center appear-animation animated fadeInUpShorter appear-animation-visible d-flex justify-content-center" data-appear-animation="fadeInUpShorter">
                <a href="#" data-uw-rm-brl="false">
                    <div class="image-frame image-frame-style-9 m-0a image-frame-effect-2 image-frame-effect-1">
                        <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-flip-front image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                            <img src="{{ url('storage/'.$item->thumbnail) }}" class="img-fluid" alt="Jhon Wempi Wetipo, SH, MH" data-uw-rm-ima-original="jhon wempi wetipo, sh, mh">
                        </div>
                        <div class="image-frame-action">
                            <span class="text-color-light font-weight-semibold">{!! $item->description !!}</span>
                        </div>
                    </div>
                    <h2 class="fs-6 fw-bold mt-3 mb-3">{{ $item->name }}</h2>
                </a>
            </div>
            @endforeach
        </div>
        @endforeach

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
    </main>
    @include('components.aside')
</div>
@endsection