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
    <div class="container">
        <div class="container mt-4">
            <div class="row mb-0">
                <div class="col-lg-9 col-xl-10">
                    <h4 class="mb-3">{{ $pageTitle }}</h4>
                </div>
                <div class="col-lg-3 col-xl-2">
                    <div class="d-grid gap-2">
                        <a href="{{ route('laundry.create') }}" class="btn" style="background-color: #78a3d4">Create Product List</a>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($products as $product)
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name_product}}</h5>
                <p class="card-text">
                    Kode Produk : {{ $product->code_product }} <br>
                    Satuan : {{ $product->unit->code_unit}} <br>
                    Description : {{ $product->description }} <br>
                    Rp {{ number_format($product->price, 0, ',', '.') }}
                </p>
                <a href="{{ route('laundry.show', ['laundry'=> $product->id]) }}" class="btn btn-outline-primary btn-sm me-1" >See</a>
                <a href="{{ route('laundry.edit', ['laundry'=> $product->id]) }}" class="btn btn-outline-primary btn-sm me-1">Edit</a>
                <form action="{{ route('laundry.destroy', ['laundry'=> $product->id])}}" method="POST" class="btn row">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-primary btn-sm me-1">Delete</button>
                </form>
            </div>
        </div>

        @endforeach
    @endsection
</body>
</html>
