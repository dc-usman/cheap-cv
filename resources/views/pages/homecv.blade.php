@extends('layouts.web')

{{-- Custom CSS --}}
@section('links')
    <style>
        /* Slider */
        .slick-slider {
            position: relative;

            display: block;

            -moz-box-sizing: border-box;
            box-sizing: border-box;

            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;

            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }

        .slick-list {
            position: relative;

            display: block;
            overflow: hidden;

            margin: 0;
            padding: 0;
        }

        .slick-list:focus {
            outline: none;
        }

        .slick-list.dragging {
            cursor: pointer;
            cursor: hand;
        }

        .slick-slider .slick-track,
        .slick-slider .slick-list {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .slick-track {
            position: relative;
            top: 0;
            left: 0;

            display: block;
        }

        .slick-track:before,
        .slick-track:after {
            display: table;

            content: '';
        }

        .slick-track:after {
            clear: both;
        }

        .slick-loading .slick-track {
            visibility: hidden;
        }

        .slick-slide {
            display: none;
            float: left;

            height: 16rem;
            min-height: 1px;
        }

        [dir='rtl'] .slick-slide {
            float: right;
        }

        .slick-slide img {
            display: block;
        }

        .slick-slide.slick-loading img {
            display: none;
        }

        .slick-slide.dragging img {
            pointer-events: none;
        }

        .slick-initialized .slick-slide {
            display: block;
        }

        .slick-loading .slick-slide {
            visibility: hidden;
        }

        .slick-vertical .slick-slide {
            display: block;

            height: auto;

            border: 1px solid transparent;
        }

        .slick-arrow.slick-hidden {
            display: none;
        }

        .items {
            position: relative;
            width: 100%;

            white-space: nowrap;
            transition: all 0.2s;
            transform: scale(0.98);
            will-change: transform;
            user-select: none;
            cursor: pointer;
        }

        .items.active {
            background: rgba(255, 255, 255, 0.3);
            cursor: grabbing;
            cursor: -webkit-grabbing;
            transform: scale(1);
        }

        .marquee-inner.to-left {
            animation: marqueeLeft 25s linear infinite;
        }

        .logooverflow {
            overflow-x: scroll;
        }

        .annimationdelay {
            animation-delay: 2sec;
        }

        #parentdiv{
            overflow:hidden;
            white-space: nowrap;
        }
        #maindiv {

            
            animation: marquee 14s linear infinite;
            
        }

        /*   */
         #div1 {
            display: inline-block;
        } 
        #maindiv:hover{
             animation-play-state:paused; 
             cursor: pointer;
             transform:translate(0%)
        }
        
       
        #div2 {
            display: inline-block;
            animation: marquee2 10s linear infinite;
            animation-delay: 5s;
        }

        @keyframes marquee {
            from {
                transform: translateX(0%);
            }

            to {
                transform: translateX(-100%);
            }

        }

       

        @keyframes marquee2 {
            from {
                transform: translateX(0%);
            }

            to {
                transform: translateX(-200%);
            }
        }

        .carousel-open:checked+.carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #2b6cb0;
            /*Set to match the Tailwind colour you want the active one to be */
        }

    </style>
@endsection

