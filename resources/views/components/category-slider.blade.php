<section class="container-page py-10 md:py-12" data-aos="fade-up">
    <div class="mb-6 flex flex-col justify-between gap-3 sm:flex-row sm:items-end">
        <div>
            <p class="text-sm font-extrabold uppercase tracking-[0.2em] text-primary">Shop by category</p>
            <h2 class="mt-2 text-3xl font-extrabold tracking-tight text-dark md:text-4xl">Popular categories</h2>
        </div>
        <a href="#" class="hidden text-sm font-extrabold text-primary sm:block">View all</a>
    </div>
    <div class="category-swiper swiper !overflow-visible">
        <div class="swiper-wrapper">
            @foreach([
                ['Beverages', 'Cold drinks, juices and tea', 'https://images.unsplash.com/photo-1596803244618-8dbee441d70b?auto=format&fit=crop&w=400&q=85'],
                ['Biscuits & Snacks', 'Crunchy bites for every day', 'https://images.unsplash.com/photo-1621939514649-280e2ee25f60?auto=format&fit=crop&w=400&q=85'],
                ['Breakfast & Dairy', 'Milk, eggs, yogurt and cereal', 'https://images.unsplash.com/photo-1628088062854-d1870b4553da?auto=format&fit=crop&w=400&q=85'],
                ['Frozen Foods', 'Quick meals and freezer picks', 'https://images.unsplash.com/photo-1606851091851-e8c8c0fca5ba?auto=format&fit=crop&w=400&q=85'],
            ] as [$name, $text, $image])
                <div class="swiper-slide h-auto">
                    <a href="{{ route('shop') }}" class="group relative block h-full max-w-[170px] overflow-hidden rounded-[18px] border border-line bg-white p-1.5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-primary hover:shadow-card">
                        <div class="relative overflow-hidden rounded-[14px] bg-light">
                            <img src="{{ $image }}" alt="{{ $name }}" class="h-20 w-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                            <span class="absolute left-1.5 top-1.5 rounded-full bg-white/95 px-1.5 py-0.5 text-[8px] font-extrabold uppercase tracking-wide text-primary shadow-sm">Popular</span>
                        </div>
                        <div class="relative p-1.5">
                            <h3 class="text-xs font-extrabold text-dark">{{ $name }}</h3>
                            <p class="mx-auto mt-1 min-h-[28px] max-w-[140px] text-[10px] leading-3 text-muted">{{ $text }}</p>
                            <span class="mx-auto mt-1.5 inline-flex min-h-[24px] items-center rounded-full bg-blue-50 px-2.5 text-[9px] font-extrabold text-primary transition-all duration-300 group-hover:bg-primary group-hover:text-white">Shop now</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

