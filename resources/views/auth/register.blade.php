@extends('layouts.app')

@section('title', 'Register | SayedCart')

@section('content')
<section class="container-page py-14 md:py-20">
    <div class="mx-auto max-w-2xl rounded-[32px] border border-line bg-white p-6 shadow-soft sm:p-8 lg:p-10">
        <p class="text-sm font-extrabold uppercase tracking-[0.2em] text-primary">Customer signup</p>
        <h1 class="mt-3 text-3xl font-extrabold tracking-tight text-dark md:text-4xl">Create your SayedCart account</h1>
        <form method="POST" action="{{ route('register.store') }}" class="mt-8 grid gap-5">
            @csrf
            <div>
                <label for="name" class="text-sm font-bold text-dark">Full name</label>
                <input id="name" name="name" value="{{ old('name') }}" required class="mt-2 min-h-[52px] w-full rounded-2xl border-line bg-light focus:border-primary focus:ring-primary">
                @error('name')<p class="mt-2 text-sm font-semibold text-sale">{{ $message }}</p>@enderror
            </div>
            <div>
                <label for="email" class="text-sm font-bold text-dark">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required class="mt-2 min-h-[52px] w-full rounded-2xl border-line bg-light focus:border-primary focus:ring-primary">
                @error('email')<p class="mt-2 text-sm font-semibold text-sale">{{ $message }}</p>@enderror
            </div>
            <div class="grid gap-5 sm:grid-cols-2">
                <div>
                    <label for="password" class="text-sm font-bold text-dark">Password</label>
                    <input id="password" name="password" type="password" required class="mt-2 min-h-[52px] w-full rounded-2xl border-line bg-light focus:border-primary focus:ring-primary">
                    @error('password')<p class="mt-2 text-sm font-semibold text-sale">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="password_confirmation" class="text-sm font-bold text-dark">Confirm password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required class="mt-2 min-h-[52px] w-full rounded-2xl border-line bg-light focus:border-primary focus:ring-primary">
                </div>
            </div>
            <button class="btn-green w-full">Create customer account</button>
        </form>
        <p class="mt-6 text-sm text-muted">Already registered? <a href="{{ route('login') }}" class="font-extrabold text-primary hover:text-blue-700">Login</a></p>
    </div>
</section>
@endsection


