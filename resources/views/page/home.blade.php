@extends('layouts.app')

@section('title', 'Homepage')

@section('featured')
<x-slideshow />
<div id="page-menu" class="">
    <div id="page-menu-wrap">
        <div class="container">
            <div class="page-menu-row">
                <div class="page-menu-title text-uppercase" style="font-size:14px"><span>Pengumuman</span><i class="fa-sharp fa-solid fa-angle-right mx-2"></i></div>
                <nav class="page-menu-nav">
                    <ul class="page-menu-container">
                        <li class="page-menu-item current">
                            <a href="{{ route('publikasi-single') }}"></a>
                        </li>
                    </ul>
                </nav>
                <div id="page-menu-trigger"><i class="bi-list"></i></div>
            </div>
        </div>
    </div>
    <div class="page-menu-wrap-clone" style="height: 48px;"></div>
</div>
@endsection

@section('content')

<div class="container">
    <x-post />
</div>

<div class="container">
    <div class="fancy-title title-border title-center mt-6 text-uppercase">
        <h3 class="fw-bold" style="color:var(--cnvs-themecolor)">Daftar Informasi Publik</h3>
    </div>
    <div id="portfolio" class="portfolio row portfolio-reveal grid-container">
        <article class="portfolio-item col-md-4 col-lg-3 pf-media pf-icons">
            <div class="grid-inner">
                <div class="portfolio-image">
                    <a href="{{ route('posts.show','maklumat-pelayanan') }}">
                        <img src="/images/service/1.jpg" alt="Open Imagination" style="filter:sepia(100) hue-rotate(310deg) saturate(4)">
                    </a>
                    <!-- <div class="bg-overlay">
						<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
							<a href="images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="image" title="Image"><i class="uil uil-plus"></i></a>
							<a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="uil uil-ellipsis-h"></i></a>
						</div>
						<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
					</div> -->
                </div>
                <div class="portfolio-desc text-center ">
                    <h3><a href="{{ route('posts.show','maklumat-pelayanan') }}" style="color:var(--cnvs-themecolor)" class="fw-bold text-uppercase">Lihat Detail</a></h3>
                </div>
            </div>
        </article>
        <article class="portfolio-item col-md-4 col-lg-3 pf-illustrations">
            <div class="grid-inner">
                <div class="portfolio-image">
                    <a href="{{ route('posts.show','informasi-berkala') }}">
                        <img src="/images/service/2.jpg" alt="Locked Steel Gate" style="filter:sepia(100) hue-rotate(310deg) saturate(4)">
                    </a>
                </div>
                <div class="portfolio-desc text-center ">
                    <h3><a href="{{ route('posts.show','informasi-berkala') }}" style="color:var(--cnvs-themecolor)" class="fw-bold text-uppercase">Lihat Detail</a></h3>
                </div>
            </div>
        </article>
        <article class="portfolio-item col-md-4 col-lg-3 pf-graphics pf-uielements">
            <div class="grid-inner">
                <div class="portfolio-image">
                    <a href="{{ route('posts.show','informasi-setiap-saat') }}">
                        <img src="/images/service/3.jpg" alt="Mac Sunglasses" style="filter:sepia(100) hue-rotate(310deg) saturate(4)">
                    </a>
                </div>
                <div class="portfolio-desc text-center ">
                    <h3><a href="{{ route('posts.show','informasi-setiap-saat') }}" style="color:var(--cnvs-themecolor)" class="fw-bold text-uppercase">Lihat Detail</a></h3>
                </div>
            </div>
        </article>
        <article class="portfolio-item col-md-4 col-lg-3 pf-icons pf-illustrations">
            <div class="grid-inner">
                <div class="portfolio-image">
                    <a href="{{ route('posts.show','informasi-serta-merta') }}">
                        <img src="/images/service/4.jpg" alt="Open Imagination" style="filter:sepia(100) hue-rotate(310deg) saturate(4)">
                    </a>
                </div>
                <div class="portfolio-desc text-center ">
                    <h3><a href="{{ route('posts.show','informasi-serta-merta') }}" style="color:var(--cnvs-themecolor)" class="fw-bold text-uppercase">Lihat Detail</a></h3>
                </div>
            </div>
        </article>
    </div>
