<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @vite('resources/css/app.css') --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <!-- Vendor CSS Files -->
    {{-- <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" /> --}}
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    {{-- <link href="/vendor/aos/aos.css" rel="stylesheet" /> --}}
    {{-- <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" /> --}}
    {{-- <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" /> --}}
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body class="h-full">

<div class="min-h-full">
    <x-navbar></x-navbar>
    {{-- <x-header>{{ $title }}</x-header> --}}


    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
  </div>

</body>
</html>
