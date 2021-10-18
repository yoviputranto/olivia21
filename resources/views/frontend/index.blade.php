@extends('frontend.layouts.master')

@push('stylePlus')
    <link rel="stylesheet" href="{{ url('frontend/style/logged-in-style.css') }}">
@endpush

@section('content')


    @if (Auth::user())
        <!-- Header -->
        <section class="header">
            <img class="vector-below img-fluid" src="{{ url('frontend/assets/bg/vector-2.png') }}" width="600px">
            <img class="vector-above img-fluid" src="{{ url('frontend/assets/bg/vector-1.png') }}" width="600px">
            <div class="container">
                <div class="row">
                    <div class="header-text col-12 col-lg-6 d-flex align-items-center">
                        <div class="text text-center text-lg-start">
                            <h4 class="text-uppercase">Selamat Datang di Situs</h4>
                            <img class="img-fluid" src="{{ url('frontend/assets/ic/edumind-header.png') }}"
                                width="450px">
                            <p>Edumind adalah sebuah situs yang berisi kumpulan event online seperti webinar, workshop,
                                ataupun kursus
                                dan juga terdapat ruang untuk diskusi.</p>
                            <button type="button" class="btn text-white fw-bold">Daftar Akun</button>
                        </div>
                    </div>
                    <div class="header-img col-12 col-lg-6 d-none d-lg-flex align-items-end">
                        <img class="img-fluid" src="{{ url('frontend/assets/illustration/ill-1.png') }}"
                            alt="illustration" width="600px">
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Header -->

        <!-- Statistic -->
        <section class="statistic" data-aos="fade-up">
            <div class="container">
                <div class="row statistic-row">
                    <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
                        <div class="row">
                            <div class="col-5 img-column">
                                <img class="img-fluid float-end" src="{{ url('frontend/assets/ic/person.png') }}"
                                    width="60px">
                            </div>
                            <div class="col-7 text-column text-white">
                                <h3>310.901</h3>
                                <h6>Akun Terdaftar</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
                        <div class="row">
                            <div class="col-5 img-column">
                                <img class="img-fluid float-end" src="{{ url('frontend/assets/ic/event.png') }}"
                                    width="60px">
                            </div>
                            <div class="col-7 text-column text-white">
                                <h3>310.901</h3>
                                <h6>Event Terdaftar</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
                        <div class="row">
                            <div class="col-5 img-column">
                                <img class="img-fluid float-end" src="{{ url('frontend/assets/ic/world.png') }}"
                                    width="60px">
                            </div>
                            <div class="col-7 text-column text-white">
                                <h3>310.901</h3>
                                <h6>Pengunjung Situs</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
                        <div class="row">
                            <div class="col-5 img-column">
                                <img class="img-fluid float-end" src="{{ url('frontend/assets/ic/handshake.png') }}"
                                    width="60px">
                            </div>
                            <div class="col-7 text-column text-white">
                                <h3>310.901</h3>
                                <h6>Partnerships</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Statistic -->

        <!-- 2W Questions Section -->
        <section class="TwoWQuestions mt-5 px-4 p-lg-0">
            <div class="container scale-up" data-aos="fade-up">
                <div class="row">
                    <div class="col-12 col-lg-6 px-5 pt-5">
                        <img class="img-fluid" src="{{ url('frontend/assets/illustration/ill-2.png') }}"
                            alt="illustration" width="500px">
                    </div>
                    <div class="col-12 col-lg-6 text-what">
                        <h4>What</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of 2W Questions Section -->


        <!-- Event -->
        <section class="event" data-aos="fade-up">
            <div class="container mt-5">
                <div class="event-heading mx-auto text-center">
                    <h1>Event Terpopuler</h1>
                </div>
                <div class="event-cards mt-5">
                    <div class="row slider">
                        <div class="col-12 col-lg-3 py-3">
                            <div class="card mx-auto scale-up" style="width: 280px;">
                                <img src="{{ url('frontend/assets/ic/blank-4x5.png') }}" class="card-img-top">
                                <div class="card-body">
                                    <ul class="card-info">
                                        <li class="list-unstyled">
                                            <img class="d-inline" src="{{ url('frontend/assets/ic/title.png') }}">
                                            <p class="d-inline">Judul</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/calendar.png') }}">
                                            <p class="d-inline">Tanggal</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/category.png') }}">
                                            <p class="d-inline">Event</p>
                                        </li>
                                    </ul>
                                    <div class="card-act d-flex justify-content-center mt-3">
                                        <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 py-3">
                            <div class="card mx-auto scale-up" style="width: 280px;">
                                <img src="{{ url('frontend/assets/ic/blank-4x5.png') }}" class="card-img-top">
                                <div class="card-body">
                                    <ul class="card-info">
                                        <li class="list-unstyled">
                                            <img class="d-inline" src="{{ url('frontend/assets/ic/title.png') }}">
                                            <p class="d-inline">Judul</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/calendar.png') }}">
                                            <p class="d-inline">Tanggal</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/category.png') }}">
                                            <p class="d-inline">Event</p>
                                        </li>
                                    </ul>
                                    <div class="card-act d-flex justify-content-center mt-3">
                                        <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 py-3">
                            <div class="card mx-auto scale-up" style="width: 280px;">
                                <img src="{{ url('frontend/assets/ic/blank-4x5.png') }}" class="card-img-top">
                                <div class="card-body">
                                    <ul class="card-info">
                                        <li class="list-unstyled">
                                            <img class="d-inline" src="{{ url('frontend/assets/ic/title.png') }}">
                                            <p class="d-inline">Judul</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/calendar.png') }}">
                                            <p class="d-inline">Tanggal</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/category.png') }}">
                                            <p class="d-inline">Event</p>
                                        </li>
                                    </ul>
                                    <div class="card-act d-flex justify-content-center mt-3">
                                        <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 py-3">
                            <div class="card mx-auto scale-up" style="width: 280px;">
                                <img src="{{ url('frontend/assets/ic/blank-4x5.png') }}" class="card-img-top">
                                <div class="card-body">
                                    <ul class="card-info">
                                        <li class="list-unstyled">
                                            <img class="d-inline" src="{{ url('frontend/assets/ic/title.png') }}">
                                            <p class="d-inline">Judul</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/calendar.png') }}">
                                            <p class="d-inline">Tanggal</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/category.png') }}">
                                            <p class="d-inline">Event</p>
                                        </li>
                                    </ul>
                                    <div class="card-act d-flex justify-content-center mt-3">
                                        <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Event -->

        <!-- Article -->
        <section class="event" data-aos="fade-up">
            <div class="container mt-3">
                <div class="event-heading mx-auto text-center">
                    <h1>Rekomendasi Event</h1>
                </div>
                <div class="event-cards mt-5">
                    <div class="row slider">
                        <div class="col-12 col-lg-3 py-3">
                            <div class="card mx-auto scale-up" style="width: 280px;">
                                <img src="{{ url('frontend/assets/ic/blank-4x5.png') }}" class="card-img-top">
                                <div class="card-body">
                                    <ul class="card-info">
                                        <li class="list-unstyled">
                                            <img class="d-inline" src="{{ url('frontend/assets/ic/title.png') }}">
                                            <p class="d-inline">Judul</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/calendar.png') }}">
                                            <p class="d-inline">Tanggal</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/category.png') }}">
                                            <p class="d-inline">Event</p>
                                        </li>
                                    </ul>
                                    <div class="card-act d-flex justify-content-center mt-3">
                                        <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 py-3">
                            <div class="card mx-auto scale-up" style="width: 280px;">
                                <img src="{{ url('frontend/assets/ic/blank-4x5.png') }}" class="card-img-top">
                                <div class="card-body">
                                    <ul class="card-info">
                                        <li class="list-unstyled">
                                            <img class="d-inline" src="{{ url('frontend/assets/ic/title.png') }}">
                                            <p class="d-inline">Judul</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/calendar.png') }}">
                                            <p class="d-inline">Tanggal</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/category.png') }}">
                                            <p class="d-inline">Event</p>
                                        </li>
                                    </ul>
                                    <div class="card-act d-flex justify-content-center mt-3">
                                        <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 py-3">
                            <div class="card mx-auto scale-up" style="width: 280px;">
                                <img src="{{ url('frontend/assets/ic/blank-4x5.png') }}" class="card-img-top">
                                <div class="card-body">
                                    <ul class="card-info">
                                        <li class="list-unstyled">
                                            <img class="d-inline" src="{{ url('frontend/assets/ic/title.png') }}">
                                            <p class="d-inline">Judul</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/calendar.png') }}">
                                            <p class="d-inline">Tanggal</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/category.png') }}">
                                            <p class="d-inline">Event</p>
                                        </li>
                                    </ul>
                                    <div class="card-act d-flex justify-content-center mt-3">
                                        <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 py-3">
                            <div class="card mx-auto scale-up" style="width: 280px;">
                                <img src="{{ url('frontend/assets/ic/blank-4x5.png') }}" class="card-img-top">
                                <div class="card-body">
                                    <ul class="card-info">
                                        <li class="list-unstyled">
                                            <img class="d-inline" src="{{ url('frontend/assets/ic/title.png') }}">
                                            <p class="d-inline">Judul</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/calendar.png') }}">
                                            <p class="d-inline">Tanggal</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline" src="{{ url('frontend/assets/ic/category.png') }}>
                                                <p class="      d-inline">Event</p>
                                        </li>
                                    </ul>
                                    <div class="card-act d-flex justify-content-center mt-3">
                                        <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Article -->

        <!-- Tagline -->
        <section class="tagline" data-aos="fade-up">
            <div class="container d-flex justify-content-center text-white">
                <h3 class="m-0">Tagline</h3>
            </div>
        </section>
        <!-- ENnd of Tagline -->

        <!-- Article -->
        <section class="article" data-aos="fade-up">
            <div class="container mt-3">
                <div class="article-heading mx-auto text-center">
                    <h1>Artikel Terkini</h1>
                </div>
                <div class="article-cards mt-5">
                    <div class="row slider">
                        @foreach ($articles as $article)
                            <div class="col-12 col-lg-4 py-3">
                                <div class="card mx-auto scale-up" style="width: 20rem;">
                                    <img src="{{ Storage::url($article->image) }}" class="card-img-top"
                                        alt="illustration">
                                    <div class="card-body">
                                        <p class="card-date">{{ $article->created_at }}, {{ $article->author }}
                                        </p>
                                        <h5 class="card-title">{{ $article->title }}</h5>
                                        <div class="card-act d-flex justify-content-between mt-3">
                                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                                            <h5 class="card-date">{{ $article->getCategory->name }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="col-12 col-lg-4 py-3">
                            <div class="card mx-auto scale-up" style="width: 20rem;">
                                <img src="{{ url('frontend/assets/illustration/no-photo.png') }}" class="card-img-top"
                                    alt="illustration">
                                <div class="card-body">
                                    <p class="card-date">31 Agustus 2021, Admin</p>
                                    <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Mauris ut enim in massa fringilla </h5>
                                    <div class="card-act d-flex justify-content-between mt-3">
                                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                                        <h5 class="card-date">Kategori</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 py-3">
                            <div class="card mx-auto scale-up" style="width: 20rem;">
                                <img src="{{ url('frontend/assets/illustration/no-photo.png') }}" class="card-img-top"
                                    alt="illustration">
                                <div class="card-body">
                                    <p class="card-date">31 Agustus 2021, Admin</p>
                                    <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Mauris ut enim in massa fringilla </h5>
                                    <div class="card-act d-flex justify-content-between mt-3">
                                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                                        <h5 class="card-date">Kategori</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 py-3">
                            <div class="card mx-auto scale-up" style="width: 20rem;">
                                <img src="{{ url('frontend/assets/illustration/no-photo.png') }}" class="card-img-top"
                                    alt="illustration">
                                <div class="card-body">
                                    <p class="card-date">31 Agustus 2021, Admin</p>
                                    <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Mauris ut enim in massa fringilla </h5>
                                    <div class="card-act d-flex justify-content-between mt-3">
                                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                                        <h5 class="card-date">Kategori</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 py-3">
                            <div class="card mx-auto scale-up" style="width: 20rem;">
                                <img src="{{ url('frontend/assets/illustration/no-photo.png') }}" class="card-img-top"
                                    alt="illustration">
                                <div class="card-body">
                                    <p class="card-date">31 Agustus 2021, Admin</p>
                                    <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Mauris ut enim in massa fringilla </h5>
                                    <div class="card-act d-flex justify-content-between mt-3">
                                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                                        <h5 class="card-date">Kategori</h5>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Article -->
    @else
        <!-- Header -->
        <section class="header mb-0">
            <img class="vector-below img-fluid" src="{{ url('frontend/assets/bg/vector-2.png') }}" width="600px">
            <img class="vector-above img-fluid" src="{{ url('frontend/assets/bg/vector-1.png') }}" width="600px">
            <div class="container">
                <div class="row">
                    <div class="header-text col-12 col-lg-6 d-flex align-items-center">
                        <div class="text text-center text-lg-start">
                            <h4 class="text-uppercase">Selamat Datang di Situs</h4>
                            <img class="img-fluid" src="{{ url('frontend/assets/ic/edumind-header.png') }}"
                                alt="Edumind-heading" width="450px">
                            <p>Edumind adalah sebuah situs yang berisi kumpulan event online seperti webinar, workshop,
                                ataupun
                                kursus
                                dan juga terdapat ruang untuk diskusi.</p>
                            <button type="button" class="btn text-white fw-bold">Daftar Akun</button>
                        </div>
                    </div>
                    <div class="header-img col-12 col-lg-6 d-none d-lg-flex align-items-end">
                        <img class="img-fluid" src="{{ url('frontend/assets/illustration/ill-1.png') }}"
                            alt="illustration" width="600px">
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Header -->

        <!-- Statistic -->
        <section class="statistic mt-0" data-aos="fade-up">
            <div class="container">
                <div class="row statistic-row">
                    <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
                        <div class="row">
                            <div class="col-5 img-column">
                                <img class="img-fluid float-end" src="{{ url('frontend/assets/ic/person.png') }}"
                                    width="60px">
                            </div>
                            <div class="col-7 text-column text-white">
                                <h3>310.901</h3>
                                <h6>Akun Terdaftar</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
                        <div class="row">
                            <div class="col-5 img-column">
                                <img class="img-fluid float-end" src="{{ url('frontend/assets/ic/event.png') }}"
                                    width="60px">
                            </div>
                            <div class="col-7 text-column text-white">
                                <h3>310.901</h3>
                                <h6>Event Terdaftar</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
                        <div class="row">
                            <div class="col-5 img-column">
                                <img class="img-fluid float-end" src="{{ url('frontend/assets/ic/world.png') }}"
                                    width="60px">
                            </div>
                            <div class="col-7 text-column text-white">
                                <h3>310.901</h3>
                                <h6>Pengunjung Situs</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
                        <div class="row">
                            <div class="col-5 img-column">
                                <img class="img-fluid float-end" src="{{ url('frontend/assets/ic/handshake.png') }}"
                                    width="60px">
                            </div>
                            <div class="col-7 text-column text-white">
                                <h3>310.901</h3>
                                <h6>Partnerships</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Statistic -->

        <!-- 2W Questions Section -->
        <section class="TwoWQuestions mt-5 px-4 p-lg-0">
            <div class="container scale-up" data-aos="fade-up">
                <div class="row">
                    <div class="col-12 col-lg-6 px-5 pt-5">
                        <img class="img-fluid" src="{{ url('frontend/assets/illustration/ill-2.png') }}"
                            alt="illustration" width="500px">
                    </div>
                    <div class="col-12 col-lg-6 text-what">
                        <h4>What</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.</p>
                    </div>
                </div>
            </div>
            <div class="container mt-5 scale-up" data-aos="fade-up">
                <div class="row">
                    <div class="col-12 col-lg-6 text-why">
                        <h4>Why</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.</p>
                    </div>
                    <div class="col-12 col-lg-6 px-5 pt-5">
                        <img class="img-fluid" src="{{ url('frontend/assets/illustration/ill-3.png') }}"
                            alt="illustration" width="500px">
                    </div>
                </div>
            </div>
        </section>
        <!-- End of 2W Questions Section -->

        <!-- Our Features -->
        <section class="our-features mt-5" data-aos="fade-up">
            <div class="container">
                <div class="our-features-header d-flex justify-content-center text-white">
                    <img class="img-fluid mx-5 d-none d-lg-block" src="{{ url('frontend/assets/ic/arrow-left.png') }}">
                    <h1>FITUR KAMI</h1>
                    <img class="img-fluid mx-5 d-none d-lg-block" src="{{ url('frontend/assets/ic/arrow-right.png') }}">
                </div>
                <div class="our-features-cards">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <div class="card mx-auto mb-4 mb-lg-0 scale-up" style="width: 18rem;">
                                <img src="{{ url('frontend/assets/illustration/card-ill-1.png') }}"
                                    class="card-img-top m-0 p-4" alt="illustration" width="200px">
                                <div class="card-body">
                                    <h5 class="card-title">Forum Diskusi</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod </p>
                                    <div class="float-end">
                                        <!-- Button trigger modal -->
                                        <a type="button" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#ForumModal">Selengkapnya <span><img
                                                    src="{{ url('frontend/assets/ic/arrow-mini-right.png') }}"></span></a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="ForumModal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header d-block justify-content-center">
                                                        <h5 class="text-center">Forum Diskusi</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque
                                                        consequuntur repudiandae, unde pariatur est nam.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-dismiss="modal">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card mx-auto mb-4 mb-lg-0 scale-up" style="width: 18rem;">
                                <img src="{{ url('frontend/assets/illustration/card-ill-2.png') }}"
                                    class="card-img-top m-0 p-4" alt="illustration" width="200px">
                                <div class="card-body">
                                    <h5 class="card-title">Webinar</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod </p>
                                    <div class="float-end">
                                        <!-- Button trigger modal -->
                                        <a type="button" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#WebinarModal">Selengkapnya <span><img
                                                    src="{{ url('frontend/assets/ic/arrow-mini-right.png') }}"></span></a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="WebinarModal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header d-block justify-content-center">
                                                        <h5 class="text-center">Webinar</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque
                                                        consequuntur repudiandae, unde pariatur est nam.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-dismiss="modal">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card mx-auto mb-4 mb-lg-0 scale-up" style="width: 18rem;">
                                <img src="{{ url('frontend/assets/illustration/card-ill-3.png') }}"
                                    class="card-img-top m-0 p-4" alt="illustration" width="200px">
                                <div class="card-body">
                                    <h5 class="card-title">Workshop</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod </p>
                                    <div class="float-end">
                                        <!-- Button trigger modal -->
                                        <a type="button" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#WorkshopModal">Selengkapnya <span><img
                                                    src="{{ url('frontend/assets/ic/arrow-mini-right.png') }}"></span></a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="WorkshopModal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header d-block justify-content-center">
                                                        <h5 class="text-center">Workshop</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque
                                                        consequuntur repudiandae, unde pariatur est nam.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-dismiss="modal">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card mx-auto mb-4 mb-lg-0 scale-up" style="width: 18rem;">
                                <img src="{{ url('frontend/assets/illustration/card-ill-4.png') }}"
                                    class="card-img-top m-0 p-4" alt="illustration" width="200px">
                                <div class="card-body">
                                    <h5 class="card-title">Kursus</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod </p>
                                    <div class="float-end">
                                        <!-- Button trigger modal -->
                                        <a type="button" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#KursusModal">Selengkapnya <span><img
                                                    src="{{ url('frontend/assets/ic/arrow-mini-right.png') }}"></span></a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="KursusModal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header d-block justify-content-center">
                                                        <h5 class="text-center">Kursus</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque
                                                        consequuntur repudiandae, unde pariatur est nam.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-dismiss="modal">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Our Features -->

        <!-- FAQ -->
        <section class="faq-dropdown" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 d-none d-lg-block">
                        <div class="d-flex justify-content-end align-self-lg-center">
                            <img class="img-fluid" src="{{ url('frontend/assets/illustration/ill-4.png') }}"
                                alt="illustration" width="450px">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="question-col">
                            <h2 class="title text-center text-lg-start">Frequently Asked Questions</h2>
                            <div class="quetion-list">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                Bagaimana cara mengikuti webinar, workshop, dan kursus di Edumind?
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do eiusmod</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Bagaimana cara daftar di Edumind?
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do eiusmod</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                aria-expanded="false" aria-controls="flush-collapseThree">
                                                Bagaimana cara mengunggah program di Edumind?
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do eiusmod</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of FAQ -->

        <!-- Tagline -->
        <section class="tagline">
            <div class="container d-flex justify-content-center text-white">
                <h3 class="m-0">Tagline</h3>
            </div>
        </section>
        <!-- ENnd of Tagline -->

        <!-- Testimonial & Article -->
        <section class="testimonial-article" data-aos="fade-up">
            <div class="container mt-3">
                <div class="testimonial-heading mx-auto text-center">
                    <h1>Apa kata mereka?</h1>
                </div>

                <!-- Swiper -->
                <div class="swiper mySwiper mt-5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide d-flex justify-content-center">
                            <div class="card scale-up">
                                <div class="card-img d-flex justify-content-center py-4">
                                    <img src="{{ url('frontend/assets/profile/profile-1.jpeg') }}"
                                        class="img-fluid" alt="Photo-profile">
                                </div>
                                <div class="card-body text-center p-4">
                                    <p class="card-text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et nostrud exercitation ullac.”</p>
                                    <h5 class="card-title">- yung</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide d-flex justify-content-center">
                            <div class="card scale-up">
                                <div class="card-img d-flex justify-content-center py-4">
                                    <img src="{{ url('frontend/assets/profile/profile-1.jpeg') }}"
                                        class="img-fluid" alt="Photo-profile">
                                </div>
                                <div class="card-body text-center p-4">
                                    <p class="card-text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et nostrud exercitation ullac.”</p>
                                    <h5 class="card-title">- Bram</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide d-flex justify-content-center">
                            <div class="card scale-up">
                                <div class="card-img d-flex justify-content-center py-4">
                                    <img src="{{ url('frontend/assets/profile/profile-1.jpeg') }}"
                                        class="img-fluid" alt="Photo-profile">
                                </div>
                                <div class="card-body text-center p-4">
                                    <p class="card-text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et nostrud exercitation ullac.”</p>
                                    <h5 class="card-title">- yung Bram</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide d-flex justify-content-center">
                            <div class="card scale-up">
                                <div class="card-img d-flex justify-content-center py-4">
                                    <img src="{{ url('frontend/assets/profile/profile-1.jpeg') }}"
                                        class="img-fluid" alt="Photo-profile">
                                </div>
                                <div class="card-body text-center p-4">
                                    <p class="card-text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et nostrud exercitation ullac.”</p>
                                    <h5 class="card-title">- Bram yung</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Testimonial -->

        <!-- Article -->
        <section class="article" data-aos="fade-up">
            <div class="container mt-3">
                <div class="article-heading mx-auto">
                    <h1>Artikel Terkini</h1>
                </div>
                <div class="article-cards mt-5">
                    <div class="row slider">
                        <div class="col-12 col-lg-4 py-3">
                            <div class="card mx-auto scale-up" style="width: 20rem;">
                                <img src="{{ url('frontend/assets/illustration/no-photo.png') }}" class="card-img-top"
                                    alt="illustration">
                                <div class="card-body">
                                    <p class="card-date">31 Agustus 2021, Admin</p>
                                    <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Mauris
                                        ut enim in massa
                                        fringilla </h5>
                                    <div class="card-act d-flex justify-content-between mt-3">
                                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                                        <h5 class="card-date">Kategori</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 py-3">
                            <div class="card mx-auto scale-up" style="width: 20rem;">
                                <img src="{{ url('frontend/assets/illustration/no-photo.png') }}" class="card-img-top"
                                    alt="illustration">
                                <div class="card-body">
                                    <p class="card-date">31 Agustus 2021, Admin</p>
                                    <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Mauris
                                        ut enim in massa
                                        fringilla </h5>
                                    <div class="card-act d-flex justify-content-between mt-3">
                                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                                        <h5 class="card-date">Kategori</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 py-3">
                            <div class="card mx-auto scale-up" style="width: 20rem;">
                                <img src="{{ url('frontend/assets/illustration/no-photo.png') }}" class="card-img-top"
                                    alt="illustration">
                                <div class="card-body">
                                    <p class="card-date">31 Agustus 2021, Admin</p>
                                    <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Mauris
                                        ut enim in massa
                                        fringilla </h5>
                                    <div class="card-act d-flex justify-content-between mt-3">
                                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                                        <h5 class="card-date">Kategori</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 py-3">
                            <div class="card mx-auto scale-up" style="width: 20rem;">
                                <img src="{{ url('frontend/assets/illustration/no-photo.png') }}" class="card-img-top"
                                    alt="illustration">
                                <div class="card-body">
                                    <p class="card-date">31 Agustus 2021, Admin</p>
                                    <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Mauris
                                        ut enim in massa
                                        fringilla </h5>
                                    <div class="card-act d-flex justify-content-between mt-3">
                                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                                        <h5 class="card-date">Kategori</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Article -->
    @endif


@endsection

@push('jsPlus')

    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "1",
            coverflowEffect: {
                rotate: 0,
                stretch: 90,
                depth: 260,
                modifier: 0,
                slideShadows: true,
            },
            loop: true,
            breakpoints: {

                // when window width is >= 320px
                320: {
                    effect: "coverflow",
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: "1",
                    coverflowEffect: {
                        rotate: 0,
                        stretch: 0,
                        depth: 100,
                        modifier: 2,
                        slideShadows: false,
                    },
                    loop: true,
                },
                // when window width is >= 320px
                992: {
                    effect: "coverflow",
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: "2",
                    coverflowEffect: {
                        rotate: 0,
                        stretch: 90,
                        depth: 300,
                        modifier: 1,
                        slideShadows: false,
                    },
                    loop: true,
                },
            }
        });
    </script>

    <script>
        $('.slider').slick({
            dots: true,
            infinite: true,
            speed: 1200,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<span class="prev-arrow"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="next-arrow"><i class="fas fa-chevron-right"></i></span>',
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
@endpush