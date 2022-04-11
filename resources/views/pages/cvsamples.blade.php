@extends('layouts.web')


@section('content')
<section>
    <div class="container mx-auto">
        <div class="flex flex-row">
            {{-- div for side panel --}}
            <div class="w-[25%]">
                <div class="flex flex-col">
                    <div class="bg-purple-800 text-white text-center text-lg border-2 py-2 rounded-lg"><button>catogories</button></div>
                    <div class="bg-purple-800 text-white text-center text-lg border-2 py-2 rounded-lg"><button>catogories</button></div>
                    <div class="bg-purple-800 text-white text-center text-lg border-2 py-2 rounded-lg"><button>catogories</button></div>

                    <div class="bg-purple-800 text-white text-center text-lg border-2 py-2 rounded-lg"><button>catogories</button></div>
                    <div class="bg-purple-800 text-white text-center text-lg border-2 py-2 rounded-lg"><button>catogories</button></div>
                    <div class="bg-purple-800 text-white text-center text-lg border-2 py-2 rounded-lg"><button>catogories</button></div>

                    <div class="bg-purple-800 text-white text-center text-lg border-2 py-2 rounded-lg"><button>catogories</button></div>

                    <div class="bg-purple-800 text-white text-center text-lg border-2 py-2 rounded-lg"><button>catogories</button></div>

                </div>
            </div>
            {{-- for cntent --}}
            <div class="w-[75%] flex ">
                <div class="grid grid-cols-3  gap-2  ">
                    <div class="h-[50%]">
                        <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-full hover:scale-110 transition duration-300 delay-150 ease-in-out" >
                    </div>
                    <div class="h-[50%]">
                        <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-full">
                    </div>
                    <div class="h-[50%]">
                        <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-full">
                    </div>
                    <div class="">
                        <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-[50%]" >
                    </div>
                    <div>
                        <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-[50%]">
                    </div>
                    <div>
                        <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-[50%]">
                    </div>
                    <div class=""> 
                        <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-[50%]" >
                    </div>
                    <div>
                        <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-[50%]">
                    </div>
                    <div>
                        <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-[50%]">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection

