@extends('layouts.app')

@section('title', 'Post')

@section('breadcrumb')
<section class="page-title page-title-mini">
    <div class="container">
        <div class="page-title-row">
            <div class="page-title-content">
                <h1>Informasi Berkala</h1>
                <span></span>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Informasi Berkala</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="row col-mb-80">
    <main class="postcontent col-lg-12">
        <h2 class="text-center">Informasi Berkala BBWS Pemali Juana</h2>
        <div class="table-responsive">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul Informasi</th>
                        <th>Ringkasan Informasi</th>
                        <th>Bentuk Informasi yang tersedia</th>
                        <th>Jangka waktu Penyimpanan</th>
                        <th>Jenis Media yang Memuat Informasi</th>
                    </tr>
                </thead>

                <thead>
                    <tr>
                        <th>
                            <h4><b>1.</b></h4>
                        </th>
                        <th colspan="5">
                            <h4><b>Informasi Tentang Profil Balai Besar Wilayah Sungai Pemali Juana</b></h4>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>•</td>
                        <td>Visi dan Misi</td>
                        <td>
                            <center><b>Visi</b>
                                <br>"Terwujudnya kemanfaatan sumber daya air di Wilayah Sungai Pemali Comal dan Jratunseluna yang berkelanjutan untuk sebesar-besar kesejahteraan rakyat."<br>
                                <b>Misi</b>
                                <br>1. Mengkonservasi sumber daya air secara berkelanjutan.<br>
                                2. Mendayagunakan sumber daya air secara adil serta memenuhi persyaratan kualitas dan kuantitas untuk berbagai kebutuhan masyarakat.<br>
                                3.Mengendalikan daya rusak air.<br>
                                4. Memberdayakan dan meningkatkan peran masyarakat dan pemerintah dalam pengelolaan sumber daya air.<br>
                                5. Meningkatkan keterbukaan serta ketersediaan data dan informasi dalam pengelolaan sumber daya air.<br>
                            </center>
                        </td>
                        <td>Hard &amp; Soft</td>
                        <td>Selama Berlaku</td>
                        <td><a href="https://sda.pu.go.id/balai/bbwspemalijuana/pages/visi_misi">link</a></td>
                    </tr>
                    <tr>
                        <td>•</td>
                        <td>Rencana Strategis</td>
                        <td>Rencana Strategis BBWS Pemali Juana Tahun 2015-2019</td>
                        <td>Hard &amp; Soft</td>
                        <td>4 tahun</td>
                        <!-- <td><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/renstra/RENSTRA-BBWSPJ-2015-2019.pdf">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <!--<td></td>-->
                        <td>Rencana Strategis BBWS Pemali Juana Tahun 2020-2024</td>
                        <td>Hard &amp; Soft</td>
                        <td>4 tahun</td>
                        <!-- <td><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/renstra/RENSTRA-BBWSPJ-2020-2024.pdf">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <td>•</td>
                        <td>Struktur Organisasi Serta Profil Singkat Pejabat Struktural</td>
                        <td>Struktur Organisasi terdiri dari :<br>
                            1. Kepala Balai<br>
                            2. Kabag Umum &amp; TU<br>
                            3. Kabid KPI SDA<br>
                            4. Kabid PJSA<br>
                            5. Kabid PJPA<br>
                            6. Kabid OPSDA<br>
                        </td>
                        <td>Hard &amp; Soft</td>
                        <td>Selama Berlaku</td>
                        <td><a href="https://sda.pu.go.id/balai/bbwspemalijuana/pages/informasi_pejabat">link</a></td>
                    </tr>
                    <tr>
                        <td>•</td>
                        <td>Sumber Daya yang dimiliki</td>
                        <td>Komposisi Pegawai Balai Besar Wilayah Sungai Pemali Juana Tahun 2021</td>
                        <td>Hard &amp; Soft</td>
                        <td>Selama Berlaku</td>
                        <td><a href="https://sda.pu.go.id/balai/bbwspemalijuana/pages/profil/info-kepegawaian">link</a></td>
                    </tr>
                    <tr>
                        <td>•</td>
                        <td>Tugas dan Fungsi</td>
                        <td>Tugas dan Fungsi di masing-masing bidang dan seksi</td>
                        <td>Hard &amp; Soft</td>
                        <td>Selama Berlaku</td>
                        <td><a href="https://sda.pu.go.id/balai/bbwspemalijuana/pages/profil/tugas-dan-fungsi">link</a></td>
                    </tr>
                    <tr>
                        <td>•</td>
                        <td>LHKPN Pejabat yang diverifikasi</td>
                        <td>Laporan LHKPN Kepala Balai dan seluruh Pejabat Perbendaharaan BBWS Pemali Juana</td>
                        <td>Hard &amp; Soft</td>
                        <td>Selama Berlaku</td>
                        <!-- <td><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/publik/06633857_9_I.4.a.1. Tanda Terima Bukti Laporan LHKPN Kepala Balai dan seluruh Pejabat Perbendaharaan.pdf">link</a>(bukti laporan)<br><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/publik/REKAPITULASI LAPORAN LHKPN TH LAPOR 2021 BBWS PEMALI JUANA.pdf">link</a>(rekap)</td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                </tbody>

                <thead>
                    <tr>
                        <th>
                            <h4><b>2.</b></h4>
                        </th>
                        <th colspan="5">
                            <h4><b>Ringkasan Kinerja dalam lingkungan BBWS Pemali Juana</b></h4>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>•</td>
                        <td colspan="4">Laporan Kinerja (LAKIN) Bala Besar</td>
                        <td><a href="https://sda.pu.go.id/balai/bbwspemalijuana/pages/lakin">link</a></td>
                    </tr>
                    <!-- <tr>
                                <td>b.</td>
                                <td colspan="4">Target Capaian BBWS Pemali Juana</td>
                                <td>link</td>
                            </tr> -->
                    <tr>
                        <td>•</td>
                        <td colspan="4">Peta Wilayah Sungai BBWS Pemali Juana</td>
                        <td><a href="https://sda.pu.go.id/balai/bbwspemalijuana/pages/pws">link</a></td>
                    </tr>
                    <tr>
                        <td>•</td>
                        <td colspan="4">Dokumentasi infrastruktur BBWS Pemali</td>
                        <td><a href="https://sda.pu.go.id/balai/bbwspemalijuana/pages/gallery_foto">link</a></td>
                    </tr>
                </tbody>

                <thead>
                    <tr>
                        <th>
                            <h4><b>3.</b></h4>
                        </th>
                        <th colspan="5">
                            <h4><b>Ringkasan Laporan Akses Informasi Publik</b></h4>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>•</td>
                        <td colspan="4">Media permohonan informasi</td>
                        <td><a href="https://eppid.pu.go.id/">link</a></td>
                    </tr>
                    <tr>
                        <td>•</td>
                        <td colspan="4">Laporan layanan Informasi Publik Tahun 2021</td>
                        <!-- <td><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/ppid/LAP-PPID-BBWS-PEMALI-JUANA-2021.pdf">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                </tbody>

                <thead>
                    <tr>
                        <th>
                            <h4><b>4.</b></h4>
                        </th>
                        <th colspan="5">
                            <h4><b>Informasi tentang Peraturan, keputusan, dan/atau kebijaksanaan yang mengikat dan/atau berdampak
                                    bagi publik yang dikeluarkan oleh BBWS Pemali Juana</b></h4>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>•</td>
                        <td colspan="4">Peraturan perundang-undangan dalam lingkup tugas Kementerian PUPR ditjen SDA</td>
                        <td><a href="https://jdih.pu.go.id/Pencarian-Unit-Organisasi/3">link</a></td>
                    </tr>
                    <tr>
                        <td>•</td>
                        <td colspan="4">Rencana SDA Jratunseluna</td>
                        <!-- <td><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/ppid/2010_Pola PSDA Jratunseluna.pdf">link</td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                </tbody>

                <thead>
                    <tr>
                        <th valign="top" class="text-left" scope="row">
                            <h4><b>5.</b></h4>
                        </th>
                        <td colspan="8" valign="top" class="text-left">
                            <h4><b>Ringkasan Laporan Keuangan</b></h4>
                        </td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th valign="top" class="text-right" scope="row">•</th>
                        <td valign="top" class="text-left" colspan="5">SATKER BBWS Pemali Juana</td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Arus Kas 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/1. SATKER BBWS PEMALI JUANA/ARUS KAS 2021/NERACA PERCOBAAN KAS.PDF" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Catatan Atas Laporan Keuangan 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/1. SATKER BBWS PEMALI JUANA/CALK 2021/CALK 2021.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Daftar Aset dan Inventarisasi 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/1. SATKER BBWS PEMALI JUANA/DAFTAR ASET DAN INVENTARISASI/Gabungan intra ekstra (2).pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">DIPA TA 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/1. SATKER BBWS PEMALI JUANA/DPA SKPD 2022/DPA.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Laporan Realisasi Anggaran 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/1. SATKER BBWS PEMALI JUANA/LRA 2021/LRA.PDF" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Neraca Anggaran 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/1. SATKER BBWS PEMALI JUANA/NERACA 2021/NERACA.PDF" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">RKA-KL TA 2022</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/1. SATKER BBWS PEMALI JUANA/RKA SKPD 2022/RKA.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th valign="top" class="text-right" scope="row">•</th>
                        <td valign="top" class="text-left" colspan="5">SNVT PJPA BBWS Pemali Juana</td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Arus Kas 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/2. SNVT PJPA Pemali Juana/4. Arus Kas 2021/Kas2021SNVT_PJPApemalijuana.PDF" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Catatan Atas Laporan Keuangan 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/2. SNVT PJPA Pemali Juana/1. CALK 2021/CaLK2021SNVT_PJPApemalijuana.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Daftar Aset dan Inventarisasi 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/2. SNVT PJPA Pemali Juana/7. Daftar aset dan investasi/DAFTAR ASET.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">DIPA TA 2022</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/2. SNVT PJPA Pemali Juana/6. DPA SKPD 2022/2022-01-033.06-498167-03-026-1-03.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Laporan Realisasi Anggaran 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/2. SNVT PJPA Pemali Juana/3. LRA 2021/LRA2021SNVT_PJPApemaliJuana.PDF" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Neraca Anggaran 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/2. SNVT PJPA Pemali Juana/2. Neraca 2021/Neraca2021SNVT_PJPApemaliJuana.PDF" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">RKA-KL TA 2022</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/2. SNVT PJPA Pemali Juana/5. RKA SKPD 2022/POK REV 3.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th valign="top" class="text-right" scope="row">•</th>
                        <td valign="top" class="text-left" colspan="5">SNVT Pembangunan Bendungan BBWS Pemali Juana</td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Arus KAS 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/3. SNVT Pembanguna Bendungan BBWS Pemali Juana/d. Arus Kas 2021/Arus Kas TA 2021.PDF" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Catatan Atas Laporan Keuangan 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/3. SNVT Pembanguna Bendungan BBWS Pemali Juana/a. CALK 2021/Calk TA 2021.PDF" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Daftar Aset dan Inventarisasi 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/3. SNVT Pembanguna Bendungan BBWS Pemali Juana/g. Daftar aset dan investasi/Lap Barang Kuasa Pengguna 2021.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">DIPA TA 2022</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/3. SNVT Pembanguna Bendungan BBWS Pemali Juana/f. DPA SKPD 2022/DIPA Revisi VI.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Laporan Realisasi Anggaran 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/3. SNVT Pembanguna Bendungan BBWS Pemali Juana/c. LRA 2021/LRA TA 2021.PDF" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Neraca Anggaran 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/3. SNVT Pembanguna Bendungan BBWS Pemali Juana/b. Neraca 2021/Neraca TA 2021.PDF" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">RKA-KL TA 2022</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/3. SNVT Pembanguna Bendungan BBWS Pemali Juana/e. RKA SKPD 2022/RKAKL Revisi VI TA. 2022.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th valign="top" class="text-right" scope="row">•</th>
                        <td valign="top" class="text-left" colspan="5">SNVT PJSA BBWS Pemali Juana</td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Arus KAS 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/4. SNVT PJSA Pemali Juana/4. Arus Kas 2021/d.Arus Kas 2021-UnAudited.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Catatan Atas Laporan Keuangan 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/4. SNVT PJSA Pemali Juana/1. CALK 2021/a.CALK_SMT_II_SNVT_PJSAPJ_2021-UnAudited.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Daftar Aset dan Inventarisasi 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/4. SNVT PJSA Pemali Juana/7. Daftar aset dan investasi/DAFTAR ASET SNVT PJSA.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">DIPA TA 2022</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/4. SNVT PJSA Pemali Juana/6. DPA SKPD 2022/DIPA Revisi 4 TA. 2022.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Laporan Realisasi Anggaran 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/4. SNVT PJSA Pemali Juana/3. LRA 2021/c.LRA 2021-UnAudited.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Neraca Anggaran 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/4. SNVT PJSA Pemali Juana/2. Neraca 2021/b.Neraca 2021-UnAudited.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">RKA-KL TA 2022</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/4. SNVT PJSA Pemali Juana/5. RKA SKPD 2022/RKAKL Revisi 4 TA. 2022.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th valign="top" class="text-right" scope="row">•</th>
                        <td valign="top" class="text-left" colspan="5">SATKER OP SDA BBWS Pemali Juana</td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Arus KAS 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/5. SATKER OP SDA Pemali Juana/ARUS KAS 2021/BKU 2021/BKU Desember 2021.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Catatan Atas Laporan Keuangan 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/5. SATKER OP SDA Pemali Juana/CALK 2021/calk satker opsda_.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Daftar Aset dan Inventarisasi 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/5. SATKER OP SDA Pemali Juana/Daftar Asset dan Inventaris 2022/laporan intrakomp 31 Des 21.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">DIPA TA 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/5. SATKER OP SDA Pemali Juana/DPA SKPD 2022/PETIKAN DIPA REV 4.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Laporan Realisasi Anggaran 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/5. SATKER OP SDA Pemali Juana/LRA 2021/6. LRA_satker opsda.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Neraca Anggaran 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/5. SATKER OP SDA Pemali Juana/NERACA 2021/5. neraca satker opsda.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">RKA-KL TA 2022</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/5. SATKER OP SDA Pemali Juana/RKA SKPD 2022/RKAKL DIPA REV 4 OPSDA PJ.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th valign="top" class="text-right" scope="row">•</th>
                        <td valign="top" class="text-left" colspan="5">SNVT Air Tanah dan Air Baku</td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Arus KAS 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/6. SNVT Air Tanah dan Air Baku/d. Arus Kas 2021/KAS_633065.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Catatan Atas Laporan Keuangan 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/6. SNVT Air Tanah dan Air Baku/a. CALK 2021/CALK 2021.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Daftar Aset dan Inventarisasi 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/6. SNVT Air Tanah dan Air Baku/g. Daftar Aset dan Investasi/DAFAR ASET DAN INVESTASI 31 DESEMBER 2021.PDF" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">DIPA TA 2022</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/6. SNVT Air Tanah dan Air Baku/f. DPA SKPD 2022/DIPA Revisi 4 TA. 2022.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Laporan Realisasi Anggaran 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/6. SNVT Air Tanah dan Air Baku/c. LRA 2021/LRA 2021.PDF" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">Neraca Anggaran 2021</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/6. SNVT Air Tanah dan Air Baku/b. Neraca 2021/NERACA 2021.PDF" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                    <tr>
                        <th valign="top" class="text-right" scope="row"></th>
                        <td valign="top" class="text-left" colspan="2">RKA-KL TA 2022</td>
                        <td valign="top" class="text-center">Hard &amp; Soft</td>
                        <td valign="top" class="text-center">1 Tahun</td>
                        <!-- <td valign="top" class="text-left"><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/5. Laporan Keuangan/6. SNVT Air Tanah dan Air Baku/e. RKA SKPD 2022/RKAKL Revisi 4 TA. 2022.pdf" title="">link</a></td> -->
                        <td valign="top" class="text-left"><a href="#" data-toggle="modal" data-target="#staticBackdrop" title="">link</a></td>
                    </tr>
                </tbody>

                <thead>
                    <tr>
                        <th>
                            <h4><b>6.</b></h4>
                        </th>
                        <th colspan="5">
                            <h4><b>Penanggulangan Bencana</b></h4>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">•</td>
                        <td colspan="4">Prosedur peringatan dini dan prosedur evakuasi di kantor Badan Publik</td>
                        <td><a href="https://sda.pu.go.id/balai/bbwspemalijuana/files/informasi/sertamerta/Denah%20kantor.pdf">link</a></td>
                    </tr>
                </tbody>

                <thead>
                    <tr>
                        <th>
                            <h4><b>7.</b></h4>
                        </th>
                        <th colspan="5">
                            <h4><b>Ringkasan informasi tentang program dan/atau kegiatan yang sedang dijalankan dalam lingkup badan publik</b></h4>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">•</td>
                        <td>Kerangka Acuan Kerja (KAK)</td>
                        <td>Kerangka Acuan Kerja Kegiatan konsultansi Tahun 2022</td>
                        <td class="text-center">Hard &amp; Soft</td>
                        <td class="text-center">1 tahun</td>
                        <td><a href="https://sda.pu.go.id/balai/bbwspemalijuana/pages/kak">link</a></td>
                    </tr>
                </tbody>
            </table>
            <!-- Button trigger modal -->
            <!-- <button type="button" data-toggle="modal" data-target="#staticBackdrop">
                        Launch static backdrop modal
                    </button> -->

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Informasi Lebih Lanjut dapat menghubungi Helpdesk Online dan LUMPIA (Layanan Umum Permohonan Informasi Sumber Daya Air)
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                            <!-- <button type="button" class="btn btn-primary">Paham</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-default my-4">
            <div class="card-body p-3">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="fs-6 fw-semibold mb-0">Share:</h6>
                    <div class="d-flex">
                        <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-facebook" title="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-twitter" title="Twitter">
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-pinterest" title="Pinterest">
                            <i class="fa-brands fa-pinterest-p"></i>
                            <i class="fa-brands fa-pinterest-p"></i>
                        </a>
                        <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-whatsapp" title="Whatsapp">
                            <i class="fa-brands fa-whatsapp"></i>
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                        <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-rss" title="RSS">
                            <i class="fa-solid fa-rss"></i>
                            <i class="fa-solid fa-rss"></i>
                        </a>
                        <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-email3 me-0" title="Mail">
                            <i class="fa-solid fa-envelope"></i>
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section call-to-action bg-light-5 call-to-action-height-1 mt-2 mb-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="call-to-action-content text-center text-md-left appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" style="animation-delay: 100ms;">
                            <h5 class="font-weight-semibold" data-uw-rm-heading="level" role="heading" aria-level="3">Apakah informasi di atas cukup membantu?</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="call-to-action-btn appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
                            <a href="https://www.pu.go.id/cta/berita/yes/34943" class="button button-border button-small button-red button-circle text-uppercase" data-uw-rm-brl="false">
                                <span class="wrap">
                                    <span>YA</span>
                                    <i class="fas fa-check"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="call-to-action-btn appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
                            <a href="https://www.pu.go.id/cta/berita/no/34943" class="button button-border button-small button-red button-circle text-uppercase" data-uw-rm-brl="false">
                                <span class="wrap">
                                    <span>TIDAK</span>
                                    <i class="fas fa-times"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection