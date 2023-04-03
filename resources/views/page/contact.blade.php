@extends('layouts.app')
 
@section('title', 'Contact')

@section('breadcrumb')		
<section class="page-title page-title-mini">
    <div class="container">
        <div class="page-title-row">
            <div class="page-title-content">
                <h1>Kontak</h1>
                <span></span>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Kontak</a></li>
                </ol>
            </nav>
        </div>
    </div>
</section>
@endsection
 
@section('content')

<div class="row align-items-stretch col-mb-50">
    <div class="col-lg-8">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.424505690324!2d107.6853571!3d-6.9078017!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68ddf20cf5304b%3A0xda4d254f407c839f!2sBalai%20Besar%20Pelaksanaan%20Jalan%20Nasional%20DKI%20Jakarta%20-%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1680448472836!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-lg-4">
        <address>
            Jl. A.H. Nasution Jl. Arcamanik No., 264, Cisaranten Bina Harapan Kec. Arcamanik, Kota Bandung, Jawa Barat 40294
        </address>
        <abbr title="Phone Number"><strong>Phone:</strong></abbr> (022) - 783465<br>
        <abbr title="Fax"><strong>Fax:</strong></abbr> (022) - 783465<br>
        <abbr title="Email Address"><strong>Email:</strong></abbr> bbpjn_jktjabar@pu.go.id<br>
        <h3 class="mt-4">Media Sosial</h3>
        <div class="d-flex flex-wrap" style="--cnvs-socialicon-gap-y:5px;">
            <a href="#" class="social-icon si-small text-white bg-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon si-small text-white bg-youtube" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube">
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-youtube"></i>
            </a>
            <a href="#" class="social-icon si-small text-white bg-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter">
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="#" class="social-icon si-small text-white bg-instagram" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
                <i class="bi-instagram"></i>
                <i class="bi-instagram"></i>
            </a>
            <a href="#" class="social-icon si-small text-white bg-whatsapp" data-bs-toggle="tooltip" data-bs-placement="top" title="Linked In">
                <i class="fa-brands fa-whatsapp"></i>
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
    </div>
</div>

@endsection
