@extends('layouts.app')

@section('title', 'SayedCart Grocery Store | Premium Online Grocery Delivery')

@section('content')
    <x-hero-slider />

    <section class="container-page pt-8" data-aos="fade-up">
        <div class="grid items-center gap-6 rounded-3xl bg-green-50 p-6 md:grid-cols-[1fr_auto] md:p-8">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                <span class="grid h-14 w-14 shrink-0 place-items-center rounded-2xl bg-cta text-white"><i data-lucide="truck" class="h-7 w-7"></i></span>
                <div>
                    <h2 class="text-2xl font-extrabold text-dark">Free same-day delivery on fresh grocery orders.</h2>
                    <p class="mt-1 text-sm text-muted">Order before 2 PM and receive your market basket before dinner.</p>
                </div>
            </div>
            <a href="#featured" class="btn-green justify-self-start md:justify-self-end">Start shopping</a>
        </div>
    </section>

    <x-countdown />

    <section class="container-page pb-12 md:pb-16">
        <div class="mb-8 text-center">
            <p class="text-sm font-extrabold uppercase tracking-[0.2em] text-primary">Special offers</p>
            <h2 class="mt-2 text-3xl font-extrabold tracking-tight text-dark md:text-4xl">Today's grocery deals</h2>
        </div>
        <div class="grid grid-cols-1 gap-5 min-[430px]:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
            @foreach([
                ['Ripe Hass Avocados', 'https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?auto=format&fit=crop&w=500&q=85', '৳990', '৳660'],
                ['Red Seedless Grapes', 'https://images.unsplash.com/photo-1537640538966-79f369143f8f?auto=format&fit=crop&w=500&q=85', '৳770', '৳475'],
                ['Farm Fresh Carrots', 'https://images.unsplash.com/photo-1447175008436-054170c2e979?auto=format&fit=crop&w=500&q=85', '৳550', '৳330'],
                ['Premium Orange Juice', 'https://images.unsplash.com/photo-1600271886742-f049cd451bba?auto=format&fit=crop&w=500&q=85', '৳880', '৳610'],
                ['Artisan Cheese Wedge', 'https://images.unsplash.com/photo-1486297678162-eb2a19b0a32d?auto=format&fit=crop&w=500&q=85', '৳1,215', '৳940'],
            ] as [$title, $image, $old, $price])
                <x-product-card :title="$title" :image="$image" :old-price="$old" :price="$price" />
            @endforeach
        </div>
    </section>

    <section class="container-page py-10">
        <div class="grid gap-6 md:grid-cols-2">
            <x-promo-banner image="https://images.unsplash.com/photo-1488459716781-31db52582fe9?auto=format&fit=crop&w=900&q=85" title="Fresh produce picked daily" text="Colorful fruits and vegetables sourced from trusted farms." />
            <x-promo-banner image="https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=900&q=85" title="Pantry essentials restocked" text="Everything you need for weekly meals, snacks and family dinners." />
        </div>
    </section>

    @include('sections.best-sellers')
    @include('sections.featured-products')

    <section class="container-page py-8" data-aos="fade-up">
        <div class="rounded-3xl bg-pink-50 px-6 py-8 text-center shadow-sm">
            <p class="text-2xl font-extrabold tracking-tight text-sale md:text-4xl">SAVE AN EXTRA 5-10% ON EVERY AUTOSHIP ORDER!</p>
        </div>
    </section>

    @include('sections.blog-section')
    <x-newsletter />
@endsection



