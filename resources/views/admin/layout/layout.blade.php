<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans antialiased">

    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white hidden md:block">
            <div class="p-6 text-2xl font-bold border-b border-gray-700">
                Admin Panel
            </div>

            <nav class="mt-6">
                <a href="{{ route('dashboard') }}" class="block px-6 py-3 hover:bg-gray-700">
                    Dashboard
                </a>

                <a href="{{ route('teacher.index') }}" class="block px-6 py-3 hover:bg-gray-700">
                    Teachers
                </a>


                <a class="block px-6 py-3 hover:bg-gray-700" href="{{ route('product.index') }}">
                    Products
                </a>


                <a href="#" class="block px-6 py-3 hover:bg-gray-700">
                    Settings
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">

            <!-- Topbar -->
            <header class="bg-white shadow px-6 py-4 flex justify-between items-center">

                <h1 class="text-xl font-semibold text-gray-800">
                    @yield('title', 'Dashboard')
                </h1>

                <div class="flex items-center space-x-4">

                    <!-- User -->
                    <div class="relative">
                        <span class="text-gray-600">
                            {{ Auth::user()->name ?? 'Admin' }}
                        </span>
                    </div>

                    <!-- Logout -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="text-red-500 hover:text-red-700">
                            Logout
                        </button>
                    </form>

                </div>

            </header>

            <!-- Page Content -->
            <main class="p-6">

                @yield('content')

            </main>

        </div>
    </div>

</body>

</html>
