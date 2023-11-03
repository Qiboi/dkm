@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="grid grid-cols-12">
    <section class="col-span-12">
        @include('components.navbar')
    </section>

    <section class="col-span-12 bg-white h-screen overflow-hidden">
        <div class="py-20 px-44">
            <p class="text-center text-4xl font-bold">Welcome to DKM Al-Furqon Website!</p>
            <p class="text-center text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem voluptates inventore optio distinctio iure nisi architecto ex unde magnam exercitationem doloribus deleniti, earum dolorem necessitatibus adipisci numquam culpa. Earum, voluptates.</p>
        </div>
        <div class="flex justify-center">
            <img src="{{ asset('images/remove.png') }}" alt="">
        </div>
    </section>

    <section class="col-span-12 bg-gray-800 h-screen py-20">
        <h1 class="text-white text-4xl font-bold text-center">Introduce the Member!</h1>
        <div class="mt-32">
            @include('components.slider')
        </div>
    </section>

    <section class="col-span-12 bg-gray-800">
        <div>
            @include('components.footer')
        </div>
    </section>
</div>

@endsection