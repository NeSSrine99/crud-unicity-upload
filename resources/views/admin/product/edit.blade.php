@extends('admin.layout.layout')

@section('content')
    <div class="container mt-4">
        <h2>Edit Product</h2>

        <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Price</label>
                <input type="number" name="price" value="{{ $product->price }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Current Image</label><br>

                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" width="120">
                @endif
            </div>

            <div class="mb-3">
                <label>Change Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
