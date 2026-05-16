<nav class="hidden border-b border-line bg-white lg:block" aria-label="Primary navigation">
    <div class="container-page flex min-h-[64px] items-center gap-5 xl:gap-10">
        <a href="{{ route('shop') }}" class="group relative inline-flex min-h-[46px] shrink-0 items-center gap-3 overflow-visible rounded-2xl bg-primary px-4 text-xs font-extrabold text-white shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:shadow-card xl:px-6 xl:text-sm">
            <i data-lucide="menu" class="h-5 w-5"></i>
            ALL CATEGORIES
            <span class="pointer-events-none absolute left-0 top-full hidden w-64 rounded-3xl border border-line bg-white p-3 text-left text-dark shadow-soft group-hover:block">
                <span class="block rounded-2xl px-4 py-3 hover:bg-light">Fresh Produce</span>
                <span class="block rounded-2xl px-4 py-3 hover:bg-light">Dairy & Eggs</span>
                <span class="block rounded-2xl px-4 py-3 hover:bg-light">Organic Snacks</span>
            </span>
        </a>
        <div class="flex min-w-0 flex-1 items-center justify-center gap-5 xl:gap-10 2xl:gap-14">
            @foreach([
                'Home' => route('home'),
                'Shop' => route('shop'),
                'Meats & Seafood' => route('shop').'#meats-seafood',
                'Bakery' => route('shop').'#bakery',
                'Beverages' => route('shop').'#beverages',
                'Blog' => route('blog'),
                'Contact' => route('contact'),
            ] as $item => $url)
                <a href="{{ $url }}" class="nav-link rounded-xl px-0.5 text-xs hover:drop-shadow-sm xl:px-1 xl:text-sm">{{ $item }}</a>
            @endforeach
        </div>
        <div class="hidden shrink-0 items-center gap-2 text-sm font-bold text-primary xl:flex">
            <i data-lucide="phone" class="h-5 w-5"></i>
            +1 800 555 0199
        </div>
    </div>
</nav>

<div x-show="mobileMenu" x-cloak class="fixed inset-0 z-[80] lg:hidden" aria-modal="true" role="dialog">
    <button @click="mobileMenu = false" x-transition.opacity class="absolute inset-0 bg-dark/45" aria-label="Close menu overlay"></button>
    <aside x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="relative h-full w-[86vw] max-w-sm overflow-y-auto bg-white p-5 shadow-soft">
        <div class="mb-6 flex items-center justify-between">
            <span class="text-xl font-extrabold">SayedCart</span>
            <button @click="mobileMenu = false" class="grid h-10 w-10 place-items-center rounded-xl border border-line" aria-label="Close menu"><i data-lucide="x" class="h-5 w-5"></i></button>
        </div>
        <a href="{{ route('shop') }}" class="mb-5 inline-flex min-h-[44px] w-full items-center justify-center gap-2 rounded-2xl bg-primary px-4 text-sm font-extrabold text-white"><i data-lucide="menu" class="h-5 w-5"></i>ALL CATEGORIES</a>
        <div class="grid gap-2">
            @foreach([
                'Home' => route('home'),
                'Shop' => route('shop'),
                'Meats & Seafood' => route('shop').'#meats-seafood',
                'Bakery' => route('shop').'#bakery',
                'Beverages' => route('shop').'#beverages',
                'Blog' => route('blog'),
                'Contact' => route('contact'),
            ] as $item => $url)
                <a href="{{ $url }}" class="rounded-2xl px-4 py-3 text-base font-bold text-dark transition-all duration-300 hover:translate-x-1 hover:bg-blue-50 hover:text-primary">{{ $item }}</a>
            @endforeach
        </div>
    </aside>
</div>


