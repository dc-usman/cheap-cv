@extends('layouts.web')

@section('title', $service->title ?? '-')
@section('description', $service->meta_description ?? '-')
@section('canonical', $service->canonical ?? '-')

@section('links')
    <style>
        /* Core CSS */
        .service-section h1 {
            --tw-text-opacity: 1;
            color: rgb(119 24 24 / var(--tw-text-opacity));
            font-weight: bold;
            font-size: 2.25rem;
            line-height: 2.5rem;
            margin: 1rem 0;
        }

        .service-section h2,
        h3 {
            text-align: center;
            --tw-text-opacity: 1;
            color: rgb(107 33 168 / var(--tw-text-opacity));
            font-size: 1.5rem;
            line-height: 2.5rem;
            margin-top: 1rem;
            margin-bottom: 1rem;

        }

        .service-section p {
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .service-section a {
            --tw-text-opacity: 1;
            color: rgb(119 24 24 / var(--tw-text-opacity));
            font-weight: 700;
        }

        .service-section a:hover {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity));
        }

        .service-section ul {
            --tw-text-opacity: 1;
            color: rgb(119 24 24 / var(--tw-text-opacity));
            list-style-type: disc;
        }

        /* Mobile Size CSS */
        .service-section h1 {
            text-align: center;
        }

        .service-section ul {
            margin-left: 1rem;
        }

        /* md and greater screen size */
        @media (min-width: 768px) {
            .service-section h1 {
                text-align: left;
            }

            .service-section ul {
                margin-left: 2.5rem;
            }
        }

        #parentdiv {

            overflow: hidden;
            white-space: nowrap;
        }

        #maindiv {

            animation: marquee 14s linear infinite;

        }

        #div1 {

            display: inline-block;
        }

        #maindiv:hover {
            animation-play-state: paused;
            cursor: pointer;
            transform: translate(0%)
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

        /* sm and greater screen size  screen size */
        /* @media (min-width: 640px) {

        } */

    </style>
@endsection


