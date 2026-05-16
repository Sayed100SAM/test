@extends('layouts.app')

@section('title', 'Contact SayedCart')

@section('content')
<section class="container-page py-12 md:py-16">
    <div class="grid gap-8 lg:grid-cols-2">
        <div>
            <p class="text-sm font-extrabold uppercase tracking-[0.2em] text-primary">Contact</p>
            <h1 class="mt-3 text-4xl font-extrabold tracking-tight text-dark md:text-6xl">Need help with your groceries?</h1>
            <p class="mt-5 text-muted">Our support team can help with delivery windows, order updates, refunds and product questions.</p>
        </div>
        <form class="rounded-[32px] border border-line bg-white p-6 shadow-soft md:p-8">
            <div class="grid gap-5">
                <input class="min-h-[52px] rounded-2xl border-line bg-light focus:border-primary focus:ring-primary" placeholder="Your name">
                <input type="email" class="min-h-[52px] rounded-2xl border-line bg-light focus:border-primary focus:ring-primary" placeholder="Email address">
                <textarea rows="5" class="rounded-2xl border-line bg-light focus:border-primary focus:ring-primary" placeholder="How can we help?"></textarea>
                <button class="btn-primary">Send message</button>
            </div>
        </form>
    </div>
</section>
@endsection


