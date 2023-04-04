@extends('layouts.app')
 
@section('title', 'Homepage')

@section('featured')		
    @include('components.slider')
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
    <div class="fancy-title title-border title-center text-uppercase">
        <h3 class="fw-bold" style="color:var(--cnvs-themecolor)">Berita Terbaru</h3>
    </div>
    <div class="row posts-md col-mb-30">
        <div class="col-lg-3 col-md-6">
            <div class="entry">
                <div class="entry-image">
                    <a href="{{ route('publikasi-single') }}"><img src="/images/post/1.jpg" alt="Image" class="rounded"></a>
                </div>
                <div class="entry-title title-xs text-transform-none px-2">
                    <h3><a href="{{ route('publikasi-single') }}">Kementerian PUPR Pastikan Jalan Nasional Sepanjang 262Km di Yogyakarta Siap Sambut Momentum Mudik Lebaran 2023</a></h3>
                </div>
                <div class="entry-meta px-2">
                    <ul>
                        <li><i class="uil uil-schedule"></i> 13th Jun 2023</li>
                        <li><a href="{{ route('publikasi-single') }}"><i class="uil uil-eye"></i> 53</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="entry">
                <div class="entry-image">
                    <a href="{{ route('publikasi-single') }}"><img src="/images/post/2.jpg" alt="Image" class="rounded"></a>
                </div>
                <div class="entry-title title-xs text-transform-none px-2">
                    <h3><a href="{{ route('publikasi-single') }}">Tingkatkan Konektivitas dan Distribusi Logistik, Kementerian PUPR Rampungkan Penggantian 3 Jembatan di Denpasar</a></h3>
                </div>
                <div class="entry-meta px-2">
                    <ul>
                        <li><i class="uil uil-schedule"></i> 24th Feb 2023</li>
                        <li><a href="{{ route('publikasi-single') }}"><i class="uil uil-eye"></i> 17</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="entry">
                <div class="entry-image">
                    <a href="{{ route('publikasi-single') }}"><img src="/images/post/1.jpg" alt="Image" class="rounded"></a>
                </div>
                <div class="entry-title title-xs text-transform-none px-2">
                    <h3><a href="{{ route('publikasi-single') }}">Target Tersambung 3.196 Km Pada Akhir Tahun 2024, PUPR Komitmen Wujudkan Penyelenggaraan Jalan Tol yang Berkelanjutan</a></h3>
                </div>
                <div class="entry-meta px-2">
                    <ul>
                        <li><i class="uil uil-schedule"></i> 30th Dec 2023</li>
                        <li><a href="{{ route('publikasi-single') }}"><i class="uil uil-eye"></i> 13</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="entry">
                <div class="entry-image">
                    <a href="{{ route('publikasi-single') }}"><img src="/images/post/2.jpg" alt="Image" class="rounded"></a>
                </div>
                <div class="entry-title title-xs text-transform-none px-2">
                    <h3><a href="{{ route('publikasi-single') }}">Kementerian PUPR Pastikan Jalan Nasional Sepanjang 262Km di Yogyakarta Siap Sambut Momentum Mudik Lebaran 2023</a></h3>
                </div>
                <div class="entry-meta px-2">
                    <ul>
                        <li><i class="uil uil-schedule"></i> 13th Jun 2023</li>
                        <li><a href="{{ route('publikasi-single') }}"><i class="uil uil-eye"></i> 53</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
		<a href="{{ route('publikasi-index') }}" class="button button-border button-small button-red button-circle text-uppercase">Index Berita <i class="fa-sharp fa-solid fa-chevron-right"></i></a>
	</div>
</div>

<div class="container">
    <div class="fancy-title title-border title-center mt-6 text-uppercase">
        <h3 class="fw-bold" style="color:var(--cnvs-themecolor)">Daftar Informasi Publik</h3>
    </div>
	<div id="portfolio" class="portfolio row portfolio-reveal grid-container">
		<article class="portfolio-item col-md-4 col-lg-3 pf-media pf-icons">
			<div class="grid-inner">
				<div class="portfolio-image">
					<a href="{{ route('publikasi-single') }}">
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
					<h3><a href="{{ route('publikasi-single') }}" style="color:var(--cnvs-themecolor)" class="fw-bold text-uppercase">Lihat Detail</a></h3>
				</div>
			</div>
		</article>
		<article class="portfolio-item col-md-4 col-lg-3 pf-illustrations">
			<div class="grid-inner">
				<div class="portfolio-image">
					<a href="{{ route('publikasi-single') }}">
						<img src="/images/service/2.jpg" alt="Locked Steel Gate" style="filter:sepia(100) hue-rotate(310deg) saturate(4)">
					</a>
				</div>
				<div class="portfolio-desc text-center ">
					<h3><a href="{{ route('publikasi-single') }}" style="color:var(--cnvs-themecolor)" class="fw-bold text-uppercase">Lihat Detail</a></h3>
				</div>
			</div>
		</article>
		<article class="portfolio-item col-md-4 col-lg-3 pf-graphics pf-uielements">
			<div class="grid-inner">
				<div class="portfolio-image">
					<a href="{{ route('publikasi-single') }}">
						<img src="/images/service/3.jpg" alt="Mac Sunglasses" style="filter:sepia(100) hue-rotate(310deg) saturate(4)">
					</a>
				</div>
				<div class="portfolio-desc text-center ">
					<h3><a href="{{ route('publikasi-single') }}" style="color:var(--cnvs-themecolor)" class="fw-bold text-uppercase">Lihat Detail</a></h3>
				</div>
			</div>
		</article>
		<article class="portfolio-item col-md-4 col-lg-3 pf-icons pf-illustrations">
			<div class="grid-inner">
				<div class="portfolio-image">
					<a href="{{ route('publikasi-single') }}">
						<img src="/images/service/4.jpg" alt="Open Imagination" style="filter:sepia(100) hue-rotate(310deg) saturate(4)">
					</a>
				</div>
				<div class="portfolio-desc text-center ">
					<h3><a href="{{ route('publikasi-single') }}" style="color:var(--cnvs-themecolor)" class="fw-bold text-uppercase">Lihat Detail</a></h3>
				</div>
			</div>
		</article>
	</div>
