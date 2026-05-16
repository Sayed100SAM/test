@extends('layouts.app')

@section('title', 'Admin Dashboard | SayedCart')

@section('content')
<section class="container-page py-12 md:py-16">
    <div class="rounded-[32px] bg-dark p-6 text-white md:p-10">
        <p class="text-sm font-extrabold uppercase tracking-[0.2em] text-accent">Admin end</p>
        <h1 class="mt-3 text-3xl font-extrabold md:text-5xl">SayedCart store control panel</h1>
        <p class="mt-4 max-w-2xl text-white/75">Manage products, customer orders, blog posts, promotions, categories and homepage merchandising.</p>
    </div>
    <div class="mt-8 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
        @foreach([['Revenue', '৳27.4L'], ['Orders', '438'], ['Products', '1,240'], ['Customers', '8,920']] as [$label, $value])
            <article class="rounded-3xl border border-line bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-card">
                <p class="text-sm font-bold text-muted">{{ $label }}</p>
                <p class="mt-3 text-4xl font-extrabold text-primary">{{ $value }}</p>
            </article>
        @endforeach
    </div>
</section>
@endsection


