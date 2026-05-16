@php
$products = [
    ['Organic Strawberries', 'https://images.unsplash.com/photo-1464965911861-746a04b4bca6?auto=format&fit=crop&w=500&q=85', '৳880', '৳550'],
    ['Fresh Broccoli Crown', 'https://images.unsplash.com/photo-1459411621453-7b03977f4bfc?auto=format&fit=crop&w=500&q=85', '৳499', '৳330'],
    ['Almond Milk Original', 'https://images.unsplash.com/photo-1550583724-b2692b85b150?auto=format&fit=crop&w=500&q=85', '৳660', '৳440'],
    ['Sourdough Bread Loaf', 'https://images.unsplash.com/photo-1586444248902-2f64eddc13df?auto=format&fit=crop&w=500&q=85', '৳770', '৳499'],
    ['Free Range Eggs', 'https://images.unsplash.com/photo-1582722872445-44dc5f7e3c8f?auto=format&fit=crop&w=500&q=85', '৳940', '৳690'],
    ['Organic Blueberries', 'https://images.unsplash.com/photo-1498557850523-fd3d118b962e?auto=format&fit=crop&w=500&q=85', '$9.99', '৳770'],
];
@endphp

<section id="featured" class="container-page py-12 md:py-16">
    <div class="mb-8 flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
        <div>
            <p class="text-sm font-extrabold uppercase tracking-[0.2em] text-primary">Featured products</p>
            <h2 class="mt-2 text-3xl font-extrabold tracking-tight text-dark md:text-4xl">Fresh picks for your cart</h2>
        </div>
        <a href="#" class="btn-yellow self-start">View all products</a>
    </div>
    <div class="featured-swiper swiper !overflow-visible">
        <div class="swiper-wrapper">
            @foreach($products as [$title, $image, $old, $price])
                <div class="swiper-slide h-auto">
                    <x-product-card :title="$title" :image="$image" :old-price="$old" :price="$price" button="Add" />
                </div>
            @endforeach
        </div>
    </div>
</section>

