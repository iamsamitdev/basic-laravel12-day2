<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body>

    @include('includes.header')

    <div class="container mx-auto my-6 px-4 md:px-0">
        @yield('content')
    </div>

    @include('includes.footer')
    
</body>
</html>