@extends('layouts.app')

@section('title', 'Grocery Blog | SayedCart')

@section('content')
<section class="container-page py-12 md:py-16">
    <div class="grid items-center gap-8 overflow-hidden rounded-[36px] bg-white p-6 shadow-sm md:grid-cols-[1fr_.8fr] md:p-10">
        <div>
            <p class="text-sm font-extrabold uppercase tracking-[0.22em] text-primary">Fresh stories</p>
            <h1 class="mt-3 text-4xl font-black tracking-tight text-dark md:text-6xl">From our grocery journal</h1>
            <p class="mt-5 max-w-2xl text-base leading-8 text-muted md:text-lg">Smart grocery tips, quick recipes, storage guides and healthy shopping ideas from the SayedCart team.</p>
            <div class="mt-7 flex flex-wrap gap-3">
                <a href="#articles" class="btn-primary">Read articles</a>
                <a href="{{ route('shop') }}" class="rounded-2xl border border-line bg-white px-6 py-3 text-sm font-extrabold transition-all duration-300 hover:-translate-y-1 hover:border-primary hover:text-primary">Shop fresh</a>
            </div>
        </div>
        <img class="h-[260px] w-full rounded-[30px] object-cover md:h-[380px]" src="https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=900&q=85" alt="Fresh grocery journal" loading="lazy">
    </div>
</section>

<section id="articles" class="container-page pb-14 md:pb-20">
    <div class="mb-8 flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
        <div>
            <p class="text-sm font-extrabold uppercase tracking-[0.2em] text-primary">Latest articles</p>
            <h2 class="mt-2 text-3xl font-black text-dark md:text-4xl">Helpful reads for better grocery days</h2>
        </div>
        <a href="{{ route('shop') }}" class="text-sm font-extrabold text-primary">Explore products</a>
    </div>
    <div class="grid gap-6 lg:grid-cols-3">
        @foreach([
            ['How to keep greens crisp all week', 'May 10, 2026', 'SayedCart Team', 'Wash, dry and store leafy greens the right way so salads stay fresh longer and waste less.', 'greens', 'https://images.unsplash.com/photo-1543362906-acfc16c67564?auto=format&fit=crop&w=700&q=85'],
            ['Five easy breakfasts for busy mornings', 'May 08, 2026', 'Olivia Green', 'Simple combinations using fruit, dairy, bread and pantry staples that are ready in minutes.', 'breakfast', 'https://images.unsplash.com/photo-1493770348161-369560ae357d?auto=format&fit=crop&w=700&q=85'],
            ['Smart pantry staples to buy in bulk', 'May 03, 2026', 'Market Editors', 'Build a useful pantry with grains, sauces, snacks and long-lasting essentials for every meal.', 'pantry', 'https://images.unsplash.com/photo-1583258292688-d0213dc5a3a8?auto=format&fit=crop&w=700&q=85'],
        ] as [$title, $date, $author, $text, $anchor, $image])
            <article class="group overflow-hidden rounded-[30px] border border-line bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-card" data-aos="fade-up">
                <img class="h-56 w-full object-cover transition-transform duration-500 group-hover:scale-105" src="{{ $image }}" alt="{{ $title }}" loading="lazy">
                <div class="p-6">
                    <p class="text-xs font-extrabold uppercase tracking-wide text-muted">{{ $date }} &middot; {{ $author }}</p>
                    <h3 class="mt-3 text-2xl font-black leading-tight text-dark">{{ $title }}</h3>
                    <p class="mt-3 text-sm leading-6 text-muted">{{ $text }}</p>
                    <a class="mt-5 inline-flex rounded-full bg-blue-50 px-4 py-2 text-xs font-extrabold text-primary" href="#{{ $anchor }}">Read more</a>
                </div>
            </article>
        @endforeach
    </div>
</section>

<section class="container-page pb-16">
    <div class="grid gap-6 lg:grid-cols-[1fr_.45fr]">
        <div class="space-y-5">
            <article id="greens" class="rounded-[28px] bg-white p-6 shadow-sm">
                <h3 class="text-2xl font-black text-dark">Keep greens crisp</h3>
                <p class="mt-3 leading-7 text-muted">Line your container with paper towel, keep leaves dry, and store delicate herbs upright in a small jar. Use older greens first for soups, omelets and smoothies.</p>
            </article>
            <article id="breakfast" class="rounded-[28px] bg-white p-6 shadow-sm">
                <h3 class="text-2xl font-black text-dark">Fast breakfast ideas</h3>
                <p class="mt-3 leading-7 text-muted">Try yogurt with seasonal fruit, avocado toast, boiled eggs with bread, overnight oats, or a banana smoothie with milk and nuts.</p>
            </article>
            <article id="pantry" class="rounded-[28px] bg-white p-6 shadow-sm">
                <h3 class="text-2xl font-black text-dark">Bulk pantry picks</h3>
                <p class="mt-3 leading-7 text-muted">Rice, lentils, pasta, oats, cooking oil, spices, tea and canned goods help you cook quickly and save money over time.</p>
            </article>
        </div>
        <aside class="rounded-[30px] bg-primary p-6 text-white shadow-soft">
            <p class="text-sm font-extrabold uppercase tracking-[0.2em] text-accent">Newsletter</p>
            <h3 class="mt-3 text-3xl font-black">Get fresh tips weekly</h3>
            <p class="mt-3 text-white/80">Recipes, offers and grocery hacks straight to your inbox.</p>
            <form class="mt-6 grid gap-3">
                <input class="min-h-[50px] rounded-2xl border-0 px-4 text-dark" placeholder="Email address">
                <button class="min-h-[50px] rounded-2xl bg-accent font-extrabold text-dark">Subscribe</button>
            </form>
        </aside>
    </div>
</section>
@endsection
