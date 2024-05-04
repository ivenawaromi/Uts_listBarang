<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pageTitle }}</title>
    @Vite('resources/sass/app.scss')
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('laundry.update', ['laundry'=> $product->id]) }}" method="POST">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi bi-flower1 fs-1"></i>
                        <h4>Edit Product List</h4>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="Code_product" class="form-label">Code Product</label>
                            <input class="form-control @error('Code_product') is-invalid @enderror" type="text" name="Code_product" id="Code_product" value="{{ $errors->any() ? old('Code_product') : $product->code_product }}" placeholder="Enter Code Product">
                            @error('Code_product')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="name_product" class="form-label">Name Product</label>
                            <input class="form-control @error('name_product') is-invalid @enderror" type="text" name="name_product" id="name_product" value="{{ $errors->any() ? old('name_product') : $product->name_product }}" placeholder="Enter Name Product">
                            @error('Code_product')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" id="price" value="{{ $errors->any() ? old('price') : $product->price }}" placeholder="Enter Price">
                            @error('price')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="unit" class="form-label">Unit</label>
                            <select name="unit" id="unit" class="form-select">
                                @php
                                    $selected = "";
                                    if ($errors->any())
                                        $selected = old('unit');
                                    else {
                                        $selected = $product->unit_id;
                                    }
                                @endphp
                                @foreach ($units as $unit )
                                    <option value="{{ $unit->id}}" {{ $selected == $unit->id ? 'selected' : ''}}>{{ $unit->code_unit. ' - ' .$unit->name}}</option>
                                @endforeach
                            </select>
                            @error('unit')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Enter Description" cols="10" rows="10">{{ $errors->any() ? old('description') : $product->description }}</textarea>
                            @error('description')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('laundry.index') }}" class="btn btn-outline-primary btn-lg mt-3"><i class="bi bi-arrow-bar-left me-2"></i>Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-lg mt-3" style="background-color: #78a3d4"><i class="bi bi-patch-check mt-4"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @endsection
</body>
</html>
