@extends('layouts.app')

@section('title', 'Customer Dashboard | SayedCart')

@section('content')
<section class="container-page py-12 md:py-16">
    <div class="rounded-[32px] bg-gradient-to-br from-blue-50 to-green-50 p-6 md:p-10">
        <p class="text-sm font-extrabold uppercase tracking-[0.2em] text-primary">Customer end</p>
        <h1 class="mt-3 text-3xl font-extrabold text-dark md:text-5xl">Welcome, {{ auth()->user()->name }}.</h1>
        <p class="mt-4 max-w-2xl text-muted">Track orders, manage wishlist items, review subscriptions and continue shopping from your personal grocery dashboard.</p>
    </div>
    <div class="mt-8 grid gap-6 md:grid-cols-3">
        @foreach([['Active orders', '3'], ['Wishlist items', '12'], ['Autoship savings', '10%']] as [$label, $value])
            <article class="rounded-3xl border border-line bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-card">
                <p class="text-sm font-bold text-muted">{{ $label }}</p>
                <p class="mt-3 text-4xl font-extrabold text-primary">{{ $value }}</p>
            </article>
        @endforeach
    </div>
</section>
@endsection


