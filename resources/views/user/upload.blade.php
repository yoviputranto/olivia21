@extends('frontend.layouts.master')

@push('stylePlus')
    <link rel="stylesheet" href="{{ url('frontend/style/upload-event-style.css') }}">
@endpush

@section('title', '- Upload Event')

@section('content')
    {{-- <!-- Header -->
    <section class="header d-none">
        <img class="vector-above img-fluid" src="./assets/bg/vector-1.png" alt="" width="600px">
        <img class="vector-below img-fluid d-none d-lg-block" src="./assets/bg/vector-2.png" alt="" width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-12 col-lg-6 d-flex align-items-center">
                    <div class="text">
                        <img class="img-fluid mb-5 ms-1" src="./assets/ic/edumind-header-alt.png" alt="logo" width="460px">
                        <h4>Event</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="./assets/illustration/ill-7.png" alt="" width="500px">
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
                    <li class="breadcrumb-item"><a href="Link">Event</a></li>
                    <li class="breadcrumb-item"><a href="Link">Upload</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- Event upload -->
    <section class="event-upload">
        <div class="container mt-3">
            <!-- Webinar list section -->
            <div class="event-upload-heading mx-auto text-center mb-4">
                <div class="text-decoration-none" href="program-webinar-category.html">
                    <h1>Upload</h1>
                </div>
            </div>
            <form action="">
                <div class="upload-card mt-5 px-4">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <div class="card-heading text-center my-3">
                                <h4>Detail Acara</h4>
                            </div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="event-category col-6">
                                        <h6 class="form-heading m-0">Jenis</h6>

                                        <div class="form-check d-inline-block me-3">
                                            <input class="form-check-input" type="radio" name="metodePendaftaran"
                                                id="eventWebinar" value="1">
                                            <label class="form-check-label" for="via-edumind">
                                                Webinar
                                            </label>
                                        </div>
                                        <div class="form-check d-inline-block me-3">
                                            <input class="form-check-input" type="radio" name="metodePendaftaran"
                                                id="eventCourse" value="3">
                                            <label class="form-check-label" for="via-eksternal">
                                                Kursus
                                            </label>
                                        </div>
                                        <div class="form-check d-inline-block me-3">
                                            <input class="form-check-input" type="radio" name="metodePendaftaran"
                                                id="eventWorkshop" value="2">
                                            <label class="form-check-label" for="via-eksternal">
                                                Workshop
                                            </label>
                                        </div>
                                    </div>

                                    <div class="event-date col-6">
                                        <h6 class="form-heading m-0">Tanggal Pendaftaran</h6>
                                        <div class="form-date d-flex">
                                            <input type="date" id="" class="form-control form-input-box date-picker">


                                            <span class="align-content-center mx-1 py-1">-</span>


                                            <input type="date" id="" class="form-control form-input-box date-picker">

                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="event-category">
                                        <h6 class="form-heading m-0">Judul</h6>
                                        <input type="text" placeholder="Type here..." class="form-control form-input-box"
                                            id="input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="event-category">
                                        <h6 class="form-heading m-0">Event Organizer</h6>
                                        <input type="text" placeholder="Type here..." class="form-control form-input-box"
                                            id="input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="event-category">
                                        <h6 class="form-heading m-0">Deskripsi</h6>
                                        <div class="form-floating">

                                            <textarea class="form-control form-input-textarea"
                                                placeholder="Leave a comment here" id="summernote"></textarea>

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="event-date col-4">
                                            <h6 class="form-heading m-0">Tanggal Acara</h6>
                                            <div class="form-date d-flex">
                                                <form action="">
                                                    <input type="date" id="picker-date-event"
                                                        class="form-control form-input-box">
                                                </form>
                                            </div>
                                        </div>
                                        <div class="event-date col-4">
                                            <h6 class="form-heading m-0">Waktu Acara</h6>
                                            <div class="form-date d-flex">

                                                <input type="time" id="picker-time-start"
                                                    class="form-control form-input-box">

                                            </div>
                                        </div>
                                        <div class="event-category col-4">
                                            <h6 class="form-heading m-0">Kategori</h6>
                                            <div class="input-group mb-3">
                                                <select class="btn-dropdown custom-select" id="inputGroupSelect03">
                                                    <option value="">Pilih Kategori</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="event-category">
                                            <h6 class="form-heading m-0">Eligible</h6>
                                            <div class="form-floating">
                                                <textarea class="form-control form-input-textarea"
                                                    placeholder="Leave a comment here" id="floatingTextarea1"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="event-category">
                                            <h6 class="form-heading m-0">Benefit</h6>
                                            <div class="form-floating">
                                                <textarea class="form-control form-input-textarea"
                                                    placeholder="Leave a comment here" id="floatingTextarea2"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="event-category">
                                            <h6 class="form-heading m-0">Biaya Pendaftaran</h6>
                                            <div class="form-check d-inline-block">
                                                <input class="form-check-input" type="radio" name="biayaPendaftaran"
                                                    id="radio-gratis" checked>
                                                <label class="form-check-label" for="radio-gratis">
                                                    Gratis
                                                </label>
                                            </div>
                                            <div class="form-check d-inline-block ms-5">
                                                <input class="form-check-input mt-2" type="radio" name="biayaPendaftaran"
                                                    id="radio-bayar">
                                                <label class="form-check-label" for="radio-bayar">
                                                    <input type="text" placeholder="Rp | "
                                                        class="form-control form-input-box" id="input">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="event-category" id="registerMethod">
                                            <h6 class="form-heading m-0">Metode Pendaftaran</h6>
                                            <div class="form-check d-inline-block">
                                                <input class="form-check-input" type="radio" name="metodePendaftaran"
                                                    id="viaEdumind" checked>
                                                <label class="form-check-label" for="via-edumind">
                                                    Via edumind
                                                </label>
                                            </div>
                                            <div class="form-check d-inline-block ms-5">
                                                <input class="form-check-input" type="radio" name="metodePendaftaran"
                                                    id="viaEksternal">
                                                <label class="form-check-label" for="via-eksternal">
                                                    Via eksternal
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="event-category">
                                            <h6 class="form-heading m-0" id="linkHeading">Tautan Virtual Meeting</h6>
                                            <input type="text" placeholder="Type here..."
                                                class="form-control form-input-box" id="input">
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>

                        <div class="col-12 col-lg-5">
                            <div class="card-heading-col-5 text-center my-3">
                                <h4>Poster</h4>
                            </div>
                            <div class="row mb-3">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <h6 class="form-heading m-0">Poster Acara</h6>
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" id="inputGroupFile02">
                                        </div>
                                        <div class="d-inline">
                                            <ul>
                                                <li>Ukuran maksimal 2 mb</li>
                                                <li>Rasio poster 4:5 </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-heading-col-5 text-center my-3">
                                <h4>Social Media</h4>
                            </div>
                            <div class="row mb-3">
                                <div class="event-category col-6">
                                    <h6 class="form-heading m-0">Email</h6>
                                    <input type="email" placeholder="Type here..." class="form-control form-input-box"
                                        id="input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="event-category col-6">
                                    <h6 class="form-heading m-0">WhatsApp</h6>
                                    <input type="text" placeholder="wa.me/" class="form-control form-input-box" id="input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="event-category col-6">
                                    <h6 class="form-heading m-0">Instagram</h6>
                                    <input type="email" placeholder="instagram.com/" class="form-control form-input-box"
                                        id="input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" type="submit" class="btn btn-upload d-inline mt-5">
                        <div class="row">
                            <div class="col-7 d-flex justify-content-end pe-5">
                                Upload
                            </div>
                            <div class="col-5 d-flex justify-content-end">
                                <img class="pt-1" src="{{ url('frontend/assets/ic/upload-svg.svg') }}"
                                    width="20px">
                            </div>
                        </div>
                    </a>
            </form>

        </div>
    </section>
    <!-- End of Webinar --> --}}

    <!-- Header -->
    <section class="header d-none">
        <img class="vector-above img-fluid" src="./assets/bg/vector-1.png" alt="" width="600px">
        <img class="vector-below img-fluid d-none d-lg-block" src="./assets/bg/vector-2.png" alt="" width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-12 col-lg-6 d-flex align-items-center">
                    <div class="text">
                        <img class="img-fluid mb-5 ms-1" src="./assets/ic/edumind-header-alt.png" alt="logo" width="460px">
                        <h4>Event</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="./assets/illustration/ill-7.png" alt="" width="500px">
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
                    <li class="breadcrumb-item"><a href="Link">Event</a></li>
                    <li class="breadcrumb-item"><a href="Link">Upload</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- Event upload -->
    <section class="event-upload">
        <div class="container mt-3">
            <!-- Webinar list section -->
            <div class="event-upload-heading mx-auto text-center mb-4">
                <div class="text-decoration-none" href="program-webinar-category.html">
                    <h1>Upload</h1>
                </div>
            </div>
            <form action="">
                <div class="upload-card mt-5 px-4">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <div class="card-heading text-center my-3">
                                <h4>Detail Acara</h4>
                            </div>
                            <div class="card-body">

                                <div class="row mb-3">
                                    <div class="event-category col-6">
                                        <h6 class="form-heading m-0">Jenis</h6>
                                        <div class="form-check d-inline-block me-3">
                                            <input class="form-check-input" type="radio" value="1" name="id_jenis"
                                                id="eventWebinar">
                                            <label class="form-check-label" for="via-edumind">
                                                Webinar
                                            </label>
                                        </div>
                                        <div class="form-check d-inline-block me-3">
                                            <input class="form-check-input" type="radio" value="3" name="id_jenis"
                                                id="eventCourse">
                                            <label class="form-check-label" for="via-eksternal">
                                                Kursus
                                            </label>
                                        </div>
                                        <div class="form-check d-inline-block me-3">
                                            <input class="form-check-input" type="radio" value="2" name="id_jenis"
                                                id="eventWorkshop">
                                            <label class="form-check-label" for="via-eksternal">
                                                Workshop
                                            </label>
                                        </div>
                                    </div>

                                    <div class="event-date col-5">
                                        <h6 class="form-heading m-0">Waktu Pendaftaran</h6>
                                        <div class="form-date d-flex">

                                            <input type="date" id="" class="form-control form-input-box date-picker">
            </form>

            <span class="align-content-center mx-3 py-1">-</span>


            <input type="time" id="" class="form-control form-input-box date-picker">
            </form>
        </div>
        </div>
        </div>
        <div class="row mb-3">
            <div class="event-category col-7">
                <h6 class="form-heading m-0">Jenis</h6>

                <div class="input-group mb-3">
                    <select class="btn-dropdown custom-select">
                        <option value="1" id="webinar">Webinar</option>
                        <option value="2">Kursus</option>
                        <option value="3" id="workshop">Workshop</option>
                    </select>
                </div>
            </div>

            <div class="event-date col-6">

            </div>
        </div>
        <div class="row mb-3">
            <div class="event-category">
                <h6 class="form-heading m-0">Judul</h6>
                <input type="text" placeholder="Type here..." class="form-control form-input-box" id="input">
            </div>
        </div>
        <div class="row mb-3">
            <div class="event-category">
                <h6 class="form-heading m-0">Event Organizer</h6>
                <input type="text" placeholder="Type here..." class="form-control form-input-box" id="input">
            </div>
        </div>
        <div class="row mb-3">
            <div class="event-category">
                <h6 class="form-heading m-0">Deskripsi</h6>
                <div class="form-floating">
                    <textarea class="form-control form-input-textarea" placeholder="Leave a comment here"
                        id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Type here...</label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="event-date col-6">
                <h6 class="form-heading m-0">Tanggal</h6>
                <div class="form-date d-flex">

                    <input type="text" id="picker-date-event" class="form-control form-input-box">

                </div>
            </div>
            <div class="event-date col-6">
                <h6 class="form-heading m-0">Waktu</h6>
                <div class="form-date d-flex">

                    <input type="text" id="picker-time-start" class="form-control form-input-box">


                    <span class="align-content-center mx-3 py-1">-</span>


                    <input type="text" id="picker-time-end" class="form-control form-input-box">

                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="event-category col-6">
                <h6 class="form-heading m-0">Kategori</h6>
                <div class="input-group mb-3">
                    <select class="btn-dropdown custom-select" id="inputGroupSelect03">
                        <option value="1">Kategori 1</option>
                        <option value="2">Kategori 2</option>
                        <option value="3">Kategori 3</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="event-category">
                <h6 class="form-heading m-0">Eligible</h6>
                <div class="form-floating">
                    <textarea class="form-control form-input-textarea" placeholder="Leave a comment here"
                        id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Type here...</label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="event-category">
                <h6 class="form-heading m-0">Benefit</h6>
                <div class="form-floating">
                    <textarea class="form-control form-input-textarea" placeholder="Leave a comment here"
                        id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Type here...</label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="event-category">
                <h6 class="form-heading m-0">Biaya Pendaftaran</h6>
                <div class="form-check d-inline-block">
                    <input class="form-check-input" type="radio" name="biayaPendaftaran" id="radio-gratis" checked>
                    <label class="form-check-label" for="radio-gratis">
                        Gratis
                    </label>
                </div>
                <div class="form-check d-inline-block ms-5">
                    <input class="form-check-input mt-2" type="radio" name="biayaPendaftaran" id="radio-bayar">
                    <label class="form-check-label" for="radio-bayar">
                        <input type="text" placeholder="Rp | " class="form-control form-input-box" id="input">
                    </label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="event-category" id="registerMethod">
                <h6 class="form-heading m-0">Metode Pendaftaran</h6>
                <div class="form-check d-inline-block">
                    <input class="form-check-input" type="radio" name="metodePendaftaran" id="viaEdumind" checked>
                    <label class="form-check-label" for="via-edumind">
                        Via edumind
                    </label>
                </div>
                <div class="form-check d-inline-block ms-5">
                    <input class="form-check-input" type="radio" name="metodePendaftaran" id="viaEksternal">
                    <label class="form-check-label" for="via-eksternal">
                        Via eksternal
                    </label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="event-category">
                <h6 class="form-heading m-0" id="linkHeading">Tautan Virtual Meeting</h6>
                <input type="text" placeholder="Type here..." class="form-control form-input-box" id="input">
            </div>
        </div>
        </div>
        </div>

        <div class="col-12 col-lg-5">
            <div class="card-heading-col-5 text-center my-3">
                <h4>Poster</h4>
            </div>
            <div class="row mb-3">
                <div class="card-body">
                    <div class="row mb-3">
                        <h6 class="form-heading m-0">Poster Acara</h6>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02">
                        </div>
                        <div class="d-inline">
                            <ul>
                                <li>Ukuran maksimal 2 mb</li>
                                <li>Rasio poster 4:5 </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-heading-col-5 text-center my-3">
                <h4>Social Media</h4>
            </div>
            <div class="row mb-3">
                <div class="event-category col-6">
                    <h6 class="form-heading m-0">Email</h6>
                    <input type="email" placeholder="Type here..." class="form-control form-input-box" id="input">
                </div>
            </div>
            <div class="row mb-3">
                <div class="event-category col-6">
                    <h6 class="form-heading m-0">WhatsApp</h6>
                    <input type="text" placeholder="wa.me/" class="form-control form-input-box" id="input">
                </div>
            </div>
            <div class="row mb-3">
                <div class="event-category col-6">
                    <h6 class="form-heading m-0">Instagram</h6>
                    <input type="email" placeholder="instagram.com/" class="form-control form-input-box" id="input">
                </div>
            </div>
        </div>
        </div>
        </div>
        <a href="#" type="submit" class="btn btn-upload d-inline mt-4">
            <div class="row">
                <div class="col-7 d-flex justify-content-end pe-5">
                    Upload
                </div>
                <div class="col-5 d-flex justify-content-end">
                    <img class="pt-1" src="{{ url('frontend/assets/ic/upload-svg.svg') }}" width="20px">
                </div>
            </div>
        </a>
        </form>

        </div>
    </section>
    <!-- End of Webinar -->
