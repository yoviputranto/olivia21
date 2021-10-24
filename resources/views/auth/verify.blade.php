@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>EduMind - Login</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", Helvetica, sans-serif;
        }

        body {
            background: #fff;
            background-repeat: repeat-y;
            background-size: contain;
        }

        .confirmation {
            min-width: 100vw;
        }

        .confirmation .container {
            background-color: transparent;
        }

        .confirmation .container .card {
            padding: 20px 20px 20px 20px;
            background-color: #A6B1E1;
            border-radius: 16px;
        }

        .confirmation .container .card .card-body {
            padding: 0 0 0 0;
        }

        .confirmation .container .card .card-body .card-title {
            font-size: 20px;
            font-weight: 600;
            color: #424874;
        }

        .confirmation .container .card .card-body p {
            font-size: 14px;
            font-weight: 400;
            line-height: 26px;
            text-align: justify;
            color: #424874;
        }

        /* End of Login */

        /* Copyright */
        .copyright {
            background-color: #262626;
        }

        /* End of Copyright */

    </style>

</head>

<body>
    <!-- Login -->
    <section class="confirmation">
        <div class="container">
            <div class="logo d-flex justify-content-center py-4">
                <a href="{{ route('beranda') }}">
                    <img class="img-fluid" src="{{ asset('frontend') }}/assets/ic/logo-horizontal-dark.png"
                        alt="logo" width="360px">
                </a>
            </div>
            <div class="card mx-auto mt-4" style="max-width: 46rem;">
                <div class="card-body px-1 px-lg-5">
                    <h5 class="card-title">Verifikasi Email</h5>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Tautan verifikasi terbaru telah dikirim ke alamat email anda.') }}
                        </div>
                    @endif
                    {{ __('Sebelum lanjut, mohon cek email anda untuk tautan verifikasi') }}
                    {{ __('Jika anda tidak menerima email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit"
                            class="btn btn-link p-0 m-0 align-baseline">{{ __('Klik disini untuk permintaan yang lain') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Login -->

    <!-- Copyright -->
    <section class="copyright fixed-bottom">
        <div class="container text-center p-2">
            <p class="text-white m-0">Edumind @2021. All rights reserved.</p>
        </div>
    </section>
    <!-- End of Copyright -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <!-- FontAwesome JS -->
    <script src="https://kit.fontawesome.com/b3b03a4327.js" crossorigin="anonymous"></script>
</body>

</html>
