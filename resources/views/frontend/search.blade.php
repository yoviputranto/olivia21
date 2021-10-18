<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/style/search-page.css') }}">

    <title>EduMind</title>
</head>

<body>
    <!-- Navigation Bar -->
    @include('frontend.layouts.navbar')
    <!-- End of Navigation Bar -->

    <!-- Header -->
    <section class="header mb-0 d-none">
        <img class="vector-below img-fluid" src="{{ asset('frontend') }}/assets/bg/vector-2.png" width="600px">
        <img class="vector-above img-fluid" src="{{ asset('frontend') }}/assets/bg/vector-1.png" width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-12 col-lg-6 d-flex align-items-center">
                    <div class="text text-center text-lg-start">
                        <h4 class="text-uppercase">Selamat Datang di Situs</h4>
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/ic/edumind-header.png"
                            alt="Edumind-heading" width="450px">
                        <p>Edumind adalah sebuah situs yang berisi kumpulan event online seperti webinar, workshop,
                            ataupun kursus
                            dan juga terdapat ruang untuk diskusi.</p>
                        <button type="button" class="btn text-white fw-bold">Daftar Akun</button>
                    </div>
                </div>
                <div class="header-img col-12 col-lg-6 d-none d-lg-flex align-items-end">
                    <img class="img-fluid" src="{{ asset('frontend') }}/assets/illustration/ill-1.png"
                        alt="illustration" width="600px">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Header -->

    <!-- Statistic -->
    <!-- <section class="statistic mt-0">
    <div class="container">
      <div class="row statistic-row">
        <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
          <div class="row">
            <div class="col-5 img-column">
              <img class="img-fluid float-end" src="{{ asset('frontend') }}/assets/ic/person.png" width="60px">
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
              <img class="img-fluid float-end" src="{{ asset('frontend') }}/assets/ic/event.png" width="60px">
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
              <img class="img-fluid float-end" src="{{ asset('frontend') }}/assets/ic/world.png" width="60px">
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
              <img class="img-fluid float-end" src="{{ asset('frontend') }}/assets/ic/handshake.png" width="60px">
            </div>
            <div class="col-7 text-column text-white">
              <h3>310.901</h3>
              <h6>Partnerships</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
    <!-- End of Statistic -->

    <!-- Breadcrumb -->
    <!-- <section class="breadcrumb">
    <div class="container d-flex justify-content-center">
      <nav class="breadcrumb my-2" aria-label="breadcrumb">
        <ol class="list-group list-group-horizontal">
          <li class="breadcrumb-item"><a href="Link">Beranda</a></li>
          <li class="breadcrumb-item"><a href="Link">Event</a></li>
          <li class="breadcrumb-item"><a href="upload-event-page.html">Upload</a></li>
        </ol>
      </nav>
    </div>
  </section> -->
    <!-- End of Breadcrumb -->

    <!-- Tagline -->
    <!-- <section class="tagline-top">
    <div class="container d-flex justify-content-center text-white">
      <h3 class="m-0">Tagline</h3>
    </div>
  </section> -->
    <!-- ENnd of Tagline -->

    <!-- Search section -->
    <section class="search-result">
        <div class="container">
            <div class="search-heading mx-auto text-center">
                <h1>Search "{{ $keyword }}"</h1>
                <p><span>{{ count($events) + count($articles) }} Hasil</span> pencarian ditemukan</p>
            </div>
            @if (count($events) != 0)
                <div class="result-event-heading mt-4">
                    <p>Hasil pencarian dalam <span>"Event"</span></p>
                </div>
                <!-- Event row -->
                <div class="webinar-cards mt-5">
                    <div class="row">
                        @foreach ($events as $event)
                            <div class="col-12 col-lg-3 py-3">
                                <div class="card" style="width: 280px;">
                                    <img src="{{ Storage::url($event->gambar) }}" class="card-img-top">
                                    <div class="card-body">
                                        <ul class="card-info">
                                            <li class="list-unstyled">
                                                <img class="d-inline"
                                                    src="{{ asset('frontend') }}/assets/ic/title.png">
                                                <p class="d-inline">{{ $event->judul }}</p>
                                            </li>
                                            <li class="list-unstyled mt-2">
                                                <img class="d-inline"
                                                    src="{{ asset('frontend') }}/assets/ic/calendar.png">
                                                <p class="d-inline">{{ $event->tanggal }}</p>
                                            </li>
                                            <li class="list-unstyled mt-2">
                                                <img class="d-inline"
                                                    src="{{ asset('frontend') }}/assets/ic/category.png">
                                                <p class="d-inline">{{ $event->getJenis->name }}</p>
                                            </li>
                                        </ul>
                                        <div class="card-act d-flex justify-content-center mt-3">
                                            <a href="event-webinar-detail.html"
                                                class="btn btn-primary-none">Gratis/Beli</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach





                    </div>
                </div>
            @endif
            @if (count($articles) != 0)


                <div class="result-article-heading mt-5">
                    <p>Hasil pencarian dalam <span>"Artikel"</span></p>
                </div>
                <!-- Article row -->
                <div class="article-cards mt-5">
                    <div class="row">
                        @foreach ($articles as $article)
                            <div class="col-12 col-lg-4 mt-4">
                                <div class="card" style="width: 20rem;">
                                    <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-date">31 Agustus 2021, Admin</p>
                                        <h5 class="card-title">{{ $article->title }}</h5>
                                        <div class="card-act d-flex justify-content-between mt-3">
                                            <a href="article-read-page.html"
                                                class="btn btn-primary-none">Selengkapnya</a>
                                            <h5 class="card-date">{{ $article->getCategory->name }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            @endif
        </div>
    </section>
    <!-- End of Search section -->

    <!-- Tagline buttom -->

    <!-- ENd of Tagline buttom -->

    <!-- Footer -->
    @include('frontend.layouts.footer')
    <!-- End of Footer -->

    <!-- Copyright -->
    <section class="copyright">
        <div class="container text-center p-2">
            <p class="text-white m-0">Edumind @2021. All rights reserved.</p>
        </div>
    </section>
    <!-- End of Copyright -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <!-- FontAwesome JS -->
    <script src="https://kit.fontawesome.com/b3b03a4327.js" crossorigin="anonymous"></script>

</body>

</html>
