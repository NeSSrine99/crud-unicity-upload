@extends('admin.layout.layout')

@section('content')
<div class="container mt-4">
    <h2>Product Details</h2>

    <div class="card p-3">

        @if($product->image)
            <img src="{{ asset('storage/'.$product->image) }}" width="200" class="mb-3">
        @endif

        <h4>Name: {{ $product->name }}</h4>

        <h5>Price: {{ $product->price }} $</h5>

        <div class="mt-3">
            <a href="{{ route('product.index') }}" class="btn btn-secondary">Back</a>

            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning">Edit</a>
        </div>

    </div>
</div>
@endsection