</div>

<div class="container">
    <div class="fancy-title title-border title-center mt-6 text-uppercase">
        <h3 class="fw-bold" style="color:var(--cnvs-themecolor)">Statistik Pelayanan Publik</h3>
    </div>
</div>
<x-statistic />

<div class="container">
    <div class="fancy-title title-border title-center mt-6 text-uppercase">
        <h3 class="fw-bold" style="color:var(--cnvs-themecolor)">Pelayanan Publik</h3>
    </div>
    <div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="60" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="4" data-items-xl="4">
        <div class="oc-item"><a href="https://sahabat.pu.go.id/pelayanan/deskripsi/3/kontak"><img src="/images/link/salira.png" alt="Clients"></a></div>
        <div class="oc-item"><a href="https://oksip.pu.go.id/"><img src="/images/link/oksip.png" alt="Clients"></a></div>
        <div class="oc-item"><a href="https://wa.me/+628119225246"><img src="/images/link/callcenter.png" alt="Clients"></a></div>
        <div class="oc-item"><a href="https://www.google.com/maps/d/u/0/embed?mid=1XSkRTxKMLw0v3DabAq302kxPmYnDa741&ll=-7.005951930188423%2C107.603394&z=9"><img src="/images/link/peta.png" alt="Clients"></a></div>
    </div>
</div>

<div class="container">
    <div class="fancy-title title-border title-center mt-6 text-uppercase">
        <h3 class="fw-bold" style="color:var(--cnvs-themecolor)">Publikasi</h3>
    </div>
    <div class="row align-items-top">
        <div class="col-lg-3">
            <div class="card border-0 mb-4">
                <div class="card-header text-center text-white bg-batik fw-bold text-uppercase mb-2">
                    Infografis
                </div>
                <div id="oc-images" class="owl-carousel image-carousel carousel-widget mb-6" data-items-xs="1" data-items-sm="1" data-items-lg="1" data-items-xl="1">
                    <x-infographic />
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-0 mb-4">
                <div class="card-header text-center text-white bg-batik fw-bold text-uppercase mb-2">
                    Video
                </div>
                <div class="row g-2">
                    <x-youtube />
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card border-0 mb-4">
                <div class="card-header text-center text-white bg-batik fw-bold text-uppercase mb-2">
                    Buletin
                </div>
                <div id="oc-images" class="owl-carousel image-carousel carousel-widget mb-6" data-items-xs="1" data-items-sm="1" data-items-lg="1" data-items-xl="1">
                    <x-bulletin />
                </div>
            </div>
        </div>
    </div>
</div>

@production
<div class="container">
    <div class="fancy-title title-border title-center text-uppercase">
        <h3 class="fw-bold" style="color:var(--cnvs-themecolor)">Media Sosial</h3>
    </div>
    <div class="row align-items-top col-mb-50">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header text-center text-white bg-batik">
                    Instagram Feed
                </div>
                <div class="card-body" style="max-height: 555px; overflow-y: auto; overflow-x: hidden;">
                    <div class="elfsight-app-90c577fa-3612-4ff2-a5db-7ec8276a91b6"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header text-center text-white bg-batik">
                    Twitter Feed
                </div>
                <div class="card-body" style="max-height: 555px; overflow-y: auto; overflow-x: hidden;">
                    <a class="twitter-timeline" href="https://twitter.com/pupr_dkijabar">Tweets by pupr_dkijabar</a>
                </div>
            </div>
        </div>
    </div>
    <script async src="https://platform.twitter.com/widgets.js"></script>
    <script async src="https://apps.elfsight.com/p/platform.js" defer></script>
</div>
@endproduction
@endsection