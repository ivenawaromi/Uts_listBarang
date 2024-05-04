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
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ Vite::asset('resources/img/slide3.jpg') }}" class="d-block img-fluid w-100" alt="Laundry Shop">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Laundry Shop</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ Vite::asset('resources/img/slide1.png') }}" class="d-block img-fluid w-100" alt="Laundry Room">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Laundry Room</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ Vite::asset('resources/img/slid2.jpg')}}" class="d-img-fluid w-100" alt="Detergen">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Detergen Laundry</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br>
    <h2 class="text-center mt-5">Features For You </h2>
    <div class="container text-center mt-4">
        <div class="row g-3 justify-content-center">
            <div class="col-md-4 rounded-start-4 p-4" style="background-color: #cfedeb">
                <i class="bi bi-truck bi-md me-4" style="font-size: 300%"></i>
                <h4>Home Delivery</h4>
                <p>Deskripsi singkat tentang fitur ini.</p>
            </div>
            <div class="col-md-4 p-4" style="background-color: #c0d4e1">
                <i class="bi bi-gift bi-md me-4" style="font-size: 300%"></i>
                <h4>Discount Gift</h4>
                <p>Deskripsi singkat tentang fitur ini.</p>
            </div>
            <div class="col-md-4 rounded-end-4 p-4" style="background-color: #a6c3e4">
                <i class="bi bi-house-heart bi-md me-4" style="font-size: 300%"></i>
                <h4>Take Home</h4>
                <p>Deskripsi singkat tentang fitur ini.</p>
            </div>
        </div>

    <br>
    <div class="container">
        <br>
        <h4 class="text-center mt-4">Categories</h4>
        <br>
        <div class="row">
            <div class="col my-2 text-center">
                <a href="{{ route('laundry.index') }}" class="bd-placeholder-img" type="button">
                    <img src="{{ Vite::asset('resources/img/c1.jpg' )}}" alt="Detergen" class="rounded-circle" width="140" height="140">
                </a>
                <h5>Detergen</h5>
            </div>
            <div class="col my-2 text-center">
                <a href="{{ route('laundry.index') }}" class="bd-placeholder-img" type="button">
                    <img src="{{ Vite::asset('resources/img/c2.png')}}" alt="Washing Equipment" class="rounded-circle" width="140" height="140">
                </a>
                <h5>Washing Equipment</h5>
            </div>
            <div class="col my-2 text-center">
                <a href="{{ route('laundry.index') }}" class="bd-placeholder-img" type="button">
                    <img src="{{ Vite::asset('resources/img/c3.jpg')}}" alt="Washing Supplies" class="rounded-circle" width="140" height="140">
                </a>
                <h5>Washing Supplies</h5>
            </div>
        </div>
    </div>

    <br>
    <br>
    <div class="row">
        <div class="col-md-5 mt-5">
            <img src="{{ Vite::asset('resources/img/laundry.jpg')}}" class="img-thumbnail mt-4" alt="logo">
        </div>
        <div class="col-md-7" style="padding: 80px">
            <h2 style="text-align: left">Luxe Launderette</h2>
            <p style="text-align: left">
                <br>
                <p><strong> Welcome to Luxe Launderette! </strong></p>
                <br>
                At Luxe Launderette we provide a laundry product shopping experience that makes it easier for you.
                Starting from detergents, washing equipment and washing equipment related to laundry.
                <br>
                <br>
                Thank you for choosing Luxe Launderette as your partner in exceptional clothing care.
                <br>
                <br>
                <p>We hope to continue to provide the best service and high quality products for you! <i class="bi bi-emoji-smile"></i></p>
            </p>
        </div>
    </div>

    @endsection
    @vite('resources/js/app.js')
</body>
</html>
