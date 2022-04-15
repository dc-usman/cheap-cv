@extends('layouts.web')

@section('title', 'Woops! 404 Not Found')
@section('description', '')
@section('canonical', config('app.url') . Request::path() )

@section('content')

    <section class="container mx-auto my-10 px-4">

        {{-- <h1 class="text-primary text-4xl my-4"><strong>About</strong></h1> --}}

        <img class="mx-auto h-40 md:h-96" src="{{ asset('imgs/error-404.svg') }}" alt="Not Found">

        <div class="text-center mt-3 space-y-2 text-xl md:text-3xl">
            <div class="text-primary"><strong>Woops</strong></div>
            <div class="text-secondary"><strong>This page got lost in conversation</strong></div>
            <a class="group relative inline-flex border border-primary focus:outline-none w-full md:w-auto" href="{{ route('home') }}">
                <span class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-white text-center font-bold uppercase bg-primary ring-1 ring-primary ring-offset-1 ring-offset-primary transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                    Back to Home
                </span>
            </a>
        </div>
    </section>

@endsection
