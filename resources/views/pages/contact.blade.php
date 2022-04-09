@extends('layouts.web')

@section('title', 'Contact Us')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

    <section class="container mx-auto">

        @if (session('success'))
            <div class="md:w-1/2 my-4 mx-auto bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
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

        <div class="grid grid-col-1 sm:grid-cols-6 my-4 gap-x-2 gap-y-4 mx-4">
            <div class="col-span-6 lg:col-start-2 lg:col-span-4">
                <div class="bg-primary py-2 px-5 rounded-t-lg">
                    <p class="text-xl text-white text-center">Contact Us for any Query</p>
                </div>
                <div class="bg-white shadow-md rounded-b-lg p-5 border border-gray-300 ">
                    <form id="contact-form" action="{{route('contact.store')}}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-x-2 gap-y-2">

                        @csrf
                        <h4 class="md:col-span-2 text-xl text-primary font-bold uppercase pb-2 mb-2 border-b border-primary">
                            Personal Details
                        </h4>
                        <div class="w-full">
                            <input type="text" name="name"
                                class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none px-3 leading-8 transition-colors duration-200 ease-in-out @error('name') border-red-500 @enderror"
                                placeholder="Full Name" value="{{ old('name', '') }}">
                            @error('name')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full">
                            <input type="email" name="email"
                            class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none px-3 leading-8 transition-colors duration-200 ease-in-out  @error('email') border-red-500 @enderror"
                            placeholder="Email" value="{{ old('email', '') }}" >
                            @error('email')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full">
                            <input type="tel" name="phone" id="phone"
                            class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none px-3 leading-8 transition-colors duration-200 ease-in-out  @error('phone') border-red-500 @enderror"
                            placeholder="Phone" value="{{ old('phone', '') }}" oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" autocomplete="off" data-intl-tel-input-id="0">
                            <input type="hidden" name="phone" id="phone2" />
                            @error('phone')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full">
                            <input type="text" name="subject"
                            class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none px-3 leading-8 transition-colors duration-200 ease-in-out  @error('subject') border-red-500 @enderror"
                            placeholder="Subject" value="{{ old('subject', '') }}">
                            @error('subject')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full md:col-span-2">
                            <textarea name="detail" rows="5"
                                class=" w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none px-3 leading-8 transition-colors duration-200 ease-in-out  @error('detail') border-red-500 @enderror"
                                placeholder="Type details here...">{{ old('detail', '') }}</textarea>
                                @error('detail')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                        </div>

                        <div class="md:col-span-2 text-center mt-4">
                            <button type="submit" class="group relative inline-flex border border-primary focus:outline-none">
                                <span id="btn-submit" class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-primary text-center font-bold uppercase bg-white ring-1 ring-primary ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                                    Submit
                                </span>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>

@endsection
@section('scripts')
    <script>
            $(document).ready(function() {
                const phoneInputField = document.querySelector("#phone");
                const phoneInput = window.intlTelInput(phoneInputField, {
                    preferredCountries: ["ae"],
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                });

                $("#contact-form").submit(function() {
                    $('#contact-form').find(':submit').attr("disabled", true);
                    $('#btn-submit').html("Submiting...");
                    const phoneNumber = phoneInput.getNumber();
                    $('#phone2').val(phoneNumber);
                    return true;
                });
            });
    </script>
@endsection
