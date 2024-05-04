<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="container col=xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{ Vite::asset('resources/img/profile.png')}}" class="d-block mx-lg-auto img-fluid" alt="profile" width="340" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h3 class="display-5 fw-bold lh-1 mb-3">Profile</h3>
                <p>
                    Nama : Ivena Dordia Olga Waromi <br>
                    Nama Panggilan : Ive atau Ve <br>
                    Kota Asal : Jayapura <br>
                    Email : waromiive9@gmail.com <br>

                    <br>
                    Deskripsi Singkat : <br>
                    Saya mahasiswa jurusan Sistem Informasi di Telkom University Surabaya.

                    <br>
                    <div class="row">
                        <div class="co my-2">
                            <h6>Sosial Media</h6>
                            <div class="d-flex">
                                <a href="https://www.instagram.com/ivena.waromi?igsh=dDk2emdoeXNydnI3" class="btn btn-sm me-2"><i class="bi bi-instagram"></i> ivena.waromi</a>
                            </div>
                            <div class="d-flex">
                                <a href="https://github.com/ivenawaromi" class="btn btn-sm me-2"><i class="bi bi-github"></i> ivenawaromi</a>
                            </div>
                        </div>
                    </div>
                </p>
            </div>
        </div>
    </div>
    @endsection

</body>
</html>
