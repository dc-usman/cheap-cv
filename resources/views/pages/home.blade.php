@extends('layouts.web')

@section('title', "UAE's #1 Content Writing Services Company in Dubai")
@section('description', 'Best Content Writing Service UAE Offering Quality Content Writing Services in Dubai for your Blogs, Website at Cheap Rates by Best Copywriters in Dubai')
@section('canonical', config('app.app_url') )

@section('links')
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/circle.css')}}">
    <style>
        .serif {
            font-family: 'Zilla Slab', serif;
        }

        [x-cloak] {
            display: none;
        }

        .grid-indigo {
            background-image: radial-gradient(#d6d6dd 2px, transparent 2px);
            background-size: 16px 16px;
        }
    </style>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection
@section('content')

    {{-- Hero Section --}}
    <section class="container mx-auto">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-8 xl:col-span-8 my-auto">
                <div class="relative max-w-screen-xl my-auto px-5 mx-auto">
                    <div class="absolute top-[0.2rem] -left-2 -translate-y-12 pointer-events-none md:left-[12%]">
                        <svg class="text-primary animate-bounce" width="75" height="53" viewBox="0 0 46 120" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <polygon stroke="currentColor" fill="none" stroke-width="5" points="50 15, 100 100, 0 100" />
                        </svg>
                    </div>
                    <div class="hidden md:block absolute -right-2 -translate-y-20 pointer-events-none md:right-1/4">
                        <svg class="text-primary animate-spin-slow" width="46" height="53" viewBox="0 0 46 53" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="10" y="10" width="30" height="30" stroke="currentColor" fill="transparent" stroke-width="3" />
                        </svg>
                    </div>
                    <div class="absolute -bottom-36 right-0 -translate-y-20 pointer-events-none md:right-[12%]">
                        <svg class="text-primary animate-pulse" width="56" height="53" viewBox="0 0 46 53" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="20" stroke="currentColor" fill="none" stroke-width="5" />
                        </svg>
                    </div>
                    <div class="relative mt-12 space-y-4">
                        <div class="text-center md:text-left">
                            <h1 class="text-4xl text-primary">BEST CONTENT WRITING SERVICES IN DUBAI TO
                                <br class="hidden lg:inline">
                                <span class="text-gray-900">MAKE YOUR BUSINESS STAND OUT</span>
                            </h1>
                            <div class="mt-6 space-y-2">
                                <p>
                                    Words are powerful! So powerful that they can land straight to your customer’s heart and impact them to decide to invest in your business. You only need to use it the right way. If you don’t know how, that’s where our content writing services in Dubai come to the rescue. In the form of heart-captivating content, we best represent your business to your specific audience.
                                </p>
                            </div>
                            <div
                                class="mt-6 flex flex-col md:justify-start  items-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
                                <a class="group relative inline-flex border border-primary focus:outline-none w-full md:w-auto"
                                    href="#">
                                    <span
                                        class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-white text-center font-bold uppercase bg-primary ring-1 ring-primary ring-offset-1 ring-offset-primary transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                                        Live Chat
                                    </span>
                                </a>
                                <a class="group relative inline-flex border border-primary focus:outline-none w-full md:w-auto"
                                    href="{{ route('order') }}">
                                    <span
                                        class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-primary text-center font-bold uppercase bg-white ring-1 ring-primary ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                                        Order Now
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-4 xl:col-span-4">
                <div class=" py-16 px-4 xl:px-16 ">
                    <div class="relative">
                        <div class="absolute -left-2 -translate-y-12 pointer-events-none md:left-[12%]">
                            <svg class="text-primary animate-spin-slow" width="75" height="53" viewBox="0 0 46 120" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <polygon stroke="currentColor" fill="none" stroke-width="5" points="50 15, 100 100, 0 100" />
                            </svg>
                        </div>
                        <div class="absolute -bottom-36 right-0 -translate-y-20 pointer-events-none md:right-[12%]">
                            <svg class="text-primary animate-pulse" width="46" height="53" viewBox="0 0 46 53" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="10" width="30" height="30" stroke="currentColor" fill="transparent" stroke-width="3" />
                            </svg>
                        </div>
                        <div class="panel  w-full md:w-1/2 lg:w-full mx-auto">
                            <div class="bg-primary py-2 px-5 rounded-t-lg">
                                <p class="text-xl text-white text-center">Place You Order</p>
                            </div>
                            <form id="query-form" action="{{ route('order.query') }}" method="POST" class=" bg-white shadow-md rounded-b-lg px-4 pt-2 pb-4 flex flex-col md:ml-auto w-full  border border-gray-200 ">
                                @if (session('success'))
                                    <div class="mb-3 mx-4 bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                                        <div class="flex">
                                        <div class="py-1">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                    <circle style="fill:#25AE88;" cx="25" cy="25" r="25"/>
                                    <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="
                                        38,15 22,33 12,25 "/></svg>
                                            </div>
                                        <div>
                                            <p class="text-center font-bold">{{ session('success') }}</p>
                                        </div>
                                        </div>
                                    </div>
                                @endif
                                @csrf
                                <div class="mb-2">
                                    <select name="service" class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('service') border-red-500 @enderror">
                                        <option hidden="" value="0" disabled="" selected="">Services*</option>
                                        <option value="Article Writing">Article Writing</option>
                                        <option value="Blog Writing">Blog Writing</option>
                                        <option value="Press Release">Press Release</option>
                                        <option value="SEO Content">SEO Content</option>
                                        <option value="Website Content">Website Content</option>
                                        <option value="Guest Post">Guest Post</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    @error('service')
                                        <p class="text-red-600 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-2">
                                    <input type="text" name="name"
                                        class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-orange-300 focus:ring-2 focus:ring-red-200 text-base outline-none px-3 leading-8 transition-colors duration-200 ease-in-out @error('name')border-red-500 @enderror"
                                        placeholder="Full Name*" value="{{ old('name') }}">
                                    @error('name')
                                        <p class="text-red-600 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-2">
                                    <input type="email" name="email"
                                        class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-orange-300 focus:ring-2 focus:ring-red-200 text-base outline-none px-3 leading-8 transition-colors duration-200 ease-in-out @error('email')border-red-500 @enderror"
                                        placeholder="Email*" value="{{ old('email') }}">
                                    @error('email')
                                        <p class="text-red-600 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-2">
                                    <input type="tel" name="phone" id="phone"
                                        class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-orange-300 focus:ring-2 focus:ring-red-200 text-base outline-none px-3 leading-8 transition-colors duration-200 ease-in-out @error('phone')border-red-500 @enderror"
                                        placeholder="Phone*" value="{{ old('phone') }}">
                                        <input type="hidden" name="phone" id="phone2" />
                                    @error('phone')
                                        <p class="text-red-600 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-2">
                                    <textarea name="detail" rows="3"
                                        class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none px-3 leading-8 transition-colors duration-200 ease-in-out @error('detail')border-red-500 @enderror"
                                        placeholder="Details*">{{ old('detail') }}</textarea>
                                    @error('detail')
                                        <p class="text-red-600 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit"
                                    class="group relative inline-flex border border-primary focus:outline-none w-1/2 mx-auto">
                                    <span id="btn-submit"
                                        class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-primary text-center font-bold uppercase bg-white ring-1 ring-primary ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                                        Submit
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Divider --}}
    <div class="container mx-auto mt-4">
        <span class="block border-t border-primary"></span>
    </div>
    {{-- Bulb Section --}}
    <section class="container mx-auto  ">

        <div class="grid grid-cols-1 md:grid-cols-2 py-2">
            <div class="col-span-1 m-auto">
                <img class="h-[24rem] animate-pulse" src="{{ asset('imgs/bulb.png') }}" alt="">
            </div>
            <div class="col-span-1 mx-0 overflow-hidden hidden md:block">
                <div class="holderCircle w-full">
                    <div class="round"></div>
                    <div class="dotCircle" style="transform: rotate(252deg); transition: all 2s ease 0s;">
                        <span class="itemDot itemDot1 active" data-tab="1"
                            style="left: 412px; top: 212px; transform: rotate(108deg); transition: all 1s ease 0s;">
                            <i class="fas fa-info-circle"></i>
                            <span class="forActive"></span>
                        </span>
                        <span class="itemDot itemDot2" data-tab="2"
                            style="left: 312px; top: 385px; transform: rotate(108deg); transition: all 1s ease 0s;">
                            <i class="far fa-comments"></i>
                            <span class="forActive"></span>
                        </span>
                        <span class="itemDot itemDot3" data-tab="3"
                            style="left: 112px; top: 385px; transform: rotate(108deg); transition: all 1s ease 0s;">
                            <i class="fas fa-pen-nib"></i>
                            <span class="forActive"></span>
                        </span>
                        <span class="itemDot itemDot4 " data-tab="4"
                            style="left: 12px; top: 212px; transform: rotate(108deg); transition: all 1s ease 0s;">
                            <i class="far fa-edit"></i>
                            <span class="forActive"></span>
                        </span>
                        <span class="itemDot itemDot5" data-tab="5"
                            style="left: 112px; top: 39px; transform: rotate(108deg); transition: all 1s ease 0s;">
                            <i class="fas fa-book-reader"></i>
                            <span class="forActive"></span>
                        </span>
                        <span class="itemDot itemDot6" data-tab="6"
                            style="left: 312px; top: 39px; transform: rotate(108deg); transition: all 1s ease 0s;">
                            <i class="fas fa-file-download"></i>
                            <span class="forActive"></span>
                        </span>
                    </div>
                    <div class="contentCircle pt-10">
                        <div class="CirItem title-box CirItem1">
                            <p class="mt-[4.5rem]">Content that Drives Revenue</p>
                            <i class="fas fa-info-circle"></i>
                        </div>
                        <div class="CirItem title-box CirItem2">
                            <p class="mt-[4.5rem]">Content that Drives Revenue</p>
                            <i class="far fa-comments"></i>
                        </div>
                        <div class="CirItem title-box CirItem3">
                            <p class="mt-[4.5rem]">Content that Drives Revenue</p>
                            <i class="fas fa-pen-nib"></i>
                        </div>
                        <div class="CirItem title-box CirItem4 active">
                            <p class="mt-[4.5rem]">Content that Drives Revenue</p>
                            <i class="far fa-edit"></i>
                        </div>
                        <div class="CirItem title-box CirItem5">
                            <p class="mt-[4.5rem]">Content that Drives Revenue</p>
                            <i class="fas fa-book-reader"></i>
                        </div>
                        <div class="CirItem title-box CirItem6">
                            <p class="mt-[4.5rem]">Content that Drives Revenue</p>
                            <i class="fas fa-file-download"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- Business Content Section --}}
    <section class="">
        <div class="py-10 bg-none lg:bg-wave-1 xl:bg-primary xl:h-auto bg-no-repeat bg-center bg-cover lg:h-80">
            <div class="text-center lg:text-white mx-4">
                <h4 class="text-2xl">Your Business, Your Vision But Content By Us Lets Reposition your Business</h4>
                <p class="">
                    If you are planning to launch your online business or looking to reposition it from scratch, our creative copywriting services Dubai is what you need the most.
                </p>
            </div>
        </div>
        <div class="container mx-auto">
            <div class="text-center my-6">
                <h2 class="text-3xl text-secondary">
                    One of the Emerging Content Writing Companies in Dubai Who <span class="text-primary">Works to Bring You on the Forefront</span>
                </h2>
            </div>
            <div class="grid grid-cols-12 px-4">
                <div class="col-span-12 lg:col-span-4">
                    <div class="max-w-sm flex flex-col items-center justify-between bg-gray-200 rounded-t-[2rem] rounded-b-[2rem] border-secondary border-1 shadow-xl m-auto lg:my-[5rem] space-y-10">
                        <div class="mt-4 border-secondary border-2 py-4 px-10 shadow-lg text-center  rounded-[7rem] flex flex-col justify-center mx-4 lg:mx-16">
                            <div class="text-secondary text-2xl"><i class="fa-solid fa-bullhorn"></i></div>
                            <div class="text-secondary text-xl font-bold types-of-contents">Loading...</div>
                        </div>
                        <div class="w-1/2 flex justify-between mx-auto pb-7">
                            <button id="btn-left" class="text-primary text-3xl"><i class="fa-solid fa-arrow-left"></i></button>
                            <button id="btn-right" class="text-primary text-3xl"><i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-8">
                    <div class="bg-gray-200 rounded-[2rem] py-4 px-5 m-4  lg:ml-3 shadow-xl">
                        <div class="text-center sm:text-left text-3xl text-secondary types-of-contents mb-2">Loading...</div>
                        <p class="text-center sm:text-left text-secondary contents">
                            Loading...
                        </p>
                        <div class="flex flex-col lg:flex-row justify-between pt-2 space-y-2">
                            <div class="flex flex-col justify-center">
                                <div class="mx-auto sm:w-1/2 md:w-full bg-primary shadow-lg py-2 px-8 text-center rounded-[7rem] ">
                                    <div class="flex items-center justify-center space-x-2">
                                        <div class="text-white text-xl font-bold">
                                            AED
                                        </div>
                                        <div class="flex flex-col text-white uppercase">
                                            <div class="text-lg font-bold">Money back</div>
                                            <div class="text-lg">guaranteed</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-auto sm:w-1/2 md:w-full mt-2 bg-primary shadow-lg py-2 px-8 text-center rounded-[7rem]">
                                    <div class="flex items-center justify-center space-x-2">
                                        <div class="text-white text-xl font-bold">
                                            AED
                                        </div>
                                        <div class="flex flex-col text-white uppercase">
                                            <div class="text-lg font-bold">No Hidden</div>
                                            <div class="text-lg">Charges</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col lg:w-1/2">
                                <div class="text-center">
                                    <p class="text-secondary text-xl mt-2">Call us for any inquiry</p>
                                    <a href="tel:{{ $web_setting->contact }}" class="flex text-2xl text-secondary hover:text-primary-dark justify-center ">
                                        <i class="fa-solid fa-phone py-2 pr-2 text-primary"></i>
                                        {{ '+'. $web_setting->contact }}
                                    </a>
                                </div>
                                <div class="flex justify-center items-center lg:space-x-2 mt-2">
                                    <img class="h-6" src="{{ asset('imgs/payments/p1.png') }}" alt="">
                                    <img class="h-6" src="{{ asset('imgs/payments/p2.png') }}" alt="">
                                    <img class="h-6" src="{{ asset('imgs/payments/p3.png') }}" alt="">
                                    <img class="h-6" src="{{ asset('imgs/payments/p4.png') }}" alt="">
                                    <img class="h-6" src="{{ asset('imgs/payments/p5.png') }}" alt="">
                                    <img class="h-6" src="{{ asset('imgs/payments/p6.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Content We Provide --}}
    <section class="container mx-auto">
        <div class="text-center my-6 mx-2">
            <h4 class="text-3xl text-secondary">
                Get All Types of Services From Our <span class="text-primary">Content Writing Agency in Dubai</span>
            </h4>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-x-1 gap-y-2">
            <button
                class="w-48 h-48 bg-primary rounded-full text-white text-xl border-4 border-secondary mx-auto transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:bg-primary-dark">
                <div class="text-white text-2xl"><i class="fa-solid fa-edit"></i></div>
                <h4 class="text-white text-xl">Article Writing</h4>
            </button>
            <button
                class="w-48 h-48 bg-primary rounded-full text-white text-xl border-4 border-secondary mx-auto transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:bg-primary-dark">
                <div class="text-white text-2xl"><i class="fa-solid fa-edit"></i></div>
                <h4 class="text-white text-xl">Blog Writing</h4>
            </button>
            <button
                class="w-48 h-48 bg-primary rounded-full text-white text-xl border-4 border-secondary mx-auto transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:bg-primary-dark">
                <div class="text-white text-2xl"><i class="fa-solid fa-edit"></i></div>
                <h4 class="text-white text-xl">Copywriting</h4>
            </button>
            <button
                class="w-48 h-48 bg-primary rounded-full text-white text-xl border-4 border-secondary mx-auto transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:bg-primary-dark">
                <div class="text-white text-2xl"><i class="fa-solid fa-edit"></i></div>
                <h4 class="text-white text-xl">Copy Editing</h4>
            </button>
            <button
                class="w-48 h-48 bg-primary rounded-full text-white text-xl border-4 border-secondary mx-auto transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:bg-primary-dark">
                <div class="text-white text-2xl"><i class="fa-solid fa-edit"></i></div>
                <h4 class="text-white text-xl">Product Descriptions</h4>
            </button>
            <button
                class="w-48 h-48 bg-primary rounded-full text-white text-xl border-4 border-secondary mx-auto transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:bg-primary-dark">
                <div class="text-white text-2xl"><i class="fa-solid fa-edit"></i></div>
                <h4 class="text-white text-xl">SEO Content</h4>
            </button>
            <button
                class="w-48 h-48 bg-primary rounded-full text-white text-xl border-4 border-secondary mx-auto transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:bg-primary-dark">
                <div class="text-white text-2xl"><i class="fa-solid fa-edit"></i></div>
                <h4 class="text-white text-xl">Product Reviews</h4>
            </button>
            <button
                class="w-48 h-48 bg-primary rounded-full text-white text-xl border-4 border-secondary mx-auto transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:bg-primary-dark">
                <div class="text-white text-2xl"><i class="fa-solid fa-edit"></i></div>
                <h4 class="text-white text-xl">E-Commerce Content</h4>
            </button>
            <button
                class="w-48 h-48 bg-primary rounded-full text-white text-xl border-4 border-secondary mx-auto transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:bg-primary-dark">
                <div class="text-white text-2xl"><i class="fa-solid fa-edit"></i></div>
                <h4 class="text-white text-xl">Forum Writing</h4>
            </button>
            <button
                class="w-48 h-48 bg-primary rounded-full text-white text-xl border-4 border-secondary mx-auto transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:bg-primary-dark">
                <div class="text-white text-2xl"><i class="fa-solid fa-edit"></i></div>
                <h4 class="text-white text-xl">Technical Writing</h4>
            </button>
            <button
                class="w-48 h-48 bg-primary rounded-full text-white text-xl border-4 border-secondary mx-auto transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:bg-primary-dark">
                <div class="text-white text-2xl"><i class="fa-solid fa-edit"></i></div>
                <h4 class="text-white text-xl">Social Media Writing</h4>
            </button>
            <button
                class="w-48 h-48 bg-primary rounded-full text-white text-xl border-4 border-secondary mx-auto transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:bg-primary-dark">
                <div class="text-white text-2xl"><i class="fa-solid fa-edit"></i></div>
                <h4 class="text-white text-xl">Instagram Captions</h4>
            </button>
        </div>
        {{-- Divider --}}
        <div class="container mx-auto mt-4">
            <span class="block border-t border-primary"></span>
        </div>
    </section>
    {{-- Google Search Section --}}
    <section class="container mx-auto">
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 lg:w-1/2 flex items-center justify-center">
                <img class="w-full max-h-52 mt-3" src="{{ asset('./imgs/side-1.svg') }}" alt="">
            </div>
            <div class="w-full py-10 px-5">
                <h3 class="text-center md:text-left text-2xl ">
                    Why Only Our Content Writer in Dubai?
                </h3>
                <p class="text-center md:text-left text-secondary">
                    There are many content writing companies Dubai who claims to give you the best results but we are the only few in the Middle East and UAE who show you the progress. Our services have marked a great presence on Google for our clients. So, if you’re looking to build a content-rich website our online writing services are right here for you.
                </p>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row items-center lg:space-x-2 mx-6">
            <div class="w-full">
                <h4 class="text-center md:text-left text-2xl ">
                    What Our Creative Copywriter Dubai Can Do for You?
                </h4>
                <p class=" md:text-left text-secondary my-6 text-center lg:text-left lg:pr-3">
                    While you focus on building your business, let our copywriters add a fresh perspective to your website. With the mix of attention-grabbing headlines, creative copies and experts’ opinions, we deliver persuasive content that can bring you in the headlines. We also understand that there are many content writing agencies but we have a qualified, creative, smart team who can promote your brand all over the UAE as fast as a flash.
                </p>
                <p class=" md:text-left text-secondary my-6 text-center lg:text-left lg:pr-3">
                 Don’t worry about the location as we offer our writing services in Dubai, Abu Dhabi, Sharjah, Ajman, Al Ain, Fujairah, Ras Al-Khaimah, Umm Al Quwain, and all over UAE. We not only deliver value but are one of the few content writer companies Dubai that have kept their service charges reasonable.
                </p>
            </div>
            <div class="w-full">
                <div class="flex flex-wrap items-center justify-center">
                    <div class="w-full space-y-0">
                        <details class="relative">
                            <summary
                                class="cursor-pointer font-semibold w-full text-primary rounded border border-gray-300 bg-gray-100  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out my-2">
                                Do you provide SEO-friendly content?
                            </summary>
                            <span>
                                Yes, we have expert SEO writers in our team who work according to the requirements, business specifications and keywords that will increase your online presence.
                            </span>
                        </details>
                        <details class="relative">
                            <summary
                                class="cursor-pointer font-semibold w-full text-primary rounded border border-gray-300 bg-gray-100  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out my-2">
                                Do you also provide content writer for website?
                            </summary>
                            <span>
                                Yes, we assign different writers to all projects. Our writers are assigned according to their expertise, client’s requirements and the project types. If you want your work from a specific writer, you can always ask us for details.
                            </span>
                        </details>
                        <details class="relative">
                            <summary
                                class="cursor-pointer font-semibold w-full text-primary rounded border border-gray-300 bg-gray-100  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out my-2">
                                Do you also provide content edits?</summary>
                                <span>
                                    Of course! We deliver the best content every time. But still, if the clients aren’t satisfied and want us to revise the content, our editors and proofreaders will consider your request.
                                </span>
                        </details>
                        <details class="relative">
                            <summary
                                class="cursor-pointer font-semibold w-full text-primary rounded border border-gray-300 bg-gray-100  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out my-2">
                                What’s copywriting?</summary>
                                <span>
                                    Any text you read online such as blogs, web content, social media ads, press releases, emails is the form of copywriting. It compels the audience to take action after reading about the product or services.
                                </span>
                        </details>
                        <details class="relative">
                            <summary
                                class="cursor-pointer font-semibold w-full text-primary rounded border border-gray-300 bg-gray-100  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out my-2">
                                Do you provide all types of content services in UAE?</summary>
                                <span>
                                    Yes, we do! No matter whether you’re in the Gulf, Arabic or anywhere in the Middle East, our content writing agency is open to individuals, small businesses and enterprises all across the UAE.
                                </span>
                        </details>
                        <details class="relative">
                            <summary
                                class="cursor-pointer font-semibold w-full text-primary rounded border border-gray-300 bg-gray-100  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out my-2">
                                Do you also hire freelance content writer UAE?</summary>
                                <span>
                                    Yes, we have in-house writers in our team but sometimes the vacancies are also open for freelance writers in Dubai. Stay tuned to our website and social updates if you want to work with us.
                                </span>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Your Success Section --}}
    <section class="">
        <span class="block bg-top-wave bg-no-repeat bg-center bg-cover h-72"></span>
        <div class=" bg-primary px-20 swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide w-full h-full">
                    <div class="bg-primary py-6 my-0">
                        <h4 class="text-white text-4xl py-10 text-center">
                            You Will Love Our Creative Content - Ready to Work With Us?
                        </h4>
                        <div class="text-white text-8xl  text-center">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>
                        <h4 class="md:mx-20 text-white text-center text-2xl p-10 border-none">
                            Content Writing AE has a diversified team of writers, content strategists, and an active and supportive community who are ready to deliver instant help regardless of the challenges. If you’re struggling to make a sound reputation with stellar content, our platform is 24/7 available for you. Try it for the first time and you’ll love working with us.
                        </h4>
                    </div>
                </div>
                <div class="swiper-slide w-full h-full">
                    <div class="bg-primary py-6 my-0">
                        <h4 class="text-white text-4xl py-10 text-center">
                            Content Writing Services for Your Brands & Businesses
                        </h4>
                        <div class="text-white text-8xl  text-center">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>
                        <h4 class="md:mx-20 text-white text-center text-2xl p-10 border-none">
                            About to start your business but don’t know who you should hire for content? We are just a click away! No matter if you’re a startup or an enterprise, we strive to add value to your business by producing impeccable content.
                        </h4>
                    </div>
                </div>
                <div class="swiper-slide w-full h-full">
                    <div class="bg-primary py-6 my-0">
                        <h4 class="text-white text-4xl py-10 text-center">
                            Our Success Mantra is Quality, Quality, & Quality. Ready to experience?
                        </h4>
                        <div class="text-white text-8xl  text-center">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>
                        <h4 class="md:mx-20 text-white text-center text-2xl p-10 border-none">
                            With our professional, in-house team of writers, we produce work that will help you win business leads. No long paragraphs, No jargon, only content that’s specific to your customer needs.
                        </h4>
                    </div>
                </div>

            </div>

        </div>
        <span class="block bg-bottom-wave bg-no-repeat bg-center bg-cover h-72"></span>
    </section>
    {{-- Content Count Section --}}
    <section class="container mx-auto counter-up-section">
        <div class="text-center my-6">
            <h4 class="text-3xl text-secondary">
                A Content <span class="text-primary">Writing Agency With</span>
            </h4>
        </div>
        <div id="counter-block" class="grid grid-cols-1 space-y-16 sm:space-y-0 sm:grid-cols-3 py-10 ">
            <div class="mx-auto text-center">
                <div class="text-5xl text-secondary"><span id="count-up-a" class="counterup" data-value="1000"></span>+</div>
                <p class="text-secondary text-2xl">
                    Happy Clients
                </p>
            </div>
            <div class="mx-auto text-center">
                <div class="text-5xl text-secondary"><span id="count-up-b" class="counterup" data-value="300"></span>+</div>
                <p class="text-secondary text-2xl">
                    Agencies Served
                </p>
            </div>
            <div class="mx-auto text-center">
                <div class="text-5xl text-secondary"><span id="count-up-c" class="counterup" data-value="100"></span>M+</div>
                <p class="text-secondary text-2xl">
                    Ranked Websites in Portfolio
                </p>
            </div>
        </div>
        <p class="text-secondary text-center text-1xl">
            Ready to witness your growth with creative content for your online business? Talk to our experts today.
        </p>
        <div class="text-center my-10">
            <a href="{{ route('order') }}"
                class="bg-white text-primary text-2xl uppercase py-2 px-8 rounded-[2rem] border-2 border-primary hover:border-secondary hover:text-white transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 hover:bg-primary-dark duration-300">
                Get Started
            </a>
        </div>
    </section>
    {{-- Testimonials --}}
    <section class="antialiased sans-serif text-gray-600">

        <div class="container mx-auto flex flex-col md:flex-row shadow-sm overflow-hidden" x-data="{ testimonialActive: 2 }" x-cloak>

            <div class="relative w-full py-2 md:py-24 bg-primary md:w-1/2 flex flex-col item-center justify-center">

                <div class="absolute top-0 left-0 z-10 grid-indigo w-16 h-16 md:w-40 md:h-40 md:ml-20 md:mt-24"></div>

                <div class="relative text-2xl md:text-5xl py-2 px-6 md:py-6 md:px-1 md:w-64 md:mx-auto text-white font-semibold leading-tight tracking-tight mb-0 z-20">
                    <span class="md:block">What Our</span>
                    <span class="md-block">Customers</span>
                    <span class="block">Are Saying!</span>
                </div>

                <div class="absolute right-0 bottom-0 mr-4 mb-4 hidden md:block">
                    <button
                        class="rounded-l-full border-r bg-gray-100 text-secondary focus:outline-none hover:text-primary font-bold w-12 h-10"
                        x-on:click="testimonialActive = testimonialActive === 1 ? 3 : testimonialActive - 1">
                        &#8592;
                    </button>
                    <button
                        class="rounded-r-full bg-gray-100 text-secondary focus:outline-none hover:text-primary font-bold w-12 h-10"
                        x-on:click="testimonialActive = testimonialActive >= 3 ? 1 : testimonialActive + 1">
                        &#8594;
                    </button>
                </div>
            </div>

            <div class="bg-gray-100 md:w-1/2">
                <div class="flex flex-col h-full relative">

                    <div class="absolute top-0 left-0 mt-3 ml-4 md:mt-5 md:ml-12">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="text-gray-200 fill-current w-12 h-12 md:w-16 md:h-16" viewBox="0 0 24 24">
                            <path
                                d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L9.758 4.03c0 0-.218.052-.597.144C8.97 4.222 8.737 4.278 8.472 4.345c-.271.05-.56.187-.882.312C7.272 4.799 6.904 4.895 6.562 5.123c-.344.218-.741.4-1.091.692C5.132 6.116 4.723 6.377 4.421 6.76c-.33.358-.656.734-.909 1.162C3.219 8.33 3.02 8.778 2.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C2.535 17.474 4.338 19 6.5 19c2.485 0 4.5-2.015 4.5-4.5S8.985 10 6.5 10zM17.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L20.758 4.03c0 0-.218.052-.597.144-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.944-.33.358-.656.734-.909 1.162C14.219 8.33 14.02 8.778 13.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C13.535 17.474 15.338 19 17.5 19c2.485 0 4.5-2.015 4.5-4.5S19.985 10 17.5 10z" />
                        </svg>
                    </div>

                    <div class="h-full relative z-10">
                        <div x-show.immediate="testimonialActive === 1">
                            <p class="text-secondary serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl"
                                x-show.transition="testimonialActive == 1">
                                Extremely creative copywriters, they know how to write SEO content keeping high standards in mind. I would definitely recommend them for any type of content writing services in UAE. I've been working with them for 1 year and they have never let me down.
                            </p>
                        </div>

                        <div x-show.immediate="testimonialActive === 2">
                            <p class="text-secondary serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl"
                                x-show.transition="testimonialActive == 2">
                                We are a small marketing agency in Abu Dhabi, we consulted them to scale our agency and they shared great ideas. We love how they showed the progress with the content through revenue generation for our agency.
                            </p>
                        </div>

                        <div x-show.immediate="testimonialActive === 3">
                            <p class="text-secondary serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl"
                                x-show.transition="testimonialActive == 3">
                                I hired them for my website content and social media writing, I must say their team works with a progressive mindset. They not only deliver quality work but also applied fresh strategies to make my business appear on the search engines.
                            </p>
                        </div>
                    </div>

                    <div class="flex my-4 justify-center items-center">
                        <button @click.prevent="testimonialActive = 1"
                            class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline inline-block rounded-full mx-2"
                            :class="{'h-12 w-12 opacity-25 bg-gray-300 text-gray-600': testimonialActive != 1, 'h-16 w-16 opacity-100 bg-primary text-white': testimonialActive == 1 }">SM</button>
                        <button @click.prevent="testimonialActive = 2"
                            class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-16 w-16 inline-block bg-primary rounded-full mx-2"
                            :class="{'h-12 w-12 opacity-25 bg-gray-300 text-gray-600': testimonialActive != 2, 'h-16 w-16 opacity-100 bg-primary text-white': testimonialActive == 2 }">SM</button>
                        <button @click.prevent="testimonialActive = 3"
                            class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-12 w-12 inline-block bg-primary rounded-full mx-2"
                            :class="{'h-12 w-12 opacity-25 bg-gray-300 text-gray-600': testimonialActive != 3, 'h-16 w-16 opacity-100 bg-primary text-white': testimonialActive == 3 }">MZ</button>
                    </div>

                    <div class="flex justify-center px-6 pt-2 pb-6 md:py-6">
                        <div class="text-center" x-show="testimonialActive == 1">
                            <div class="text-sm md:text-base font-bold text-gray-700 leading-tight">Sheikh Majid</div>
                            <small class="text-gray-500 text-xs md:text-sm truncate">Director, Business Development</small>
                        </div>

                        <div class="text-center" x-show="testimonialActive == 2">
                            <div class="text-sm md:text-base font-bold text-gray-700 leading-tight">Salar Mohammed</div>
                            <small class="text-gray-500 text-xs md:text-sm truncate">Director, Business Development</small>
                        </div>

                        <div class="text-center" x-show="testimonialActive == 3">
                            <div class="text-sm md:text-base font-bold text-gray-700 leading-tight">Maryam Zeeshan</div>
                            <small class="text-gray-500 text-xs md:text-sm truncate">Director, Business Development</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
