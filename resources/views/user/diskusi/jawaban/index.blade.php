@extends('frontend.layouts.master')

@push('stylePlus')
    <link rel="stylesheet" href="{{ url('frontend/style/disscussion-timeline-style.css') }}">
@endpush

@section('content')

    <!-- Header -->
    <section class="header">
        <img class="vector-above img-fluid" src="{{ url('frontend/assets/bg/vector-1.png') }}" alt="" width="600px">
        <img class="vector-below img-fluid d-none d-lg-block" src="{{ url('frontend/assets/bg/vector-2.png') }}" alt=""
            width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-6 d-flex align-items-center">
                    <div class="text">
                        <img class="img-fluid mb-5 ms-1" src="{{ url('frontend/assets/ic/edumind-header-alt.png') }}"
                            alt="logo" width="460px">
                        <h4>Diskusi</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="{{ url('frontend/assets/illustration/ill-8.png') }}" alt=""
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
                    <li class="breadcrumb-item"><a href="Link">Diskusi</a></li>
                    <li class="breadcrumb-item"><a href="Link">Timeline</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- Article Body -->
    <section class="article-body">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <div class="article-text">

                        <div class="article-comment mt-4" data-aos="fade-up">
                            @foreach ($pertanyaans as $pertanyaan)
                                <div class="article-comment-display mt-3 scale-up">
                                    <div class="comment-info d-flex justify-content-between">
                                        <div class="d-inline-flex">
                                            <img src="{{ url('frontend/assets/ic/person-comment.png') }}"
                                                alt="profile-img" width="48px">
                                            <div class="d-block">
                                                <span class="d-block fw-bold">{{ $pertanyaan->getUser->name }}</span>
                                                <span class="d-block">{{ $pertanyaan->created_at }}</span>
                                            </div>
                                        </div>
                                        <a href="">
                                            <img class="" src="{{ url('frontend/assets/ic/report.png') }}"
                                                alt="report-img" width="40px">
                                        </a>
                                    </div>
                                    <div class="comment-text">
                                        <a
                                            href="{{ route('pertanyaan-saya.show', $pertanyaan->id) }}">{{ $pertanyaan->pertanyaan }}</a>

                                    </div>
                                    <div class="like-comment mt-3 d-flex">
                                        <div class="comment d-inline mx-3 align-self-center">
                                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample"
                                                role="button" aria-expanded="false" aria-controls="collapseExample">
                                                Jawaab
                                            </a>
                                            <img class="me-0"
                                                src="{{ url('frontend/assets/ic/commment.png') }}" alt="">
                                        </div>
                                        <div class="comment d-inline mx-3 align-self-center">
                                            <span>Kategori</span>
                                        </div>
                                        <div class="ms-auto">
                                            <button type="submit" class="btn "><span><img
                                                        src="{{ url('frontend/assets/ic/share.png') }}"
                                                        width="20px"></span>
                                                Bagikan</button>
                                        </div>
                                    </div>
                                    <div class="collapse" id="collapseExample">
                                        <div class="article-comment-box mb-5">
                                            <h5 class="py-1">Ajukan Pertanyaan</h5>
                                            <form action="{{ route('jawaban-user.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @foreach ($pertanyaans as $pertanyaan)
                                                    <input type="hidden" name="pertanyaan_id"
                                                        value="{{ $pertanyaan->id }}">
                                                @endforeach
                                                <div class="form-floating">
                                                    <textarea class="form-control" id="floatingTextarea"
                                                        name="jawaban"></textarea>
                                                    <label for="floatingTextarea">Nanyanya
                                                        yg sopan ya adick-adick</label>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex">
                                                        <div class="input-group my-3">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <button type="submit" class="btn p-1 ms-auto">
                                                            Jawab <span><img class="m-0"
                                                                    src="{{ url('frontend/assets/ic/send.png') }}"
                                                                    width="20px"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="article-comment mt-4" data-aos="fade-up">
                            @foreach ($jawabans as $jawaban)
                                <div class="article-comment-display mt-3 scale-up">
                                    <div class="comment-info d-flex justify-content-between">
                                        <div class="d-inline-flex">
                                            <img src="{{ url('frontend/assets/ic/person-comment.png') }}"
                                                alt="profile-img" width="48px">
                                            <div class="d-block">
                                                <span class="d-block fw-bold">{{ $jawaban->getUser->name }}</span>
                                                <span class="d-block">{{ $jawaban->created_at }}</span>
                                            </div>
                                        </div>
                                        <a href="">
                                            <img class="" src="{{ url('frontend/assets/ic/report.png') }}"
                                                alt="report-img" width="40px">
                                        </a>
                                    </div>
                                    <div class="comment-text">
                                        <a
                                            href="{{ route('pertanyaan-saya.show', $jawaban->getPertanyaan->id) }}">{{ $jawaban->getPertanyaan->pertanyaan }}</a>

                                    </div>
                                    <div class="like-comment mt-3 d-flex">
                                        <div class="comment d-inline mx-3 align-self-center">
                                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample"
                                                role="button" aria-expanded="false" aria-controls="collapseExample">
                                                Jawaab
                                            </a>
                                            <img class="me-0"
                                                src="{{ url('frontend/assets/ic/commment.png') }}" alt="">
                                        </div>
                                        <div class="comment d-inline mx-3 align-self-center">
                                            <span>Kategori</span>
                                        </div>
                                        <div class="ms-auto">
                                            <button type="submit" class="btn "><span><img
                                                        src="{{ url('frontend/assets/ic/share.png') }}"
                                                        width="20px"></span>
                                                Bagikan</button>
                                        </div>
                                    </div>
                                    <div class="collapse" id="collapseExample">
                                        <div class="article-comment-box mb-5">
                                            <h5 class="py-1">Ajukan Pertanyaan</h5>
                                            <form action="{{ route('jawaban-user.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @foreach ($pertanyaans as $pertanyaan)
                                                    <input type="hidden" name="pertanyaan_id"
                                                        value="{{ $pertanyaan->id }}">
                                                @endforeach
                                                <div class="form-floating">
                                                    <textarea class="form-control" id="floatingTextarea"
                                                        name="jawaban"></textarea>
                                                    <label for="floatingTextarea">Nanyanya
                                                        yg sopan ya adick-adick</label>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex">
                                                        <div class="input-group my-3">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <button type="submit" class="btn p-1 ms-auto">
                                                            Jawab <span><img class="m-0"
                                                                    src="{{ url('frontend/assets/ic/send.png') }}"
                                                                    width="20px"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                            <div class="mt-3">
                                {{-- {!! $pertanyaans->links() !!} --}}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article Sidebar -->
                <div class="col-12 col-lg-3 sidebar d-none d-lg-block mt-4">
                    <div class="article-category-alt mb-4">
                        <div class="article-heading d-flex justify-content-center">
                            <img src="{{ url('frontend/assets/ic/category-svg.svg') }}" class="d-inline"
                                width="18px">
                            <h4 class="d-inline pt-1">Topik</h4>
                        </div>
                        <div class="article-list mt-2">
                            <ul>
                                <li><a href="" class="active">Topik 1</a></li>
                                <li><a href="">Topik 2</a></li>
                                <li><a href="">Topik 3</a></li>
                                <li><a href="">Topik 4</a></li>
                                <li><a href="">Topik 5</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Article Body -->


@endsection
