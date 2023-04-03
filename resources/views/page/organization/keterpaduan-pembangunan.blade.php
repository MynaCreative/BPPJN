@extends('layouts.app')
 
@section('title', 'Post')

@section('breadcrumb')		
<section class="page-title page-title-mini">
    <div class="container">
        <div class="page-title-row">
            <div class="page-title-content">
                <h1>Bidang Keterpaduan Pembangunan Infrastruktur Jalan</h1>
                <span></span>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('publikasi-single') }}">Organisasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bidang Keterpaduan Pembangunan Infrastruktur Jalan</li>
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
            Melaksanakan penyiapan, pelaksanaan, dan pengolahan data dan informasi jalan dan jembatan, penyusunan rencana, program, dan anggaran pembangunan dan preservasi jalan dan jembatan termasuk sistem manajemen keselamatan konstruksi dan lingkungan, pelaksanaan studi kelayakan, survei, investigasi dan evaluasi perencanaan teknis pembangunan dan preservasi jalan dan jembatan termasuk keselamatan jalan, daerah rawan bencana dan lingkungan, penyiapan rencana dan dokumen pengadaan pembangunan dan preservasi jalan dan jembatan, pelaksanaan penyusunan analisis harga satuan pekerjaan jalan dan jembatan, penyiapan program pengadaan lahan jalan nasional, pengendalian pelaksanaan pengadaan barang dan jasa kegiatan perencanaan dan pengawasan jalan dan jembatan sesuai dengan kewenangannya, pelaksanaan evaluasi kinerja penyedia jasa perencanaan dan pengawasan jalan dan jembatan, pelaksanaan analisis mengenai dampak lingkungan dan lalu lintas, evaluasi penerapan standar pelayanan minimal jalan dan jembatan, penyusunan laporan akuntabilitas kinerja balai besar, penyediaan konsultasi teknik perencanaan dan pemrograman jalan daerah termasuk konektivitas jaringan jalan, dukungan verifikasi data jaringan dan verifikasi usulan pemrograman jalan daerah, penyiapan bahan dan pendampingan dalam periode audit internal dan eksternal dalam rangka penuntasan temuan terkait perencanaan dan pemrograman jalan dan jembatan, evaluasi perencanaan teknis perbaikan kerusakan jalan dan jembatan akibat bencana alam, penyusunan rencana, program dan anggaran perbaikan kerusakan jalan dan jembatan akibat bencana alam, dan penyusunan usulan perubahan program, anggaran dan keluaran, serta rencana kegiatan pembangunan dan preservasi jalan dan jembatan.
        </p>
    </main>
    @include('components.aside')
</div>
@endsection
