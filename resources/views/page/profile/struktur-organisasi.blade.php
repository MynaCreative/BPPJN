@extends('layouts.app')
 
@section('title', 'Post')

@section('breadcrumb')		
<section class="page-title page-title-mini">
    <div class="container">
        <div class="page-title-row">
            <div class="page-title-content">
                <h1>Struktur Organisasi</h1>
                <span></span>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('publikasi-single') }}">Profil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
@endsection
 
@section('content')
<div class="row gx-5 col-mb-80">
    <main class="postcontent col-lg-9">
        <img src="/images/page/struktur-organisasi.png" alt="" class="img-fluid" width="100%">
    </main>
    @include('components.aside')
</div>
@endsection