@section('content')
    {{-- Hero --}}

    <section class="text-purple-600 body-font ">

        <div class="container py-4 lg:py-24 mx-auto">
            <div class="flex flex-col w-full px-0 md:px-12 ">
                <h6 class="text-4xl lg:text-7xl pb-9 font-medium title-font text-purple-900 text-center">
                    {{ $service->name }}</h6>
              
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
                                    <option hidden="" value="0" disabled="" selected="">Carrer Level</option>
                                    @foreach ($carrer_levels as $carrer_level)
                                        <option {{ old('$carrer_level') == $carrer_level->id ? 'selected' : '' }}
                                            value="{{ $carrer_level->id }}">{{ $carrer_level->name }}</option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="w-full px-3 md:px-1 md:w-1/2 lg:w-1/4  mb-3">
                                <select name="select_service" id="select_service"
                                    class="get-fare w-full text-gray-700 shadow-xl rounded border border-gray-300 bg-white  focus:border-purple-400 focus:ring-2 focus:ring-purple-200 text-base h-12 outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    <option hidden="" value="0" disabled="" selected="">Select Service</option>
                                    @foreach ($select_services as $select_service)
                                        <option {{ old('$select_service') == $select_service->id ? 'selected' : '' }}
                                            value="{{ $select_service->id }}">{{ $select_service->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 md:px-1 md:w-1/2 lg:w-1/4  mb-3">
                                <select name="deadline_id" id="deadline"
                                    class="get-fare w-full text-gray-700 shadow-xl rounded border border-gray-300 bg-white  focus:border-purple-400 focus:ring-2 focus:ring-purple-200 text-base h-12 outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    <option hidden="" value="0" disabled="" selected="">Deadline</option>
                                    @foreach ($days as $day)
                                        <option {{ old('$day') == $day->id ? 'selected' : '' }} value="{{ $day->id }}">
                                            {{ $day->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="w-full px-3 md:px-1 md:w-1/2 lg:w-1/4  mb-3">
                                <div
                                    class="flex flex-inline justify-center  w-full text-white font-extrabold text-2xl shadow-xl rounded border border-gray-300 bg-purple-700  focus:border-purple-400 focus:ring-2 focus:ring-purple-200  h-12 outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                                    <span id="cost"><svg class="inline-block " width="40px" height="40px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" stroke="#ffffff"><g transform="rotate(0 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(30 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(60 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(90 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(120 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(150 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(180 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(210 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(240 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(270 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(300 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(330 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect></g></svg></span>£
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
                                <img src="{{ asset('imgs/star-half-yellow.svg') }}" class="h-[14px]" alt="Cheap Cv">
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
                                <img src="{{ asset('imgs/star-half-yellow.svg') }}" class="h-[14px]" alt="Cheap Cv">
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
                                <img src="{{ asset('imgs/bank-logo.svg') }}" class="h-[36px] my-2" alt="Cheap Cv">

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

    {{-- partners --}}
    <section class="container mx-auto">
        <div id="parentdiv">
            <div id="maindiv">
                <div id="div1">
                    &nbsp;
                    <div class="grid grid-cols-10 ">
                        <div>
                            <img src="../imgs/partner4.svg" class="h-8 md:h-40" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-13.svg" class="md:h-44" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-12.svg" class="md:h-24 lg:ml-6" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner20.svg" class="md:h-36 lg:mt-5" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner23.svg" class="md:h-32 lg:mt-16" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner21.svg" class="md:h-24  lg:mt-12 lg:ml-4" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-9.svg" class="md:h-28  lg:mt-0" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner8.svg" class="md:h-24  lg:mt-10" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-10.svg" class="md:h-24  lg:mt-0" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-4.svg" class="md:h-32  lg:mt-0" alt="Cheap Cv">
                        </div>
                    </div>

                    <div class="grid grid-cols-11 mt-3 mx-3 lg:mx-0 md:-mt-10" >
                        <div>
                            <img src="../imgs/partner5.svg" class="h-8 md:h-40 lg:-mt-12" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-5.svg" class="md:h-20 lg:mt-5" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-3.svg" class="md:h-28 lg:-mt-6" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-7.svg" class="md:h-16 lg:mt-10" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-2.svg" class="md:h-24 lg:mt-3 lg:-ml-6" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner24.svg" class="md:h-20  lg:mt-5 lg:ml-3" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-8.svg" class=" lg:mt-0" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-14.svg" class="md:h-20  lg:mt-0 lg:ml-7" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-6.svg" class="md:h-24  lg:mt-5" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-11.svg" class="md:h-24  lg:mt-0" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-1.svg" class="md:h-16" alt="Cheap Cv">
                        </div>


                    </div>

                </div>

                <div id="div1">
                    &nbsp;
                    <div class="grid grid-cols-10 ">
                        <div>
                            <img src="../imgs/partner4.svg" class="h-8 md:h-40" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-13.svg" class="md:h-44" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-12.svg" class="md:h-24 lg:ml-6" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner20.svg" class="md:h-36 lg:mt-5" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner23.svg" class="md:h-32 lg:mt-16" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner21.svg" class="md:h-24  lg:mt-12 lg:ml-4" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-9.svg" class="md:h-28  lg:mt-0" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner8.svg" class="md:h-24  lg:mt-10" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-10.svg" class="md:h-24  lg:mt-0" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-4.svg" class="md:h-32  lg:mt-0" alt="Cheap Cv">
                        </div>
                    </div>

                    <div class="grid grid-cols-11 mt-3 mx-3 lg:mx-0 md:-mt-10">
                        <div>
                            <img src="../imgs/partner5.svg" class="h-8 md:h-40 lg:-mt-12" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-5.svg" class="md:h-20 lg:mt-5" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-3.svg" class="md:h-28 lg:-mt-6" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-7.svg" class="md:h-16 lg:mt-10" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-2.svg" class="md:h-24 lg:mt-3 lg:-ml-6" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner24.svg" class="md:h-20  lg:mt-5 lg:ml-3" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-8.svg" class=" lg:mt-0" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-14.svg" class="md:h-20  lg:mt-0 lg:ml-7" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-6.svg" class="md:h-24  lg:mt-5" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-11.svg" class="md:h-24  lg:mt-0" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-1.svg" class="md:h-16" alt="Cheap Cv">
                        </div>


                    </div>

                </div>

                <div id="div1">
                    &nbsp;
                    <div class="grid grid-cols-10 ">
                        <div>
                            <img src="../imgs/partner4.svg" class="h-8 md:h-40" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-13.svg" class="md:h-44" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-12.svg" class="md:h-24 lg:ml-6" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner20.svg" class="md:h-36 lg:mt-5" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner23.svg" class="md:h-32 lg:mt-16" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner21.svg" class="md:h-24  lg:mt-12 lg:ml-4" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-9.svg" class="md:h-28  lg:mt-0" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner8.svg" class="md:h-24  lg:mt-10" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-10.svg" class="md:h-24  lg:mt-0" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-4.svg" class="md:h-32  lg:mt-0" alt="Cheap Cv">
                        </div>
                    </div>

                    <div class="grid grid-cols-11 mt-3 mx-3 lg:mx-0 md:-mt-10">
                        <div>
                            <img src="../imgs/partner5.svg" class="h-8 md:h-40 lg:-mt-12" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-5.svg" class="md:h-20 lg:mt-5" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-3.svg" class="md:h-28 lg:-mt-6" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-7.svg" class="md:h-16 lg:mt-10" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-2.svg" class="md:h-24 lg:mt-3 lg:-ml-6" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner24.svg" class="md:h-20  lg:mt-5 lg:ml-3" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-8.svg" class=" lg:mt-0" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-14.svg" class="md:h-20  lg:mt-0 lg:ml-7" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-6.svg" class="md:h-24  lg:mt-5" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-11.svg" class="md:h-24  lg:mt-0" alt="Cheap Cv">
                        </div>
                        <div>
                            <img src="../imgs/partner-1.svg" class="md:h-16" alt="Cheap Cv">
                        </div>


                    </div>

                </div>


            </div>
        </div>
    </section>

    <hr class="h-1 w-7/12 mx-auto bg-purple-500 mt-6">

    <div class="container mx-auto md:col-span-7 lg:col-span-8 flex-1 flex overflow-hidden my-4">
        @if (!empty($service))
            <div class="service-show-section flex-1 px-4">
                {!! $service->html !!}
            </div>
        @endif
    </div>

@endsection

@section('scripts')
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
                        '<svg class="inline-block " width="40px" height="40px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" stroke="#ffffff"><g transform="rotate(0 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(30 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(60 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(90 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(120 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(150 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(180 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(210 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(240 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(270 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(300 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(330 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect></g></svg>'

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
