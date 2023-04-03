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
        <img src="/images/page/informasi-pejabat.jpg" alt="" class="img-fluid" width="100%">
        <p>
            Kepala Balai Besar Pelaksanaan Jalan Nasional DKI Jakarta - Jawa Barat<br>
            -	Wilan Oktavian<br>
            Kepala Bagian Umum dan Tata Usaha<br>
            -	Budi Faizal<br>
            Kepala Bidang Keterpaduan Pembangunan Infrastruktur  Jalan<br>
            -	Ahnes Intan<br>
            Kepala Bidang Pembangunan Jalan Jembatan<br>
            -	Agung Yudhianto<br>
            Kepala Bidang Preservasi I<br>
            -	Soendiarto<br>
            Kepala Bidang Preservasi II<br>
            -	Robert Himawan Hamiseno
        </p>
    </main>
    @include('components.aside')
</div>
@endsection
