<header id="header" class="transparent-header semi-transparent dark" data-sticky-class="not-dark">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">
                <div id="logo">
                    <a href="{{ route('home') }}" class="p-2">
                        <img class="logo-default" src="/images/logo.png" style="height: 60px;" alt="Logo">
                        <img class="logo-dark" src="/images/logo-dark.png" style="height: 60px;" alt="Logo">
                    </a>
                </div>
                <div class="primary-menu-trigger">
                    <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                    <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                    </button>
                </div>
                <nav class="primary-menu">
                    <ul class="menu-container">
                        <li class="menu-item {{ request()->routeIs('home') ? 'current' : '' }}">
                            <a class="menu-link text-uppercase" href="{{ route('home') }}">
                                <div>Beranda</div>
                            </a>
                        </li>
                        <li class="menu-item mega-menu sub-menu {{ request()->routeIs('profile') | request()->routeIs('organization') ? 'current' : '' }}">
                            <a class="menu-link text-uppercase" href="#">
                                <div>Profil<i class="fa-solid fa-caret-down"></i></div>
                            </a>
                            <div class="mega-menu-content">
                                <div class="row g-0 align-items-stretch">
                                    <a href="#" class="col-lg-4 d-none d-lg-flex imagescale" style="background: linear-gradient(to bottom,rgba(255,255,255,0.001) 5%,var(--cnvs-themecolor) 70%), url('/images/post/3.jpg') center center / cover;">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content d-block">
                                                <div class="text-white all-ts mt-4 mb-4 animated op-1 fw-bold fs-5">Lebih dekat dengan Balai Besar Pelaksanaan Jalan Nasional</div>
                                                <div class="text-white all-ts mb-2 animated op-1">Anda bisa mendapatkan informasi tentang kami, organisasi, dan hal lainnya mengenai Balai Besar Pelaksanaan Jalan Nasional disini</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="sub-menu-container mega-menu-column col">
                                        <div class="container">
                                            <div class="row">
                                                <ul class="sub-menu-container mega-menu-column col-lg-3" style="box-sizing: border-box;">
                                                    <li class="menu-item mega-menu-title sub-menu {{ request()->routeIs('profile') ? 'current' : '' }}">
                                                        <a class="menu-link fw-bold" href="#">
                                                            <div>Tentang Kami</div>
                                                        </a>
                                                        <ul class="sub-menu-container" style="box-sizing: border-box;">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="{{ route('profile', 'tugas-fungsi') }}"><div>Tugas dan Fungsi</div></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="{{ route('profile', 'struktur-organisasi') }}"><div>Struktur Organisasi</div></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="{{ route('profile', 'informasi-pejabat') }}"><div>Informasi Pejabat</div></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="{{ route('profile', 'lokasi-kantor') }}"><div>Lokasi Kantor </div></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col-lg-6" style="box-sizing: border-box;">
                                                    <li class="menu-item mega-menu-title sub-menu {{ request()->routeIs('organization') ? 'current' : '' }}">
                                                        <a class="menu-link fw-bold" href="#">
                                                            <div>Organisasi</div>
                                                        </a>
                                                        <ul class="sub-menu-container" style="box-sizing: border-box;">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="{{ route('organization', 'umum-tata-usaha') }}"><div>Bagian Umum dan Tata Usaha</div></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="{{ route('organization', 'keterpaduan-pembangunan') }}"><div>Bidang Keterpaduan Pembangunan Infrastruktur  Jalan </div></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="{{ route('organization', 'pembangunan-jalan-jembatan') }}"><div>Bidang Pembangunan Jalan Jembatan</div></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="{{ route('organization', 'preservasi') }}"><div>Bidang Preservasi</div></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <!-- <ul class="sub-menu-container mega-menu-column col-lg-3" style="box-sizing: border-box;">
                                                    <li class="menu-item mega-menu-title sub-menu">
                                                        <a class="menu-link fw-bold" href="#">
                                                            <div>Publikasi</div>
                                                        </a>
                                                        <ul class="sub-menu-container" style="box-sizing: border-box;">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#"><div>Berita</div></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="https://fliphtml5.com/bookcase/zppyw"><div>Buletin</div></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#"><div>Infografis</div></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#"><div>Kartun</div></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="https://www.google.com/maps/d/u/0/embed?mid=1XSkRTxKMLw0v3DabAq302kxPmYnDa741&ll=-7.005951930188398%2C107.603394&z=9"><div>Peta Ruas</div></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul> -->
                                                <ul class="sub-menu-container mega-menu-column col-lg-3" style="box-sizing: border-box;">
                                                    <li class="menu-item mega-menu-title sub-menu">
                                                        <a class="menu-link fw-bold" href="#">
                                                            <div>Galeri</div>
                                                        </a>
                                                        <ul class="sub-menu-container" style="box-sizing: border-box;">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="{{ route('gallery') }}"><div>Foto</div></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="https://www.youtube.com/channel/UCY0_aWLhgheVwFRpQVwBvrg"><div>Video</div></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="sub-menu-trigger fa-solid fa-chevron-right"></button>
                        </li>
                        <!-- <li class="menu-item">
                            <a class="menu-link" href="#">
                                <div>Profil</div>
                            </a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="#"><div>Tugas dan Fungsi</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="#"><div>Struktur Organisasi</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="#"><div>Informasi Pejabat</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="#"><div>Lokasi Kantor </div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="#">
                                <div>Organisasi</div>
                            </a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="#"><div>Bagian Umum dan Tata Usaha</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="#"><div>Bidang Keterpaduan Pembangunan Infrastruktur  Jalan </div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="#"><div>Bidang Pembangunan Jalan Jembatan</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="#"><div>Bidang Preservasi</div></a>
                                </li>
                            </ul>
                        </li> -->
                        <li class="menu-item {{ request()->routeIs('publikasi-index') | request()->routeIs('publikasi-single') ? 'current' : '' }}">
                            <a class="menu-link text-uppercase" href="#">
                                <div>Publikasi</div>
                            </a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('publikasi-index') }}"><div>Berita</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="https://fliphtml5.com/bookcase/zppyw"><div>Buletin</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('publikasi-index') }}"><div>Infografis</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('publikasi-index') }}"><div>Kartun</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="https://www.google.com/maps/d/u/0/embed?mid=1XSkRTxKMLw0v3DabAq302kxPmYnDa741&ll=-7.005951930188398%2C107.603394&z=9"><div>Peta Ruas</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item {{ request()->routeIs('gallery') ? 'current' : '' }}">
                            <a class="menu-link text-uppercase" href="#">
                                <div>Galleri</div>
                            </a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('gallery') }}"><div>Foto</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="https://www.youtube.com/channel/UCY0_aWLhgheVwFRpQVwBvrg"><div>Video</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item {{ request()->routeIs('contact') ? 'current' : '' }}">
                            <a class="menu-link text-uppercase" href="{{ route('contact') }}">
                                <div>Kontak</div>
                            </a>
                        </li>
                    </ul>
                </nav>
                <form class="top-search-form" action="#" method="get">
                    <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                </form>
            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header>
