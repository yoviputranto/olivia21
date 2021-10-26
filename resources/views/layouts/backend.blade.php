<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduMind @section('title')</title>
        <link rel="stylesheet" href="{{ url('backend/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ url('backend/css/main.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
            integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>

        <header class="sticky-top navbar navbar-expand-lg navbar-dark bg-purple py-3">
            <div class="container-fluid">
                <a href="{{ url('user/dashboard') }}" class="navbar-brand ms-2">
                    <img class="img-fluid" src="{{ url('frontend/assets/ic/logo-horizontal.png') }}" alt="logo"
                        width="120px">
                </a>
                <button type="button" class="navbar-toggler border-0" id="bukaSidebar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <ul class="ms-auto navbar-nav">
                        <li class="nav-item">
                            <div class="d-flex align-items-center me-3">
                                <span
                                    class="me-3 bg-warning text-sm rounded-circle d-flex alig-items-center justify-content-center"
                                    style="padding:6px 12px">{{ Str::substr(Str::title(Auth::user()->name), 0, 1) }}</span>
                                <div class="d-flex align-items-end flex-column">
                                    <div class="my-0 py-0 fw-bold">{{ Str::title(Auth::user()->name) }}</div>
                                    <a href="{{ route('beranda') }}"
                                        class=" text-decoration-none text-white fw-normal my-0 py-0"
                                        style="font-size:small">Kembali</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <aside class="position-fixed main-sidebar bg-white" id="sidebar">
            <div class="active rounded sidebar-item">
                <a href="{{ url('user/dashboard') }}" class=""><i class="fa fa-home me-3"></i>Dashboard</a>
            </div>
            <div class="rounded sidebar-item" data-bs-toggle="collapse" data-bs-target="#eventShow">
                <a href="#" class=""><i class="fa fa-calendar me-3"></i>Event</a>
                <i class="fa fa-chevron-down float-end mt-1"></i>
            </div>
            <div id="eventShow" class="collapse navbar-collapse">
                <a href="{{ route('user.ikutevent') }}" class="text-purple sub-item">Diikuti</a>
                <a href="{{ url('user/riwayat') }}" class="text-purple sub-item">DiUpload</a>
                <a href="{{ url('user/riwayat') }}" class="text-purple sub-item">Pendaftar</a>
            </div>
            <div class="rounded sidebar-item">
                <a href="{{ url('user/payout') }}" class=""><i class="fa fa-wallet me-3"></i>Penarikan
                    Saldo</a>
            </div>

        </aside>

        @yield('content')

        <script src="{{ url('backend/js/bootstrap.js') }}"></script>

        <script>
            var tombolBuka = document.getElementById('bukaSidebar')
            var sidebar = document.getElementById('sidebar')

            tombolBuka.addEventListener('click', function() {
                sidebar.classList.toggle('show')
            })
        </script>

    </body>

    </html>
