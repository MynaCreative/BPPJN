@extends('layouts.app')
 
@section('title', 'Post')

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
            @for ($i = 0; $i < 3; $i++)
            <article class="entry event col-12 mb-0">
                <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                    <div class="col-md-4 mb-md-0">
                        <a href="{{ route('publikasi-single') }}" class="entry-image mb-0 h-100">
                            <img src="/images/post/1.jpg" class="rounded-2 h-100 object-cover">
                            <div class="bg-overlay">
                                <div class="bg-overlay-content justify-content-start align-items-start">
                                    <div class="badge bg-light text-dark rounded-pill">Berita</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-8 px-4">
                        <div class="entry-meta no-separator mb-1 mt-0">
                            <ul>
                                <li><a href="{{ route('publikasi-single') }}" class="text-uppercase fw-medium">13th Jun 2023</a></li>
                            </ul>
                        </div>
                        <div class="entry-title nott">
                            <h4><a href="{{ route('publikasi-single') }}">Kementerian PUPR Pastikan Jalan Nasional Sepanjang 262Km di Yogyakarta Siap Sambut Momentum Mudik Lebaran 2023</a></h4>
                        </div>
                        <div class="entry-content my-3">
                            <p class="mb-0">Kementerian Pekerjaan Umum dan Perumahan Rakyat (PUPR) melalui Direktorat Jenderal Bina Marga terus meningkatkan kesiapan infrastruktur jalan nasional di Provinsi Daerah Istimewa Yogyakarta (DI Yogyakarta)</p>
                        </div>
                        <div class="entry-meta no-separator">
                            <ul>
                                <li><i class="uil uil-schedule"></i> 13th Jun 2023</li>
                                <li><a href="{{ route('publikasi-single') }}"><i class="uil uil-eye"></i> 53</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
            <article class="entry event col-12 mb-0">
                <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                    <div class="col-md-4 mb-md-0">
                        <a href="{{ route('publikasi-single') }}" class="entry-image mb-0 h-100">
                            <img src="/images/post/2.jpg" class="rounded-2 h-100 object-cover">
                            <div class="bg-overlay">
                                <div class="bg-overlay-content justify-content-start align-items-start">
                                    <div class="badge bg-light text-dark rounded-pill">Berita</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-8 px-4">
                        <div class="entry-meta no-separator mb-1 mt-0">
                            <ul>
                                <li><a href="{{ route('publikasi-single') }}" class="text-uppercase fw-medium">13th Jun 2023</a></li>
                            </ul>
                        </div>
                        <div class="entry-title nott">
                            <h4><a href="{{ route('publikasi-single') }}">Tingkatkan Konektivitas dan Distribusi Logistik, Kementerian PUPR Rampungkan Penggantian 3 Jembatan di Denpasar</a></h4>
                        </div>
                        <div class="entry-content my-3">
                            <p class="mb-0">Kementerian Pekerjaan Umum dan Perumahan Rakyat (PUPR) terus berupaya meningkatkan konektivitas antar kawasan dengan membangun infrastruktur jalan dan jembatan</p>
                        </div>
                        <div class="entry-meta no-separator">
                            <ul>
                                <li><i class="uil uil-schedule"></i> 13th Jun 2023</li>
                                <li><a href="{{ route('publikasi-single') }}"><i class="uil uil-eye"></i> 53</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
            <article class="entry event col-12 mb-0">
                <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                    <div class="col-md-4 mb-md-0">
                        <a href="{{ route('publikasi-single') }}" class="entry-image mb-0 h-100">
                            <img src="/images/post/3.jpg" class="rounded-2 h-100 object-cover">
                            <div class="bg-overlay">
                                <div class="bg-overlay-content justify-content-start align-items-start">
                                    <div class="badge bg-light text-dark rounded-pill">Berita</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-8 px-4">
                        <div class="entry-meta no-separator mb-1 mt-0">
                            <ul>
                                <li><a href="{{ route('publikasi-single') }}" class="text-uppercase fw-medium">13th Jun 2023</a></li>
                            </ul>
                        </div>
                        <div class="entry-title nott">
                            <h4><a href="{{ route('publikasi-single') }}">Target Tersambung 3.196 Km Pada Akhir Tahun 2024, Kementerian PUPR Komitmen Wujudkan Penyelenggaraan Jalan Tol yang Berkelanjutan</a></h4>
                        </div>
                        <div class="entry-content my-3">
                            <p class="mb-0">Kementerian Pekerjaan Umum dan Perumahan Rakyat (PUPR) bersama mitra kerja Badan Usaha Jalan Tol (BUJT) terus bekerja sama melanjutkan pembangunan jalan tol</p>
                        </div>
                        <div class="entry-meta no-separator">
                            <ul>
                                <li><i class="uil uil-schedule"></i> 13th Jun 2023</li>
                                <li><a href="{{ route('publikasi-single') }}"><i class="uil uil-eye"></i> 53</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
            @endfor
        </div>
        <div class="d-flex justify-content-between">
			<a href="#" class="btn btn-outline-secondary">← Older</a>
			<a href="#" class="btn btn-outline-dark">Newer →</a>
		</div>
    </main>
    @include('components.aside')
</div>
@endsection
