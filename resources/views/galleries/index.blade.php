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
        @foreach ($filters as $item)
        <li><a href="#" data-filter=".{{ $item->slug }}">{{ $item->name }}</a></li>
        @endforeach
    </ul>
    <div class="grid-shuffle rounded" data-container="#portfolio">
        <i class="uil uil-sync"></i>
    </div>
</div>
<div id="portfolio" class="portfolio row grid-container gutter-30" data-layout="fitRows">
    @foreach ($collections as $item)
    <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-media {{ $item->gallery->slug }}">
        <div class="grid-inner">
            <div class="portfolio-image">
                <a href="#">
                    <img src="{{ url('storage/'.$item->thumbnail) }}" alt="Open Imagination">
                </a>
                <div class="bg-overlay">
                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                        <a href="{{ url('storage/'.$item->thumbnail) }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="uil uil-plus"></i></a>
                    </div>
                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                </div>
            </div>
            <div class="portfolio-desc">
                <h3><a href="#">{{ $item->description }}</a></h3>
                <span><a href="#">{{ $item->gallery->name }}</a></span>
            </div>
        </div>
    </article>
    @endforeach
</div>

@endsection