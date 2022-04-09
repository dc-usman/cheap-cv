@extends('layouts.web')

@section('title', $service->title ?? "-")
@section('description', $service->meta_description  ?? "-")
@section('canonical', $service->canonical  ?? "-")

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
    .service-section h2,h3 {
        text-align: center;
        --tw-text-opacity: 1;
        color: rgb(	107 33 168 / var(--tw-text-opacity));
        font-size: 1.5rem;
        line-height: 2.5rem;
        margin-top: 1rem;
        margin-bottom: 1rem;

    }
    .service-section p{
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
    }
    .service-section a{
        --tw-text-opacity: 1;
        color: rgb(119 24 24 / var(--tw-text-opacity));
        font-weight: 700;
    }
    .service-section a:hover{
        --tw-text-opacity: 1;
        color: rgb(107 114 128 / var(--tw-text-opacity));
    }
    .service-section ul{
        --tw-text-opacity: 1;
        color: rgb(119 24 24 / var(--tw-text-opacity));
        list-style-type: disc;
    }
    /* Mobile Size CSS */
    .service-section h1 {
        text-align: center;
    }
    .service-section ul{
        margin-left: 1rem;
    }
    /* md and greater screen size */
    @media (min-width: 768px) {
        .service-section h1 {
            text-align: left;
        }
        .service-section ul{
            margin-left: 2.5rem;
        }
    }

    #parentdiv{

    overflow: hidden;
    white-space: nowrap;
}

#maindiv {
            
