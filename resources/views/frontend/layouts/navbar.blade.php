<!-- Navigation Bar -->
{{-- <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('frontend/assets/ic/logo-horizontal.png') }}" width="120px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i title="" class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'beranda' ? 'active' : '' }}"
                        aria-current="page" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'sejarah' ? 'active' : '' }}"
                        href="{{ route('sejarah') }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'webinar' ? 'active' : '' }}"
                        href="{{ route('webinar') }}">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="discuss-page.html">Diskusi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'article' ? 'active' : '' }}"
                        href="{{ route('article') }}">Artikel</a>
                </li>
                @if (Auth::user())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle pt-1" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="img-fluid m-0" src="{{ asset('frontend') }}/assets/ic/logged-in-profile.png"
                                alt="" width="30px">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-black" href="#">Profile</a></li>
                            <li><a class="dropdown-item text-black" href="{{ route('beranda') }}">Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-black">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item log-in">
                        <a class="nav-link text-center text-black fw-bold" href="{{ route('login') }}">Masuk</a>
                    </li>
                @endif

            </ul>
            <div class="box-container">
                <table class="element-container">
                    <tr>
                        <td>
                            <form action="{{ route('search') }}" method="GET">
                                <input type="text" placeholder="Cari.." name="search" class="search">

                            </form>
                        </td>
                        <a href="#">
                            <img class="search-img" src="{{ asset('frontend/assets/ic/search-white.png') }}"
                                width="14px" alt="search">
                        </a>
                        <td>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</nav> --}}
<!-- End of Navigation Bar -->

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img class="img-fluid" src="http://edumind-update.test/frontend/assets/ic/logo-horizontal.png"
                alt="logo" width="120px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i title="" class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active {{ Route::currentRouteName() == 'beranda' ? 'active' : '' }}"
                        aria-current="page" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-black" href="http://edumind-update.test/profile">Sejarah</a>
                        </li>
                        <li><a class="dropdown-item text-black" href="#">Tugas &amp; Fungsi</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-black" href="#">Infografis</a></li>
                        <li><a class="dropdown-item text-black" href="#">Struktur Organisasi</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://edumind-update.test/program">Event</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Diskusi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-black" href="http://edumind-update.test/diskusi">Timeline</a>
                        </li>
                        <li><a class="dropdown-item text-black" href="#">Jawaban</a></li>
                        <li><a class="dropdown-item text-black" href="#">Pertanyaan</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-black" href="#">Pertanyaan saya</a></li>
                        <li><a class="dropdown-item text-black" href="#">Jawaban saya</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://edumind-update.test/artikel">Artikel</a>
                </li>
                <li class="nav-item log-in">
                    <a class="nav-link text-center text-black fw-bold" href="http://edumind-update.test/login">Masuk</a>
                </li>
            </ul>
            <div class="box-container">
                <table class="element-container">
                    <tbody>
                        <tr>
                            <td>
                                <form action="">
                                    <input type="text" placeholder="Cari.." class="search">
                                </form>
                            </td>
                            <td>
                                <a href="#">
                                    <img class="search-img"
                                        src="http://edumind-update.test/frontend/assets/ic/search-white.png"
                                        width="14px" alt="search">
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</nav>
<!-- End of Navigation Bar -->
