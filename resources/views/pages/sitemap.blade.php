@extends('layouts.web')

@section('title', 'Sitemap')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path() )

@section('content')

    <section class="container mx-auto my-10 px-4">

        <h1 class="text-primary text-4xl my-4"><strong>Site Map</strong></h1>
        
        <div class="bg-primary">
            <h1 class="text-white text-xl p-4 text-center sm:text-left">
                Our Company
            </h1>
        </div>
        <div class="mx-2 my-4">
            <ul class="grid grid-col-1 sm:grid-cols-4 text-center sm:text-left">
                <li>
                    <a href="{{route('home')}}" class="text-secondary hover:text-primary "> Home</a>
                </li>
                <li>
                    <a href="{{route('about')}}" class="text-secondary hover:text-primary "> About</a>
                </li>
                <li>
                    <a href="{{route('services')}}" class="text-secondary hover:text-primary "> Services</a>
                </li>
                <li>
                    <a href="{{route('reviews')}}" class="text-secondary hover:text-primary "> Reviews</a>
                </li>
                <li>
                    <a href="{{route('contact')}}" class="text-secondary hover:text-primary "> Contact</a>
                </li>
                <li>
                    <a href="{{route('order')}}" class="text-secondary hover:text-primary "> Order</a>
                </li>
            </ul>
        </div>

        <div class="bg-primary">
            <h1 class="text-white text-xl p-4 text-center sm:text-left">
                Our Legal Policies
            </h1>
        </div>
        <div class="mx-2 my-4">
            <ul class="grid grid-col-1 sm:grid-cols-4 text-center sm:text-left">
                <li class="hover:text-secondary">
                    <a href="{{route('policy.privacy-policy')}}" class="text-secondary hover:text-primary "> Privacy Policy  </a>
                </li>
                <li class="hover:text-secondary">
                    <a href="{{route('policy.terms-and-conditions')}}" class="text-secondary hover:text-primary "> Terms & Conditions  </a>
                </li>
                <li class="hover:text-secondary sm:col-span-2">
                    <a href="{{route('policy.revision-and-refund')}}" class="text-secondary hover:text-primary "> Revision & Refund Policy  </a>
                </li>
            </ul>
        </div>
        
        <div class="bg-primary">
            <h1 class="text-white text-xl p-4 text-center sm:text-left">
                Our Services
            </h1>
        </div>
        <div class="mx-2 my-4">
            <ul class="grid grid-col-1 sm:grid-cols-4 text-center sm:text-left">
                @if (!empty($services))
                    @foreach ($services as $service)
                        <li>
                            <a href="{{route('services.show',$service->slug)}}" class="text-secondary hover:text-primary "> {{ $service->name }}</a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </section>

@endsection
