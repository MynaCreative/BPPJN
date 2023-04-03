@extends('layouts.app')
 
@section('title', 'Post')

@section('breadcrumb')		
<section class="page-title page-title-mini">
    <div class="container">
        <div class="page-title-row">
            <div class="page-title-content">
                <h1>Bagian Umum dan Tata Usaha</h1>
                <span></span>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('publikasi-single') }}">Organisasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bagian Umum dan Tata Usaha</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
@endsection
 
@section('content')
<div class="row gx-5 col-mb-80">
    <main class="postcontent col-lg-9">
        <h2>Tugas</h2>
        <p>
        Melaksanakan urusan pengelolaan data dan administrasi kepegawaian, pengelolaan organisasi dan tata laksana, pelaksanaan pengendalian penyusunan perjanjian atau kontrak serta pemberian advokasi hukum, pelaksanaan komunikasi publik di balai, pelaksanaan pengelolaan anggaran, urusan kas dan perbendaharaan, serta administrasi dan akuntansi keuangan, pelaksanaan administrasi penerimaan negara bukan pajak, pelaksanaan pemantauan penyelesaian laporan hasil pemeriksaan, pelaksanaan penatausahaan, pengelolaan, administrasi dan akuntansi barang milik negara, pelaksanaan pengamanan fisik serta pelaksanaan proses sertifikasi tanah dan barang milik negara, fasilitasi usulan serta pemantauan dan evaluasi atas penggunaan, pemanfaatan, pemindahtanganan, pemusnahan, dan penghapusan barang milik negara, pengelolaan dan penetapan leger jalan nasional, penyusunan laporan berkala balai besar, pelaksanaan administrasi perizinan bidang jalan dan jembatan, pelaksanaan urusan tata usaha, kearsipan, dan rumah tangga, dan penyediaan konsultasi teknis pengelolaan leger jalan daerah serta koordinasi administrasi penerapan sistem pengendalian intern balai besar.
        </p>
    </main>
    @include('components.aside')
</div>
@endsection
