<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Campus Portal')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-100">
    <x-navbar />
    
    <main class="container mx-auto py-6 px-4">
        @yield('content')
    </main>
    
    <x-footer />
</body>
</html>