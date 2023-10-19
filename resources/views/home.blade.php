@extends('layouts.app')

@section('title', 'Home')

@section('content')

{{-- @include('components.navbar') --}}

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
    <section class="col-span-12 bg-gray-800 py-20 px-40">
        <div class="grid grid-cols-12 gap-4">            
            <div class="col-start-2 col-span-3 flex justify-between items-center">
                <div class="text-white text-center w-full">
                    Bagong
                </div>
            </div>
            <div class="col-span-4 flex justify-between items-center">
                <div class="text-white text-center w-full">
                    Bagong
                </div>
            </div>
            <div class="col-end-12 col-span-3 flex justify-between items-center">
                <div class="text-white text-center w-full">
                    Bagong
                </div>
            </div>            

        </div>
        <div class="grid grid-cols-12 gap-4 mt-4">
            <div class="col-span-3 flex justify-between items-center">
                <div class="text-white text-center w-full">
                    Bagong
                </div>
            </div>
            <div class="col-span-3 flex justify-between items-center">
                <div class="text-white text-center w-full">
                    Bagong
                </div>
            </div>
            <div class="col-span-3 flex justify-between items-center">
                <div class="text-white text-center w-full">
                    Bagong
                </div>
            </div>
            <div class="col-span-3 flex justify-between items-center">
                <div class="text-white text-center w-full">
                    Bagong
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="col-span-12 h-24 bg-red-500">

    </section> --}}
</div>

@endsection