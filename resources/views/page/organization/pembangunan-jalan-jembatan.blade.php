@extends('layouts.app')
 
@section('title', 'Post')

@section('breadcrumb')		
<section class="page-title page-title-mini">
    <div class="container">
        <div class="page-title-row">
            <div class="page-title-content">
                <h1>Bidang Pembangunan Jalan Jembatan</h1>
                <span></span>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('publikasi-single') }}">Organisasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bidang Pembangunan Jalan Jembatan</li>
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
        Melaksanakan penyiapan rencana kerja pengendalian dan pengawasan, serta pemanfaatan sumber daya konstruksi pelaksanaan pembangunan jalan, pengendalian pelaksanaan pengadaan barang dan jasa kegiatan pembangunan jalan dan jembatan sesuai dengan kewenangannya, pengawasan penerapan analisis harga satuan pekerjaan kegiatan pembangunan jalan dan jembatan, pengendalian pelaksanaan perubahan kontrak pekerjaan konstruksi pembangunan jalan dan jembatan, penerapan hasil pengembangan teknologi bahan dan peralatan jalan dan jembatan, pelaksanaan program kelaikan jalan dan jembatan nasional termasuk uji laik fungsi, pengendalian dan pengawasan pengadaan lahan pembangunan jalan nasional, jalan bebas hambatan, dan jalan tol, pelaksanaan koordinasi, evaluasi, dan pengawasan terhadap pembangunan jalan bebas hambatan dan jalan tol, koordinasi pelaksanaan uji teknis dan operasi jalan tol dalam rangka laik fungsi jalan tol yang berada di wilayah kerjanya, pengendalian penerapan sistem manajemen keselamatan konstruksi dan lingkungan di bidang pembangunan jalan dan jembatan, pelaksanaan pengujian, pemantauan, dan pengendalian bahan dan hasil pekerjaan konstruksi pembangunan jalan dan jembatan serta evaluasi terhadap hasil pengujian; penyediaan konsultasi teknik pembangunan jalan dan jembatan yang berada di jalan daerah, pengendalian pelaksanaan pekerjaan bidang pembangunan jalan dan jembatan, penyiapan bahan dan pendampingan dalam periode audit internal dan eksternal dalam rangka penuntasan temuan terkait pembangunan jalan dan jembatan, pelaksanaan evaluasi kinerja penyedia jasa pembangunan jalan dan jembatan, dan penerapan standar pelayanan minimal bidang pembangunan jalan dan jembatan.
        </p>
    </main>
    @include('components.aside')
</div>
@endsection
