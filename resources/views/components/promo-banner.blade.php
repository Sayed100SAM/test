@props(['image', 'title', 'text', 'button' => 'Shop now'])

<article class="relative isolate min-h-[240px] overflow-hidden rounded-3xl p-7 shadow-soft md:p-9" data-aos="fade-up">
    <img src="{{ $image }}" alt="{{ $title }}" class="absolute inset-0 -z-10 h-full w-full object-cover" loading="lazy">
    <div class="absolute inset-0 -z-10 bg-gradient-to-r from-dark/75 via-dark/35 to-transparent"></div>
    <div class="max-w-xs text-white">
        <h3 class="text-2xl font-extrabold tracking-tight md:text-3xl">{{ $title }}</h3>
        <p class="mt-3 text-sm leading-6 text-white/85">{{ $text }}</p>
        <a href="#" class="mt-6 inline-flex min-h-[44px] items-center rounded-2xl bg-white px-5 text-sm font-extrabold text-dark transition-all duration-300 hover:-translate-y-0.5">{{ $button }}</a>
    </div>
</article>

