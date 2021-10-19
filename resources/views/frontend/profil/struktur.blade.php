@extends('frontend.layouts.master')

@push('stylePlus')
    <link rel="stylesheet" href="{{ url('frontend/style/profile-sejarah-style.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/style/profile-style.css') }}">
@endpush

@section('content')
    <!-- Header -->
    <section class="header">
        <img class="vector-below img-fluid" src="{{ url('frontend/assets/bg/vector-2.png') }}" alt="" width="600px">
        <img class="vector-above img-fluid d-none d-lg-block" src="{{ url('frontend/assets/bg/vector-1.png') }}" alt=""
            width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-6 d-flex align-items-center">
                    <div class="text">
                        <img class="img-fluid ms-1" src="{{ url('frontend/assets/ic/edumind-header-alt.png') }}"
                            alt="logo">
                        <h4>Profil</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="{{ url('frontend/assets/illustration/ill-6.png') }}" alt=""
                        width="500px">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Header -->

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <div class="container d-flex justify-content-center">
            <nav class="breadcrumb my-2" aria-label="breadcrumb">
                <ol class="list-group list-group-horizontal">
                    <li class="breadcrumb-item"><a href="Link">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="Link">Profie</a></li>
                    <li class="breadcrumb-item"><a href="Link">Sejarah</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- Infografis -->
    <section class="infografis">
        <div class="container mt-5">
            <div class="infografis-heading mx-auto text-center mb-5">
                <h1>Struktur Organisasi</h1>
            </div>
            <div class="infografis-body d-flex">
                <img class="img-fluid mx-auto my-5" src="./assets/img/bagan.png" alt="Bagan Struktur Organisasi"
                    width="900px">
            </div>
        </div>
    </section>
    <!-- End of History -->
@endsection
