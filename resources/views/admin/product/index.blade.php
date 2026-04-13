@extends('admin.layout.layout')

@section('content')
    <div class="container mt-4">
        <h2>Products</h2>

        <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">
            Add Product
        </a>

        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-3">
                    <div class="card mb-3">

                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top">
                        @endif

                        <div class="card-body">
                            <h5>{{ $product->name }}</h5>
                            <p>{{ $product->price }} $</p>

                            <a href="{{ route('product.show', $product->id) }}" class="btn btn-info btn-sm">
                                Show
                            </a>

                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-3">
            {{ $products->links() }}
        </div>
    </div>
@endsection