animation: marquee 14s linear infinite;

}

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
                <h1 class="text-xl sm:text-4xl lg:text-7xl pb-9 font-medium title-font text-purple-900 text-center">{{ $service->title }}</h1>
                <h4 class="text-xl sm:text-2xl font-medium title-font text-gray-600 text-center">Secure the job you want with
                    our resume writing services</h4>

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
                                    {{-- {{ $carrer_level_first=$carrer_levels[0] }}
                            <option hidden="" value="{{ $carrer_level_first->id }}" disabled="" selected="{{ $carrer_level_first }}" >{{ $carrer_level_first->name }}</option> --}}
                                    @foreach ($carrer_levels as $carrer_level)
                            <option {{ old('$carrer_level')==$carrer_level->id ? 'selected':'' }} value="{{ $carrer_level->id }}">{{ $carrer_level->name}}</option> 
                            @endforeach

                        
                                </select>
                            </div>
                            <div class="w-full px-3 md:px-1 md:w-1/2 lg:w-1/4  mb-3">
                                <select name="select_service" id="select_service"
                                    class="get-fare w-full text-gray-700 shadow-xl rounded border border-gray-300 bg-white  focus:border-purple-400 focus:ring-2 focus:ring-purple-200 text-base h-12 outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    {{-- {{ $select_service_first=$select_services[0]}}
                                    <option hidden="" value="{{ $select_service_first->id }}" disabled="" selected="">{{ $select_service_first->name }}</option> --}}
                                    @foreach ($select_services as $select_service)
                                    <option {{ old('$select_service')==$select_service->id ? 'selected':'' }} value="{{ $select_service->id }}">{{ $select_service->name}}</option> 
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 md:px-1 md:w-1/2 lg:w-1/4  mb-3">
                                <select name="deadline_id" id="deadline"
                                    class="get-fare w-full text-gray-700 shadow-xl rounded border border-gray-300 bg-white  focus:border-purple-400 focus:ring-2 focus:ring-purple-200 text-base h-12 outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    
                                    
                            @foreach ($days as $day)
                            <option {{ old('$day')==$day->id ? 'selected':'' }} value="{{ $day->id }}">{{$day->name}}
                            </option> 
                            @endforeach
                                </select>
                            </div>
                            
                            <div class="w-full px-3 md:px-1 md:w-1/2 lg:w-1/4  mb-3">
                                <div
                                    class="text-center  text-2xl font-extrabold w-full text-white shadow-xl rounded border border-gray-300 bg-purple-700  focus:border-purple-400 focus:ring-2 focus:ring-purple-200  h-12 outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out  ">
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
                                    viewBox="0 0 172 172" style=" fill:##ffffff;" class="mx-auto w-9">
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
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                    class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                    </path>
                                </svg>
                            </li>
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
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                    class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                    </path>
                                </svg>
                            </li>
                        </ul>

                        <span class="flex justify-center pt-2 text-sm text-black">Rated <b class="text-cyan-300 mx-1"> 4.8
                                out of 5
                                stars </b> on Trustpilot</span>

                    </div>

                    <div class="md:col-span-2 lg:col-span-1 p-5 mx-4">
                        <ul class="flex justify-center pt-3">

                            <li class="my-auto text-cyan-600">
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 172 172"
                                                      style=" fill:##ffffff;" class="mx-auto w-9">
                                                      <defs>
                                                        <linearGradient x1="32.28225" y1="22.79" x2="136.49633" y2="162.20317"
                                                          gradientUnits="userSpaceOnUse" id="color-1_8ggStxqyboK5_gr1">
                                                          <stop offset="0" stop-color="#18a878"></stop>
                                                          <stop offset="1" stop-color="#31dcb9"></stop>
                                                        </linearGradient>
                                                      </defs>
                                                      <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                                        font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                                        style="mix-blend-mode: normal">
                                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                                        <g fill="url(#color-1_8ggStxqyboK5_gr1)">
                                                          <path
                                                            d="M89.27158,18.58317l19.6295,44.032l47.93783,5.06325c3.08525,0.32608 4.32508,4.1495 2.021,6.22425l-35.80825,32.26792l10.00108,47.16025c0.645,3.03508 -2.60867,5.3965 -5.29617,3.8485l-41.75658,-24.09075l-41.75658,24.08717c-2.6875,1.548 -5.93758,-0.81342 -5.29617,-3.8485l10.00108,-47.16025l-35.80825,-32.26792c-2.30408,-2.07475 -1.06067,-5.89817 2.021,-6.22425l47.93783,-5.06325l19.6295,-44.032c1.26133,-2.83083 5.28183,-2.83083 6.54317,0.00358z">
                                                          </path>
                                                        </g>
                                                      </g>
                                                    </svg> -->
                                <img src="../imgs/balanceicon.svg" class="h-12">

                            </li>

                            <li class="my-auto text-2xl ml-2 text-gray-400 ">the balance</li>

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
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                    class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                    </path>
                                </svg>
                            </li>
                        </ul>

                        <span class="flex justify-center pt-2 text-sm text-black">Rated <b class="text-cyan-300 mx-1"> 4.8
                                out of 5
                                stars </b> on Trustpilot</span>

                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- partners --}}
    <section class="container mx-auto">
    <div id="parentdiv">
        <div id="maindiv" >
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

    {{-- SERVICES --}}
    {{-- <section class="container mx-auto ">

        <h4 class="font-bold text-gray-600 text-4xl text-center py-9"> SERVICES WE OFFER </h4>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 lg:px-36">

            <div class="rounded-xl shadow-2xl text-center border-1 m-4 ">

                <div
                    class="bg-gradient-to-r from-purple-500 to-purple-900 py-6 px-6 text-white rounded-xl font-semibold text-xl">
                    Resume Writing
                </div>
                <div class="w-[3.50rem] h-[3.50rem] p-4 bg-purple-800 border-white border-2 rounded-full mx-auto -mt-6">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35" viewBox="0 0 172 172"
                        style=" fill:##ffffff;" class="ml-[-0.35rem] mt-[-0.35rem]">
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

                    <h5 class="text-gray-900 text-md font-medium mb-4">We transform your
                        profile data into a
                        properly structured
                        resume that grasp
                        the employer
                        attention at a
                        glance.</h5>

                    <a href="#"
                        class=" text-white bg-gray-500 border-0 py-2 px-3 hover:bg-purple-600 rounded-2xl text-md text-center">Read
                        more</a>

                </div>

            </div>

            <div class="rounded-xl shadow-2xl text-center border-1 m-4 ">

                <div
                    class="bg-gradient-to-r from-purple-500 to-purple-900 py-6 px-6 text-white rounded-xl font-semibold text-xl">
                    Resume Writing
                </div>
                <div class="w-[3.50rem] h-[3.50rem] p-4 bg-purple-800 border-white border-2 rounded-full mx-auto -mt-6">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35" viewBox="0 0 172 172"
                        style=" fill:##ffffff;" class="ml-[-0.35rem] mt-[-0.35rem]">
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

                    <h5 class="text-gray-900 text-md font-medium mb-4">We transform your
                        profile data into a
                        properly structured
                        resume that grasp
                        the employer
                        attention at a
                        glance.</h5>

                    <a href="#"
                        class=" text-white bg-gray-500 border-0 py-2 px-3 hover:bg-purple-600 rounded-2xl text-md text-center">Read
                        more</a>

                </div>

            </div>

            <div class="rounded-xl shadow-2xl text-center border-1 m-4 ">

                <div
                    class="bg-gradient-to-r from-purple-500 to-purple-900 py-6 px-6 text-white rounded-xl font-semibold text-xl">
                    Resume Writing
                </div>
                <div class="w-[3.50rem] h-[3.50rem] p-4 bg-purple-800 border-white border-2 rounded-full mx-auto -mt-6">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35" viewBox="0 0 172 172"
                        style=" fill:##ffffff;" class="ml-[-0.35rem] mt-[-0.35rem]">
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

                    <h5 class="text-gray-900 text-md font-medium mb-4">We transform your
                        profile data into a
                        properly structured
                        resume that grasp
                        the employer
                        attention at a
                        glance.</h5>

                    <a href="#"
                        class=" text-white bg-gray-500 border-0 py-2 px-3 hover:bg-purple-600 rounded-2xl text-md text-center">Read
                        more</a>

                </div>

            </div>

            <div class="rounded-xl shadow-2xl text-center border-1 m-4 ">

                <div
                    class="bg-gradient-to-r from-purple-500 to-purple-900 py-6 px-6 text-white rounded-xl font-semibold text-xl">
                    Resume Writing
                </div>
                <div class="w-[3.50rem] h-[3.50rem] p-4 bg-purple-800 border-white border-2 rounded-full mx-auto -mt-6">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35" viewBox="0 0 172 172"
                        style=" fill:##ffffff;" class="ml-[-0.35rem] mt-[-0.35rem]">
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

                    <h5 class="text-gray-900 text-md font-medium mb-4">We transform your
                        profile data into a
                        properly structured
                        resume that grasp
                        the employer
                        attention at a
                        glance.</h5>

                    <a href="#"
                        class=" text-white bg-gray-500 border-0 py-2 px-3 hover:bg-purple-600 rounded-2xl text-md text-center">Read
                        more</a>

                </div>

            </div>
        </div>
    </section> --}}

    {{-- <hr class="h-1 w-7/12 mx-auto mt-10 bg-purple-500"> --}}

    {{-- hOW WE DO --}}
    {{-- <section class="container mx-auto">

        <h4 class="font-bold text-gray-600 text-4xl text-center py-9"> HOW WE DO IT </h4>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 lg:px-36 mx-auto">

            <div class="mx-auto border-2 border-dashed rounded-full w-44 h-44 border-purple-700 mt-8 md:mt-0">
                <div class="pt-7">

                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172"
                        class="mx-auto" style=" fill:##ffffff;">
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

                    <p class="font-semibold text-gray-600 text-sm text-center mx-4 "> Contact us by filling the order form
                    </p>
                </div>
            </div>

            <div class="mx-auto border-2 border-dashed rounded-full w-44 h-44 border-purple-700 mt-8 md:mt-0">
                <div class="pt-7">

                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172"
                        class="mx-auto" style=" fill:##ffffff;">
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

                    <p class="font-semibold text-gray-600 text-sm text-center mx-4 "> Contact us by filling the order form
                    </p>
                </div>
            </div>

            <div
                class=" mx-auto border-2 border-dashed rounded-full w-44 h-44 border-purple-700 mt-8 md:mt-0 md:col-span-2 lg:col-span-1">
                <div class="pt-7">

                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172"
                        class="mx-auto" style=" fill:##ffffff;">
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

                    <p class="font-semibold text-gray-600 text-sm text-center mx-4 "> Contact us by filling the order form
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


    </section> --}}

    {{-- <div>
        <img src="../imgs/wavesSimple.svg" alt="waves" class="w-full">
    </div> --}}


    {{-- choosing cv --}}
    {{-- <section class="container mx-auto pb-10">

        <h4 class="font-bold text-gray-600 text-3xl md:text-4xl text-center py-9 px-2"> PERKS OF CHOOSING PERFECT CV </h4>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 lg:px-20 mx-auto">

            <div class="px-2">
                <img src="../imgs/icon1.svg" class="w-12 mx-auto" alt="icon">
                <h4 class="text-black text-center font-bold text-lg">Professional<br> Writers</h4>
                <p class="text-gray-500 text-center text-md py-2">Our team of
                    professional CV
                    writers with thorough
                    industry experience
                    constantly put their
                    maximum efforts to
                    make you standout in
                    the corporate world.</p>
            </div>
            <div class="px-2">
                <img src="../imgs/icon2.svg" class="w-12 mx-auto" alt="icon">
                <h4 class="text-black text-center font-bold text-lg">Professional<br> Writers</h4>
                <p class="text-gray-500 text-center text-md py-2">Our team of
                    professional CV
                    writers with thorough
                    industry experience
                    constantly put their
                    maximum efforts to
                    make you standout in
                    the corporate world.</p>
            </div>
            <div class="px-2">
                <img src="../imgs/icon3.svg" class="w-12 mx-auto" alt="icon">
                <h4 class="text-black text-center font-bold text-lg">Professional<br> Writers</h4>
                <p class="text-gray-500 text-center text-md py-2">Our team of
                    professional CV
                    writers with thorough
                    industry experience
                    constantly put their
                    maximum efforts to
                    make you standout in
                    the corporate world.</p>
            </div>
            <div class="px-2">
                <img src="../imgs/icon4.svg" class="w-12 mx-auto" alt="icon">
                <h4 class="text-black text-center font-bold text-lg">Professional<br> Writers</h4>
                <p class="text-gray-500 text-center text-md py-2">Our team of
                    professional CV
                    writers with thorough
                    industry experience
                    constantly put their
                    maximum efforts to
                    make you standout in
                    the corporate world.</p>
            </div>
            <div class="px-2">
                <img src="../imgs/icon5.svg" class="w-12 mx-auto" alt="icon">
                <h4 class="text-black text-center font-bold text-lg">Professional<br> Writers</h4>
                <p class="text-gray-500 text-center text-md py-2">Our team of
                    professional CV
                    writers with thorough
                    industry experience
                    constantly put their
                    maximum efforts to
                    make you standout in
                    the corporate world.</p>
            </div>
            <div class="px-2">
                <img src="../imgs/icon6.svg" class="w-12 mx-auto" alt="icon">
                <h4 class="text-black text-center font-bold text-lg">Professional<br> Writers</h4>
                <p class="text-gray-500 text-center text-md py-2">Our team of
                    professional CV
                    writers with thorough
                    industry experience
                    constantly put their
                    maximum efforts to
                    make you standout in
                    the corporate world.</p>
            </div>
        </div>
    </section> --}}

    {{-- price tabs --}}
    {{-- <section class="bg-bgtabs bg-no-repeat bg-right bg-cover mx-auto pb-10">
        <h4 class="font-bold text-white text-4xl text-center py-9"> AFFORDABLE PRICING SYSTEM RESUME</h4>


        <div class="container rounded sm:px-10 md:px-28 lg:px-40 mx-auto mt-4">
            <!-- Tabs -->

            <div class="grid grid-cols-12 mx-auto">

                <div class="col-span-12 lg:col-span-5 lg:w-[70%]">

                    <ul id="tabs" class=" pt-8 px-1">
                        <li class="px-4 text-white font-semibold py-2 service-tab" data-target="0"><a id="default-tab"
                                href="#first">CV + Cover letter +
                                Linkdin Profile</a></li>
                        <li class="px-4 text-white font-semibold py-2 service-tab" data-target="1"><a href="#second">Cover
                                letter</a></li>
                        <li class="px-4 text-white font-semibold py-2 service-tab" data-target="2"><a href="#third">CV</a>
                        </li>
                        <li class="px-4 text-white font-semibold py-2 service-tab" data-target="3"><a href="#fourth">Resume
                                Profile</a></li>
                        <li class="px-4 text-white font-semibold py-2 service-tab" data-target="4"><a href="#fifth">Resume
                                + Cover
                                letter + Linkdin Profile</a>
                        </li>
                        <li class="px-4 text-white font-semibold py-2 service-tab" data-target="5"><a href="#sixth">Linkdin
                                Profile</a></li>
                        <li class="px-4 text-white font-semibold py-2 service-tab" data-target="6"><a
                                href="#seventh">Resume + Cover
                                Letter</a></li>
                        <li class="px-4 text-white font-semibold py-2 service-tab" data-target="7"><a
                                href="#eighth">Linkdin
                                Profile</a></li>
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
                                        viewBox="0 0 172 172" style=" fill:##ffffff;" class="my-auto">
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
                                        viewBox="0 0 172 172" style=" fill:##ffffff;" class="my-auto">
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
                                        viewBox="0 0 172 172" style=" fill:##ffffff;" class="my-auto">
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
                                        viewBox="0 0 172 172" style=" fill:##ffffff;" class="my-auto">
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
                                        viewBox="0 0 172 172" style=" fill:##ffffff;" class="my-auto">
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
                                        viewBox="0 0 172 172" style=" fill:##ffffff;" class="my-auto">
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
                                        viewBox="0 0 172 172" style=" fill:##ffffff;" class="my-auto">
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
                                        viewBox="0 0 172 172" style=" fill:##ffffff;" class="my-auto">
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
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:##ffffff;"
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
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:##ffffff;"
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
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:##ffffff;"
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
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:##ffffff;"
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
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:##ffffff;"
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
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:##ffffff;"
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
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:##ffffff;"
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
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:##ffffff;"
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
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:##ffffff;"
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
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:##ffffff;"
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
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:##ffffff;"
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
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:##ffffff;"
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
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:##ffffff;"
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
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:##ffffff;"
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
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:##ffffff;"
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
                                        width="15" height="15" viewBox="0 0 172 172" style=" fill:##ffffff;"
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
    </section> --}}

    <hr class="h-1 w-7/12 my-7 bg-purple-500 mx-auto">
