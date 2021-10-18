@extends('frontend.layouts.master')

@push('stylePlus')
    <link rel="stylesheet" href="{{ url('frontend/style/article-style.css') }}">
@endpush

@section('content')

    <!-- Header -->
    <section class="header">
        <img class="vector-above img-fluid" src="{{ url('frontend/assets/bg/vector-1.png') }}" alt="" width="600px">
        <img class="vector-below img-fluid d-none d-lg-block" src="{{ url('frontend/assets/bg/vector-2.png') }}" alt=""
            width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-12 col-lg-6 d-flex align-items-center">
                    <div class="text">
                        <img class="img-fluid mb-5 ms-1" src="{{ url('frontend/assets/ic/edumind-header-alt.png') }}"
                            alt="logo">
                        <h4>Artikel</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="{{ url('frontend/assets/illustration/ill-5.png') }}" alt=""
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

    <!-- Article -->
    <section class="article">
        <div class="container mt-3">
            <div class="article-categories mt-5">
                <div class="row slider">
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category-active text-white">
                            Semua
                        </a>
                    </div>
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category text-white">
                            Kategori
                        </a>
                    </div>
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category text-white">
                            Kategori
                        </a>
                    </div>
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category text-white">
                            Kategori
                        </a>
                    </div>
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category text-white">
                            Kategori
                        </a>
                    </div>
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category text-white">
                            Kategori
                        </a>
                    </div>
                </div>
            </div>
            <div class="article-cards mt-5" data-aos="fade-up">
                <div class="row">
                    @foreach ($articles as $article)
                        <div class="col-12 col-lg-4 py-3">
                            <div class="card mx-auto scale-up" style="width: 20rem;">
                                <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="illustration">
                                <div class="card-body">
                                    <p class="card-date">{{ $article->created_at }}, {{ $article->author }}
                                    </p>
                                    <h5 class="card-title">{{ $article->title }}</h5>
                                    <div class="card-act d-flex justify-content-between mt-3">
                                        <a href="{{ route('detailarticle', $article->slug) }}"
                                            class="btn btn-primary">Selengkapnya</a>
                                        <h5 class="card-date">{{ $article->getCategory->name }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12 col-lg-4 mt-4">
                        <div class="card mx-auto scale-up" style="width: 20rem;">
                            <img src="{{ url('frontend/assets/illustration/no-photo.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <p class="card-date">31 Agustus 2021, Admin</p>
                                <h5 class="card-title">pLorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                                    ut enim in massa fringilla </h5>
                                <div class="card-act d-flex justify-content-between mt-3">
                                    <a href="{{ url('artikel/read') }}" class="btn btn-primary">Selengkapnya</a>
                                    <h5 class="card-date">Kategori</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 mt-4">
                        <div class="card mx-auto scale-up" style="width: 20rem;">
                            <img src="{{ url('frontend/assets/illustration/no-photo.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <p class="card-date">31 Agustus 2021, Admin</p>
                                <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                                    ut enim in massa fringilla </h5>
                                <div class="card-act d-flex justify-content-between mt-3">
                                    <a href="{{ url('artikel/read') }}" class="btn btn-primary">Selengkapnya</a>
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

@endsection

@push('jsPlus')

    <script>
        $('.slider').slick({
            dots: false,
            infinite: true,
            speed: 1200,
            slidesToShow: 5,
            slidesToScroll: 1,
            prevArrow: '<span class="prev-arrow"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="next-arrow"><i class="fas fa-chevron-right"></i></span>',
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 5,
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
