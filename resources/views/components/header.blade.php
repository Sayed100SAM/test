<header class="sticky top-0 z-50 border-b border-line/80 bg-white/90 backdrop-blur-xl shadow-sm" x-data="{ locationModal: false, selectedLocation: localStorage.getItem('sayedcart_location') || 'Los Angeles' }">
    <div class="bg-primary text-white">
        <div class="container-page flex min-h-9 items-center justify-between gap-4 text-xs font-medium">
            <div class="hidden items-center gap-5 lg:flex">
                <a href="{{ auth()->check() ? route('customer.dashboard') : route('login') }}" class="transition-colors hover:text-accent">Account</a>
                <a href="{{ route('shop') }}#wishlist" class="transition-colors hover:text-accent">Wishlist</a>
                <a href="{{ auth()->check() ? route('customer.dashboard') : route('login') }}" class="transition-colors hover:text-accent">Order Tracking</a>
            </div>
            <p class="mx-auto truncate text-center lg:mx-0">Free delivery on orders over $45. Fresh groceries at your doorstep.</p>
            <div class="hidden items-center gap-4 sm:flex">
                <button class="inline-flex items-center gap-1" aria-label="Select language">English <i data-lucide="chevron-down" class="h-3 w-3"></i></button>
                <button class="inline-flex items-center gap-1" aria-label="Select currency">BDT <i data-lucide="chevron-down" class="h-3 w-3"></i></button>
            </div>
        </div>
    </div>

    <div class="container-page flex min-h-[74px] items-center justify-between gap-3 py-3 lg:min-h-[92px]">
        <div class="flex items-center gap-3">
            <button @click="mobileMenu = true" class="inline-flex h-11 w-11 items-center justify-center rounded-2xl border border-line lg:hidden" aria-label="Open menu">
                <i data-lucide="menu" class="h-5 w-5"></i>
            </button>
            <a href="{{ route('home') }}" class="flex items-center gap-2" aria-label="SayedCart home">
                <span class="grid h-11 w-11 place-items-center rounded-2xl bg-primary text-xl font-black text-white">F</span>
                <span class="text-xl font-extrabold tracking-tight text-dark sm:text-2xl">SayedCart</span>
            </a>
        </div>

        <div class="hidden flex-1 items-center gap-3 lg:flex">
            <button @click="locationModal = true; $nextTick(() => window.initSayedCartMap && window.initSayedCartMap())" class="inline-flex min-h-[50px] items-center gap-2 rounded-2xl border border-line bg-light px-4 text-sm font-semibold text-dark transition-all duration-300 hover:-translate-y-0.5 hover:border-primary hover:bg-blue-50 hover:text-primary hover:shadow-card" aria-label="Choose delivery location">
                <i data-lucide="map-pin" class="h-5 w-5 text-primary"></i>
                <span x-text="selectedLocation"></span>
                <i data-lucide="chevron-down" class="h-4 w-4 text-muted"></i>
            </button>
            <form action="{{ route('shop') }}" class="relative flex-1" role="search">
                <label for="desktop-search" class="sr-only">Search groceries</label>
                <input id="desktop-search" type="search" placeholder="Search for fruits, vegetables, drinks..." class="min-h-[52px] w-full rounded-2xl border-line bg-light pl-5 pr-14 text-sm shadow-none focus:border-primary focus:ring-primary">
                <button class="absolute right-2 top-1/2 grid h-10 w-10 -translate-y-1/2 place-items-center rounded-xl bg-primary text-white" aria-label="Search">
                    <i data-lucide="search" class="h-5 w-5"></i>
                </button>
            </form>
        </div>

        <div class="flex items-center justify-end gap-2">
            <button @click="mobileSearch = !mobileSearch" class="grid h-11 w-11 place-items-center rounded-2xl border border-line lg:hidden" aria-label="Open search">
                <i data-lucide="search" class="h-5 w-5"></i>
            </button>
            <a href="{{ auth()->check() ? route('customer.dashboard') : route('login') }}" class="hidden h-11 w-11 place-items-center rounded-2xl border border-line transition-all duration-300 hover:-translate-y-0.5 hover:border-primary hover:text-primary hover:shadow-card lg:grid" aria-label="Profile"><i data-lucide="user" class="h-5 w-5"></i></a>
            <a href="{{ route('shop') }}#wishlist" class="relative hidden h-11 w-11 place-items-center rounded-2xl border border-line transition-all duration-300 hover:-translate-y-0.5 hover:border-sale hover:text-sale hover:shadow-card lg:grid" aria-label="Wishlist"><i data-lucide="heart" class="h-5 w-5"></i><span class="absolute -right-1 -top-1 grid h-5 w-5 place-items-center rounded-full bg-sale text-[10px] font-bold text-white">2</span></a>
            <a href="{{ route('shop') }}#cart" class="relative grid h-11 w-11 place-items-center rounded-2xl bg-dark text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-primary hover:shadow-card" aria-label="Cart"><i data-lucide="shopping-cart" class="h-5 w-5"></i><span class="absolute -right-1 -top-1 grid h-5 w-5 place-items-center rounded-full bg-accent text-[10px] font-black text-dark">3</span></a>
            <div class="hidden lg:block">
                <p class="text-xs text-muted">Cart total</p>
                <p class="text-sm font-extrabold text-dark">৳4,690</p>
            </div>
        </div>
    </div>

    <div x-show="mobileSearch" x-transition class="border-t border-line bg-white px-4 pb-4 lg:hidden">
        <form action="{{ route('shop') }}" class="relative mx-auto max-w-xl" role="search">
            <label for="mobile-search" class="sr-only">Search groceries</label>
            <input id="mobile-search" type="search" placeholder="Search groceries..." class="min-h-[48px] w-full rounded-2xl border-line bg-light pl-4 pr-12 focus:border-primary focus:ring-primary">
            <button class="absolute right-2 top-1/2 grid h-9 w-9 -translate-y-1/2 place-items-center rounded-xl bg-primary text-white" aria-label="Search"><i data-lucide="search" class="h-4 w-4"></i></button>
        </form>
    </div>

    <div x-show="locationModal" x-cloak class="fixed inset-0 z-[90] grid place-items-center bg-dark/50 px-4 py-6" role="dialog" aria-modal="true" aria-label="Choose delivery location">
        <div @click.outside="locationModal = false" x-transition class="w-full max-w-4xl overflow-hidden rounded-[32px] bg-white shadow-soft">
            <div class="flex items-start justify-between gap-4 border-b border-line p-5 md:p-6">
                <div>
                    <p class="text-sm font-extrabold uppercase tracking-[0.2em] text-primary">Delivery location</p>
                    <h2 class="mt-2 text-2xl font-extrabold text-dark">Choose where SayedCart should deliver</h2>
                </div>
                <button @click="locationModal = false" class="grid h-11 w-11 shrink-0 place-items-center rounded-2xl border border-line transition-all duration-300 hover:border-sale hover:text-sale" aria-label="Close location picker">
                    <i data-lucide="x" class="h-5 w-5"></i>
                </button>
            </div>
            <div class="grid gap-5 p-5 md:grid-cols-[1fr_1.4fr] md:p-6">
                <div class="space-y-4">
                    <label for="sayedcart-location-input" class="text-sm font-bold text-dark">Search your address</label>
                    <input id="sayedcart-location-input" type="text" placeholder="Enter city, area or address" class="min-h-[52px] w-full rounded-2xl border-line bg-light focus:border-primary focus:ring-primary">
                    <button type="button" id="sayedcart-use-location" class="btn-primary w-full">Use my current location</button>
                    <button type="button" @click="selectedLocation = document.getElementById('sayedcart-location-input').value || selectedLocation; localStorage.setItem('sayedcart_location', selectedLocation); locationModal = false" class="btn-green w-full">Confirm location</button>
                    <p class="text-xs leading-5 text-muted">Google Maps and Places autocomplete require a valid `GOOGLE_MAPS_API_KEY` in your Laravel environment.</p>
                </div>
                <div id="sayedcart-map" class="min-h-[320px] overflow-hidden rounded-3xl bg-light"></div>
            </div>
        </div>
    </div>
</header>


