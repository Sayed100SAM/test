@php
$left = [
    ['Greek Yogurt Cup', 'https://images.unsplash.com/photo-1571212515416-fef01fc43637?auto=format&fit=crop&w=500&q=85', '৳440', '$2.49'],
    ['Crisp Green Apples', 'https://images.unsplash.com/photo-1560806887-1e4cd0b6cbd6?auto=format&fit=crop&w=500&q=85', '৳770', '৳550'],
];
$right = [
    ['Atlantic Salmon Fillet', 'https://images.unsplash.com/photo-1599084993091-1cb5c0721cc6?auto=format&fit=crop&w=500&q=85', '$18.99', '৳1,650'],
    ['Sparkling Water Pack', 'https://images.unsplash.com/photo-1523362628745-0c100150b504?auto=format&fit=crop&w=500&q=85', '$9.99', '৳830'],
];
@endphp

<section class="container-page py-12 md:py-16">
    <div class="mb-8 text-center">
        <p class="text-sm font-extrabold uppercase tracking-[0.2em] text-primary">Customer favorites</p>
        <h2 class="mt-2 text-3xl font-extrabold tracking-tight text-dark md:text-4xl">Best sellers this month</h2>
    </div>
    <div class="grid gap-6 lg:grid-cols-[1fr_1.15fr_1fr]">
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-1">
            @foreach($left as [$title, $image, $old, $price])
                <x-product-card :title="$title" :image="$image" :old-price="$old" :price="$price" />
            @endforeach
        </div>
        <article class="relative min-h-[420px] overflow-hidden rounded-[32px] bg-dark p-8 text-white shadow-soft" data-aos="fade-up">
            <img src="https://images.unsplash.com/photo-1610348725531-843dff563e2c?auto=format&fit=crop&w=900&q=85" alt="Best seller fresh grocery promotion" class="absolute inset-0 h-full w-full object-cover opacity-70" loading="lazy">
            <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/35 to-transparent"></div>
            <div class="relative flex h-full min-h-[360px] flex-col justify-end">
                <span class="mb-4 inline-flex w-max rounded-full bg-accent px-4 py-2 text-xs font-extrabold uppercase text-dark">Best value</span>
                <h3 class="max-w-md text-4xl font-extrabold tracking-tight md:text-5xl">Weekly family grocery bundle</h3>
                <p class="mt-4 max-w-sm text-white/85">Save big on premium pantry essentials, fresh produce and healthy snacks.</p>
                <a href="#" class="mt-7 btn-green w-max">Grab the bundle</a>
            </div>
        </article>
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-1">
            @foreach($right as [$title, $image, $old, $price])
                <x-product-card :title="$title" :image="$image" :old-price="$old" :price="$price" />
            @endforeach
        </div>
    </div>
</section>