@endsection

@push('jsPlus')

    <script>
        $('#picker-time-start').datetimepicker({
            timepicker: true,
            datepicker: false,
            format: 'H:i',
            value: '09:45',
            hours12: false,
            step: 5
        })

        $('#picker-time-end').datetimepicker({
            timepicker: true,
            datepicker: false,
            format: 'H:i',
            value: '09:45',
            hours12: false,
            step: 5
        })

        $('#picker-date-register-start').datetimepicker({
            timepicker: false,
            datepicker: true,
            format: 'Y/m/d',
            value: '2021/10/10',
            hours12: false,
            step: 5
        })

        $('#picker-date-register-end').datetimepicker({
            timepicker: false,
            datepicker: true,
            format: 'Y/m/d',
            value: '2021/10/10',
            hours12: false,
            step: 5
        })

        $('#picker-date-event').datetimepicker({
            timepicker: false,
            datepicker: true,
            format: 'Y/m/d',
            value: '2021/10/10',
            hours12: false,
            step: 5
        })
    </script>

    <script>
        var viaEdu = document.querySelector("#viaEdumind")
        var viaEks = document.querySelector("#viaEksternal")
        var defaultHeading = document.querySelector("#linkHeading")

        var coursePick = document.querySelector("#eventCourse")
        var webinarPick = document.querySelector("#eventWebinar")
        var workshopPick = document.querySelector("#eventWorkshop")
        var registerMethodSection = document.querySelector("#registerMethod")
        var dropdownCategoryHeading = document.querySelector("#dropdownCategory")

        viaEdu.addEventListener("click", () => {
            defaultHeading.innerHTML = "Tautan Virtual Meeting";
        })
        viaEks.addEventListener("click", () => {
            defaultHeading.innerHTML = "Tautan Pendaftaran Eksternal";
        })
        coursePick.addEventListener("click", () => {
            registerMethodSection.classList.add("d-none");
        })
        webinarPick.addEventListener("click", () => {
            if (registerMethodSection.classList.contains("d-none")) {
                registerMethodSection.classList.remove("d-none");
            }
        })
        workshopPick.addEventListener("click", () => {
            if (registerMethodSection.classList.contains("d-none")) {
                registerMethodSection.classList.remove("d-none");
            }
        })

        document.getElementById("myBtn").addEventListener("click", function() {
            alert("Hello World!");
        });
    </script>



    <script type="text/javascript">
        $('#summernote').summernote({
            height: 200
        });
    </script>
    {{-- <script type="text/javascript">
        $('#floatingTextarea').summernote({
            height: 200
        });
    </script> --}}
    {{-- <script type="text/javascript">
        $('#floatingTextarea2').summernote({
            height: 200
        });
    </script> --}}

