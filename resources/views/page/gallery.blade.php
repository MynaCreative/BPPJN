@extends('layouts.app')
 
@section('title', 'Contact')

@section('breadcrumb')		
<section class="page-title page-title-mini">
    <div class="container">
        <div class="page-title-row">
            <div class="page-title-content">
                <h1>Galleri</h1>
                <span></span>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Galleri</a></li>
                </ol>
            </nav>
        </div>
    </div>
</section>
@endsection
 
@section('content')
<div class="grid-filter-wrap">
    <ul class="grid-filter" data-container="#portfolio">
        <li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
        <li><a href="#" data-filter=".pf-icons">Tinjauan</a></li>
        <li><a href="#" data-filter=".pf-illustrations">Jalan</a></li>
        <li><a href="#" data-filter=".pf-uielements">Tol</a></li>
        <li><a href="#" data-filter=".pf-media">Acara</a></li>
        <li><a href="#" data-filter=".pf-graphics">Peresmian</a></li>
    </ul>
    <div class="grid-shuffle rounded" data-container="#portfolio">
        <i class="uil uil-sync"></i>
    </div>
</div>
<div id="portfolio" class="portfolio row grid-container gutter-30" data-layout="fitRows">
    <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-media pf-icons">
        <div class="grid-inner">
            <div class="portfolio-image">
                <a href="#">
                <img src="/images/gallery/1.jpg" alt="Open Imagination">
                </a>
                <div class="bg-overlay">
                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                        <a href="/images/gallery/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="uil uil-plus"></i></a>
                        
                    </div>
                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                </div>
            </div>
            <div class="portfolio-desc">
                <h3><a href="#">Dampingi Delegasi Jepang Lihat Peluang Kerja Sama Pembangunan IKN</a></h3>
                <span><a href="#">Acara</a>, <a href="#">Tinjauan</a></span>
            </div>
        </div>
    </article>
    <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-illustrations">
        <div class="grid-inner">
            <div class="portfolio-image">
                <a href="#">
                <img src="/images/gallery/2.jpg" alt="Locked Steel Gate">
                </a>
                <div class="bg-overlay">
                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                        <a href="/images/gallery/2.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="uil uil-plus"></i></a>
                        
                    </div>
                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                </div>
            </div>
            <div class="portfolio-desc">
                <h3><a href="#">Mudik Lebaran 2023, Tol Pasuruan - Probolinggo Seksi 4A</a></h3>
                <span><a href="#">Jalan</a></span>
            </div>
        </div>
    </article>
    <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-graphics pf-uielements">
        <div class="grid-inner">
            <div class="portfolio-image">
                <a href="#">
                <img src="/images/gallery/3.jpg" alt="Mac Sunglasses">
                </a>
                <div class="bg-overlay">
                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                        <a href="https://www.youtube.com/watch?v=cFTzM0xzYTs" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="uil uil-play"></i></a>
                        
                    </div>
                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                </div>
            </div>
            <div class="portfolio-desc">
                <h3><a href="#">Ruas Tol Semarang</a></h3>
                <span><a href="#">Peresmian</a>, <a href="#">Tol</a></span>
            </div>
        </div>
    </article>
    <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-icons pf-illustrations">
        <div class="grid-inner">
            <div class="portfolio-image">
                <a href="#">
                <img src="/images/gallery/4.jpg" alt="Locked Steel Gate">
                </a>
                <div class="bg-overlay" data-lightbox="gallery">
                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                        <a href="/images/gallery/4.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                        
                    </div>
                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                </div>
            </div>
            <div class="portfolio-desc">
                <h3><a href="#">Kementerian PUPR Komitmen Wujudkan Penyelenggaraan Jalan Tol yang Berkelanjutan</a></h3>
                <span><a href="#">Tinjauan</a>, <a href="#">Jalan</a></span>
            </div>
        </div>
    </article>
    <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-uielements pf-media">
        <div class="grid-inner">
            <div class="portfolio-image">
                <a href="#">
                <img src="/images/gallery/5.jpg" alt="Console Activity">
                </a>
                <div class="bg-overlay">
                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                        <a href="/images/gallery/5.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="uil uil-plus"></i></a>
                        
                    </div>
                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                </div>
            </div>
            <div class="portfolio-desc">
                <h3><a href="#">Kementerian PUPR Rampungkan Penggantian 3 Jembatan di Denpasar</a></h3>
                <span><a href="#">Tol</a>, <a href="#">Acara</a></span>
            </div>
        </div>
    </article>
    <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-graphics pf-illustrations">
        <div class="grid-inner">
            <div class="portfolio-image">
                <a href="#">
                    <img src="/images/gallery/6.jpg" alt="Locked Steel Gate">
                </a>
                <div class="bg-overlay" data-lightbox="gallery">
                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                        <a href="/images/gallery/6.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                        
                    </div>
                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                </div>
            </div>
            <div class="portfolio-desc">
                <h3><a href="#">Kementerian PUPR Siapkan Dukungan Operasional Jalan Nasional dan Jalan Tol</a></h3>
                <span><a href="#">Jalan</a>, <a href="#">Peresmian</a></span>
            </div>
        </div>
    </article>
    <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-uielements pf-icons">
        <div class="grid-inner">
            <div class="portfolio-image">
                <a href="#">
                    <img src="/images/gallery/7.jpg" alt="Backpack Contents">
                </a>
                <div class="bg-overlay">
                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                        <a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="uil uil-play"></i></a>
                        
                    </div>
                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                </div>
            </div>
            <div class="portfolio-desc">
                <h3><a href="#">Sistem Transaksi Tol Nirsentuh Akan Uji Coba di Tol Bali Mandara Juni 2023</a></h3>
                <span><a href="#">Tol</a>, <a href="#">Tinjauan</a></span>
            </div>
        </div>
    </article>
    <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-graphics">
        <div class="grid-inner">
            <div class="portfolio-image">
                <a href="#">
                <img src="/images/gallery/8.jpg" alt="Sunset Bulb Glow">
                </a>
                <div class="bg-overlay">
                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                        <a href="/images/gallery/8.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="uil uil-plus"></i></a>
                        
                    </div>
                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                </div>
            </div>
            <div class="portfolio-desc">
                <h3><a href="#">Presiden Jokowi Resmikan Jalan Akses Labuan Bajo - Golo Mori</a></h3>
                <span><a href="#">Peresmian</a></span>
            </div>
        </div>
    </article>
    <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-illustrations pf-icons">
        <div class="grid-inner">
            <div class="portfolio-image">
                <a href="#">
                    <img src="/images/gallery/9.jpg" alt="Locked Steel Gate">
                </a>
                <div class="bg-overlay" data-lightbox="gallery">
                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                        <a href="/images/gallery/9.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                        
                    </div>
                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                </div>
            </div>
            <div class="portfolio-desc">
                <h3><a href="#">Tinjau Peningkatan Jalan Nasional Pomalaa-Wolulu, Tepat Waktu dan Mutu</a></h3>
                <span><a href="#">Jalan</a>, <a href="#">Tinjauan</a></span>
            </div>
        </div>
    </article>
</div>

@endsection
