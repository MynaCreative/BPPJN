@extends('layouts.app')

@section('title', 'Publikasi')

@section('breadcrumb')
<section class="page-title page-title-mini">
    <div class="container">
        <div class="page-title-row">
            <div class="page-title-content">
                <h1>Publikasi</h1>
                <span></span>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Publikasi</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="row col-mb-80">
    <main class="postcontent col-lg-9">
        <div class="row g-4 mb-5">
            @foreach ($collections as $item)
            <article class="entry event col-12 mb-0">
                <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                    <div class="col-md-4 mb-md-0">
                        <a href="{{ route('posts.show',$item->slug) }}" class="entry-image mb-0 h-100">
                            <img src="{{ url('storage/'.$item->thumbnail) }}" class="rounded-2 h-100 object-cover">
                            <div class="bg-overlay">
                                <div class="bg-overlay-content justify-content-start align-items-start">
                                    <div class="badge bg-light text-dark rounded-pill">{{ $item->postType->name }}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-8 px-4">
                        <div class="entry-meta no-separator mb-1 mt-0">
                            <ul>
                                <li><a href="{{ route('posts.show',$item->slug) }}" class="text-uppercase fw-medium">{{ $item->published_at->format('d M Y') }}</a></li>
                            </ul>
                        </div>
                        <div class="entry-title nott">
                            <h4><a href="{{ route('posts.show',$item->slug) }}">{{ $item->name }}</a></h4>
                        </div>
                        <div class="entry-content my-3">
                            <p class="mb-0">{!! str($item->body)->words(18) !!}</p>
                        </div>
                        <div class="entry-meta no-separator">
                            <ul>
                                <li><i class="uil uil-schedule"></i> {{ $item->published_at->format('d M Y') }}</li>
                                <!-- <li><a href="{{ route('posts.show',$item->slug) }}"><i class="uil uil-eye"></i> 53</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
        <!-- <div class="d-flex justify-content-between">
            <a href="#" class="btn btn-outline-secondary">← Older</a>
            <a href="#" class="btn btn-outline-dark">Newer →</a>
        </div> -->
    </main>
    @include('components.aside')
</div>
@endsection