<footer class="border-t border-line bg-light" x-data="{ open: null }">
    <div class="container-page py-12 md:py-16">
        <div class="grid gap-8 md:grid-cols-3 lg:grid-cols-5">
            <div class="md:col-span-3 lg:col-span-1">
                <div class="flex items-center gap-2">
                    <span class="grid h-11 w-11 place-items-center rounded-2xl bg-primary text-xl font-black text-white">F</span>
                    <span class="text-2xl font-extrabold">SayedCart</span>
                </div>
                <p class="mt-4 text-sm leading-6 text-muted">Premium groceries, fresh produce and everyday essentials delivered with speed and care.</p>
            </div>
            @foreach([
                'Categories' => [
                    'Vegetables' => 'https://en.wikipedia.org/wiki/Vegetable',
                    'Fresh Fruits' => 'https://en.wikipedia.org/wiki/Fruit',
                    'Dairy & Eggs' => 'https://en.wikipedia.org/wiki/Dairy_product',
                    'Meat & Seafood' => 'https://en.wikipedia.org/wiki/Seafood',
                ],
                'Useful links' => [
                    'About us' => 'https://en.wikipedia.org/wiki/Online_grocer',
                    'Shop' => route('shop'),
                    'Blog' => route('blog'),
                    'Contact' => route('contact'),
                ],
                'Customer support' => [
                    'Help center' => route('contact'),
                    'Delivery info' => 'https://en.wikipedia.org/wiki/Delivery_(commerce)',
                    'Track order' => auth()->check() ? route('customer.dashboard') : route('login'),
                    'Returns' => 'https://en.wikipedia.org/wiki/Return_merchandise_authorization',
                ],
                'Policies' => [
                    'Privacy policy' => 'https://en.wikipedia.org/wiki/Privacy_policy',
                    'Terms of service' => 'https://en.wikipedia.org/wiki/Terms_of_service',
                    'Refund policy' => 'https://en.wikipedia.org/wiki/Money-back_guarantee',
                    'Cookie policy' => 'https://en.wikipedia.org/wiki/HTTP_cookie',
                ],
            ] as $title => $links)
                <div class="border-b border-line pb-4 md:border-0 md:pb-0">
                    <button @click="open === '{{ $title }}' ? open = null : open = '{{ $title }}'" class="flex w-full items-center justify-between text-left text-base font-extrabold text-dark md:pointer-events-none">
                        {{ $title }}
                        <i data-lucide="chevron-down" class="h-4 w-4 md:hidden"></i>
                    </button>
                    <ul x-show="open === '{{ $title }}'" x-transition class="mt-4 grid gap-3 md:!grid" :class="open === '{{ $title }}' ? 'grid' : 'hidden md:grid'">
                        @foreach($links as $link => $url)
                            <li><a href="{{ $url }}" class="text-sm font-medium text-muted transition-all duration-300 hover:translate-x-1 hover:text-primary" @if(str_starts_with($url, 'https://')) target="_blank" rel="noopener noreferrer" @endif>{{ $link }}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
        <div class="mt-10 flex flex-col justify-between gap-4 border-t border-line pt-6 text-sm text-muted md:flex-row">
            <p>&copy; {{ date('Y') }} SayedCart. All rights reserved.</p>
            <p class="font-semibold">Secure payments &middot; Fast delivery &middot; 24/7 support</p>
        </div>
    </div>
</footer>



