@extends('layouts.app')

@section('title', 'Register')

@section('content')

<nav class="fixed top-0 z-10 mx-auto w-full max-w-container bg-white rounded-b-full border-b-4 border-gray-400">
    <div class="py-3">
        <p class="text-center text-lg leading-6 text-gray-800 font-bold">Register DKM Al-Furqon</p>        
    </div>
</nav>

<div class="flex h-screen items-center justify-center bg-gray-800">
    <div class=" p-4">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <input id="name" type="name" name="name" placeholder="name" class="form-control text-sm px-4 py-2 focus:outline-none rounded-full w-72 shadow-lg" required autocomplete="name">
            </div>
            <div class="mb-4">
                <input id="email" type="email" name="email" placeholder="email" class="form-control text-sm px-4 py-2 focus:outline-none rounded-full w-72 shadow-lg" required autocomplete="email">
            </div>
            <div class="mb-4">
                <input id="password" type="password" name="password" placeholder="password" class="form-control text-sm px-4 py-2 focus:outline-none rounded-full w-72 shadow-lg" required autocomplete="new-password">
            </div>
            <div class="mb-4">
                <input id="password-confirm" type="password" name="password_confirmation" placeholder="confirm password" class="form-control text-sm px-4 py-2 focus:outline-none rounded-full w-72 shadow-lg" required autocomplete="new-password">
            </div>
            <div>
                <button type="submit" class="hidden">
                    Register
                </button>
            </div>
        </form>
    </div>
</div>

<footer class="fixed bottom-0 z-10 w-full">
    <div class="flex justify-center items-center py-2">
        <a href="{{ route('login') }}" class="text-sm text-slate-400 font-medium">Alredy have an account? Click here!</a>
    </div>
</footer>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