@section('scripts')
    <script src="{{'js/circle.js'}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>

    <!-- Count Up -->
    <script src="https://inorganik.github.io/countUp.js/dist/countUp.umd.js"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            grid: {
                rows: 1,
            },
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        $(function() {
            const a = new countUp.CountUp("count-up-a", 5000)
            const b = new countUp.CountUp("count-up-b", 6000)
            const c = new countUp.CountUp("count-up-c", 100)

            a.start()
            b.start()
            c.start()

            var types = ["Facebook Posts", "Blogs", "SEO Content", "Web Content"]
            var contents = [
                "We let you connect with your target audience on one of the biggest social networking sites with the power of content. Not only this, but we also help you build long-lasting relationships with your customers with thought-provoking, emerging content. It’s time to build a massive following on Facebook with the help of our creative copywriter Dubai.",

                "Blogs make you visible on the search engine but only if you write with consistency, SEO tactics, and strategies to grow your business. Our UAE writers can help you deliver your brand value through blog writing services in Dubai. Whether you’re a small to medium-sized business or an enterprise, we know how to bring you up through blogs and article writing services.",

                "Your online business is nowhere if you’re not writing SEO content on your website and social forums. With our Arabic and Gulf content writing companies in UAE, we deliver optimized content in the form of blogs, newsletters, social media captions, and ad copywriting. Our experts know how to grow your brand presence through the power of words",

                "You might have a website but if it’s missing the optimized content, strong headlines, it will become tough to grab leads. With our SEO content writing Dubai, we fill these missing gaps and give you a way forward to generate revenue, capture the market, and make a reputation in the cut-throat competition. Starting as low as AED 60, our rates vary according to the services but are always fruitful in increasing your business visibility."
            ]

            counter = 0,
                btnRight = $("#btn-right"),
                previousSkill = $(".types-of-contents"),
                previousContent = $(".contents"),
                previousContentShort = $(".contents-short"),
                arraylength = types.length - 1;
            count = 99;

            function display_types(bool) {

                if (bool) {
                    if (counter < arraylength) {
                        counter++
                        previousSkill.html(types[counter]);
                        previousContent.html(contents[counter]);
                        previousContentShort.html(contents[counter].slice(0, count) + (contents[counter].length >
                            count ? "..." : ""));
                    }
                } else {
                    if (counter > 0) {
                        counter--
                        previousSkill.html(types[counter]);
                        previousContent.html(contents[counter]);
                        previousContentShort.html(contents[counter].slice(0, count) + (contents[counter].length >
                            count ? "..." : ""));
                    }
                }

            }

            display_types(true);

            $("#btn-left").click(function() {
                display_types(false);
            });

            $("#btn-right").click(function() {
                display_types(true);
            });

        });
    </script>
    <script>
        $(document).ready(function() {
            const phoneInputField = document.querySelector("#phone");
            const phoneInput = window.intlTelInput(phoneInputField, {
                preferredCountries: ["ae"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });

            $("#query-form").submit(function() {
                $('#query-form').find(':submit').attr("disabled", true);
                $('#btn-submit').html("Submiting...");
                const phoneNumber = phoneInput.getNumber();
                $('#phone2').val(phoneNumber);
                return true;
            });
        });
    </script>
@endsection
