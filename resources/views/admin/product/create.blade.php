@extends('admin.layout.layout')

@section('content')
    <div class="container mt-4">
        <h2>Add Product</h2>

        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label>Price</label>
                <input type="number" name="price" class="form-control">
            </div>

            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button class="btn btn-success">Save</button>
        </form>
    </div>
@endsection
