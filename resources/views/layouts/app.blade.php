<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Premium responsive grocery eCommerce homepage built with Laravel, Blade, Tailwind CSS, Alpine.js and Swiper.js.">
    <meta name="theme-color" content="#1D4ED8">
    <title>@yield('title', 'SayedCart Grocery Store')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @if(config('services.google_maps.key'))
        <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.key') }}&libraries=places&callback=initSayedCartMap"></script>
    @endif
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data="{ mobileMenu: false, mobileSearch: false }" class="min-h-screen bg-white">
    <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[100] focus:rounded-xl focus:bg-white focus:px-4 focus:py-3 focus:text-primary focus:shadow-soft">Skip to content</a>
    <x-header />
    <x-navbar />
    <main id="main" class="overflow-hidden">
        @yield('content')
    </main>
    <x-footer />
</body>
</html>