</div>

<div class="container">
    <div class="fancy-title title-border title-center mt-6 text-uppercase">
        <h3 class="fw-bold" style="color:var(--cnvs-themecolor)">Pelayanan Publik</h3>
    </div>
	<div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="60" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="4" data-items-xl="4">
		<div class="oc-item"><a href="{{ route('publikasi-single') }}"><img src="/images/link/salira.png" alt="Clients"></a></div>
		<div class="oc-item"><a href="{{ route('publikasi-single') }}"><img src="/images/link/oksip.png" alt="Clients"></a></div>
		<div class="oc-item"><a href="{{ route('publikasi-single') }}"><img src="/images/link/callcenter.png" alt="Clients"></a></div>
		<div class="oc-item"><a href="{{ route('publikasi-single') }}"><img src="/images/link/peta.png" alt="Clients"></a></div>
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
                    <div class="oc-item">
                        <a href="{{ route('publikasi-single') }}"><img src="/images/infografis/1.jpg" alt="Image 1"></a>
                    </div>
                    <div class="oc-item">
                        <a href="{{ route('publikasi-single') }}"><img src="/images/infografis/2.jpg" alt="Image 2"></a>
                    </div>
                    <div class="oc-item">
                        <a href="{{ route('publikasi-single') }}"><img src="/images/infografis/3.jpg" alt="Image 3"></a>
                    </div>
                    <div class="oc-item">
                        <a href="{{ route('publikasi-single') }}"><img src="/images/infografis/4.jpg" alt="Image 4"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-0 mb-4">
                <div class="card-header text-center text-white bg-batik fw-bold text-uppercase mb-2">
                    Video
                </div>
                <div class="row g-2">
                    <div class="col-12">
                        <div class="video-facade position-relative" data-video-html='<iframe width="560" height="315" src="https://www.youtube.com/embed/M_7jf0_8o8I" allowfullscreen></iframe>'>
                            <div class="video-facade-preview">
                                <img src="https://img.youtube.com/vi/M_7jf0_8o8I/maxresdefault.jpg" alt="Video Facade Video Preview" class="w-100">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark">
                                        <a href="#" class="overlay-trigger-icon size-lg op-ts op-07 bg-light text-dark" data-hover-animate="op-1" data-hover-animate-out="op-07"><i class="bi-play-fill fs-2 position-relative" style="left:1px"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="video-facade-content"></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="video-facade position-relative" data-video-html='<iframe width="560" height="315" src="https://www.youtube.com/embed/E-PWNawxL4U" allowfullscreen></iframe>'>
                            <div class="video-facade-preview">
                                <img src="https://img.youtube.com/vi/E-PWNawxL4U/maxresdefault.jpg" alt="Video Facade Video Preview" class="w-100">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark">
                                        <a href="#" class="overlay-trigger-icon size-lg op-ts op-07 bg-light text-dark" data-hover-animate="op-1" data-hover-animate-out="op-07"><i class="bi-play-fill fs-2 position-relative" style="left:1px"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="video-facade-content"></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="video-facade position-relative" data-video-html='<iframe width="560" height="315" src="https://www.youtube.com/embed/7GaKdV1l3xw" allowfullscreen></iframe>'>
                            <div class="video-facade-preview">
                                <img src="https://img.youtube.com/vi/7GaKdV1l3xw/maxresdefault.jpg" alt="Video Facade Video Preview" class="w-100">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark">
                                        <a href="#" class="overlay-trigger-icon size-lg op-ts op-07 bg-light text-dark" data-hover-animate="op-1" data-hover-animate-out="op-07"><i class="bi-play-fill fs-2 position-relative" style="left:1px"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="video-facade-content"></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="video-facade position-relative" data-video-html='<iframe width="560" height="315" src="https://www.youtube.com/embed/4atv9KHQH18" allowfullscreen></iframe>'>
                            <div class="video-facade-preview">
                                <img src="https://img.youtube.com/vi/4atv9KHQH18/maxresdefault.jpg" alt="Video Facade Video Preview" class="w-100">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark">
                                        <a href="#" class="overlay-trigger-icon size-lg op-ts op-07 bg-light text-dark" data-hover-animate="op-1" data-hover-animate-out="op-07"><i class="bi-play-fill fs-2 position-relative" style="left:1px"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="video-facade-content"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card border-0 mb-4">
                <div class="card-header text-center text-white bg-batik fw-bold text-uppercase mb-2">
                    Buletin
                </div>
                <div id="oc-images" class="owl-carousel image-carousel carousel-widget mb-6" data-items-xs="1" data-items-sm="1" data-items-lg="1" data-items-xl="1">
                    @for ($i = 1; $i <= 12; $i++)
                    <div class="oc-item">
                        <a href="https://online.fliphtml5.com/jstpy/acjv/"><img src="/images/buletin/{{$i}}.jpg" alt="Image {{$i}}"></a>
                    </div>
                    @endfor
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
