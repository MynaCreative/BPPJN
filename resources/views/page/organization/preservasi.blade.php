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
        Melaksanakan penyiapan rencana kerja pengendalian dan pengawasan, serta pemanfaatan sumber daya konstruksi pelaksanaan preservasi jalan dan jembatan, pengendalian pelaksanaan pengadaan barang dan jasa kegiatan preservasi jalan dan jembatan sesuai dengan kewenangannya, pengawasan penerapan analisis harga satuan pekerjaan kegiatan preservasi jalan dan jembatan, pengendalian pelaksanaan perubahan kontrak pekerjaan konstruksi preservasi jalan dan jembatan, pengadaan atau penyediaan, penyimpanan, pemeliharaan, penggunaan, dan pemantauan bahan dan peralatan untuk jalan dan jembatan termasuk suku cadang sesuai dengan kewenangannya, pelaksanaan audit keselamatan jalan dan jembatan, koordinasi dan pemantauan kegiatan operasi dan pemeliharaan jalan bebas hambatan dan jalan tol, pengendalian penerapan sistem manajemen keselamatan konstruksi dan lingkungan di bidang preservasi jalan dan jembatan, pelaksanaan pengujian, pemantauan, dan pengendalian bahan dan hasil pekerjaan konstruksi preservasi jalan dan jembatan serta evaluasi terhadap hasil pengujian, penyediaan konsultasi teknik preservasi jalan dan jembatan yang berada di jalan daerah, pengendalian pelaksanaan pekerjaan bidang preservasi jalan dan jembatan, penyiapan bahan dan pelaksanaan pendampingan dalam periode audit internal dan eksternal dalam rangka penuntasan temuan terkait preservasi jalan dan jembatan, pelaksanaan evaluasi kinerja penyedia jasa preservasi jalan dan jembatan, penerapan standar pelayanan minimal bidang preservasi jalan dan jembatan, pengendalian teknis fungsi dan pemanfaatan bagian - bagian jalan, pengendalian pelaksanaan penilikan jalan dan jembatan pengendalian pencegahan/mitigasi dan pengendalian pelaksanaan penanggulangan bencana yang berdampak pada jalan dan jembatan, dan sertifikasi laik produksi mesin pencampur aspal <i>(asphalt mixing plant)</i>
        </p>
    </main>
    @include('components.aside')
</div>
@endsection