@section('content')
    <!-- Hero -->
    <section class="text-purple-600 body-font ">
        <div class="container py-4  lg:py-24 mx-auto">
            <div class="flex flex-col w-full px-0 md:px-12 ">
                <h1 class="text-xl sm:text-4xl lg:text-7xl pb-9 font-medium title-font text-purple-900 text-center">Your
                    Dream Job is a CV Away</h1>
                <h4 class="text-xl sm:text-2xl font-medium title-font text-center">Tired of applying and waiting for the
                    interview call? Here we come to help with cheap CV writing & resume writing service London.
                </h4>

                <div class="flex flex-col md:px-12 w-full mt-12">
                    <form action="{{ route('order.query') }}" method="POST">
                        @if (session('success'))
                            <div class="mb-3 mx-4 bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                                role="alert">
                                <div class="flex">
                                    <div class="py-1">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                                            style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                            <circle style="fill:#25AE88;" cx="25" cy="25" r="25" />
                                            <polyline
                                                style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                                points="
                                                38,15 22,33 12,25 " />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-center font-bold">{{ session('success') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @csrf
                        <div class="flex flex-wrap ">
                            <div class="  w-full px-3 md:px-1 md:w-1/2 lg:w-1/4  mb-3">
                                <select name="carrer_level" id="carrer_level"
                                    class="get-fare w-full text-gray-700 shadow-xl rounded border border-gray-300 bg-white  focus:border-purple-400 focus:ring-2 focus:ring-purple-200 text-base h-12 outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out">

                                    @foreach ($carrer_levels as $carrer_level)
                                        <option {{ old('$carrer_level') == $carrer_level->id ? 'selected' : '' }}
                                            value="{{ $carrer_level->id }}">{{ $carrer_level->name }}</option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="w-full px-3 md:px-1 md:w-1/2 lg:w-1/4  mb-3">
                                <select name="select_service" id="select_service"
                                    class="get-fare w-full text-gray-700 shadow-xl rounded border border-gray-300 bg-white  focus:border-purple-400 focus:ring-2 focus:ring-purple-200 text-base h-12 outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    @foreach ($select_services as $select_service)
                                        <option {{ old('$select_service') == $select_service->id ? 'selected' : '' }}
                                            value="{{ $select_service->id }}">{{ $select_service->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 md:px-1 md:w-1/2 lg:w-1/4  mb-3">
                                <select name="deadline_id" id="deadline"
                                    class="get-fare w-full text-gray-700 shadow-xl rounded border border-gray-300 bg-white  focus:border-purple-400 focus:ring-2 focus:ring-purple-200 text-base h-12 outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    @foreach ($days as $day)
                                        <option {{ old('$day') == $day->id ? 'selected' : '' }}
                                            value="{{ $day->id }}">
                                            {{ $day->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="w-full px-3 md:px-1 md:w-1/2 lg:w-1/4  mb-3 ">
                                <div
                                    class="text-center  w-full text-white font-extrabold text-2xl shadow-xl rounded border border-gray-300 bg-purple-700  focus:border-purple-400 focus:ring-2 focus:ring-purple-200  h-12 outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                                    <span id="cost">20</span>£
                                </div>
                            </div>
                    </form>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 ">

                    <div class="p-5 mx-4">
                        <ul class="flex justify-center pt-3">

                            <li class="my-auto text-cyan-600">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48"
                                    viewBox="0 0 172 172" style=" fill:#000000;" class="mx-auto w-9">
                                    <defs>
                                        <linearGradient x1="32.28225" y1="22.79" x2="136.49633" y2="162.20317"
                                            gradientUnits="userSpaceOnUse" id="color-1_8ggStxqyboK5_gr1">
                                            <stop offset="0" stop-color="#18a878"></stop>
                                            <stop offset="1" stop-color="#31dcb9"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray=""
                                        stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none"
                                        text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g fill="url(#color-1_8ggStxqyboK5_gr1)">
                                            <path
                                                d="M89.27158,18.58317l19.6295,44.032l47.93783,5.06325c3.08525,0.32608 4.32508,4.1495 2.021,6.22425l-35.80825,32.26792l10.00108,47.16025c0.645,3.03508 -2.60867,5.3965 -5.29617,3.8485l-41.75658,-24.09075l-41.75658,24.08717c-2.6875,1.548 -5.93758,-0.81342 -5.29617,-3.8485l10.00108,-47.16025l-35.80825,-32.26792c-2.30408,-2.07475 -1.06067,-5.89817 2.021,-6.22425l47.93783,-5.06325l19.6295,-44.032c1.26133,-2.83083 5.28183,-2.83083 6.54317,0.00358z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>

                            </li>

                            <li class="my-auto text-2xl ml-2 text-black ">Trustpilot</li>

                        </ul>

                        <ul class="flex justify-center">

                            <li class="my-auto text-cyan-600">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            {{-- <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                    </path>
                                </svg>
                            </li> --}}
                            <li class="my-auto">
                                <img src="{{ asset('imgs/star-half-yellow.svg') }}" class="h-[14px]">
                            </li>
                            {{-- <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                    class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                    </path>
                                </svg>
                            </li> --}}
                        </ul>

                        <span class="flex justify-center pt-2 text-sm text-black">Rated <b class="text-cyan-300 mx-1"> 4.8
                                out of 5
                                stars </b> on Trustpilot</span>
                    </div>

                    <div class="p-5 mx-4">
                        <ul class="flex justify-center pt-4 pb-3">

                            <li class="my-auto text-cyan-600">
                                <img src="../imgs/sitejabbarimg.svg" alt="icon" class="mx-auto w-9">
                            </li>

                            <li class="my-auto text-2xl ml-2 text-black ">sitejabbar</li>

                        </ul>

                        <ul class="flex justify-center">

                            <li class="my-auto text-cyan-600">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <img src="{{ asset('imgs/star-half-yellow.svg') }}" class="h-[14px]">
                            </li>
                            {{-- <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                    class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                    </path>
                                </svg>
                            </li> --}}
                        </ul>

                        <span class="flex justify-center pt-2 text-sm text-black">Rated <b class="text-cyan-300 mx-1"> 4.8
                                out of 5
                                stars </b> on sitejabbar</span>

                    </div>

                    <div class="md:col-span-2 lg:col-span-1 p-5 mx-4">
                        <ul class="flex justify-center pt-3">

                            <li class="my-auto text-cyan-600">
                                <img src="{{ asset('imgs/bnkpic.png') }}" class="h-12">

                            </li>

                            <li class="my-auto text-2xl ml-2 text-black ">Reviews</li>

                        </ul>

                        <ul class="flex justify-center">

                            <li class="my-auto text-cyan-600">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>

                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>

                        </ul>

                        <span class="flex justify-center pt-2 text-sm text-black">Rated <b class="text-cyan-300 mx-1"> 4.9
                                out of 5
                                stars </b> on Reviews</span>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- partners  -->
    <section class="container mx-auto ">
        {{-- <div class="overflow-x-hidden">
        <marquee direction="left" scrollamount="14" class="marquee-inner to-left w-[150%] flex-wrap annimationdelay">
            <span class="overflow-visible">
                <div class="grid grid-cols-10 ">
                    <div>
                        <img src="../imgs/partner4.svg" class="">
                    </div>
                    <div>
                        <img src="../imgs/partner-13.svg" class="md:h-44">
                    </div>
                    <div>
                        <img src="../imgs/partner-12.svg" class="md:h-24 lg:ml-6">
                    </div>
                    <div>
                        <img src="../imgs/partner20.svg" class="md:h-36 lg:mt-5">
                    </div>
                    <div>
                        <img src="../imgs/partner23.svg" class="md:h-32 lg:mt-16">
                    </div>
                    <div>
                        <img src="../imgs/partner21.svg" class="md:h-24  lg:mt-12 lg:ml-4">
                    </div>
                    <div>
                        <img src="../imgs/partner-9.svg" class="md:h-28  lg:mt-0">
                    </div>
                    <div>
                        <img src="../imgs/partner8.svg" class="md:h-24  lg:mt-10">
                    </div>
                    <div>
                        <img src="../imgs/partner-10.svg" class="md:h-24  lg:mt-0">
                    </div>
                    <div>
                        <img src="../imgs/partner-4.svg" class="md:h-32  lg:mt-0">
                    </div>
                </div>

                <div class="grid grid-cols-11 mt-3 mx-3 lg:mx-0 md:-mt-10">
                    <div>
                        <img src="../imgs/partner5.svg" class="md:h-40 lg:-mt-12">
                    </div>
                    <div>
                        <img src="../imgs/partner-5.svg" class="md:h-20 lg:mt-5">
                    </div>
                    <div>
                        <img src="../imgs/partner-3.svg" class="md:h-28 lg:-mt-6">
                    </div>
                    <div>
                        <img src="../imgs/partner-7.svg" class="md:h-16 lg:mt-10">
                    </div>
                    <div>
                        <img src="../imgs/partner-2.svg" class="md:h-24 lg:mt-3 lg:-ml-6">
                    </div>
                    <div>
                        <img src="../imgs/partner24.svg" class="md:h-20  lg:mt-5 lg:ml-3">
                    </div>
                    <div>
                        <img src="../imgs/partner-8.svg" class=" lg:mt-0">
                    </div>
                    <div>
                        <img src="../imgs/partner-14.svg" class="md:h-20  lg:mt-0 lg:ml-7">
                    </div>
                    <div>
                        <img src="../imgs/partner-6.svg" class="md:h-24  lg:mt-5">
                    </div>
                    <div>
                        <img src="../imgs/partner-11.svg" class="md:h-24  lg:mt-0">
                    </div>
                    <div>
                        <img src="../imgs/partner-1.svg" class="md:h-16">
                    </div>


                </div>

            </span>
        </marquee>
        </div> --}}
        <div id="parentdiv">
        <div id="maindiv"  >
            <div id="div1">  
                &nbsp;
                <div class="grid grid-cols-10 ">
                    <div>
                        <img src="../imgs/partner4.svg" class="h-8 md:h-40">
                    </div>
                    <div>
                        <img src="../imgs/partner-13.svg" class="md:h-44">
                    </div>
                    <div>
                        <img src="../imgs/partner-12.svg" class="md:h-24 lg:ml-6">
                    </div>
                    <div>
                        <img src="../imgs/partner20.svg" class="md:h-36 lg:mt-5">
                    </div>
                    <div>
                        <img src="../imgs/partner23.svg" class="md:h-32 lg:mt-16">
                    </div>
                    <div>
                        <img src="../imgs/partner21.svg" class="md:h-24  lg:mt-12 lg:ml-4">
                    </div>
                    <div>
                        <img src="../imgs/partner-9.svg" class="md:h-28  lg:mt-0">
                    </div>
                    <div>
                        <img src="../imgs/partner8.svg" class="md:h-24  lg:mt-10">
                    </div>
                    <div>
                        <img src="../imgs/partner-10.svg" class="md:h-24  lg:mt-0">
                    </div>
                    <div>
                        <img src="../imgs/partner-4.svg" class="md:h-32  lg:mt-0">
                    </div>
                </div>

                <div class="grid grid-cols-11 mt-3 mx-3 lg:mx-0 md:-mt-10">
                    <div>
                        <img src="../imgs/partner5.svg" class="h-8 md:h-40 lg:-mt-12">
                    </div>
                    <div>
                        <img src="../imgs/partner-5.svg" class="md:h-20 lg:mt-5">
                    </div>
                    <div>
                        <img src="../imgs/partner-3.svg" class="md:h-28 lg:-mt-6">
                    </div>
                    <div>
                        <img src="../imgs/partner-7.svg" class="md:h-16 lg:mt-10">
                    </div>
                    <div>
                        <img src="../imgs/partner-2.svg" class="md:h-24 lg:mt-3 lg:-ml-6">
                    </div>
                    <div>
                        <img src="../imgs/partner24.svg" class="md:h-20  lg:mt-5 lg:ml-3">
                    </div>
                    <div>
                        <img src="../imgs/partner-8.svg" class=" lg:mt-0">
                    </div>
                    <div>
                        <img src="../imgs/partner-14.svg" class="md:h-20  lg:mt-0 lg:ml-7">
                    </div>
                    <div>
                        <img src="../imgs/partner-6.svg" class="md:h-24  lg:mt-5">
                    </div>
                    <div>
                        <img src="../imgs/partner-11.svg" class="md:h-24  lg:mt-0">
                    </div>
                    <div>
                        <img src="../imgs/partner-1.svg" class="md:h-16">
                    </div>


                </div>
            </div>
            
            <div id="div1">
                &nbsp;
                <div class="grid grid-cols-10 ">
                    <div>
                        <img src="../imgs/partner4.svg" class="h-8 md:h-40">
                    </div>
                    <div>
                        <img src="../imgs/partner-13.svg" class="md:h-44">
                    </div>
                    <div>
                        <img src="../imgs/partner-12.svg" class="md:h-24 lg:ml-6">
                    </div>
                    <div>
                        <img src="../imgs/partner20.svg" class="md:h-36 lg:mt-5">
                    </div>
                    <div>
                        <img src="../imgs/partner23.svg" class="md:h-32 lg:mt-16">
                    </div>
                    <div>
                        <img src="../imgs/partner21.svg" class="md:h-24  lg:mt-12 lg:ml-4">
                    </div>
                    <div>
                        <img src="../imgs/partner-9.svg" class="md:h-28  lg:mt-0">
                    </div>
                    <div>
                        <img src="../imgs/partner8.svg" class="md:h-24  lg:mt-10">
                    </div>
                    <div>
                        <img src="../imgs/partner-10.svg" class="md:h-24  lg:mt-0">
                    </div>
                    <div>
                        <img src="../imgs/partner-4.svg" class="md:h-32  lg:mt-0">
                    </div>
                </div>

                <div class="grid grid-cols-11 mt-3 mx-3 lg:mx-0 md:-mt-10">
                    <div>
                        <img src="../imgs/partner5.svg" class="h-8 md:h-40 lg:-mt-12">
                    </div>
                    <div>
                        <img src="../imgs/partner-5.svg" class="md:h-20 lg:mt-5">
                    </div>
                    <div>
                        <img src="../imgs/partner-3.svg" class="md:h-28 lg:-mt-6">
                    </div>
                    <div>
                        <img src="../imgs/partner-7.svg" class="md:h-16 lg:mt-10">
                    </div>
                    <div>
                        <img src="../imgs/partner-2.svg" class="md:h-24 lg:mt-3 lg:-ml-6">
                    </div>
                    <div>
                        <img src="../imgs/partner24.svg" class="md:h-20  lg:mt-5 lg:ml-3">
                    </div>
                    <div>
                        <img src="../imgs/partner-8.svg" class=" lg:mt-0">
                    </div>
                    <div>
                        <img src="../imgs/partner-14.svg" class="md:h-20  lg:mt-0 lg:ml-7">
                    </div>
                    <div>
                        <img src="../imgs/partner-6.svg" class="md:h-24  lg:mt-5">
                    </div>
                    <div>
                        <img src="../imgs/partner-11.svg" class="md:h-24  lg:mt-0">
                    </div>
                    <div>
                        <img src="../imgs/partner-1.svg" class="md:h-16">
                    </div>


                </div>

            </div>

            <div id="div1">
                &nbsp;
                <div class="grid grid-cols-10 ">
                    <div>
                        <img src="../imgs/partner4.svg" class="h-8 md:h-40">
                    </div>
                    <div>
                        <img src="../imgs/partner-13.svg" class="md:h-44">
                    </div>
                    <div>
                        <img src="../imgs/partner-12.svg" class="md:h-24 lg:ml-6">
                    </div>
                    <div>
                        <img src="../imgs/partner20.svg" class="md:h-36 lg:mt-5">
                    </div>
                    <div>
                        <img src="../imgs/partner23.svg" class="md:h-32 lg:mt-16">
                    </div>
                    <div>
                        <img src="../imgs/partner21.svg" class="md:h-24  lg:mt-12 lg:ml-4">
                    </div>
                    <div>
                        <img src="../imgs/partner-9.svg" class="md:h-28  lg:mt-0">
                    </div>
                    <div>
                        <img src="../imgs/partner8.svg" class="md:h-24  lg:mt-10">
                    </div>
                    <div>
                        <img src="../imgs/partner-10.svg" class="md:h-24  lg:mt-0">
                    </div>
                    <div>
                        <img src="../imgs/partner-4.svg" class="md:h-32  lg:mt-0">
                    </div>
                </div>

                <div class="grid grid-cols-11 mt-3 mx-3 lg:mx-0 md:-mt-10">
                    <div>
                        <img src="../imgs/partner5.svg" class="h-8 md:h-40 lg:-mt-12">
                    </div>
                    <div>
                        <img src="../imgs/partner-5.svg" class="md:h-20 lg:mt-5">
                    </div>
                    <div>
                        <img src="../imgs/partner-3.svg" class="md:h-28 lg:-mt-6">
                    </div>
                    <div>
                        <img src="../imgs/partner-7.svg" class="md:h-16 lg:mt-10">
                    </div>
                    <div>
                        <img src="../imgs/partner-2.svg" class="md:h-24 lg:mt-3 lg:-ml-6">
                    </div>
                    <div>
                        <img src="../imgs/partner24.svg" class="md:h-20  lg:mt-5 lg:ml-3">
                    </div>
                    <div>
                        <img src="../imgs/partner-8.svg" class=" lg:mt-0">
                    </div>
                    <div>
                        <img src="../imgs/partner-14.svg" class="md:h-20  lg:mt-0 lg:ml-7">
                    </div>
                    <div>
                        <img src="../imgs/partner-6.svg" class="md:h-24  lg:mt-5">
                    </div>
                    <div>
                        <img src="../imgs/partner-11.svg" class="md:h-24  lg:mt-0">
                    </div>
                    <div>
                        <img src="../imgs/partner-1.svg" class="md:h-16">
                    </div>


                </div>

            </div>


            {{-- <div id="div1" class=>
                &nbsp;Test-1 Test-2 Test-3 Test-4 Test-5 Test-6 Test-7 Test-8 Test-9 Test-10 Test-11
                <span class="flex flex-row">
                    <img src="../imgs/partner4.svg" class="h-20">
                    <img src="../imgs/partner-13.svg" class="md:h-44">
                    <img src="../imgs/partner-12.svg" class="md:h-24 lg:ml-6">
                    <img src="../imgs/partner20.svg" class="md:h-36 lg:mt-5">

                </span>
            </div>
            <div id="div1" class="hidden">
                &nbsp;Test-1 Test-2 Test-3 Test-4 Test-5 Test-6 Test-7 Test-8 Test-9 Test-10 Test-11
                <span class="flex flex-row">
                    <img src="../imgs/partner21.svg" class="md:h-24  lg:mt-12 lg:ml-4">
                    <img src="../imgs/partner8.svg" class="md:h-24  lg:mt-10">
                    <img src="../imgs/partner4.svg" class="h-20">
                    <img src="../imgs/partner-9.svg" class="md:h-28  lg:mt-0">
                    <img src="../imgs/partner-10.svg" class="md:h-24  lg:mt-0">
                    {{-- <img src="../imgs/partner23.svg" class="md:h-32 lg:mt-16"> --}}
                  {{-- <img src="../imgs/partner8.svg" class="md:h-24  lg:mt-10">  --}}
                {{-- </span>
            </div> --}}

        </div>
        </div>
        <script>
            //$('#maindiv').width($('#div1').width());
            //  $(document).ready(function(){
            //      $("#slide-horizontally").click(function(){
            //         $("#slide-horizontally").slide();
            //      });
            //  });

            const slider = document.querySelector('.items');
            let isDown = false;
            let startX;
            let scrollLeft;

            slider.addEventListener('mousedown', (e) => {
                isDown = true;
                slider.classList.add('active');
                startX = e.pageX - slider.offsetLeft;
                scrollLeft = slider.scrollLeft;
            });
            slider.addEventListener('mouseleave', () => {
                isDown = false;
                slider.classList.remove('active');
            });
            slider.addEventListener('mouseup', () => {
                isDown = false;
                slider.classList.remove('active');
            });
            slider.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - slider.offsetLeft;
                const walk = (x - startX) * 3; //scroll-fast
                slider.scrollLeft = scrollLeft - walk;
                console.log(walk);
            });
        </script>
    </section>


    <hr class="h-1 w-7/12 mx-auto bg-purple-500 mt-6">

    <!-- SERVICES -->
    <section class="container mx-auto ">

        <h4 class="font-bold  text-4xl text-center py-9"> We Offer Top-Rated CV Writing Services UK </h4>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 lg:px-36">

            <div class="rounded-xl shadow-2xl text-center border-1 m-4 ">

                <div
                    class="bg-gradient-to-r from-purple-500 to-purple-900 py-6 px-6 text-white rounded-xl font-semibold text-[15.7px]">
                    Beginners
                </div>
                <div class="w-[3.50rem] h-[3.50rem] p-4 bg-purple-800 border-white border-2 rounded-full mx-auto -mt-6">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35" viewBox="0 0 172 172"
                        style=" fill:#000000;" class="ml-[-0.35rem] mt-[-0.35rem]">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#ffffff">
                                <path
                                    d="M42.40555,12.09375c-5.95698,0.0193 -10.78714,4.83249 -10.82742,10.78937v126.23376c0.04028,5.95688 4.87044,10.77006 10.82742,10.78937h87.1889c5.95698,-0.0193 10.78715,-4.83249 10.82742,-10.78937v-100.07001h-26.54562c-2.48855,0.00718 -4.8778,-0.97561 -6.64105,-2.73172c-1.76325,-1.75611 -2.75572,-4.14135 -2.75864,-6.62992v-27.59149zM109.85156,16.07317v23.61208c0.00147,1.06348 0.42719,2.08242 1.18275,2.83083c0.75556,0.74841 1.77849,1.16444 2.84194,1.1558h22.8011zM46.79898,73.90625h38.08954c1.48427,0 2.6875,1.20323 2.6875,2.6875c0,1.48427 -1.20323,2.6875 -2.6875,2.6875h-38.08954c-1.48427,0 -2.6875,-1.20323 -2.6875,-2.6875c0,-1.48427 1.20323,-2.6875 2.6875,-2.6875zM46.79898,88.35156h78.40204c1.48427,0 2.6875,1.20323 2.6875,2.6875c0,1.48427 -1.20323,2.6875 -2.6875,2.6875h-78.40204c-1.48427,0 -2.6875,-1.20323 -2.6875,-2.6875c0,-1.48427 1.20323,-2.6875 2.6875,-2.6875zM46.79898,102.79688h78.40204c1.48427,0 2.6875,1.20323 2.6875,2.6875c0,1.48427 -1.20323,2.6875 -2.6875,2.6875h-78.40204c-1.48427,0 -2.6875,-1.20323 -2.6875,-2.6875c0,-1.48427 1.20323,-2.6875 2.6875,-2.6875zM46.79898,117.24219h78.40204c1.48427,0 2.6875,1.20323 2.6875,2.6875c0,1.48427 -1.20323,2.6875 -2.6875,2.6875h-78.40204c-1.48427,0 -2.6875,-1.20323 -2.6875,-2.6875c0,-1.48427 1.20323,-2.6875 2.6875,-2.6875z">
                                </path>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="px-6 pt-1 pb-5">

                    <h5 class="text-gray-900 text-md font-medium mb-4">If you have
                        just entered the corporate
                        world and don’t know how
                        to start, our beginner
                        level help for CV writing
                        UK is only for you. </h5>

                    <a href="#"
                        class=" text-white bg-gray-500 border-0 py-2 px-3 hover:bg-purple-600 rounded-2xl text-md text-center">Read
                        more</a>

                </div>

            </div>

            <div class="rounded-xl shadow-2xl text-center border-1 m-4 ">

                <div
                    class="bg-gradient-to-r from-purple-500 to-purple-900 py-6 px-6 text-white rounded-xl font-semibold text-[15.7px]">
                    Mid-Level Professionals
                </div>
                <div class="w-[3.50rem] h-[3.50rem] p-4 bg-purple-800 border-white border-2 rounded-full mx-auto -mt-6">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35" viewBox="0 0 172 172"
                        style=" fill:#000000;" class="ml-[-0.35rem] mt-[-0.35rem]">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#ffffff">
                                <path
                                    d="M42.40555,12.09375c-5.95698,0.0193 -10.78714,4.83249 -10.82742,10.78937v126.23376c0.04028,5.95688 4.87044,10.77006 10.82742,10.78937h87.1889c5.95698,-0.0193 10.78715,-4.83249 10.82742,-10.78937v-100.07001h-26.54562c-2.48855,0.00718 -4.8778,-0.97561 -6.64105,-2.73172c-1.76325,-1.75611 -2.75572,-4.14135 -2.75864,-6.62992v-27.59149zM109.85156,16.07317v23.61208c0.00147,1.06348 0.42719,2.08242 1.18275,2.83083c0.75556,0.74841 1.77849,1.16444 2.84194,1.1558h22.8011zM46.79898,73.90625h38.08954c1.48427,0 2.6875,1.20323 2.6875,2.6875c0,1.48427 -1.20323,2.6875 -2.6875,2.6875h-38.08954c-1.48427,0 -2.6875,-1.20323 -2.6875,-2.6875c0,-1.48427 1.20323,-2.6875 2.6875,-2.6875zM46.79898,88.35156h78.40204c1.48427,0 2.6875,1.20323 2.6875,2.6875c0,1.48427 -1.20323,2.6875 -2.6875,2.6875h-78.40204c-1.48427,0 -2.6875,-1.20323 -2.6875,-2.6875c0,-1.48427 1.20323,-2.6875 2.6875,-2.6875zM46.79898,102.79688h78.40204c1.48427,0 2.6875,1.20323 2.6875,2.6875c0,1.48427 -1.20323,2.6875 -2.6875,2.6875h-78.40204c-1.48427,0 -2.6875,-1.20323 -2.6875,-2.6875c0,-1.48427 1.20323,-2.6875 2.6875,-2.6875zM46.79898,117.24219h78.40204c1.48427,0 2.6875,1.20323 2.6875,2.6875c0,1.48427 -1.20323,2.6875 -2.6875,2.6875h-78.40204c-1.48427,0 -2.6875,-1.20323 -2.6875,-2.6875c0,-1.48427 1.20323,-2.6875 2.6875,-2.6875z">
                                </path>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="px-6 pt-1 pb-5">

                    <h5 class="text-gray-900 text-md font-medium mb-4">Looking to switch
                        your career or
                        company? Our
                        professional CV
                        help UK can help
                        you stand out from
                        the crowd with a
                        job-winning profile. </h5>

                    <a href="#"
                        class=" text-white bg-gray-500 border-0 py-2 px-3 hover:bg-purple-600 rounded-2xl text-md text-center">Read
                        more</a>

                </div>

            </div>

            <div class="rounded-xl shadow-2xl text-center border-1 m-4 ">

                <div
                    class="bg-gradient-to-r from-purple-500 to-purple-900 py-6 px-6 text-white rounded-xl font-semibold text-[15.7px]">
                    Experts
                </div>
                <div class="w-[3.50rem] h-[3.50rem] p-4 bg-purple-800 border-white border-2 rounded-full mx-auto -mt-6">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35" viewBox="0 0 172 172"
                        style=" fill:#000000;" class="ml-[-0.35rem] mt-[-0.35rem]">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#ffffff">
                                <path
                                    d="M42.40555,12.09375c-5.95698,0.0193 -10.78714,4.83249 -10.82742,10.78937v126.23376c0.04028,5.95688 4.87044,10.77006 10.82742,10.78937h87.1889c5.95698,-0.0193 10.78715,-4.83249 10.82742,-10.78937v-100.07001h-26.54562c-2.48855,0.00718 -4.8778,-0.97561 -6.64105,-2.73172c-1.76325,-1.75611 -2.75572,-4.14135 -2.75864,-6.62992v-27.59149zM109.85156,16.07317v23.61208c0.00147,1.06348 0.42719,2.08242 1.18275,2.83083c0.75556,0.74841 1.77849,1.16444 2.84194,1.1558h22.8011zM46.79898,73.90625h38.08954c1.48427,0 2.6875,1.20323 2.6875,2.6875c0,1.48427 -1.20323,2.6875 -2.6875,2.6875h-38.08954c-1.48427,0 -2.6875,-1.20323 -2.6875,-2.6875c0,-1.48427 1.20323,-2.6875 2.6875,-2.6875zM46.79898,88.35156h78.40204c1.48427,0 2.6875,1.20323 2.6875,2.6875c0,1.48427 -1.20323,2.6875 -2.6875,2.6875h-78.40204c-1.48427,0 -2.6875,-1.20323 -2.6875,-2.6875c0,-1.48427 1.20323,-2.6875 2.6875,-2.6875zM46.79898,102.79688h78.40204c1.48427,0 2.6875,1.20323 2.6875,2.6875c0,1.48427 -1.20323,2.6875 -2.6875,2.6875h-78.40204c-1.48427,0 -2.6875,-1.20323 -2.6875,-2.6875c0,-1.48427 1.20323,-2.6875 2.6875,-2.6875zM46.79898,117.24219h78.40204c1.48427,0 2.6875,1.20323 2.6875,2.6875c0,1.48427 -1.20323,2.6875 -2.6875,2.6875h-78.40204c-1.48427,0 -2.6875,-1.20323 -2.6875,-2.6875c0,-1.48427 1.20323,-2.6875 2.6875,-2.6875z">
                                </path>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="px-6 pt-1 pb-5">

                    <h5 class="text-gray-900 text-md font-medium mb-4">Do you have a
                        lot of skills
                        and experience
                        to add to your
                        resume but don’t know
                        how to manage? Talk to
                        our CV writing specialists
                        to mark it done. </h5>

                    <a href="#"
                        class=" text-white bg-gray-500 border-0 py-2 px-3 hover:bg-purple-600 rounded-2xl text-md text-center">Read
                        more</a>

                </div>

            </div>

            <div class="rounded-xl shadow-2xl text-center border-1 m-4 ">

                <div
                    class="bg-gradient-to-r from-purple-500 to-purple-900 py-6 px-6 text-white rounded-xl font-semibold text-[15.7px]">
                    Specialists
                </div>
                <div class="w-[3.50rem] h-[3.50rem] p-4 bg-purple-800 border-white border-2 rounded-full mx-auto -mt-6">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35" viewBox="0 0 172 172"
                        style=" fill:#000000;" class="ml-[-0.35rem] mt-[-0.35rem]">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#ffffff">
                                <path
                                    d="M42.40555,12.09375c-5.95698,0.0193 -10.78714,4.83249 -10.82742,10.78937v126.23376c0.04028,5.95688 4.87044,10.77006 10.82742,10.78937h87.1889c5.95698,-0.0193 10.78715,-4.83249 10.82742,-10.78937v-100.07001h-26.54562c-2.48855,0.00718 -4.8778,-0.97561 -6.64105,-2.73172c-1.76325,-1.75611 -2.75572,-4.14135 -2.75864,-6.62992v-27.59149zM109.85156,16.07317v23.61208c0.00147,1.06348 0.42719,2.08242 1.18275,2.83083c0.75556,0.74841 1.77849,1.16444 2.84194,1.1558h22.8011zM46.79898,73.90625h38.08954c1.48427,0 2.6875,1.20323 2.6875,2.6875c0,1.48427 -1.20323,2.6875 -2.6875,2.6875h-38.08954c-1.48427,0 -2.6875,-1.20323 -2.6875,-2.6875c0,-1.48427 1.20323,-2.6875 2.6875,-2.6875zM46.79898,88.35156h78.40204c1.48427,0 2.6875,1.20323 2.6875,2.6875c0,1.48427 -1.20323,2.6875 -2.6875,2.6875h-78.40204c-1.48427,0 -2.6875,-1.20323 -2.6875,-2.6875c0,-1.48427 1.20323,-2.6875 2.6875,-2.6875zM46.79898,102.79688h78.40204c1.48427,0 2.6875,1.20323 2.6875,2.6875c0,1.48427 -1.20323,2.6875 -2.6875,2.6875h-78.40204c-1.48427,0 -2.6875,-1.20323 -2.6875,-2.6875c0,-1.48427 1.20323,-2.6875 2.6875,-2.6875zM46.79898,117.24219h78.40204c1.48427,0 2.6875,1.20323 2.6875,2.6875c0,1.48427 -1.20323,2.6875 -2.6875,2.6875h-78.40204c-1.48427,0 -2.6875,-1.20323 -2.6875,-2.6875c0,-1.48427 1.20323,-2.6875 2.6875,-2.6875z">
                                </path>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="px-6 pt-1 pb-5">

                    <h5 class="text-gray-900 text-md font-medium mb-4">Are you having trouble
                        creating a CV that
                        represents you as
                        a specialist? Our CV
                        writing experts can
                        put your experience in
                        the best manner to
                        attract potential
                        opportunities. </h5>

                    <a href="#"
                        class=" text-white bg-gray-500 border-0 py-2 px-3 hover:bg-purple-600 rounded-2xl text-md text-center">Read
                        more</a>

                </div>

            </div>
        </div>
    </section>

    <hr class="h-1 w-7/12 mx-auto mt-10 bg-purple-500">

    <!-- hOW WE DO -->
    <section class="container mx-auto">

        <h4 class="font-bold text-4xl text-center py-9"> It’s Simple to Hire Our Professional CV Services London </h4>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 lg:px-36 mx-auto">

            <div class="mx-auto border-2 border-dashed rounded-full w-64 h-64 border-purple-700 mt-8 md:mt-0">
                <div class="pt-7">

                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172"
                        class="mx-auto" style=" fill:#000000;">
                        <defs>
                            <linearGradient x1="79.95313" y1="5.07837" x2="79.95313" y2="166.34852"
                                gradientUnits="userSpaceOnUse" id="color-1_3B0uw4YDaRxB_gr1">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="2198.40257" y1="189.58297" x2="2198.40257" y2="3414.98609"
                                gradientUnits="userSpaceOnUse" id="color-2_3B0uw4YDaRxB_gr2">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="12266.51303" y1="189.58297" x2="12266.51303" y2="3414.98609"
                                gradientUnits="userSpaceOnUse" id="color-3_3B0uw4YDaRxB_gr3">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="2198.40257" y1="207.05172" x2="2198.40257" y2="3432.45484"
                                gradientUnits="userSpaceOnUse" id="color-4_3B0uw4YDaRxB_gr4">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="12266.51303" y1="207.05172" x2="12266.51303" y2="3432.45484"
                                gradientUnits="userSpaceOnUse" id="color-5_3B0uw4YDaRxB_gr5">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="2198.40257" y1="171.77828" x2="2198.40257" y2="3397.18141"
                                gradientUnits="userSpaceOnUse" id="color-6_3B0uw4YDaRxB_gr6">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="12266.51303" y1="171.77828" x2="12266.51303" y2="3397.18141"
                                gradientUnits="userSpaceOnUse" id="color-7_3B0uw4YDaRxB_gr7">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="2198.40257" y1="154.30953" x2="2198.40257" y2="3379.71266"
                                gradientUnits="userSpaceOnUse" id="color-8_3B0uw4YDaRxB_gr8">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="12266.51303" y1="154.30953" x2="12266.51303" y2="3379.71266"
                                gradientUnits="userSpaceOnUse" id="color-9_3B0uw4YDaRxB_gr9">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="25983.97289" y1="1526.2135" x2="25983.97289" y2="49406.36172"
                                gradientUnits="userSpaceOnUse" id="color-10_3B0uw4YDaRxB_gr10">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                        </defs>
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g>
                                <g>
                                    <path
                                        d="M116.79035,30.57031h-73.89684c-5.73311,0 -10.30757,4.83045 -10.30757,10.56355v102.04841c-0.01505,2.74141 1.06501,5.37537 3.00035,7.31702c1.93534,1.94165 4.56578,3.03027 7.30722,3.02414h50.67214c0.05946,0 0.11859,0.02251 0.17771,0.01915c0.05812,0.00302 0.11556,0.02284 0.17402,0.02284c1.34733,0.00313 2.56569,-0.80042 3.09331,-2.04015l28.46197,-28.29098c1.05947,-0.59311 1.71566,-1.7125 1.71563,-2.92669c0,-0.02923 0.06282,-0.05711 0.06181,-0.08634c-0.00101,-0.02923 0.07088,-0.05812 0.07088,-0.08802v-78.9994c-0.00067,-5.73311 -4.79752,-10.56355 -10.53063,-10.56355zM97.42187,141.79183v-14.44531c0,-2.02839 1.505,-3.72219 3.53339,-3.72219h14.55281zM120.60156,116.90625h-19.6463c-5.73311,0 -10.25214,4.70783 -10.25214,10.44094v19.4575h-47.80962c-0.95999,0.00766 -1.88241,-0.37262 -2.55808,-1.05462c-0.67567,-0.68199 -1.04734,-1.60792 -1.03074,-2.5678v-102.04841c0,-2.02839 1.56043,-3.8448 3.58882,-3.8448h73.89684c2.08838,0.06951 3.76004,1.75589 3.81121,3.8448z"
                                        fill="url(#color-1_3B0uw4YDaRxB_gr1)"></path>
                                    <path
                                        d="M56.08913,88.01563h-7.03755c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35938 3.35938,3.35938h7.03755c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-2_3B0uw4YDaRxB_gr2)"></path>
                                    <path
                                        d="M107.11334,88.01563h-40.46737c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35938 3.35938,3.35938h40.46737c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-3_3B0uw4YDaRxB_gr3)"></path>
                                    <path
                                        d="M56.08913,105.48437h-7.03755c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35938 3.35938,3.35938h7.03755c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-4_3B0uw4YDaRxB_gr4)"></path>
                                    <path
                                        d="M107.11334,105.48437h-40.46737c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35938 3.35938,3.35938h40.46737c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-5_3B0uw4YDaRxB_gr5)"></path>
                                    <path
                                        d="M56.08913,70.21094h-7.03755c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35938 3.35938,3.35938h7.03755c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-6_3B0uw4YDaRxB_gr6)"></path>
                                    <path
                                        d="M107.11334,70.21094h-40.46737c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35938 3.35938,3.35938h40.46737c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-7_3B0uw4YDaRxB_gr7)"></path>
                                    <path
                                        d="M56.08913,52.74219h-7.03755c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35937 3.35938,3.35937h7.03755c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-8_3B0uw4YDaRxB_gr8)"></path>
                                    <path
                                        d="M107.11334,52.74219h-40.46737c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35937 3.35938,3.35937h40.46737c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-9_3B0uw4YDaRxB_gr9)"></path>
                                    <path
                                        d="M125.58788,18.47656h-77.41445c-1.85533,0 -3.35937,1.50404 -3.35937,3.35937c0,1.85533 1.50404,3.35938 3.35938,3.35938h77.41445c1.89303,-0.00698 3.71006,0.74426 5.04545,2.08603c1.33539,1.34177 2.07798,3.16235 2.06198,5.05533v82.51834c0,1.85533 1.50404,3.35938 3.35938,3.35938c1.85533,0 3.35938,-1.50404 3.35938,-3.35937v-82.51834c0.01413,-3.67436 -1.43693,-7.2028 -4.03193,-9.80416c-2.595,-2.60137 -6.11987,-4.06107 -9.79425,-4.05594z"
                                        fill="url(#color-10_3B0uw4YDaRxB_gr10)"></path>
                                </g>
                            </g>
                            <path d="" fill="none"></path>
                            <path d="" fill="none"></path>
                        </g>
                    </svg>
                    <p class="mx-auto font-bold text-center">1. Place An Order</p>
                    <p class="font-semibold text-gray-600 text-sm text-center mx-4 "> Enter complete requirements of your
                        order detailing the kind of help you need.
                    </p>
                </div>
            </div>

            <div class="mx-auto border-2 border-dashed rounded-full w-64 h-64 border-purple-700 mt-8 md:mt-0">
                <div class="pt-7">

                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172"
                        class="mx-auto" style=" fill:#000000;">
                        <defs>
                            <linearGradient x1="79.95313" y1="5.07837" x2="79.95313" y2="166.34852"
                                gradientUnits="userSpaceOnUse" id="color-1_3B0uw4YDaRxB_gr1">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="2198.40257" y1="189.58297" x2="2198.40257" y2="3414.98609"
                                gradientUnits="userSpaceOnUse" id="color-2_3B0uw4YDaRxB_gr2">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="12266.51303" y1="189.58297" x2="12266.51303" y2="3414.98609"
                                gradientUnits="userSpaceOnUse" id="color-3_3B0uw4YDaRxB_gr3">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="2198.40257" y1="207.05172" x2="2198.40257" y2="3432.45484"
                                gradientUnits="userSpaceOnUse" id="color-4_3B0uw4YDaRxB_gr4">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="12266.51303" y1="207.05172" x2="12266.51303" y2="3432.45484"
                                gradientUnits="userSpaceOnUse" id="color-5_3B0uw4YDaRxB_gr5">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="2198.40257" y1="171.77828" x2="2198.40257" y2="3397.18141"
                                gradientUnits="userSpaceOnUse" id="color-6_3B0uw4YDaRxB_gr6">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="12266.51303" y1="171.77828" x2="12266.51303" y2="3397.18141"
                                gradientUnits="userSpaceOnUse" id="color-7_3B0uw4YDaRxB_gr7">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="2198.40257" y1="154.30953" x2="2198.40257" y2="3379.71266"
                                gradientUnits="userSpaceOnUse" id="color-8_3B0uw4YDaRxB_gr8">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="12266.51303" y1="154.30953" x2="12266.51303" y2="3379.71266"
                                gradientUnits="userSpaceOnUse" id="color-9_3B0uw4YDaRxB_gr9">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="25983.97289" y1="1526.2135" x2="25983.97289" y2="49406.36172"
                                gradientUnits="userSpaceOnUse" id="color-10_3B0uw4YDaRxB_gr10">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                        </defs>
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g>
                                <g>
                                    <path
                                        d="M116.79035,30.57031h-73.89684c-5.73311,0 -10.30757,4.83045 -10.30757,10.56355v102.04841c-0.01505,2.74141 1.06501,5.37537 3.00035,7.31702c1.93534,1.94165 4.56578,3.03027 7.30722,3.02414h50.67214c0.05946,0 0.11859,0.02251 0.17771,0.01915c0.05812,0.00302 0.11556,0.02284 0.17402,0.02284c1.34733,0.00313 2.56569,-0.80042 3.09331,-2.04015l28.46197,-28.29098c1.05947,-0.59311 1.71566,-1.7125 1.71563,-2.92669c0,-0.02923 0.06282,-0.05711 0.06181,-0.08634c-0.00101,-0.02923 0.07088,-0.05812 0.07088,-0.08802v-78.9994c-0.00067,-5.73311 -4.79752,-10.56355 -10.53063,-10.56355zM97.42187,141.79183v-14.44531c0,-2.02839 1.505,-3.72219 3.53339,-3.72219h14.55281zM120.60156,116.90625h-19.6463c-5.73311,0 -10.25214,4.70783 -10.25214,10.44094v19.4575h-47.80962c-0.95999,0.00766 -1.88241,-0.37262 -2.55808,-1.05462c-0.67567,-0.68199 -1.04734,-1.60792 -1.03074,-2.5678v-102.04841c0,-2.02839 1.56043,-3.8448 3.58882,-3.8448h73.89684c2.08838,0.06951 3.76004,1.75589 3.81121,3.8448z"
                                        fill="url(#color-1_3B0uw4YDaRxB_gr1)"></path>
                                    <path
                                        d="M56.08913,88.01563h-7.03755c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35938 3.35938,3.35938h7.03755c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-2_3B0uw4YDaRxB_gr2)"></path>
                                    <path
                                        d="M107.11334,88.01563h-40.46737c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35938 3.35938,3.35938h40.46737c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-3_3B0uw4YDaRxB_gr3)"></path>
                                    <path
                                        d="M56.08913,105.48437h-7.03755c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35938 3.35938,3.35938h7.03755c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-4_3B0uw4YDaRxB_gr4)"></path>
                                    <path
                                        d="M107.11334,105.48437h-40.46737c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35938 3.35938,3.35938h40.46737c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-5_3B0uw4YDaRxB_gr5)"></path>
                                    <path
                                        d="M56.08913,70.21094h-7.03755c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35938 3.35938,3.35938h7.03755c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-6_3B0uw4YDaRxB_gr6)"></path>
                                    <path
                                        d="M107.11334,70.21094h-40.46737c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35938 3.35938,3.35938h40.46737c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-7_3B0uw4YDaRxB_gr7)"></path>
                                    <path
                                        d="M56.08913,52.74219h-7.03755c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35937 3.35938,3.35937h7.03755c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-8_3B0uw4YDaRxB_gr8)"></path>
                                    <path
                                        d="M107.11334,52.74219h-40.46737c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35937 3.35938,3.35937h40.46737c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-9_3B0uw4YDaRxB_gr9)"></path>
                                    <path
                                        d="M125.58788,18.47656h-77.41445c-1.85533,0 -3.35937,1.50404 -3.35937,3.35937c0,1.85533 1.50404,3.35938 3.35938,3.35938h77.41445c1.89303,-0.00698 3.71006,0.74426 5.04545,2.08603c1.33539,1.34177 2.07798,3.16235 2.06198,5.05533v82.51834c0,1.85533 1.50404,3.35938 3.35938,3.35938c1.85533,0 3.35938,-1.50404 3.35938,-3.35937v-82.51834c0.01413,-3.67436 -1.43693,-7.2028 -4.03193,-9.80416c-2.595,-2.60137 -6.11987,-4.06107 -9.79425,-4.05594z"
                                        fill="url(#color-10_3B0uw4YDaRxB_gr10)"></path>
                                </g>
                            </g>
                            <path d="" fill="none"></path>
                            <path d="" fill="none"></path>
                        </g>
                    </svg>

                    <p class="font-bold text-center">2. Connect with our Representative</p>
                    <p class="font-semibold text-gray-600 text-sm text-center mx-4 ">After you have placed the order, our
                        representative will get in touch with you to confirm it.
                    </p>
                </div>
            </div>

            <div
                class=" mx-auto border-2 border-dashed rounded-full w-64 h-64 border-purple-700 mt-8 md:mt-0 md:col-span-2 lg:col-span-1">
                <div class="pt-7">

                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172"
                        class="mx-auto" style=" fill:#000000;">
                        <defs>
                            <linearGradient x1="79.95313" y1="5.07837" x2="79.95313" y2="166.34852"
                                gradientUnits="userSpaceOnUse" id="color-1_3B0uw4YDaRxB_gr1">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="2198.40257" y1="189.58297" x2="2198.40257" y2="3414.98609"
                                gradientUnits="userSpaceOnUse" id="color-2_3B0uw4YDaRxB_gr2">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="12266.51303" y1="189.58297" x2="12266.51303" y2="3414.98609"
                                gradientUnits="userSpaceOnUse" id="color-3_3B0uw4YDaRxB_gr3">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="2198.40257" y1="207.05172" x2="2198.40257" y2="3432.45484"
                                gradientUnits="userSpaceOnUse" id="color-4_3B0uw4YDaRxB_gr4">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="12266.51303" y1="207.05172" x2="12266.51303" y2="3432.45484"
                                gradientUnits="userSpaceOnUse" id="color-5_3B0uw4YDaRxB_gr5">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="2198.40257" y1="171.77828" x2="2198.40257" y2="3397.18141"
                                gradientUnits="userSpaceOnUse" id="color-6_3B0uw4YDaRxB_gr6">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="12266.51303" y1="171.77828" x2="12266.51303" y2="3397.18141"
                                gradientUnits="userSpaceOnUse" id="color-7_3B0uw4YDaRxB_gr7">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="2198.40257" y1="154.30953" x2="2198.40257" y2="3379.71266"
                                gradientUnits="userSpaceOnUse" id="color-8_3B0uw4YDaRxB_gr8">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="12266.51303" y1="154.30953" x2="12266.51303" y2="3379.71266"
                                gradientUnits="userSpaceOnUse" id="color-9_3B0uw4YDaRxB_gr9">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                            <linearGradient x1="25983.97289" y1="1526.2135" x2="25983.97289" y2="49406.36172"
                                gradientUnits="userSpaceOnUse" id="color-10_3B0uw4YDaRxB_gr10">
                                <stop offset="0" stop-color="#8683f1"></stop>
                                <stop offset="1" stop-color="#32308a"></stop>
                            </linearGradient>
                        </defs>
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g>
                                <g>
                                    <path
                                        d="M116.79035,30.57031h-73.89684c-5.73311,0 -10.30757,4.83045 -10.30757,10.56355v102.04841c-0.01505,2.74141 1.06501,5.37537 3.00035,7.31702c1.93534,1.94165 4.56578,3.03027 7.30722,3.02414h50.67214c0.05946,0 0.11859,0.02251 0.17771,0.01915c0.05812,0.00302 0.11556,0.02284 0.17402,0.02284c1.34733,0.00313 2.56569,-0.80042 3.09331,-2.04015l28.46197,-28.29098c1.05947,-0.59311 1.71566,-1.7125 1.71563,-2.92669c0,-0.02923 0.06282,-0.05711 0.06181,-0.08634c-0.00101,-0.02923 0.07088,-0.05812 0.07088,-0.08802v-78.9994c-0.00067,-5.73311 -4.79752,-10.56355 -10.53063,-10.56355zM97.42187,141.79183v-14.44531c0,-2.02839 1.505,-3.72219 3.53339,-3.72219h14.55281zM120.60156,116.90625h-19.6463c-5.73311,0 -10.25214,4.70783 -10.25214,10.44094v19.4575h-47.80962c-0.95999,0.00766 -1.88241,-0.37262 -2.55808,-1.05462c-0.67567,-0.68199 -1.04734,-1.60792 -1.03074,-2.5678v-102.04841c0,-2.02839 1.56043,-3.8448 3.58882,-3.8448h73.89684c2.08838,0.06951 3.76004,1.75589 3.81121,3.8448z"
                                        fill="url(#color-1_3B0uw4YDaRxB_gr1)"></path>
                                    <path
                                        d="M56.08913,88.01563h-7.03755c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35938 3.35938,3.35938h7.03755c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-2_3B0uw4YDaRxB_gr2)"></path>
                                    <path
                                        d="M107.11334,88.01563h-40.46737c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35938 3.35938,3.35938h40.46737c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-3_3B0uw4YDaRxB_gr3)"></path>
                                    <path
                                        d="M56.08913,105.48437h-7.03755c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35938 3.35938,3.35938h7.03755c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-4_3B0uw4YDaRxB_gr4)"></path>
                                    <path
                                        d="M107.11334,105.48437h-40.46737c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35938 3.35938,3.35938h40.46737c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-5_3B0uw4YDaRxB_gr5)"></path>
                                    <path
                                        d="M56.08913,70.21094h-7.03755c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35938 3.35938,3.35938h7.03755c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-6_3B0uw4YDaRxB_gr6)"></path>
                                    <path
                                        d="M107.11334,70.21094h-40.46737c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35938 3.35938,3.35938h40.46737c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-7_3B0uw4YDaRxB_gr7)"></path>
                                    <path
                                        d="M56.08913,52.74219h-7.03755c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35937 3.35938,3.35937h7.03755c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-8_3B0uw4YDaRxB_gr8)"></path>
                                    <path
                                        d="M107.11334,52.74219h-40.46737c-1.85533,0 -3.35937,1.50404 -3.35937,3.35938c0,1.85533 1.50404,3.35937 3.35938,3.35937h40.46737c1.85533,0 3.35938,-1.50404 3.35938,-3.35937c0,-1.85533 -1.50404,-3.35937 -3.35937,-3.35937z"
                                        fill="url(#color-9_3B0uw4YDaRxB_gr9)"></path>
                                    <path
                                        d="M125.58788,18.47656h-77.41445c-1.85533,0 -3.35937,1.50404 -3.35937,3.35937c0,1.85533 1.50404,3.35938 3.35938,3.35938h77.41445c1.89303,-0.00698 3.71006,0.74426 5.04545,2.08603c1.33539,1.34177 2.07798,3.16235 2.06198,5.05533v82.51834c0,1.85533 1.50404,3.35938 3.35938,3.35938c1.85533,0 3.35938,-1.50404 3.35938,-3.35937v-82.51834c0.01413,-3.67436 -1.43693,-7.2028 -4.03193,-9.80416c-2.595,-2.60137 -6.11987,-4.06107 -9.79425,-4.05594z"
                                        fill="url(#color-10_3B0uw4YDaRxB_gr10)"></path>
                                </g>
                            </g>
                            <path d="" fill="none"></path>
                            <path d="" fill="none"></path>
                        </g>
                    </svg>
                    <p class="text-center font-bold">3. Pay & Wait</p>
                    <p class="font-semibold text-gray-600 text-sm text-center mx-4 "> Pay in advance to confirm your CV
                        order and wait till we reach you inbox with a strong CV.
                    </p>
                </div>
            </div>

        </div>

        <p class="text-gray-500 text-lg font-semibold pt-8 pb-3 text-center mx-auto">Still Have Questions?</p>

        <div class="flex flex-col md:flex-row justify-center my-4">
            <a href="#"
                class=" text-white bg-purple-400 border-0 py-1 px-4 hover:bg-purple-900 rounded text-lg text-center mb-3 mx-20 md:mx-4 md:mb-0">Live
                Chat</a>
            <a href="#"
                class=" text-white bg-purple-600 border-0 py-1 px-4 hover:bg-purple-900 rounded text-lg text-center mb-3 mx-20 md:mx-4 md:mb-0 ">Our
                Price</a>
            <a href="#"
                class=" text-white bg-purple-700 border-0 py-1 px-4 hover:bg-purple-500 rounded text-lg text-center mx-20 md:mx-4 ">Reach
                us</a>
        </div>

        <p class="text-gray-500 text-lg font-semibold pb-3 text-center mx-auto">Online 24/7</p>


    </section>

    <div>
        <img src="../imgs/wavesSimple.svg" alt="waves" class="w-full">
    </div>

    <!-- choosing cv -->
    <section class="container mx-auto pb-10">

        <h4 class="font-bold text-gray-600 text-3xl md:text-4xl text-center py-9 px-2"> Reasons to Choose Our Resume
            Writing Services UK </h4>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 lg:px-20 mx-auto">

            <div class="px-2">
                <img src="../imgs/icon1.svg" class="w-12 mx-auto" alt="icon">
                <h4 class=" text-center font-bold text-lg">Fastest Turnaround Time</h4>
                <p class=" text-center text-md py-2">We respect your time and ours too. And that’s why we always ensure to
                    submit your deliveries ahead of time without leaving room for revisions. </p>
            </div>
            <div class="px-2">
                <img src="../imgs/icon2.svg" class="w-12 mx-auto" alt="icon">
                <h4 class="text-black text-center font-bold text-lg">Unique Approach</h4>
                <p class=" text-center text-md py-2 lg:pt-9">Our professional CV writers London follows a unique approach
                    while writing resumes, cover letter and LinkedIn profile to make you stand ahead of the crowd.</p>
            </div>
            <div class="px-2">
                <img src="../imgs/icon3.svg" class="w-12 mx-auto" alt="icon">
                <h4 class="text-black text-center font-bold text-lg">Cost-Efficient</h4>
                <p class=" text-center text-md py-2 lg:pt-9">We know writing a CV takes creative input and also ample time
                    but it won’t let us increase our prices. To help maximum people earn their bread and butter, we offer
                    cheap CV writing service UK. </p>
            </div>
            <div class="px-2">
                <img src="../imgs/icon4.svg" class="w-12 mx-auto" alt="icon">
                <h4 class="text-black text-center font-bold text-lg">Top CV Writers</h4>
                <p class=" text-center text-md py-2 lg:pt-9 ">We have expert CV writers, editors, career counsellors from
                    London UK who can guide you in any manner you want. Even if you have written your CV, our editors can
                    help you polish it.</p>
            </div>
            <div class="px-2">
                <img src="../imgs/icon5.svg" class="w-12 mx-auto" alt="icon">
                <h4 class="text-black text-center font-bold text-lg">100% Confidentiality</h4>
                <p class=" text-center text-md py-2">We are committed to securing your information and identity and that’s
                    why we don’t share your information with any third party. We intend to keep it 100% confidential. </p>
            </div>
            <div class="px-2 md:pt-4 lg:pt-6">
                <img src="../imgs/icon6.svg" class="w-12 mx-auto" alt="icon">
                <h4 class="text-black text-center font-bold text-lg">Round the Clock Support</h4>
                <p class=" text-center text-md py-2">We provide support via live chat, call, and writing assistants. To
                    give you the fastest turnaround time, we also deliver orders within two days. For any kind of support,
                    our professional CV writing service London remains available for help. </p>
            </div>
        </div>
    </section>

    <!-- price tabs -->
    <section class="bg-bgtabs bg-no-repeat bg-right bg-cover mx-auto pb-10">
        <h4 class="font-bold text-white text-4xl text-center py-9"> One of the Best CV Writing Companies UK with Affordable
            Solutions</h4>


        <div class="container rounded sm:px-10 md:px-28 lg:px-40 mx-auto mt-4">
            <!-- Tabs -->

            <div class="grid grid-cols-12 mx-auto">

                <div class="col-span-12 lg:col-span-5 lg:w-[70%]">

                    <ul id="tabs" class=" pt-8 px-1">
                        <li class="px-4 text-white  font-semibold py-2 service-tab cursor-pointer" id="default-tab" data-target="0"> 
                                
                                Resume
                            </li>
                        <li class="px-4 text-white  font-semibold py-2 service-tab" data-target="1"><a class="cursor-pointer">Cover
                                letter</a></li>
                        <li class="px-4 text-white  font-semibold py-2 service-tab" data-target="2"><a class="cursor-pointer">CV</a>
                        </li>
                        <li class="px-4 text-white  font-semibold py-2 service-tab" data-target="3"><a
                            class="cursor-pointer">LinkedIn Profile</a></li>
                        <li class="px-4 text-white font-semibold py-2 service-tab" data-target="4"><a class="cursor-pointer">
                                Follow-Up Letter</a>
                        </li>
                        <li class="px-4 text-white  font-semibold py-2 service-tab" data-target="5"><a
                            class="cursor-pointer">Resume + Cover Letter
                            </a></li>
                        <li class="px-4 text-white  font-semibold py-2 service-tab" data-target="6"><a
                            class="cursor-pointer">&nbsp;Resume + Cover Letter + LinkedIn Profile</a></li>
                        <li class="px-4 text-white font-semibold py-2 service-tab" data-target="7"><a class="cursor-pointer">CV +
                                Cover Letter</a></li>
                        <li class="px-4 text-white  font-semibold py-2 service-tab" data-target="8"><a class="cursor-pointer">CV +
                                Cover Letter + LinkedIn Profile</a></li>
                    </ul>
                </div>
                <!-- Tab Contents -->
                <div class="col-span-12 lg:col-span-7 mt-8">

                    <div id="tab-contents">

                        <div id="first" class="p-4">
                            <div class="bg-white rounded-[2rem] py-4 px-12 shadow-xl">

                                <h4 id="service-title-1" class="text-2xl mb-4">loading...</h4>
                                <div id="service-bullets">
                                </div>
                                <!-- <span class="flex mt-2">
                                              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="15"
                                                viewBox="0 0 172 172" style=" fill:#000000;" class="my-auto">
                                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                                  stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                                  font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                                  style="mix-blend-mode: normal">
                                                  <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                                  <g fill="#ffffff">
                                                    <path
                                                      d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                    </path>
                                                  </g>
                                                </g>
                                              </svg>
                                              <p class="ml-2"> Custom Written CV </p>
                                            </span>
                                            <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="15"
                                                viewBox="0 0 172 172" style=" fill:#000000;" class="my-auto">
                                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                                  stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                                  font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                                  style="mix-blend-mode: normal">
                                                  <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                                  <g fill="#ffffff">
                                                    <path
                                                      d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                    </path>
                                                  </g>
                                                </g>
                                              </svg>
                                              <p class="ml-2"> PDF and Doc format </p>
                                            </span>
                                            <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="15"
                                                viewBox="0 0 172 172" style=" fill:#000000;" class="my-auto">
                                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                                  stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                                  font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                                  style="mix-blend-mode: normal">
                                                  <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                                  <g fill="#ffffff">
                                                    <path
                                                      d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                    </path>
                                                  </g>
                                                </g>
                                              </svg>
                                              <p class="ml-2"> Custom Written CV </p>
                                            </span>
                                            <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="15"
                                                viewBox="0 0 172 172" style=" fill:#000000;" class="my-auto">
                                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                                  stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                                  font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                                  style="mix-blend-mode: normal">
                                                  <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                                  <g fill="#ffffff">
                                                    <path
                                                      d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                    </path>
                                                  </g>
                                                </g>
                                              </svg>
                                              <p class="ml-2"> Keyword Optimized </p>
                                            </span>
                                            <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="15"
                                                viewBox="0 0 172 172" style=" fill:#000000;" class="my-auto">
                                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                                  stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                                  font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                                  style="mix-blend-mode: normal">
                                                  <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                                  <g fill="#ffffff">
                                                    <path
                                                      d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                    </path>
                                                  </g>
                                                </g>
                                              </svg>
                                              <p class="ml-2"> Custom Written CV </p>
                                            </span>
                                            <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="15"
                                                viewBox="0 0 172 172" style=" fill:#000000;" class="my-auto">
                                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                                  stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                                  font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                                  style="mix-blend-mode: normal">
                                                  <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                                  <g fill="#ffffff">
                                                    <path
                                                      d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                    </path>
                                                  </g>
                                                </g>
                                              </svg>
                                              <p class="ml-2"> Custom Written CV </p>
                                            </span>
                                            <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="15"
                                                viewBox="0 0 172 172" style=" fill:#000000;" class="my-auto">
                                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                                  stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                                  font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                                  style="mix-blend-mode: normal">
                                                  <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                                  <g fill="#ffffff">
                                                    <path
                                                      d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                    </path>
                                                  </g>
                                                </g>
                                              </svg>
                                              <p class="ml-2"> Custom Written CV </p>
                                            </span>
                                            <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="15"
                                                viewBox="0 0 172 172" style=" fill:#000000;" class="my-auto">
                                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                                  stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                                  font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                                  style="mix-blend-mode: normal">
                                                  <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                                  <g fill="#ffffff">
                                                    <path
                                                      d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                    </path>
                                                  </g>
                                                </g>
                                              </svg>
                                              <p class="ml-2"> Custom Written CV </p>
                                            </span> -->

                                <div class="grid grid-cols-1 md:grid-cols-3">
                                    <p class="text-md mt-3">USD<b class="text-3xl">219</b></p>
                                    <p class="text-md mt-3 text-gray-400"> USD<del><b class="text-3xl">219</b></del>
                                    </p>
                                    <a href="#"
                                        class=" text-white bg-orange-500 border-0 hover:bg-purple-500 rounded text-lg text-center m-auto px-7 py-2 ">Our
                                        Price</a>
                                </div>

                            </div>
                        </div>

                        <div id="second" class="hidden p-4">

                            <div class="bg-white rounded-[2rem] py-4 px-12 shadow-xl">

                                <h4 class="text-2xl mb-4">Cover letter</h4>

                                <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:#000000;"
                                        class="my-auto">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                            font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="ml-2"> Custom Written CV </p>
                                </span>
                                <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:#000000;"
                                        class="my-auto">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                            font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="ml-2"> PDF and Doc format </p>
                                </span>
                                <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:#000000;"
                                        class="my-auto">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                            font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="ml-2"> Custom Written CV </p>
                                </span>
                                <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:#000000;"
                                        class="my-auto">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                            font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="ml-2"> Keyword Optimized </p>
                                </span>
                                <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:#000000;"
                                        class="my-auto">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                            font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="ml-2"> Custom Written CV </p>
                                </span>
                                <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:#000000;"
                                        class="my-auto">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                            font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="ml-2"> Custom Written CV </p>
                                </span>
                                <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:#000000;"
                                        class="my-auto">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                            font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="ml-2"> Custom Written CV </p>
                                </span>
                                <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:#000000;"
                                        class="my-auto">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                            font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="ml-2"> Custom Written CV </p>
                                </span>

                                <div class="grid grid-cols-1 md:grid-cols-3">
                                    <p class="text-md mt-3">USD<b class="text-3xl">219</b></p>
                                    <p class="text-md mt-3 text-gray-400"> USD<del><b class="text-3xl">219</b></del>
                                    </p>
                                    <a href="#"
                                        class=" text-white bg-orange-500 border-0 hover:bg-purple-500 rounded text-lg text-center m-auto px-7 py-2 ">Our
                                        Price</a>
                                </div>

                            </div>

                        </div>

                        <div id="third" class="hidden p-4">

                            <div class="bg-white rounded-[2rem] py-4 px-12 shadow-xl">

                                <h4 class="text-2xl mb-4">CV</h4>

                                <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:#000000;"
                                        class="my-auto">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                            font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="ml-2"> Custom Written CV </p>
                                </span>
                                <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:#000000;"
                                        class="my-auto">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                            font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="ml-2"> PDF and Doc format </p>
                                </span>
                                <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:#000000;"
                                        class="my-auto">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                            font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="ml-2"> Custom Written CV </p>
                                </span>
                                <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:#000000;"
                                        class="my-auto">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                            font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="ml-2"> Keyword Optimized </p>
                                </span>
                                <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:#000000;"
                                        class="my-auto">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                            font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="ml-2"> Custom Written CV </p>
                                </span>
                                <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:#000000;"
                                        class="my-auto">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                            font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="ml-2"> Custom Written CV </p>
                                </span>
                                <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:#000000;"
                                        class="my-auto">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                            font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="ml-2"> Custom Written CV </p>
                                </span>
                                <span class="flex mt-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:#000000;"
                                        class="my-auto">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                            font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="#9b59b6"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="ml-2"> Custom Written CV </p>
                                </span>

                                <div class="grid grid-cols-1 md:grid-cols-3">
                                    <p class="text-md mt-3">USD<b class="text-3xl">219</b></p>
                                    <p class="text-md mt-3 text-gray-400"> USD<del><b class="text-3xl">219</b></del>
                                    </p>
                                    <a href="#"
                                        class=" text-white bg-orange-500 border-0 hover:bg-purple-500 rounded text-lg text-center m-auto px-7 py-2 ">Our
                                        Price</a>
                                </div>

                            </div>

                        </div>

                        <div id="fourth" class="hidden p-4">
                            Fourth tab
                        </div>

                    </div>

                </div> <!-- Tab content end -->

                <div class="col-span-12 px-5 lg:col-span-10 lg:col-start-1">
                    <h4 id="service-title-2" class="text-2xl my-4">loading...</h4>
                    <p id="service-content" class="text-lg mb-4 ">loading...</p>
                </div>



            </div> <!-- grid -->

        </div>
    </section>

    <hr class="h-1 w-7/12 my-7 bg-purple-500">

    <!-- TopCV -->
    <section class="bg-[#e6ebf1] mx-auto ">
        <div class="container grid grid-cols-12 mx-auto">

            <div class="col-span-12 lg:col-span-6">
                <img src="{{ asset('imgs/topcv.jpg') }}" alt="topcv">
            </div>


            <div class="col-span-12 lg:col-span-6 lg:w-[70%] md:px-4 lg:px-0">
                <p class="text-purple-500 text-3xl font-bold pt-10 pb-5 text-center md:text-left ">Get Perfect CVs by the
                    Best Professional CV Writers UK</p>
                <p class="text-black text-md pt-3 text-center md:text-left py-2">Meet the top CV writers from London to
                    Edinburgh who knows how to add perfection in every sentence. Our best CV maker UK can help you:
                </p>
                <p class="text-black text-md  text-center md:text-left py-2">Improve your hiring chances by filling the
                    loopholes in your CV </p>
                <p class="text-black text-md  py-2 text-center md:text-left">Get your resume edited and proofread by the
                    experts </p>
                <p class="text-black text-md  py-2 text-center md:text-left">Show your true potential by adding an
                    extraordinary touch to your resume </p>
                <!-- <a href="#"
                  class=" mt-10 text-white bg-pink-600 border-0 hover:bg-purple-500 rounded text-lg text-center px-7 py-2 ">OPEN
                  DOORS FOR ME</a> -->
                <div class="flex flex-col justify-center my-8 mx-6 md:mx-0 md:justify-start md:flex-row ">
                    <a href="#"
                        class="text-white bg-pink-600 border-0 hover:bg-purple-500 rounded text-lg text-center px-7 py-2 ">Connect
                        with Our Experts Today!</a>
                </div>
            </div>

        </div>
    </section>

    <div>
        <img src="../imgs/wavesSimple.svg" alt="waves" class="w-full">
    </div>

    <!-- resumes -->
    <section class="mx-auto items-center pb-10">
        <h4 class="font-bold text-gray-500 text-4xl text-center py-4"> OUR RESUMES SAMPLES</h4>
        <p class="text-gray-800 text-center text-md py-2 lg:px-72">You can also pick one of these templates to make your CV
            and cover letter stand out from the rest. </p>
        <div class="relative">
            <div class=" relative mt-4 grid grid-cols-8 items-baseline">
                <div class="h-64 bg-indigo-400 shadow-md">
                    <img class="w-full h-full" src="../imgs/cv-4.jpg" alt="">
                </div>
                <div class="h-72 bg-indigo-500 shadow-md">
                    <img class="w-full h-full" src="../imgs/cv-3.jpg" alt="">
                </div>
                <div class="h-80 bg-indigo-600 shadow-md">
                    <img class="w-full h-full" src="../imgs/cv-2.jpg" alt="">
                </div>
                <div class="col-span-2 h-96 bg-indigo-700 shadow-md">
                    <img class="w-full h-full" src="../imgs/cv-1.jpg" alt="">
                </div>
                <div class="h-80 bg-blue-400 shadow-md">
                    <img class="w-full h-full" src="../imgs/cv-5.jpg" alt="">
                </div>
                <div class="h-72 bg-blue-500 shadow-md">
                    <img class="w-full h-full" src="../imgs/cv-6.jpg" alt="">
                </div>
                <div class="h-64 bg-blue-600 shadow-md">
                    <img class="w-full h-full" src="../imgs/cv-7.jpg" alt="">
                </div>
            </div>
            <!-- <div class="absolute bottom-10 left-0 right-0 bg-white rounded-md w-1/3 mx-auto flex justify-between py-4 px-10">
                <button class="border-orange-700 rounded-full">
                  ←
                </button>
                <button class="bg-orange-600 rounded py-2 px-20">
                  Update my resume
                </button>
                <button class="border-orange-700 rounded-full">
                  →
                </button>
              </div> -->
        </div>
        <div class="flex jusutify-center ">
        <button class="px-6 py-2 rounded-lg bg-purple-800 text-white mx-auto"><a href={{ route('sample') }}>View More Sample</a></button>
        </div>   

        <div class="cv-slider mt-8">
            <div class="h-64 bg-indigo-400 shadow-md"><img class="w-full h-full" src="../imgs/cv-3.jpg" alt=""></div>
            <div class="h-72 bg-indigo-500 shadow-md"><img class="w-full h-full" src="../imgs/cv-3.jpg" alt=""></div>
            <div class="h-80 bg-indigo-600 shadow-md"> <img class="w-full h-full" src="{{ asset('imgs/cvsamples/cv-template.png') }}" alt=""></div>
            <div class="h-96 bg-indigo-700 shadow-md"><img class="w-full h-full" src="../imgs/cv-3.jpg" alt=""></div>
            <div class="h-80 bg-blue-400 shadow-md"><img class="w-full h-full" src="../imgs/cv-3.jpg" alt=""></div>
            <div class="h-72 bg-blue-500 shadow-md"><img class="w-full h-full" src="../imgs/cv-3.jpg" alt=""></div>
            <div class="h-64 bg-blue-600 shadow-md"><img class="w-full h-full" src="../imgs/cv-3.jpg" alt=""></div>
        </div>
        <script>
            $('.cv-slider').slick({
                centerMode: true,
                centerPadding: '60px',
                arrows:false,
                slidesToShow: 5,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 5
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        </script>
        <!-- <div class="slider slider-nav " data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
              <div class="bg-indigo-100 "><h3>1</h3></div>
              <div class="bg-indigo-200 "><h3>2</h3></div>
              <div class="bg-indigo-300 "><h3>3</h3></div>
              <div class="bg-indigo-400 "><h3>4</h3></div>
              <div class="bg-indigo-500 "><h3>5</h3></div>
              <div class="bg-indigo-600 "><h3>6</h3></div>
            </div>
            <div class="action">
              <a href="#" data-slide="3">go to slide 3</a>
              <a href="#" data-slide="4">go to slide 4</a>
              <a href="#" data-slide="5">go to slide 5</a>
            </div> -->
    </section>

    <!-- writers -->
    <section class="bg-bgOurWriters bg-no-repeat bg-center bg-cover mx-auto pb-10">
        <div class="container mx-auto">
        <h4 class="font-bold text-white text-4xl text-center pt-9">Meet Our Best CV Makers UK</h4>
        <p class="text-white text-center text-md py-2 px-5 lg:px-72">Meet our experts, freelancers and best resume writers
            UK to turn your CV into a job-winning profile. All our team works on one mission and that is to connect you with
            your dream job without any chaos. </p>

        <div class="grid grid-cols-12 mx-auto py-8">

            <div class="col-span-12 lg:col-span-6 mx-auto ">
                <div class="grid grid-col-3">
                    <div class="inline-flex py-3 space-x-2">
                        <img src="{{ asset('imgs/person-1.png') }}"
                            class="w-16 lg:w-28 rounded-full person hover:cursor-pointer hover:scale-110 transition ease-in-out delay-150 duration-300" id="person" target-data="0">
                        <img src="{{ asset('imgs/person-2.png') }}"
                            class="w-16 lg:w-28 rounded-full person hover:cursor-pointer hover:scale-110 transition ease-in-out delay-150 duration-300" id="person" target-data="3">
                        <img src="{{ asset('imgs/person-3.png') }}"
                            class="w-16 lg:w-28 rounded-full person hover:cursor-pointer hover:scale-110 transition ease-in-out delay-150 duration-300" id="person" target-data="6">
                    </div>
                    <div class="inline-flex py-3 space-x-2">
                        <img src="{{ asset('imgs/person-4.png') }}"
                            class="w-16 lg:w-28 rounded-full person hover:cursor-pointer hover:scale-110 transition ease-in-out delay-150 duration-300" id="person " target-data="1">
                        <img src="{{ asset('imgs/person-5.png') }}"
                            class="w-16 lg:w-28 rounded-full person hover:cursor-pointer hover:scale-110 transition ease-in-out delay-150 duration-300" id="person" target-data="4">
                        <img src="{{ asset('imgs/person-6.png') }}"
                            class="w-16 lg:w-28 rounded-full person hover:cursor-pointer hover:scale-110 transition ease-in-out delay-150 duration-300" id="person" target-data="7">
                    </div>
                    <div class="inline-flex py-3 space-x-2">
                        <img src="{{ asset('imgs/person-7.png') }}"
                            class="w-16 lg:w-28 rounded-full person hover:cursor-pointer hover:scale-110 transition ease-in-out delay-150 duration-300" id="person" target-data="2">
                        <img src="{{ asset('imgs/person-8.png') }}"
                            class="w-16 lg:w-28 rounded-full person hover:cursor-pointer hover:scale-110 transition ease-in-out delay-150 duration-300" id="person" target-data="5">
                        <img src="{{ asset('imgs/person-9.png') }}"
                            class="w-16 lg:w-28 rounded-full person hover:cursor-pointer hover:scale-110 transition ease-in-out delay-150 duration-300" id="person" target-data="8">
                    </div>

                </div>
            </div>

            <div class="col-span-12 mx-auto text-center lg:text-left lg:col-span-6 lg:mx-0">
                <p class="text-white text-3xl font-bold " id="person-name">Kelly Wilson</p>
                <h4 class="font-bold text-white text-3xl" id="person-profession">Medical Expert</h4>
                {{-- <span class="inline-flex pt-3">
                     <p class="text-white text-sm">256 Completed Order</p>
                    <p class="text-white text-sm ml-10">199 Reviews</p> 
                </span> --}}

                <div class="mt-8 p-6 shadow-lg border rounded-lg bg-white mx-6 lg:mx-0 lg:w-[70%]">
                    <p class="text-sm " id="person-detail">Made in a standout professional format, fully optimized
                        with keywords and
                        ATS-ready.
                        Written from scratch or edited to
                        perfection by our CV editors, we'll take your CV writing skill to a whole new level. The prices are
                        flexible
                        and based on
                        your work experience</p>
                    <div class="flex flex-col md:flex-row justify-center mt-14 mb-3">
                        <a href="#"
                            class=" text-white bg-purple-400 border-0 py-1 px-4 hover:bg-purple-900 rounded text-lg text-center mb-3 md:mx-4 md:mb-0">Live
                            Chat</a>
                        <a href="#"
                            class=" text-white bg-purple-600 border-0 py-1 px-4 hover:bg-purple-900 rounded text-lg text-center mb-3 md:mx-4 md:mb-0 ">Our
                            Price</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </section>

    <!-- Testimonial -->
    <section>
        <h4 class="font-bold text-gray-500 text-4xl text-center py-5"> TESTIMONIALS</h4>

        <div class="carousel relative">
            <div class="carousel-inner relative overflow-hidden w-full">
                <!--Slide 1-->
                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                    checked="checked">
                <div class="carousel-item absolute opacity-0">
                    <div class=" text-md text-center py-14 px-14 md:px-40"> I was very stressed about not getting interview
                        calls and facing rejections for a long time. Thankfully I found them and they assist me in polishing
                        my resume and making an excellent cover letter. I’m a happy professional now. ~Harry</div>
                </div>
                <label for="carousel-3"
                    class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-5xl font-bold text-pink-500 hover:text-purple-400 rounded-full  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-2"
                    class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-5xl font-bold text-pink-500 hover:text-purple-400 rounded-full  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                <!--Slide 2-->
                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item absolute opacity-0">
                    <div class=" text-md text-center py-14 px-14 md:px-40"> Getting a good response after they optimized my
                        LinkedIn profile. Thoroughly satisfied customer! ` Alice</div>
                </div>
                <label for="carousel-1"
                    class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-5xl font-bold text-pink-500 hover:text-purple-400 rounded-full  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-3"
                    class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-5xl font-bold text-pink-500 hover:text-purple-400 rounded-full  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                <!--Slide 3-->

                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item absolute opacity-0">
                    <div class=" text-md text-center py-14 px-14 md:px-40"> If you’re looking for professional CV services
                        London at affordable prices, then they are your go-to spot. Highly Recommended!</div>
                </div>
                <label for="carousel-2"
                    class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-5xl font-bold text-pink-500 hover:text-purple-400 rounded-full  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-1"
                    class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-5xl font-bold text-pink-500 hover:text-purple-400 rounded-full  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            </div>
        </div>


    </section>

    <hr class="h-1 w-7/12 mx-auto mt-10 bg-purple-500">

    <!-- faq -->
    <section>
        <h4 class="font-bold text-gray-500 text-4xl text-center pt-8"> Frequently asked questions</h4>
        <p class="text-gray-700 text-center text-md py-4 ">Can't Find Here? Contact Us.</p>

        <div class="container grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 mx-auto px-10 pt-6">

            <div class="mx-auto sm:mb-2 w-full md:px-5 ">


                <details class="mb-3 relative">
                    <summary
                        class="cursor-pointer font-semibold w-full text-gray-600 rounded border border-gray-300 bg-white  focus:border-cyan-500 text-base py-2 px-3 leading-8 mb-1">
                        What’s the difference between CV and Resume?</summary>
                    <div class="bg-white p-4 rounded-sm">
                        <span class=" text-sm">A resume is a summarized version of your skills, education,
                            experience, and achievements whereas CV is a detailed view of your professional life and
                            academics. With our top-rated CV writing services UK, we help you with both resume and CVs to
                            fit into the job market you always wish to enter.</span>
                    </div>
                </details>

                <details class="mb-4 relative">
                    <summary
                        class="cursor-pointer font-semibold w-full text-gray-600 rounded border border-gray-300 bg-white  focus:border-cyan-500 text-base py-2 px-3 leading-8 mb-1">
                        Do you also edit resumes and cover letters?</summary>
                    <div class="bg-white p-4 rounded-sm">
                        <span class=" text-sm">If you have already written your resume and want our editors to
                            proofread and edit, there’s no big deal. We regularly deliver editing orders to our customers.
                            Even if you want us to rate your resume and give experts advice, we are always up for
                            that.</span>
                    </div>
                </details>
                <details class="mb-4 relative">
                    <summary
                        class="cursor-pointer font-semibold w-full text-gray-600 rounded border border-gray-300 bg-white  focus:border-cyan-500 text-base py-2 px-3 leading-8 mb-1">
                        Should every candidate opt for the best CV writing companies UK?</summary>
                    <div class="bg-white p-4 rounded-sm">
                        <span class=" text-sm">No, not everyone should go for it. It’s for those who aren’t
                            100% confident on their resumes or CVs and want an expert to proofread it. If we find your CV
                            already good in words and formatting, we will let you know instead of forcing editing on
                            it.</span>
                    </div>
                </details>
                {{-- <details class="mb-4 relative">
                    <summary
                        class="cursor-pointer font-semibold w-full text-gray-600 rounded border border-gray-300 bg-white  focus:border-cyan-500 text-base py-2 px-3 leading-8 mb-1">
                        Do you have British CV writers in your company?</summary>
                    <div class="bg-white p-4 rounded-sm">
                        <span class=" text-sm">Yes, most of them are British and some of them are Americans.
                            We are a diversified team and we cater orders along a broad range to serve students,
                            professionals, and experts all over the United Kingdom.</span>
                    </div>
                </details> --}}


            </div>

            <div class="mx-auto sm:mb-2 w-full md:px-5 ">



                <details class="mb-3 relative">
                    <summary
                        class="cursor-pointer font-semibold w-full text-gray-600 rounded border border-gray-300 bg-white  focus:border-cyan-500 text-base py-2 px-3 leading-8 mb-1">
                        Can I contact your resume writers UK?</summary>
                    <div class="bg-white p-4 rounded-sm">
                        <span class=" text-sm">Yes, you can! We connect you with the writers and editors to
                            make you understand the work your order requires and also to work on your revision request. If
                            you want to communicate with our writers for guidance purposes, you’re free to do. </span>
                    </div>
                </details>

                <details class="mb-4 relative">
                    <summary
                        class="cursor-pointer font-semibold w-full text-gray-600 rounded border border-gray-300 bg-white  focus:border-cyan-500 text-base py-2 px-3 leading-8 mb-1">
                        If I don’t like my order, will you give me a refund?</summary>
                    <div class="bg-white p-4 rounded-sm">
                        <span class=" text-sm">You can ask us for multiple revisions and drafts. But sill if
                            you aren’t completely satisfied, we can give you 50% refund of your order, only in the case when
                            our CVs don’t match your requirements (And that happens rarely).</span>
                    </div>
                </details>
                <details class="mb-4 relative">
                    <summary
                        class="cursor-pointer font-semibold w-full text-gray-600 rounded border border-gray-300 bg-white  focus:border-cyan-500 text-base py-2 px-3 leading-8 mb-1">
                        In what format should I submit my CV or resume?</summary>
                    <div class="bg-white p-4 rounded-sm">
                        <span class=" text-sm">It depends on the channel through which you’re applying. Most
                            employers specify the preferred formats such as Docs or PDF while others accept CVs through
                            software. If the format isn’t mentioned then we would recommend you send your CV/resume in PDF
                            or Word format. </span>
                    </div>
                </details>


            </div>

        </div>



    </section>

    <!-- opportunity -->
    <section class="bg-bgWaves bg-no-repeat bg-cover mt-20 pt-12">
        <div class="container mx-auto justify-center pt-2 lg:pt-7">
            <p class="text-white text-center text-md px-5 lg:px-96">Still waiting for the interview call? How about getting
                in touch with the best resume writers UK?</p>
        </div>
        <div class="flex justify-center mt-3 mb-3 md:mb-0 mx-8">
            <a href="{{ route('order') }}"
                class=" text-purple-800 font-semibold bg-white border-0 py-1 px-4 rounded text-lg text-center mb-3 ">Opportunity
                is one click away</a>
        </div>
        </div>
    </section>

    <script>
        var serviceNames = ["Resume", "Cover Letter", "CV", "LinkedIn Profile",
            "Follow-Up Letter", "Resume + Cover Letter", "Resume+Cover Letter + LinkedIn Profile",
            "CV + Cover Letter", "CV + Cover Letter + LinkedIn Profile"
        ]
        var serviceContents = [
            "Our resume writing service UK is meant to make you stand out in the cutthroat competition. We not only create it from the scratch but also customize it according to the job description. Whether you’re a recent graduate or looking to make a career change, we connect you with the best CV editors to make an outstanding profile. We are a one-stop solution if you’re looking for an ATS-friendly, keyword-driven resume that grabs the recruiters attention in the first impression. ",
            "Every candidate applies for the job but those with an exemplary cover letter always stand out in the recruitment process. You don’t need to worry if you don’t know how to write a job-winning letter as our best CV writer UK can make the job easy for you. With a professionally written cover letter that best explains your critical skills and experience, we open opportunities for you to connect with employers and get your profiles noticed. Submitted by industry experts, tailored to your expertise and guaranteed satisfaction are the aspects we promise to deliver with our services. ",
            "CV and Resume are two different things. It depends on what your employer is looking for. So, if it’s the CV with which want to grab the opportunity, our CV writing specialists are right here to help. From creating a CV to giving a professional touch to the existing one, we have the best solutions for you. And that too at an economical cost. You can also have a one-to-one conversation with our experts to learn more about our services. In case you aren’t satisfied with the work (that don’t happen usually) you can ask for a refund. ",
            "Do you know 4 out of 10 employees use LinkedIn to search for the best candidate? If you don’t have an optimized profile yet, you’re missing a golden opportunity to excel in your career. With our top and cheap CV writing service UK, we help you create an optimized profile that reflects your experience, education, and skills in the best manner. Our LinkedIn experts handle this job with a flair of professionalism and ideas to deliver a unique yet attention-grabbing profile. So, if your LinkedIn isn’t up yet, what are you waiting for? ",
            "Have you applied for so many jobs, given interviews but don’t know how to take follow-ups? That’s because you don’t how to communicate with the process. It requires soft writing skills to manage communications efficiently. Again, at this point, a CV editor can let you pass this process smoothly with strong follow-up letters depending on your case. Even it’s a permanent, contractual, novice, or experienced job post, our writers create letters specific to that purpose.",
            "Are you looking for a complete package from CV writing service Manchester to land your dream job? You are at the right place. Get 10% off on our resume and cover letter package. Be it for a business opportunity, internship, or career change position, our affordable pricing is one step away. With this service, we guarantee to connect you with the opportunity you have been dreaming of. The time is now!",
            "This is the best discount package for someone who’s looking for complete services to nail a job opportunity. It’s also easy on pockets and also best to represent your professional experience via LinkedIn and also resume. It also includes editing your resume and LinkedIn profile. No matter where you’re, our professional resume writing service London caters solutions according to your requirements. Also, this package is best for beginners or fresh graduates. Your go-to bundle to perfection.",
            "If you’re searching for CV writing service near me, we have that for you. Good news, isn’t it? Our CV and cover letter package are for everyone who’s looking for affordable CV services in London, Glasgow, Birmingham, Edinburgh, Bristol, Manchester, Liverpool, Nottingham, and York or anywhere in UK. Head on to our live chat support and receive impeccable CVs and cover letters at exclusive discounts. Isn’t that great?",
            "Similar to the resume package, get an exclusive CV writing help UK with cover letter and LinkedIn profile. Get in touch with the professionals to learn how we can help you attract a potential opportunity with the art of writing. Our top-rated, Britain writers aren’t only responsive but are also well-versed in communicating your expertise through CVs. Get your CV written and edited at discounted rates. What’s more, you’re looking for?",
        ]
        var serviceContentBullets = [
            ['Custom Written CV', 'Custom Written CV 2', 'Custom Written CV 3', 'Custom Written CV 4',
                'Custom Written CV 5', 'Custom Written CV 6', 'Custom Written CV 7', 'Custom Written CV 8'
            ],
            ['tab 2 Cover Letter', 'tab 2 Cover Letter 2', 'tab 2 Cover Letter 3', 'tab 2 Cover Letter 4'],
            ['tab 3 Cover Letter', 'tab 3 Cover Letter 2', 'tab 3 Cover Letter 3', 'tab 3 Cover Letter 4'],
            ['tab 4 Cover Letter', 'tab 4 Cover Letter 2', 'tab 4 Cover Letter 3', 'tab 4 Cover Letter 4'],
            ['tab 5 Cover Letter', 'Cover Letter 2', 'Cover Letter 3', 'Cover Letter 4'],
            ['tab 6 Cover Letter', 'Cover Letter 2', 'Cover Letter 3', 'Cover Letter 4'],
            ['tab 7 Cover Letter', 'Cover Letter 2', 'Cover Letter 3', 'Cover Letter 4'],
            ['tab  Cover Letter', 'Cover Letter 2', 'Cover Letter 3', 'Cover Letter 4'],
            ['tab  Cover Letter', 'Cover Letter 2', 'Cover Letter 3', 'Cover Letter 4']
        ]

        var checkSvg =
            '<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="15" viewBox="0 0 172 172" style=" fill:#000000;" class="my-auto"> <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"   stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"   font-family="none" font-weight="none" font-size="none" text-anchor="none"   style="mix-blend-mode: normal">   <path d="M0,172v-172h172v172z" fill="#9b59b6"></path> <g fill="#ffffff"> <path d="M53.27987,135.92013c2.23887,2.23819 5.86807,2.23819 8.10693,0l97.46667,-97.46667c1.49042,-1.43949 2.08815,-3.57117 1.56346,-5.57571c-0.52469,-2.00454 -2.09015,-3.57 -4.09469,-4.09469c-2.00454,-0.52469 -4.13622,0.07305 -5.57571,1.56346l-93.4132,93.4132l-30.34653,-30.34653c-2.24964,-2.17277 -5.82555,-2.1417 -8.03709,0.06984c-2.21154,2.21154 -2.24261,5.78745 -0.06984,8.03709z"> </path> </g> </g> </svg>';

        var bulletsDiv = document.createElement("div");

        var servicePricing = "<div>23RS</div>";

        var serviceTabs = document.getElementsByClassName('service-tab');
        console.log(serviceTabs);
        var serviceTitle1 = document.getElementById('service-title-1');
        var serviceTitle2 = document.getElementById('service-title-2');



        for (i = 0; i < serviceTabs.length; i++) {
            serviceTabs[i].addEventListener("click", updateServiceContent)
        }

        function updateServiceContent() {

            var tabIndex = this == window ? 0 : this.getAttribute('data-target')
            let bullets = "<div>";

            for (let i = 0; i < serviceContentBullets[tabIndex].length; i++) {
                bullets += '<span class="flex mt-2">' + checkSvg + '<p class="ml-2">' + serviceContentBullets[tabIndex][i] +
                    '</p></span>';
            }
            bullets += "</div>";

            document.getElementById("service-title-1").innerHTML = serviceNames[tabIndex];
            document.getElementById("service-title-2").innerHTML = serviceNames[tabIndex];
            document.getElementById("service-content").innerHTML = serviceContents[tabIndex];
            document.getElementById("service-bullets").innerHTML = bullets;
        }

        updateServiceContent()

        //on click person display his name proffesion and details
        //make function that sense the click and display props
        //props should be in arrays

        var personName = ['Jack Wilson', 'Haley T.', 'William Hales', 'Sarah H.', 'Jessica Yan', 'Henry W.', 'Louisa',
            'Insa', 'Emily Oscar'
        ];
        var personProffesion = ['Career Counselor', 'Social Media Expert', 'IT Expert', 'Career Coach', 'HR Manager',
            'Writer', 'HR Curator', 'Medical Expert', 'Media Science Expert'
        ];
        var personDetail = [
            'Jack has been working with us as a Career Counselor for 3 years. His skills include resume development, cover letter writing, LinkedIn profile development, and resume design. He has served over 100+ customers with career counselling and CV writing.',
            'Haley is a social media expert and has 5 years of experience with clients and individuals. On LinkedIn, she has successfully helped people build their personal brands and get leads from the platform. She loves connecting employees and employers over a great career opportunity.',
            'William is a computer scientist and a top graduate of the University of Manchester. In our company, he serves as an advisor and mentor for all computer students. He’s best known for his communication skills and for writing excellent cover letters in the IT domain.',
            'Sarah holds a Master’s degree in counselling and has 5+ years of experience. She’s a researcher, writer, and educator and loves transforming students and professionals who are stuck in their careers. She’s proficient in career coaching, social media management, and resume writing.',
            'Yan is a leader when it comes to talent, innovation, and HR management. He loves connecting with candidates, employers and also like to learn about their skills and management. He knows how to place the best talent at the right place with excellent writing and communication skills.',
            'Henry is a writer, editor and blogger. He has been recognized for his CV writing skills and for creating exceptional cover letters. He’s also a freelancer. At our company, he helps students in creating a job-winning resume by making the best use of skills, education, and experience. ',
            'Louisa is a consistent, top-rated team player. She’s known for creating content to educate people about HR, talent hunt, and interview tips and tricks. She’s also known for creating out-of-the-box resumes that have helped students grab golden career opportunities. ',
            'Insa is a certified medical expert in London. At our company, she assists students in shaping their career in science and medicine with CV and professional resume writing service London. ',
            'Emily is a creative artist and a well-known media professional. She helps students in pursuing their careers in media through creative CV writing skills, and social media optimization. '
        ];
        var personImage = document.getElementsByClassName('person');
        //console.log(personImage);
        for (let i = 0; i < personImage.length; i++) {
            personImage[i].addEventListener("click", updateContent);
            // console.log(personImage);
        }
        // console.log(personImage);
        function updateContent() {
            // console.log('click');
            var tabInfo = this == window ? 0 : this.getAttribute('target-data');
            document.getElementById("person-name").innerHTML = personName[tabInfo];
            document.getElementById("person-profession").innerHTML = personProffesion[tabInfo];
            document.getElementById("person-detail").innerHTML = personDetail[tabInfo];
        }

        updateContent()
    </script>
@endsection
@section('scripts')
    <!-- Initialize Swiper -->
    <script>
        $(".get-fare").change(function(e) {
            e.preventDefault();
            var data = {
                "_token": "{{ csrf_token() }}",
                "day_model_id": $('#deadline').val(),
                "carrer_level_id": $('#carrer_level').val(),
                "select_service_id": $('#select_service').val(),
            }
            $.ajax({
                method: 'POST',
                url: '{{ route('get.fare') }}',
                beforeSend: function() {
                    // $("#cost-per-page").html("Loading...")
                    const loading =
                        '<svg class="inline-block " width="50px" height="50px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" stroke="#ffffff"><g transform="rotate(0 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(30 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(60 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(90 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(120 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(150 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(180 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(210 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(240 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(270 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(300 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(330 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect></g></svg>'

                    $("#cost").html(loading)
                },
                complete: function() {
                    // $("#loading").removeClass("d-block");
                },
                data: data,
                success: function(res) {
                    // console.log(res);
                    $("#cost").html((res.fare))
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });
    </script>
@endsection
