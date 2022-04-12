@extends('layouts.web')


@section('content')
    <section>
        <div class="container mx-auto">

            {{-- overlay effect --}}
            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal" data-target="0">
                {{-- Modal Content --}}
                <div class="relative  mx-auto p-5 border w-[35%] shadow-lg rounded-md bg-white">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/sample3.webp') }}" id="image" class="h-full">
                        <div class="items-center px-4 py-3">
                            <button id="ok-btn"
                                class="px-4 py-2 bg-green-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                                OK
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal" data-target="1">
                {{-- Modal Content --}}
                <div class="relative  mx-auto p-5 border w-[35%] shadow-lg rounded-md bg-white">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/sample3.webp') }}" id="image" class="h-full">
                        <div class="items-center px-4 py-3">
                            <button id="ok-btn"
                                class="px-4 py-2 bg-green-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                                OK
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal" data-target="2">
                {{-- Modal Content --}}
                <div class="relative  mx-auto p-5 border w-[35%] shadow-lg rounded-md bg-white">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/sample3.webp') }}" id="image" class="h-full">
                        <div class="items-center px-4 py-3">
                            <button id="ok-btn"
                                class="px-4 py-2 bg-green-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                                OK
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal" data-target="3">
                {{-- Modal Content --}}
                <div class="relative  mx-auto p-5 border w-[35%] shadow-lg rounded-md bg-white">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/sample3.webp') }}" id="image" class="h-full">
                        <div class="items-center px-4 py-3">
                            <button id="ok-btn"
                                class="px-4 py-2 bg-green-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                                OK
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal" data-target="4">
                {{-- Modal Content --}}
                <div class="relative  mx-auto p-5 border w-[35%] shadow-lg rounded-md bg-white">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/sample3.webp') }}" id="image" class="h-full">
                        <div class="items-center px-4 py-3">
                            <button id="ok-btn"
                                class="px-4 py-2 bg-green-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                                OK
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal" data-target="5">
                {{-- Modal Content --}}
                <div class="relative  mx-auto p-5 border w-[35%] shadow-lg rounded-md bg-white">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/sample3.webp') }}" id="image" class="h-full">
                        <div class="items-center px-4 py-3">
                            <button id="ok-btn"
                                class="px-4 py-2 bg-green-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                                OK
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal" data-target="6">
                {{-- Modal Content --}}
                <div class="relative  mx-auto p-5 border w-[35%] shadow-lg rounded-md bg-white">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/sample3.webp') }}" id="image" class="h-full">
                        <div class="items-center px-4 py-3">
                            <button id="ok-btn"
                                class="px-4 py-2 bg-green-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                                OK
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal" data-target="7">
                {{-- Modal Content --}}
                <div class="relative  mx-auto p-5 border w-[35%] shadow-lg rounded-md bg-white">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/sample3.webp') }}" id="image" class="h-full">
                        <div class="items-center px-4 py-3">
                            <button id="ok-btn"
                                class="px-4 py-2 bg-green-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                                OK
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal" data-target="8">
                {{-- Modal Content --}}
                <div class="relative  mx-auto p-5 border w-[35%] shadow-lg rounded-md bg-white">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/cvsamples/sample3.webp') }}" id="image" class="h-full">
                        <div class="items-center px-4 py-3">
                            <button id="ok-btn"
                                class="px-4 py-2 bg-green-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                                OK
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            


            <div class="flex flex-row space-x-20">
        
                <div class=" flex flex-col ">

                    <h4 class="text-2xl text-center my-4">SAMPLE CV / RESUMES</h4>
                    {{-- grid box --}}
                    <div class="grid grid-cols-4  gap-2 place-items-center ">
                        {{-- <section id="123" > --}}
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/sample3.webp') }}" id="open-btn"
                                class="h-full hover:scale-110 transition duration-300 delay-150 ease-in-out hover:cursor-pointer ">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-full">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-full">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-full">
                        </div>
                      
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/cv-template.png') }}"
                                class="h-full hover:scale-110 transition duration-300 delay-150 ease-in-out">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-full">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-full">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-full">
                        </div>
                    </div>

                    <h4 class="my-4 text-center text-2xl textBody">SAMPLE COVER LETTERS</h4>
                    <div class="grid grid-cols-4  gap-2 place-items-center ">
                        {{-- <section id="123" > --}}
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/cv-template.png') }}"
                                class="h-full hover:scale-110 transition duration-300 delay-150 ease-in-out">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-full">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-full">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-full">
                        </div>
                    </div>

                    <h4 class="my-4 text-center text-2xl textBody">SAMPLE LINKEDIN PROFILES</h4>
                    <div class="grid grid-cols-4  gap-2 place-items-center ">
                        {{-- <section id="123" > --}}
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/cv-template.png') }}"
                                class="h-full hover:scale-110 transition duration-300 delay-150 ease-in-out">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-full">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-full">
                        </div>
                        <div class="h-[80%]">
                            <img src="{{ asset('imgs/cvsamples/cv-template.png') }}" class="h-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>

for (let i = 0; i < 9; i++) {
            target-data[i].addEventListener("click", function);
            
        }

        
        
        image.onclick = function() {
            let modal = document.getElementById("my-modal");
            let image = document.getElementById("open-btn");
            let button = document.getElementById("ok-btn");

            modal.style.display = "block";
        }
        // We want the modal to close when the OK button is clicked
        button.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
}
    </script>
@endsection
