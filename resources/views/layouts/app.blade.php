<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Application')</title>

    <!-- CSRF Token for security -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Include Tailwind CSS for modern design -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Add your custom stylesheets -->
    @stack('styles')
</head>

<body class="bg-gray-50 font-sans antialiased text-gray-800">

    <div id="app">
        <!-- Navigation Bar -->
        <nav class="bg-indigo-600 text-white shadow-md">
            <div class="max-w-7xl mx-auto px-4 py-4">
                <div class="flex justify-between items-center">
                    <a class="text-2xl font-semibold" href="{{ route('home') }}">Laravel App</a>
                    <button class="lg:hidden text-white focus:outline-none" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="lg:flex hidden" id="navbarNav">
                        <ul class="flex space-x-6">
                            <li><a class="text-lg hover:text-indigo-200" href="{{ route('home') }}">Home</a></li>
                            <li><a class="text-lg hover:text-indigo-200" href="{{ route('about') }}">About</a></li>
                            <li><a class="text-lg hover:text-indigo-200" href="{{ route('contact') }}">Contact</a></li>
                            <li><a class="text-lg hover:text-indigo-200" href="{{ route('student.form') }}">Form</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main content area -->
        <div class="container mx-auto p-6">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-6">
            <div class="text-center">
                <p>&copy; {{ date('Y') }} Laravel Application. All rights reserved.</p>
            </div>
        </footer>
    </div>

    <!-- Include JavaScript libraries -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Add your custom scripts -->
    @stack('scripts')
</body>

</html>
