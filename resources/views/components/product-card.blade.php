@props([
    'title' => 'Organic Hass Avocado Pack',
    'image' => 'https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?auto=format&fit=crop&w=500&q=85',
    'oldPrice' => '৳990',
    'price' => '৳660',
    'rating' => '4.8',
    'sale' => '20% OFF',
    'tag' => 'Organic',
    'button' => 'Add to cart',
])

<article class="group flex h-full flex-col overflow-hidden rounded-3xl border border-line bg-white p-3 shadow-sm transition-all duration-300 hover:shadow-card lg:hover:-translate-y-[5px]" data-aos="fade-up">
    <div class="relative overflow-hidden rounded-2xl bg-light">
        <img src="{{ $image }}" alt="{{ $title }}" class="aspect-square w-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
        <span class="absolute left-3 top-3 rounded-full bg-sale px-2.5 py-1 text-[10px] font-extrabold text-white">{{ $sale }}</span>
        <span class="absolute right-3 top-3 rounded-full bg-green-100 px-2.5 py-1 text-[10px] font-extrabold text-green-700">{{ $tag }}</span>
    </div>
    <div class="flex flex-1 flex-col p-2">
        <p class="mt-2 text-xs font-bold text-cta">In stock</p>
        <h3 class="mt-2 line-clamp-2 min-h-[44px] text-sm font-extrabold leading-5 text-dark sm:text-base">{{ $title }}</h3>
        <div class="mt-2 flex items-center gap-1 text-xs font-bold text-muted">
            @for($i = 0; $i < 5; $i++)
                <i data-lucide="star" class="h-3.5 w-3.5 fill-yellow-400 text-yellow-400"></i>
            @endfor
            <span>({{ $rating }})</span>
        </div>
        <div class="mt-auto flex items-end justify-between gap-3 pt-4">
            <div>
                <p class="text-xs text-muted line-through">{{ $oldPrice }}</p>
                <p class="text-lg font-extrabold text-primary">{{ $price }}</p>
            </div>
            <button class="btn-yellow !min-h-[40px] !rounded-xl !px-3 !py-2 text-xs" aria-label="Add {{ $title }} to cart">{{ $button }}</button>
        </div>
    </div>
</article>

