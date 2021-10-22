<?php $__env->startPush('stylePlus'); ?>
    <link rel="stylesheet" href="<?php echo e(url('frontend/style/upload-event-style.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title', '- Upload Event'); ?>

<?php $__env->startSection('content'); ?>
    

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
                                    <div class="event-category col-7">
                                        <h6 class="form-heading m-0">Jenis</h6>
                                        <div class="form-check d-inline-block">
                                            <input class="form-check-input" type="radio" name="metodePendaftaran"
                                                id="eventWebinar">
                                            <label class="form-check-label" for="via-edumind">
                                                Webinar
                                            </label>
                                        </div>
                                        <div class="form-check d-inline-block ms-2">
                                            <input class="form-check-input" type="radio" name="metodePendaftaran"
                                                id="eventCourse">
                                            <label class="form-check-label" for="via-eksternal">
                                                Kursus
                                            </label>
                                        </div>
                                        <div class="form-check d-inline-block ms-2">
                                            <input class="form-check-input" type="radio" name="metodePendaftaran"
                                                id="eventWorkshop">
                                            <label class="form-check-label" for="via-eksternal">
                                                Workshop
                                            </label>
                                        </div>
                                    </div>

                                    <div class="event-date col-5">
                                        <h6 class="form-heading m-0">Waktu Pendaftaran</h6>
                                        <div class="form-date d-flex">
                                            <form action="">
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
                                                placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                            <label for="floatingTextarea">Type here...</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="event-date col-6">
                                        <h6 class="form-heading m-0">Tanggal</h6>
                                        <div class="form-date d-flex">
                                            <form action="">
                                                <input type="text" id="picker-date-event"
                                                    class="form-control form-input-box">
                                            </form>
                                        </div>
                                    </div>
                                    <div class="event-date col-6">
                                        <h6 class="form-heading m-0">Waktu</h6>
                                        <div class="form-date d-flex">
                                            <form action="">
                                                <input type="text" id="picker-time-start"
                                                    class="form-control form-input-box">
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
                                            <textarea class="form-control form-input-textarea"
                                                placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                            <label for="floatingTextarea">Type here...</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="event-category">
                                        <h6 class="form-heading m-0">Benefit</h6>
                                        <div class="form-floating">
                                            <textarea class="form-control form-input-textarea"
                                                placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                            <label for="floatingTextarea">Type here...</label>
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
                                                <input type="text" placeholder="Rp | " class="form-control form-input-box"
                                                    id="input">
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
                                        <input type="text" placeholder="Type here..." class="form-control form-input-box"
                                            id="input">
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
                </div>
                <a href="#" type="submit" class="btn btn-upload d-inline mt-4">
                    <div class="row">
                        <div class="col-7 d-flex justify-content-end pe-5">
                            Upload
                        </div>
                        <div class="col-5 d-flex justify-content-end">
                            <img class="pt-1" src="<?php echo e(url('frontend/assets/ic/upload-svg.svg')); ?>"
                                width="20px">
                        </div>
                    </div>
                </a>
            </form>

        </div>
    </section>
    <!-- End of Webinar -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('jsPlus'); ?>

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
    
    

<?php $__env->stopPush(); ?>


<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\edumind\resources\views/user/upload.blade.php ENDPATH**/ ?>