@endsection


    {{-- <section class="container mx-auto my-10 px-4 service-section ">
        <div class="md:h-screen grid md:grid-cols-12 gap-y-3">
            <div class="md:col-span-5 lg:col-span-4">
                <div class="mx-auto max-w-sm mt-6">
                    <div class="bg-primary py-2 px-5 rounded-t-lg">
                        <p class="text-xl text-white text-center">Calculate Your Price</p>
                    </div>
                    <div class="bg-white shadow-md rounded-b-lg p-5 flex flex-col md:ml-auto w-full  border border-gray-200">
                        <div class="mb-2">
                            <select name="paper_type" class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-pink-500 focus:ring-2 focus:ring-red-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('paper_type') border-red-500 @enderror">
                                <option hidden="" value="0" disabled="" selected="">Paper Type</option>
                                @foreach ($paper_types as $paper_type)
                                    <option {{old('paper_type') == $paper_type->id ? 'selected' : '' }}  value="{{ $paper_type->id }}">{{ $paper_type->name }}</option>
                                @endforeach
                            </select>
                            @error('paper_type')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <select id="academic_level" name="academic_level" class="get-fare w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-pink-500 focus:ring-2 focus:ring-red-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('academic_level')border-red-500 @enderror">
                                <option hidden="" value="0" disabled="" selected="">Academic level</option>
                                @foreach ($academic_levels as $academic_level)
                                    <option value="{{ $academic_level->id }}" {{old('academic_level') == $academic_level->id ? 'selected' : '' }}>
                                        {{ $academic_level->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('academic_level')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <select id="deadline" name="deadline" class="get-fare w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-pink-500 focus:ring-2 focus:ring-red-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('deadline') border-red-500 @enderror">
                                <option hidden="" value="0" disabled="" selected="">Deadline</option>
                                @foreach ($deadlines as $deadline)
                                    <option {{old('deadline') == $deadline->id ? 'selected' : '' }} value="{{ $deadline->id }}">{{ $deadline->name }}</option>
                                @endforeach
                            </select>
                            @error('deadline')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <select name="number_of_pages" id="no_of_pages" class="get-fare w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-pink-500 focus:ring-2 focus:ring-red-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('number_of_pages') border-red-500 @enderror">
                                <option hidden="" value="0" disabled="" selected="">No of words</option>
                                @for ($p = 1; $p <= 200; $p++)
                                    <option value="{{ $p }}" {{old('number_of_pages') == $p ? 'selected' : '' }}>
                                        {{ $p * 250 }} Words - {{ $p }} Pages
                                    </option>
                                @endfor
                            </select>
                            @error('number_of_pages')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <h4 class="my-4 text-center text-1xl text-primary font-bold uppercase ">
                            Pricing:  <span class="text-3xl"> <span id="cost"> 0</span> PKR </span>
                        </h4>

                        <a href="{{ route('order') }}"
                            class="group relative inline-flex border border-primary focus:outline-none w-1/2 mx-auto">
                            <span
                                class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-primary text-center font-bold uppercase bg-white ring-1 ring-primary ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                                Place Order Now
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Scroll wrapper -->
            <div class="md:col-span-7 lg:col-span-8 flex-1 flex overflow-hidden">
                @if (!empty($service))
                <div class="flex-1 overflow-y-scroll px-4">

                    {!! $service->html !!}

                </div>
                @endif
            </div>
    </section> --}}

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
                    const loading = '<svg class="inline-block " width="50px" height="50px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" stroke="#ffffff"><g transform="rotate(0 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(30 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(60 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(90 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(120 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(150 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(180 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(210 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(240 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(270 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(300 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(330 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect></g></svg>'

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
