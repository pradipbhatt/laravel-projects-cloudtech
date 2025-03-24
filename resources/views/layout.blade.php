<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">

    <!-- Header Section -->
    <header class="bg-blue-600 text-white p-4">
        <h1 class="text-2xl">My Laravel App</h1>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto p-4">
        @yield('content')
    </div>

    <!-- Footer Section -->
    <footer class="bg-blue-600 text-white p-4 mt-4">
        <p>&copy; 2025 Laravel App</p>
    </footer>
    
</body>
</html>
