@extends('layouts.app')

@section('title', 'Login | SayedCart')

@section('content')
<section class="container-page py-14 md:py-20">
    <div class="mx-auto grid max-w-5xl overflow-hidden rounded-[32px] border border-line bg-white shadow-soft lg:grid-cols-2">
        <div class="hidden bg-gradient-to-br from-primary to-blue-700 p-10 text-white lg:block">
            <p class="text-sm font-extrabold uppercase tracking-[0.2em] text-accent">Welcome back</p>
            <h1 class="mt-4 text-4xl font-extrabold tracking-tight">Manage orders, carts and fresh grocery rewards.</h1>
            <p class="mt-4 text-white/80">Customer accounts open the shopping dashboard. Admin accounts open the store control panel.</p>
        </div>
        <div class="p-6 sm:p-8 lg:p-10">
            <h2 class="text-3xl font-extrabold text-dark">Sign in</h2>
            <form method="POST" action="{{ route('login.store') }}" class="mt-8 grid gap-5">
                @csrf
                <div>
                    <label for="email" class="text-sm font-bold text-dark">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus class="mt-2 min-h-[52px] w-full rounded-2xl border-line bg-light focus:border-primary focus:ring-primary">
                    @error('email')<p class="mt-2 text-sm font-semibold text-sale">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="password" class="text-sm font-bold text-dark">Password</label>
                    <input id="password" name="password" type="password" required class="mt-2 min-h-[52px] w-full rounded-2xl border-line bg-light focus:border-primary focus:ring-primary">
                    @error('password')<p class="mt-2 text-sm font-semibold text-sale">{{ $message }}</p>@enderror
                </div>
                <label class="flex items-center gap-3 text-sm font-semibold text-muted">
                    <input type="checkbox" name="remember" class="rounded border-line text-primary focus:ring-primary">
                    Remember me
                </label>
                <button class="btn-primary w-full">Login securely</button>
            </form>
            <p class="mt-6 text-sm text-muted">New customer? <a href="{{ route('register') }}" class="font-extrabold text-primary hover:text-blue-700">Create an account</a></p>
        </div>
    </div>
</section>
@endsection


