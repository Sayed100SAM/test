<section class="container-page py-12 md:py-16">
    <div class="mb-8 flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
        <div>
            <p class="text-sm font-extrabold uppercase tracking-[0.2em] text-primary">Fresh stories</p>
            <h2 class="mt-2 text-3xl font-extrabold tracking-tight text-dark md:text-4xl">From our grocery journal</h2>
        </div>
        <a href="#" class="text-sm font-extrabold text-primary">Read all articles</a>
    </div>
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach([
            ['How to keep greens crisp all week', 'May 10, 2026', 'By SayedCart Team', 'https://images.unsplash.com/photo-1543362906-acfc16c67564?auto=format&fit=crop&w=700&q=85'],
            ['Five easy breakfasts for busy mornings', 'May 08, 2026', 'By Olivia Green', 'https://images.unsplash.com/photo-1493770348161-369560ae357d?auto=format&fit=crop&w=700&q=85'],
            ['Smart pantry staples to buy in bulk', 'May 03, 2026', 'By Market Editors', 'https://images.unsplash.com/photo-1583258292688-d0213dc5a3a8?auto=format&fit=crop&w=700&q=85'],
        ] as [$title, $date, $author, $image])
            <article class="group overflow-hidden rounded-3xl border border-line bg-white shadow-sm transition-all duration-300 hover:shadow-card" data-aos="fade-up">
                <div class="overflow-hidden">
                    <img src="{{ $image }}" alt="{{ $title }}" class="h-56 w-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                </div>
                <div class="p-6">
                    <p class="text-xs font-bold uppercase tracking-wide text-muted">{{ $date }} &middot; {{ $author }}</p>
                    <h3 class="mt-3 text-xl font-extrabold leading-tight text-dark">{{ $title }}</h3>
                    <a href="#" class="mt-5 inline-flex text-sm font-extrabold text-primary">Read more</a>
                </div>
            </article>
        @endforeach
    </div>
</section>


