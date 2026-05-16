<section class="container-page pt-6 lg:pt-8" data-aos="fade-up">
    <div class="hero-swiper swiper overflow-hidden rounded-[28px] bg-gradient-to-br from-blue-50 via-white to-yellow-50">
        <div class="swiper-wrapper">
            @foreach([
                ['badge' => 'Fresh deals every morning', 'title' => 'A different kind of grocery store', 'text' => 'Premium produce, pantry staples and daily essentials delivered with care in under two hours.', 'price' => '৳1,650', 'image' => 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=900&q=85'],
                ['badge' => 'Organic market picks', 'title' => 'Healthy groceries for busy families', 'text' => 'Shop farm-fresh fruits, dairy, snacks and beverages with weekly specials.', 'price' => '৳1,050', 'image' => 'https://images.unsplash.com/photo-1579113800032-c38bd7635818?auto=format&fit=crop&w=900&q=85'],
            ] as $slide)
                <div class="swiper-slide">
                    <div class="grid min-h-[520px] items-center gap-8 p-6 sm:p-8 md:grid-cols-2 lg:p-12 xl:p-16">
                        <div class="max-w-xl">
                            <span class="mb-5 inline-flex rounded-full bg-accent/25 px-4 py-2 text-xs font-extrabold uppercase tracking-[0.18em] text-primary">{{ $slide['badge'] }}</span>
                            <h1 class="text-3xl font-extrabold tracking-[-0.04em] text-dark sm:text-4xl md:text-5xl xl:text-6xl">{{ $slide['title'] }}</h1>
                            <p class="mt-5 text-base leading-7 text-muted sm:text-lg">{{ $slide['text'] }}</p>
                            <div class="mt-7 flex flex-wrap items-center gap-5">
                                <a href="#featured" class="btn-primary">Shop now</a>
                                <p class="text-sm font-semibold text-muted">Starting at <span class="text-2xl font-extrabold text-sale">{{ $slide['price'] }}</span></p>
                            </div>
                        </div>
                        <div class="overflow-hidden rounded-[28px] shadow-soft">
                            <img src="{{ $slide['image'] }}" alt="Fresh grocery assortment" class="h-[260px] w-full object-cover sm:h-[340px] lg:h-[430px]" loading="lazy">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="hero-pagination swiper-pagination !bottom-5"></div>
    </div>
</section>

