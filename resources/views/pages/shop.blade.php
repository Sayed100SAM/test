@extends('layouts.app')

@section('title', 'Shop Groceries | SayedCart')

@section('content')
@php
    $categories = [
        ['id' => 'meats-seafood', 'name' => 'Meats & Seafood', 'text' => 'Chicken, beef, fish, prawns and fresh cuts.', 'image' => 'https://images.unsplash.com/photo-1607623814075-e51df1bdc82f?auto=format&fit=crop&w=500&q=85'],
        ['id' => 'bakery', 'name' => 'Bakery', 'text' => 'Breads, cakes and pastries.', 'image' => 'https://images.unsplash.com/photo-1586444248902-2f64eddc13df?auto=format&fit=crop&w=500&q=85'],
        ['id' => 'beverages', 'name' => 'Beverages', 'text' => 'Juices, sparkling drinks and tea.', 'image' => 'https://images.unsplash.com/photo-1600271886742-f049cd451bba?auto=format&fit=crop&w=500&q=85'],
        ['id' => 'fresh-produce', 'name' => 'Fresh Produce', 'text' => 'Fruits and vegetables.', 'image' => 'https://images.unsplash.com/photo-1488459716781-31db52582fe9?auto=format&fit=crop&w=500&q=85'],
    ];

    $products = [
        ['Atlantic Salmon Fillet', 'Meats & Seafood', 'https://images.unsplash.com/photo-1599084993091-1cb5c0721cc6?auto=format&fit=crop&w=500&q=85', '৳1,650'],
        ['Grass Fed Beef Steak', 'Meats & Seafood', 'https://images.unsplash.com/photo-1607623814075-e51df1bdc82f?auto=format&fit=crop&w=500&q=85', '৳2,050'],
        ['Fresh Chicken Breast', 'Meats & Seafood', 'https://images.unsplash.com/photo-1604503468506-a8da13d82791?auto=format&fit=crop&w=500&q=85', '৳720'],
        ['Tiger Prawns Pack', 'Meats & Seafood', 'https://images.unsplash.com/photo-1565680018434-b513d5e5fd47?auto=format&fit=crop&w=500&q=85', '৳1,250'],
        ['Tuna Steak Cut', 'Meats & Seafood', 'https://images.unsplash.com/photo-1559847844-5315695dadae?auto=format&fit=crop&w=500&q=85', '৳1,480'],
        ['Premium Lamb Chops', 'Meats & Seafood', 'https://images.unsplash.com/photo-1602470520998-f4a52199a3d6?auto=format&fit=crop&w=500&q=85', '৳2,350'],
        ['Sourdough Bread Loaf', 'Bakery', 'https://images.unsplash.com/photo-1586444248902-2f64eddc13df?auto=format&fit=crop&w=500&q=85', '৳499'],
        ['Butter Croissant Pack', 'Bakery', 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=500&q=85', '৳690'],
        ['Premium Orange Juice', 'Beverages', 'https://images.unsplash.com/photo-1600271886742-f049cd451bba?auto=format&fit=crop&w=500&q=85', '৳610'],
        ['Sparkling Water Pack', 'Beverages', 'https://images.unsplash.com/photo-1523362628745-0c100150b504?auto=format&fit=crop&w=500&q=85', '৳830'],
        ['Organic Strawberries', 'Fresh Produce', 'https://images.unsplash.com/photo-1464965911861-746a04b4bca6?auto=format&fit=crop&w=500&q=85', '৳550'],
        ['Ripe Hass Avocados', 'Fresh Produce', 'https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?auto=format&fit=crop&w=500&q=85', '৳660'],
    ];
@endphp

<section class="container-page py-8 md:py-12">
    <div class="grid items-center gap-8 overflow-hidden rounded-[32px] bg-gradient-to-br from-blue-50 via-white to-green-50 p-6 shadow-soft md:grid-cols-[1.2fr_.8fr] md:p-10">
        <div>
            <p class="text-sm font-extrabold uppercase tracking-[0.2em] text-primary">Shop fresh groceries</p>
            <h1 class="mt-3 text-4xl font-extrabold tracking-tight text-dark md:text-6xl">All grocery departments</h1>
            <p class="mt-4 max-w-2xl text-muted">Browse premium meats, bakery, beverages, farm produce and daily essentials from SayedCart.</p>
            <div class="mt-7 flex flex-col gap-3 sm:flex-row">
                <a href="#products" class="btn-primary">Shop products</a>
                <a href="#wishlist" class="inline-flex min-h-[44px] items-center justify-center rounded-2xl border border-line bg-white px-6 py-3 text-sm font-extrabold text-dark transition-all duration-300 hover:-translate-y-1 hover:border-sale hover:text-sale hover:shadow-card">View wishlist</a>
            </div>
        </div>
        <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=800&q=85" alt="SayedCart grocery departments" class="h-64 w-full rounded-3xl object-cover md:h-80" loading="lazy">
    </div>
</section>

<section class="container-page pb-10">
    <div class="rounded-[28px] border border-line bg-white p-4 shadow-sm md:p-5">
        <div class="grid gap-3 md:grid-cols-[1fr_auto_auto]">
            <input type="search" placeholder="Search apples, salmon, bread..." class="min-h-[50px] rounded-2xl border-line bg-light px-4 focus:border-primary focus:ring-primary">
            <select class="min-h-[50px] rounded-2xl border-line bg-light px-4 focus:border-primary focus:ring-primary">
                <option>All categories</option>
                <option>Meats & Seafood</option>
                <option>Bakery</option>
                <option>Beverages</option>
                <option>Fresh Produce</option>
            </select>
            <a href="#products" class="inline-flex min-h-[50px] items-center justify-center rounded-2xl bg-dark px-5 font-extrabold text-white transition-all duration-300 hover:-translate-y-1 hover:bg-primary">Search</a>
        </div>
    </div>
</section>

<section class="container-page pb-10">
    <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
        @foreach($categories as $category)
            <a href="#{{ $category['id'] }}" id="{{ $category['id'] }}" class="group rounded-3xl border border-line bg-white p-5 text-left shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-primary hover:shadow-card">
                <img src="{{ $category['image'] }}" alt="{{ $category['name'] }}" class="h-32 w-full rounded-2xl object-cover transition-transform duration-500 group-hover:scale-[1.03]" loading="lazy">
                <h2 class="mt-4 text-xl font-extrabold">{{ $category['name'] }}</h2>
                <p class="mt-1 text-sm text-muted">{{ $category['text'] }}</p>
            </a>
        @endforeach
    </div>
</section>

<section id="products" class="container-page pb-12">
    <div class="mb-6 flex flex-col justify-between gap-3 sm:flex-row sm:items-end">
        <div>
            <p class="text-sm font-extrabold uppercase tracking-[0.2em] text-primary">Popular products</p>
            <h2 class="mt-2 text-3xl font-extrabold md:text-4xl">Add fresh picks to cart</h2>
        </div>
        <p class="font-bold text-muted">{{ count($products) }} products found</p>
    </div>
    <div class="grid grid-cols-1 gap-5 min-[430px]:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
        @foreach($products as [$title, $category, $image, $price])
            <article class="group flex h-full flex-col overflow-hidden rounded-3xl border border-line bg-white p-3 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-card">
                <img src="{{ $image }}" alt="{{ $title }}" class="aspect-square w-full rounded-2xl object-cover transition-transform duration-500 group-hover:scale-[1.03]" loading="lazy">
                <div class="flex flex-1 flex-col p-3">
                    <p class="text-xs font-extrabold uppercase text-cta">{{ $category }}</p>
                    <h3 class="mt-2 line-clamp-2 min-h-[48px] text-lg font-extrabold">{{ $title }}</h3>
                    <p class="mt-2 text-sm text-yellow-500">&#9733;&#9733;&#9733;&#9733;&#9733; <span class="text-muted">(4.8)</span></p>
                    <div class="mt-auto flex items-center justify-between gap-3 pt-5">
                        <b class="text-xl text-primary">{{ $price }}</b>
                        <div class="flex gap-2">
                            <a href="#wishlist" class="grid h-10 w-10 place-items-center rounded-xl border border-line transition-all duration-300 hover:border-sale hover:text-sale">&#9825;</a>
                            <a href="#cart" class="rounded-xl bg-accent px-3 py-2 text-sm font-extrabold transition-all duration-300 hover:-translate-y-1">Add</a>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</section>

<section id="wishlist" class="container-page pb-12">
    <div class="rounded-[28px] bg-pink-50 p-6 md:p-8">
        <h2 class="text-3xl font-extrabold text-dark">Wishlist</h2>
        <p class="mt-2 text-muted">Save your favorite grocery products and return to them anytime after login.</p>
    </div>
</section>

<section id="cart" class="container-page pb-16">
    <div class="rounded-[28px] bg-dark p-6 text-white md:p-8">
        <h2 class="text-3xl font-extrabold">Cart</h2>
        <p class="mt-2 text-white/75">Add items and continue to a customer checkout flow.</p>
        <a href="{{ route('login') }}" class="mt-6 inline-flex min-h-[48px] items-center rounded-2xl bg-accent px-6 font-extrabold text-dark transition-all duration-300 hover:-translate-y-1">Checkout / Login</a>
    </div>
</section>
@endsection


