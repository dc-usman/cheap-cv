@extends('layouts.web')
@section('title','Samples')
@section('description')
@section('canonical', config('app.url'). Request::path() )


@section('content')
    <section>
        <div class="container mx-auto">

            {{-- overlay effect --}}
            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal-1"
                data-target="0">

                {{-- Modal Content Resume --}}
                <div class="relative  mx-auto p-5 border w-[65%] md:w-[70%] shadow-lg rounded-md bg-white">
                    <img src="{{ asset('imgs/cvsamples/x-icon.png') }}" alt="Cheap Cv" class="w-5 absolute top-3 cursor-pointer "
                        id="ok-btn-1">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/resume-01.jpg') }}" alt="Cheap Cv" id="image">
                    </div>
                </div>
            </div>

            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal-2"
                data-target="1">
                {{-- Modal Content --}}
                <div class="relative  mx-auto p-5 border w-[65%] md:w-[70%] shadow-lg rounded-md bg-white">
                    <img src="{{ asset('imgs/cvsamples/x-icon.png') }}" alt="Cheap Cv" class="w-5 absolute top-3 cursor-pointer "id="ok-btn-2">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/resume-02.jpg') }}" alt="Cheap Cv" id="image" class="h-full">
                    </div>
                </div>
            </div>

            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal-3"
                data-target="2">
                {{-- Modal Content --}}
                <div class="relative  mx-auto p-5 border w-[65%] md:w-[70%] shadow-lg rounded-md bg-white">
                    <img src="{{ asset('imgs/cvsamples/x-icon.png') }}" alt="Cheap Cv" class="w-5 absolute top-3 cursor-pointer "
                        id="ok-btn-3">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/resume-03.jpg') }}" alt="Cheap Cv" id="image" class="h-full">

                    </div>
                </div>
            </div>

            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal-4"
                data-target="3">
                {{-- Modal Content --}}
                <div class="relative  mx-auto p-5 border w-[65%] md:w-[70%] shadow-lg rounded-md bg-white">
                    <img src="{{ asset('imgs/cvsamples/x-icon.png') }}" alt="Cheap Cv" class="w-5 absolute top-3 cursor-pointer "
                        id="ok-btn-4">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/resume-04.jpg') }}" alt="Cheap Cv" id="image" class="h-full">

                    </div>
                </div>
            </div>

            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal-5"
                data-target="4">
                {{-- Modal Content --}}
                <div class="relative  mx-auto p-5 border w-[65%] md:w-[70%] shadow-lg rounded-md bg-white">
                    <img src="{{ asset('imgs/cvsamples/x-icon.png') }}" alt="Cheap Cv" class="w-5 absolute top-3 cursor-pointer "
                        id="ok-btn-5">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/resume-05.jpg') }}" alt="Cheap Cv" id="image" class="h-full">

                    </div>
                </div>
            </div>

            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal-6"
                data-target="5">
                <div class="relative  mx-auto p-5 border w-[65%] md:w-[70%] shadow-lg rounded-md bg-white">
                    <img src="{{ asset('imgs/cvsamples/x-icon.png') }}" alt="Cheap Cv" class="w-5 absolute top-3 cursor-pointer "
                    id="ok-btn-6">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/resume-06.jpg') }}" alt="Cheap Cv" id="image" class="h-full">

                    </div>
                </div>
            </div>

            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal-7"
                data-target="6">
                <div class="relative  mx-auto p-5 border w-[65%] md:w-[70%] shadow-lg rounded-md bg-white">
                    <img src="{{ asset('imgs/cvsamples/x-icon.png') }}" alt="Cheap Cv" class="w-5 absolute top-3 cursor-pointer "
                        id="ok-btn-7">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/resume-07.jpg') }}" alt="Cheap Cv" id="image" class="h-full">

                    </div>
                </div>
            </div>

            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal-8"
                data-target="7">
                <div class="relative  mx-auto p-5 border w-[65%] md:w-[70%] shadow-lg rounded-md bg-white">
                    <img src="{{ asset('imgs/cvsamples/x-icon.png') }}" alt="Cheap Cv" class="w-5 absolute top-3 cursor-pointer "
                        id="ok-btn-8">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/resume-08.jpg') }}" alt="Cheap Cv" id="image" class="h-full">

                    </div>
                </div>
            </div>

            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal-9"
                data-target="8">
                <div class="relative  mx-auto p-5 border w-[65%] md:w-[70%] shadow-lg rounded-md bg-white">
                    <img src="{{ asset('imgs/cvsamples/x-icon.png') }}" alt="Cheap Cv" class="w-5 absolute top-3 cursor-pointer "
                        id="ok-btn-9">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/cover-letter01.jpg') }}" alt="Cheap Cv" id="image" class="h-full">

                    </div>
                </div>
            </div>

            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal-10"
                data-target="8">
                <div class="relative  mx-auto p-5 border w-[65%] md:w-[70%] shadow-lg rounded-md bg-white">
                    <img src="{{ asset('imgs/cvsamples/x-icon.png') }}" alt="Cheap Cv" class="w-5 absolute top-3 cursor-pointer "
                        id="ok-btn-10">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/cover-letter02.jpg') }}" alt="Cheap Cv" id="image" class="h-full">

                    </div>
                </div>
            </div>

            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal-11"
                data-target="8">          
                <div class="relative  mx-auto p-5 border w-[65%] md:w-[70%] shadow-lg rounded-md bg-white">
                    <img src="{{ asset('imgs/cvsamples/x-icon.png') }}" alt="Cheap Cv" class="w-5 absolute top-3 cursor-pointer "
                        id="ok-btn-11">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/cover-letter03.jpg') }}" alt="Cheap Cv" id="image" class="h-full">

                    </div>
                </div>
            </div>

            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal-12"
                data-target="8">
                <div class="relative  mx-auto p-5 border w-[65%] md:w-[70%] shadow-lg rounded-md bg-white">
                    <img src="{{ asset('imgs/cvsamples/x-icon.png') }}" alt="Cheap Cv" class="w-5 absolute top-3 cursor-pointer "
                        id="ok-btn-12">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/cover-letter04.jpg') }}" alt="Cheap Cv" id="image" class="h-full">
                    </div>
                </div>
            </div>

            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal-13"
                data-target="8">
                <div class="relative  mx-auto p-5 border w-[65%] md:w-[45%] shadow-lg rounded-md bg-white">
                    <img src="{{ asset('imgs/cvsamples/x-icon.png') }}" alt="Cheap Cv" class="w-5 absolute top-3 cursor-pointer "
                        id="ok-btn-13">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/linkedin-sample05.jpg') }}" alt="Cheap Cv" id="image" class="h-full">
                    </div>
                </div>
            </div>

            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal-14"
                data-target="8">
                <div class="relative  mx-auto p-5 border w-[65%] md:w-[60%] shadow-lg rounded-md bg-white">
                    <img src="{{ asset('imgs/cvsamples/x-icon.png') }}" alt="Cheap Cv" class="w-5 absolute top-3 cursor-pointer "
                        id="ok-btn-14">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/linkedin-sample02.jpg') }}" alt="Cheap Cv" id="image" class="h-full">
                    </div>
                </div>
            </div>

            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal-15"
                data-target="8">
                <div class="relative  mx-auto p-5 border w-[65%] md:w-[60%] shadow-lg rounded-md bg-white">
                    <img src="{{ asset('imgs/cvsamples/x-icon.png') }}" alt="Cheap Cv" class="w-5 absolute top-3 cursor-pointer "
                        id="ok-btn-15">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/linkedin-sample03.jpg') }}" alt="Cheap Cv" id="image" class="h-full">
                    </div>
                </div>
            </div>

            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal-16"
                data-target="8">
                <div class="relative  mx-auto p-5 border w-[65%] md:w-[70%] shadow-lg rounded-md bg-white">
                    <img src="{{ asset('imgs/cvsamples/x-icon.png') }}" alt="Cheap Cv" class="w-5 absolute top-3 cursor-pointer "
                        id="ok-btn-16">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/linkedin-sample04.jpg') }}" alt="Cheap Cv"  id="image" class="h-full">
                    </div>
                </div>
            </div>


            <div class="flex flex-row space-x-20">

                <div class=" flex flex-col ">

                    <h4 class="text-[200%] text-center my-4 text-purple-500 " style="font-family: 'Crimson Pro', serif; ">SAMPLE CV / RESUMES</h4>
                    {{-- grid box --}}
                    <div class="grid  grid-cols-4  gap-2 place-items-center ">
                        {{-- <section id="123" > --}}
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/resume-01.jpg') }}" alt="Cheap Cv" id="open-btn-1"
                                class="h-full hover:translate-y-5 transition duration-300 delay-150  hover:cursor-pointer ">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/resume-02.jpg') }}" alt="Cheap Cv" id="open-btn-2"
                                class="h-full hover:translate-y-5 transition duration-300 delay-150  hover:cursor-pointer">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/resume-03.jpg') }}" alt="Cheap Cv" id="open-btn-3"
                                class="h-full hover:translate-y-5 transition duration-300 delay-150  hover:cursor-pointer">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/resume-04.jpg') }}" alt="Cheap Cv" id="open-btn-4"
                                class="h-full hover:translate-y-5 transition duration-300 delay-150  hover:cursor-pointer">
                        </div>

                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/resume-05.jpg') }}" alt="Cheap Cv" id="open-btn-5"
                                class="h-full hover:translate-y-5 transition duration-300 delay-150  hover:cursor-pointer">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/resume-06.jpg') }}" alt="Cheap Cv" id="open-btn-6"
                                class="h-full hover:translate-y-5 transition duration-300 delay-150  hover:cursor-pointer">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/resume-07.jpg') }}" alt="Cheap Cv" id="open-btn-7"
                                class="h-full hover:translate-y-5 transition duration-300 delay-150  hover:cursor-pointer">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/resume-08.jpg') }}" alt="Cheap Cv" id="open-btn-8"
                                class="h-full hover:translate-y-5 transition duration-300 delay-150  hover:cursor-pointer">
                        </div>
                    </div>

                    <h4 class="text-[180%] text-center my-4 text-purple-500 " style="font-family: 'Crimson Pro', serif; ">SAMPLE COVER LETTERS</h4>
                    <div class="grid grid-cols-4  gap-2 place-items-center ">
                        {{-- <section id="123" > --}}
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/cover-letter01.jpg') }}" alt="Cheap Cv" id="open-btn-9"
                                class="h-full hover:translate-y-5 transition duration-300 delay-150  hover:cursor-pointer">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/cover-letter02.jpg') }}" alt="Cheap Cv" id="open-btn-10"
                                class="h-full hover:translate-y-5 transition duration-300 delay-150  hover:cursor-pointer">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/cover-letter03.jpg') }}" alt="Cheap Cv" id="open-btn-11"
                                class="h-full hover:translate-y-5 transition duration-300 delay-150  hover:cursor-pointer">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/cover-letter04.jpg') }}" alt="Cheap Cv" id="open-btn-12"
                                class="h-full hover:translate-y-5 transition duration-300 delay-150  hover:cursor-pointer">
                        </div>
                    </div>

                    <h4 class="text-[200%] text-center my-4 text-purple-500 " style="font-family: 'Crimson Pro', serif; ">SAMPLE LINKEDIN PROFILES</h4>
                    <div class=" grid grid-cols-4  gap-2 place-items-center ">
                        {{-- <section id="123" > --}}
                        <div class="h-[80%] ml-2 md:ml-6">
                            <img src="{{ asset('imgs/cvsamples/linkedin-sample05.jpg') }}" alt="Cheap Cv" id="open-btn-13"
                                class="h-[80%] hover:translate-y-5 transition duration-300 delay-150  hover:cursor-pointer">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/linkedin-sample02.jpg') }}" alt="Cheap Cv" id="open-btn-14"
                                class="h-[80%] hover:translate-y-5 transition duration-300 delay-150  hover:cursor-pointer">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/linkedin-sample03.jpg') }}" alt="Cheap Cv" id="open-btn-15"
                                class="h-[80%] hover:translate-y-5 transition duration-300 delay-150  hover:cursor-pointer">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/linkedin-sample04.jpg') }}" alt="Cheap Cv" id="open-btn-16"
                                class="h-[80%] hover:translate-y-5 transition duration-300 delay-150  hover:cursor-pointer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
       
        let modal = [document.getElementById("my-modal-1"), document.getElementById("my-modal-2"), document.getElementById(
                "my-modal-3"), document.getElementById("my-modal-4"), document.getElementById("my-modal-5"), document
            .getElementById("my-modal-6"), document.getElementById("my-modal-7"), document.getElementById("my-modal-8"),
            document.getElementById("my-modal-9"), document.getElementById("my-modal-10"), document.getElementById(
                "my-modal-11"), document.getElementById("my-modal-12"), document.getElementById("my-modal-13"), document
            .getElementById("my-modal-14"), document.getElementById("my-modal-15"), document.getElementById(
                "my-modal-16")
        ];
        let image = [document.getElementById("open-btn-1"), document.getElementById("open-btn-2"), document.getElementById(
                "open-btn-3"), document.getElementById("open-btn-4"), document.getElementById("open-btn-5"), document
            .getElementById("open-btn-6"), document.getElementById("open-btn-7"), document.getElementById("open-btn-8"),
            document.getElementById("open-btn-9"), document.getElementById("open-btn-10"), document.getElementById(
                "open-btn-11"), document.getElementById("open-btn-12"), document.getElementById("open-btn-13"), document
            .getElementById("open-btn-14"), document.getElementById("open-btn-15"), document.getElementById(
                "open-btn-16")
        ];
        let button = [document.getElementById("ok-btn-1"), document.getElementById("ok-btn-2"), document.getElementById(
                "ok-btn-3"), document.getElementById("ok-btn-4"), document.getElementById("ok-btn-5"), document
            .getElementById("ok-btn-6"), document.getElementById("ok-btn-7"), document.getElementById("ok-btn-8"),
            document.getElementById("ok-btn-9"), document.getElementById("ok-btn-10"), document.getElementById("ok-btn-11"),
            document.getElementById("ok-btn-12"), document.getElementById("ok-btn-13"), document.getElementById("ok-btn-14"),
            document.getElementById("ok-btn-15"), document.getElementById("ok-btn-16")
        ];

        for (let i = 0; i < modal.length; i++) {

            image[i].onclick = function() {

                modal[i].style.display = "block";

                button[i].onclick = function() {
                    modal[i].style.display = "none";
                }


                window.onclick = function(event) {
                    if (event.target == modal[i]) {
                        modal[i].style.display = "none";
                    }
                }

            }


        }
    </script>
@endsection
