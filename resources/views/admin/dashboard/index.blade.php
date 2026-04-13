@extends('admin.layout.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="container mt-4">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold">Dashboard</h2>
                <p class="text-muted">Welcome back 👋, manage your system here</p>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row g-3">

            <!-- Teachers -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h6 class="text-muted">Teachers</h6>
                        <h3 class="fw-bold">
                            {{ \App\Models\Teacher::count() }}
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Products -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h6 class="text-muted">Products</h6>
                        <h3 class="fw-bold">
                            {{ \App\Models\Product::count() }}
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Users -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h6 class="text-muted">Users</h6>
                        <h3 class="fw-bold">
                            {{ \App\Models\User::count() }}
                        </h3>
                    </div>
                </div>
            </div>

        </div>

        <!-- Quick Actions -->
        <div class="row mt-4">

            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5>Quick Actions</h5>

                        <a href="{{ route('teacher.create') }}" class="btn btn-primary btn-sm mt-2">
                            + Add Teacher
                        </a>

                        <a href="{{ route('product.create') }}" class="btn btn-success btn-sm mt-2">
                            + Add Product
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5>System Info</h5>
                        <p class="text-muted mb-1">Laravel Project Dashboard</p>
                        <p class="text-muted">Status: <span class="text-success">Active</span></p>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
