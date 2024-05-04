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
    <div class="container-sm my-5 card border-secondary">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ Vite::asset('resources/img/laundry.jpg')}}" class="img-fluid rounded-strart" alt="Gambar Detail">
            </div>

            <div class="col-md-8">
                <div class="card-body">
                    @if ($product)
                        <h5 class="card-title">{{ $product->name_product}}</h5>
                        <p class="card-text">
                            Kode Produk : {{ $product->code_product }} <br>
                            Satuan : {{ $product->unit->code_unit}} <br>
                            Description : {{ $product->description }} <br>
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </p>
                        <p class="card-text d-grid gap-2 d-md-flex justify-content-md-end">
                            <small>
                                <a href="{{ route('laundry.index') }}" class="btn me-md-2" style="background-color: #78a3d4">Back</a>
                                <a href="{{ route('laundry.edit', [ $product->id]) }}" class="btn me-md-2" style="background-color: #78a3d4">Edit</a>
                            </small>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