@endpush
{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('frontend/style/upload-event-style.css')}}">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css">

    <title>EduMind - Upload</title>
  </head>
  <body>
      <!-- Navigation Bar -->

  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img class="img-fluid" src="{{ url('frontend/assets/ic/logo-horizontal.png') }}" alt="logo" width="120px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i title="" class="fa fa-bars" aria-hidden="true"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profile
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-black" href="{{ url('/profile') }}">Sejarah</a></li>
              <li><a class="dropdown-item text-black" href="#">Tugas &amp; Fungsi</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-black" href="#">Infografis</a></li>
              <li><a class="dropdown-item text-black" href="#">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/program') }}">Event</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Diskusi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-black" href="{{ url('/diskusi') }}">Timeline</a></li>
              <li><a class="dropdown-item text-black" href="#">Jawaban</a></li>
              <li><a class="dropdown-item text-black" href="#">Pertanyaan</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-black" href="#">Pertanyaan saya</a></li>
              <li><a class="dropdown-item text-black" href="#">Jawaban saya</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/artikel') }}">Artikel</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle pt-1" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-fluid m-0" src="{{ url('frontend/assets/ic/logged-in-profile.png') }}" alt="" width="30px">
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-black" href="#">Action</a></li>
                <li><a class="dropdown-item text-black" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-black" href="#">Something else here</a></li>
              </ul>
            </li>
        </ul>
        <div class="box-container">
          <table class="element-container">
            <tbody><tr>
              <td>

                  <input type="text" placeholder="Cari.." class="search">
                </form>
              </td>
              <td>
                <a href="#">
                  <img class="search-img" src="{{ url('frontend/assets/ic/search-white.png') }}" width="14px" alt="search">
                </a>
              </td>
            </tr>
          </tbody></table>
        </div>
      </div>
    </div>
  </nav>
  <!-- End of Navigation Bar -->

    <!-- Header -->
    <section class="header d-none">
      <img class="vector-above img-fluid" src="./assets/bg/vector-1.png" alt="" width="600px">
      <img class="vector-below img-fluid d-none d-lg-block" src="./assets/bg/vector-2.png" alt="" width="600px">
      <div class="container">
        <div class="row">
          <div class="header-text col-12 col-lg-6 d-flex align-items-center">
            <div class="text">
              <img class="img-fluid mb-5 ms-1" src="./assets/ic/edumind-header-alt.png" alt="logo" width="460px">
              <h4>Event</h4>
            </div>
          </div>
          <div class="header-img col-6 d-none d-lg-flex align-self-end">
            <img class="img-fluid ms-auto" src="./assets/illustration/ill-7.png" alt="" width="500px">
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
            <li class="breadcrumb-item"><a href="Link">Event</a></li>
            <li class="breadcrumb-item"><a href="Link">Upload</a></li>
          </ol>
        </nav>
      </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- Event upload -->
    <section class="event-upload">
      <div class="container mt-3">
        <!-- Webinar list section -->
        <div class="event-upload-heading mx-auto text-center mb-4">
          <div class="text-decoration-none" href="program-webinar-category.html">
            <h1>Upload</h1>
          </div>
        </div>
        <div class="upload-card mt-5 px-4">
          <div class="row">
            <div class="col-12 col-lg-7">
              <div class="card-heading text-center my-3">
                <h4>Detail Acara</h4>
              </div>
              <div class="card-body">

                  <div class="row mb-3">
                    <div class="event-category col-7">
                      <h6 class="form-heading m-0">Jenis</h6>
                      <div class="form-check d-inline-block">
                        <input class="form-check-input" type="radio" name="metodePendaftaran" id="eventWebinar">
                        <label class="form-check-label" for="via-edumind">
                          Webinar
                        </label>
                      </div>
                      <div class="form-check d-inline-block ms-2">
                        <input class="form-check-input" type="radio" name="metodePendaftaran" id="eventCourse">
                        <label class="form-check-label" for="via-eksternal">
                          Kursus
                        </label>
                      </div>
                      <div class="form-check d-inline-block ms-2">
                        <input class="form-check-input" type="radio" name="metodePendaftaran" id="eventWorkshop">
                        <label class="form-check-label" for="via-eksternal">
                          Workshop
                        </label>
                      </div>
                    </div>

                    <div class="event-date col-5">
                      <h6 class="form-heading m-0">Waktu Pendaftaran</h6>
                      <div class="form-date d-flex">

                          <input type="date" id="" class="form-control form-input-box date-picker">
                        </form>

                        <span class="align-content-center mx-3 py-1">-</span>

                        <form action="">
                          <input type="time" id="" class="form-control form-input-box date-picker">
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="event-category col-7">
                      <h6 class="form-heading m-0">Jenis</h6>

                      <div class="input-group mb-3">
                        <select class="btn-dropdown custom-select">
                          <option value="1" id="webinar">Webinar</option>
                          <option value="2" >Kursus</option>
                          <option value="3" id="workshop">Workshop</option>
                        </select>
                      </div>
                    </div>

                    <div class="event-date col-6">

                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="event-category">
                      <h6 class="form-heading m-0">Judul</h6>
                      <input type="text" placeholder="Type here..." class="form-control form-input-box" id="input">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="event-category">
                      <h6 class="form-heading m-0">Event Organizer</h6>
                      <input type="text" placeholder="Type here..." class="form-control form-input-box" id="input">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="event-category">
                      <h6 class="form-heading m-0">Deskripsi</h6>
                      <div class="form-floating">
                        <textarea class="form-control form-input-textarea" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Type here...</label>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="event-date col-6">
                      <h6 class="form-heading m-0">Tanggal</h6>
                      <div class="form-date d-flex">
                        <form action="">
                          <input type="text" id="picker-date-event" class="form-control form-input-box">
                        </form>
                      </div>
                    </div>
                    <div class="event-date col-6">
                      <h6 class="form-heading m-0">Waktu</h6>
                      <div class="form-date d-flex">
                        <form action="">
                          <input type="text" id="picker-time-start" class="form-control form-input-box">
                        </form>

                        <span class="align-content-center mx-3 py-1">-</span>

                        <form action="">
                          <input type="text" id="picker-time-end" class="form-control form-input-box">
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="event-category col-6">
                      <h6 class="form-heading m-0">Kategori</h6>
                      <div class="input-group mb-3">
                        <select class="btn-dropdown custom-select" id="inputGroupSelect03">
                          <option value="1">Kategori 1</option>
                          <option value="2">Kategori 2</option>
                          <option value="3">Kategori 3</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="event-category">
                      <h6 class="form-heading m-0">Eligible</h6>
                      <div class="form-floating">
                        <textarea class="form-control form-input-textarea" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Type here...</label>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="event-category">
                      <h6 class="form-heading m-0">Benefit</h6>
                      <div class="form-floating">
                        <textarea class="form-control form-input-textarea" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Type here...</label>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="event-category">
                      <h6 class="form-heading m-0">Biaya Pendaftaran</h6>
                      <div class="form-check d-inline-block">
                        <input class="form-check-input" type="radio" name="biayaPendaftaran" id="radio-gratis" checked>
                        <label class="form-check-label" for="radio-gratis">
                          Gratis
                        </label>
                      </div>
                      <div class="form-check d-inline-block ms-5">
                        <input class="form-check-input mt-2" type="radio" name="biayaPendaftaran" id="radio-bayar">
                        <label class="form-check-label" for="radio-bayar">
                          <input type="text" placeholder="Rp | " class="form-control form-input-box" id="input">
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="event-category" id="registerMethod">
                      <h6 class="form-heading m-0">Metode Pendaftaran</h6>
                      <div class="form-check d-inline-block">
                        <input class="form-check-input" type="radio" name="metodePendaftaran" id="viaEdumind" checked>
                        <label class="form-check-label" for="via-edumind">
                          Via edumind
                        </label>
                      </div>
                      <div class="form-check d-inline-block ms-5">
                        <input class="form-check-input" type="radio" name="metodePendaftaran" id="viaEksternal">
                        <label class="form-check-label" for="via-eksternal">
                          Via eksternal
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="event-category">
                      <h6 class="form-heading m-0" id="linkHeading">Tautan Virtual Meeting</h6>
                      <input type="text" placeholder="Type here..." class="form-control form-input-box" id="input">
                    </div>
                  </div
                </form>
              </div>
            </div>

            <div class="col-12 col-lg-5">
              <div class="card-heading-col-5 text-center my-3">
                <h4>Poster</h4>
              </div>
              <div class="row mb-3">
                <div class="card-body">
                  <div class="row mb-3">
                    <h6 class="form-heading m-0">Poster Acara</h6>
                    <div class="input-group mb-3">
                      <input type="file" class="form-control" id="inputGroupFile02">
                    </div>
                    <div class="d-inline">
                      <ul>
                        <li>Ukuran maksimal 2 mb</li>
                        <li>Rasio poster 4:5 </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-heading-col-5 text-center my-3">
                <h4>Social Media</h4>
              </div>
              <div class="row mb-3">
                <div class="event-category col-6">
                  <h6 class="form-heading m-0">Email</h6>
                  <input type="email" placeholder="Type here..." class="form-control form-input-box" id="input">
                </div>
              </div>
              <div class="row mb-3">
                <div class="event-category col-6">
                  <h6 class="form-heading m-0">WhatsApp</h6>
                  <input type="text" placeholder="wa.me/" class="form-control form-input-box" id="input">
                </div>
              </div>
              <div class="row mb-3">
                <div class="event-category col-6">
                  <h6 class="form-heading m-0">Instagram</h6>
                  <input type="email" placeholder="instagram.com/" class="form-control form-input-box" id="input">
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="#" type="submit" class="btn btn-upload d-inline mt-4">
          <div class="row">
            <div class="col-7 d-flex justify-content-end pe-5">
              Upload
            </div>
            <div class="col-5 d-flex justify-content-end">
              <img class="pt-1" src="{{url('frontend/assets/ic/upload-svg.svg')}}" width="20px">
            </div>
          </div>
        </a>
      </div>
    </section>
    <!-- End of Webinar -->

    <!-- Tagline buttom -->
    <section class="tagline mt-5">
      <div class="container d-flex justify-content-center text-white">
        <h3 class="m-0">Ingin berpartisipasi dalam suatu event atau diskusi? <span><a href="#">Daftar Sekarang</a></span></h3>
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
            <img src="{{ url('frontend/assets/ic/logo-vertical.png') }}" alt="EduMind-Logo" width="120px" >
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

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- FontAwesome JS -->
    <script src="https://kit.fontawesome.com/b3b03a4327.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
      $('#picker-time-start').datetimepicker({
        timepicker: true,
        datepicker: false,
        format : 'H:i',
        value : '09:45',
        hours12 : false,
        step : 5
      })

      $('#picker-time-end').datetimepicker({
        timepicker: true,
        datepicker: false,
        format : 'H:i',
        value : '09:45',
        hours12 : false,
        step : 5
      })

      $('#picker-date-register-start').datetimepicker({
        timepicker: false,
        datepicker: true,
        format : 'Y/m/d',
        value : '2021/10/10',
        hours12 : false,
        step : 5
      })

      $('#picker-date-register-end').datetimepicker({
        timepicker: false,
        datepicker: true,
        format : 'Y/m/d',
        value : '2021/10/10',
        hours12 : false,
        step : 5
      })

      $('#picker-date-event').datetimepicker({
        timepicker: false,
        datepicker: true,
        format : 'Y/m/d',
        value : '2021/10/10',
        hours12 : false,
        step : 5
      })
    </script>

    <script>
      var viaEdu = document.querySelector("#viaEdumind")
      var viaEks = document.querySelector("#viaEksternal")
      var defaultHeading = document.querySelector("#linkHeading")

      var coursePick = document.querySelector("#eventCourse")
      var webinarPick = document.querySelector("#eventWebinar")
      var workshopPick = document.querySelector("#eventWorkshop")
      var registerMethodSection = document.querySelector("#registerMethod")
      var dropdownCategoryHeading = document.querySelector("#dropdownCategory")

      viaEdu.addEventListener("click", () => {
        defaultHeading.innerHTML = "Tautan Virtual Meeting";
      })
      viaEks.addEventListener("click", () => {
        defaultHeading.innerHTML = "Tautan Pendaftaran Eksternal";
      })
      coursePick.addEventListener("click", () => {
        registerMethodSection.classList.add("d-none");
      })
      webinarPick.addEventListener("click", () => {
        if (registerMethodSection.classList.contains("d-none")) {
          registerMethodSection.classList.remove("d-none");
        }
      })
      workshopPick.addEventListener("click", () => {
        if (registerMethodSection.classList.contains("d-none")) {
          registerMethodSection.classList.remove("d-none");
        }
      })

      document.getElementById("myBtn").addEventListener("click", function() {
        alert("Hello World!");
      });
    </script>
  </body>
</html> --}}
