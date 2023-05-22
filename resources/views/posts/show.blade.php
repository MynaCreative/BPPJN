@extends('layouts.app')

@section('title', $item->name)

@section('breadcrumb')
<section class="page-title page-title-mini">
    <div class="container">
        <div class="page-title-row">
            <div class="page-title-content">
                <h1>{{ $item->name }}</h1>
                <span></span>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Post</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $item->name }}</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="row gx-5 col-mb-80">
    <main class="postcontent col-lg-9">
        @if ($item->postImages)
        <div class="fslider flex-thumb-grid grid-4 mb-4 clearfix" data-arrows="false" data-thumbs="true">
            <div class="flexslider">
                <div class="slider-wrap">
                    @foreach ($item->postImages as $image)
                    <div class="slide" data-thumb="{{ url('storage/'.$image->thumbnail) }}">
                        <a class="col" href="{{ url('storage/'.$image->thumbnail) }}" data-lightbox="image" data-zoom="true">
                            <img src="{{ url('storage/'.$image->thumbnail) }}" alt="{{ $image->description }}">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        {!! $item->body !!}
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