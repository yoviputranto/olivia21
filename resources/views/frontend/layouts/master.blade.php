<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('frontend/style/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @stack('stylePlus')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>EduMind - Webinar Program</title>

</head>

<body id="top">


    <!-- Navigation Bar -->

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="img-fluid" src="{{ url('frontend/assets/ic/logo-horizontal.png') }}" alt="logo"
                    width="120px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i title="" class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'beranda' ? 'active' : '' }}"
                            aria-current="page" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-black" href="{{ url('/profil/sejarah') }}">Sejarah</a>
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
                        <a class="nav-link {{ Route::currentRouteName() == 'event' ? 'active' : '' }}"
                            href="{{ url('/event') }}">Event</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Route::currentRouteName() == 'timeline' ? 'active' : '' }} dropdown-toggle"
                            href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Diskusi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-black" href="{{ url('/diskusi') }}">Timeline</a></li>
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
                        <a class="nav-link {{ Route::currentRouteName() == 'article' ? 'active' : '' }}"
                            href="{{ url('/artikel') }}">Artikel</a>
                    </li>
                    @if (Auth::user())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle pt-1" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="img-fluid m-0"
                                    src="{{ asset('frontend') }}/assets/ic/logged-in-profile.png" alt=""
                                    width="30px">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-black" href="#">Profile</a></li>
                                <li><a class="dropdown-item text-black" href="{{ route('beranda') }}">Dashboard</a>
                                </li>
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
                        <tbody>
                            <tr>
                                <td>
                                    <form action="{{ route('search') }}" method="GET">
                                        <input type="text" name="search" placeholder="Cari.." class="search">
                                    </form>
                                </td>
                                <td>
                                    <a href="#">
                                        <img class="search-img"
                                            src="{{ url('frontend/assets/ic/search-white.png') }}" width="14px"
                                            alt="search">
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


    @yield('content')



    <!-- Tagline buttom -->
    <section class="tagline mt-5">
        <div class="container d-flex justify-content-center text-white">
            <h3 class="m-0">Ingin berpartisipasi dalam suatu event atau diskusi? <span><a href="#">Daftar
                        Sekarang</a></span></h3>
        </div>
    </section>
    <!-- ENnd of Tagline buttom -->

    <!-- Footer -->
    <footer>
        <div class="container py-5">
            <div class="row text-white">
                <div class="col-6 col-lg-4">
                    <h4>Kontak</h4>
                    <div class="contact-list text-white">
                        <div class="contact-item">
                            <img src="{{ url('frontend/assets/ic/phone.png') }}">
                            <a href="#">089632101841</a>
                        </div>
                        <div class="contact-item">
                            <img src="{{ url('frontend/assets/ic/whatsapp.png') }}">
                            <a href="#">089632101841</a>
                        </div>
                        <div class="contact-item">
                            <img src="{{ url('frontend/assets/ic/telegram.png') }}">
                            <a href="#">089632101841</a>
                        </div>
                        <div class="contact-item">
                            <img src="{{ url('frontend/assets/ic/email.png') }}">
                            <a href="#">edumindindonedia@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <h4>Media Sosial</h4>
                    <div class="social-list text-white">
                        <div class="social-item">
                            <img src="{{ url('frontend/assets/ic/instagram.png') }}">
                            <a href="#">instagram</a>
                        </div>
                        <div class="social-item">
                            <img src="{{ url('frontend/assets/ic/facebook.png') }}">
                            <a href="#">facebook</a>
                        </div>
                        <div class="social-item">
                            <img src="{{ url('frontend/assets/ic/twitter.png') }}">
                            <a href="#">twitter</a>
                        </div>
                        <div class="social-item">
                            <img src="{{ url('frontend/assets/ic/web.png') }}">
                            <a href="#">web</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <h4>Sitemap</h4>
                    <div class="sitemap-item">
                        <a href="sitemap-page.html" class="text-white text-decoration-none">sitemap</a>
                    </div>
                </div>
                <div class="col-2">
                    <img src="{{ url('frontend/assets/ic/logo-vertical.png') }}" alt="EduMind-Logo" width="120px">
                </div>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Copyright -->
    <section class="copyright">
        <div class="container text-center p-2">
            <p class="text-white m-0">Edumind @2021. All rights reserved.</p>
        </div>
    </section>
    <!-- End of Copyright -->

    <a href="#top"
        style="position:fixed;right:20px;bottom:15px;background:#424874;color:white;padding:10px 15px;border-radius:5px">
        <i class="fa fa-chevron-up"></i>
    </a>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <!-- FontAwesome JS -->
    <script src="https://kit.fontawesome.com/b3b03a4327.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    @stack('jsPlus')

</body>

</html>