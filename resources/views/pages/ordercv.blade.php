@extends('layouts.web')
@section('title')
@section('description')
@section('canonical', config('app.url'). Request::path() )

@section('content')
<div id="msg-bag" class="my-4"></div>
    <section class=" bg-bgOurWriters bg-no-repeat bg-center bg-cover">

        <h1 class="text-xl md:text-4xl font-medium text-white py-3 text-center">Order Now</h1>
        <hr class="w-1/5 h-2 bg-primary mx-auto">
        @if (session('success'))
            <div class="md:w-1/2 my-4 mx-auto bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
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
        
        <form id="order-form" action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 mt-2">

                <div class=" p-5   ">
                    <span class="space-y-4"></span>

                    <div class="w-full space-y-2">
                        <label class="text-white font-semibold">Career Levels:</label>
                        <select name="carrer_level" id="carrer_level"
                            class="get-fare w-full text-gray-700 rounded-xl border-2 border-purple-800   focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                            <option hidden="" value="0" disabled="" selected="">Carrer Level</option>
                            @foreach ($carrer_levels as $carrer_level)
                                <option {{ old('$carrer_level') == $carrer_level->id ? 'selected' : '' }}
                                    value="{{ $carrer_level->id }}">{{ $carrer_level->name }}</option>
                            @endforeach
                        </select>
                        @error('Carrer Level')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full space-y-2">
                        <label class="text-white font-semibold">Select Services:</label>
                        <select name="select_service" id="select_service"
                            class="get-fare w-full text-gray-700 rounded-xl border-2 border-purple-800   focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                            <option hidden="" value="0" disabled="" selected="">Select Service</option>
                            @foreach ($select_services as $select_service)
                                <option {{ old('$select_service') == $select_service->id ? 'selected' : '' }}
                                    value="{{ $select_service->id }}">{{ $select_service->name }}</option>
                            @endforeach
                        </select>
                        @error('SelectService')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full space-y-2">
                        <label class="text-white font-semibold">Deadline:</label>
                        <select id="deadline" name="deadline_id"
                            class="get-fare w-full text-gray-700 rounded-xl border-2 border-purple-800   focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                            <option hidden="" value="0" disabled="" selected="">Select Service</option>
                            @foreach ($days as $day)
                                <option {{ old('$day') == $day->id ? 'selected' : '' }} value="{{ $day->id }}">
                                    {{ $day->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('deadline')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    
                    <div class="grid grid-cols-2 text-primary font-bold text-4xl my-2">
                        <span class="col-span-1">Total:</span><span><span id="cost"><svg class="inline-block " width="50px" height="50px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" stroke="#a855f7"><g transform="rotate(0 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(30 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(60 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(90 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(120 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(150 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(180 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(210 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(240 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(270 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(300 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(330 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect></g></svg></span>£</span>
                    </div>



                </div>

                <div class=" p-5  ">
                    <span class=" space-y-4"></span>

                    <div class="w-full space-y-2">
                        <label class="text-white font-semibold">Full Name*</label>
                        <input type="text" name="name"
                            class="w-full text-gray-700 rounded-xl border-2 border-purple-800   focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none px-3 leading-8 transition-colors duration-200 ease-in-out placeholder-black @error('name') border-red-500 @enderror"
                            placeholder="Full Name" value="">
                        @error('name')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full space-y-2">
                        <label class="text-white font-semibold">Email*</label>
                        <input type="email" name="email"
                            class="w-full text-gray-700 rounded-xl border-2 border-purple-800   focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none px-3 leading-8 transition-colors duration-200 ease-in-out placeholder-black @error('email') border-red-500 @enderror "
                            placeholder="Email" value="">
                        @error('email')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full space-y-2">
                        <label class="text-white font-semibold">Phone Number*</label>
                        <input type="text" name="Phone" id="phone" value=""
                            class="w-full text-gray-700 rounded-xl border-2 border-purple-800   focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none px-3 leading-8 transition-colors duration-200 ease-in-out placeholder-black @error('phone') border-red-500 @enderror "
                            placeholder="Phone" value="{{ old('phone', '') }}"
                            oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" autocomplete="off"
                            data-intl-tel-input-id="0">
                        <input type="hidden" name="phone" id="phone2" />
                        @error('phone')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <div class=" p-5 ">
                    <span class="space-y-4"></span>

                    <div class="w-full md:col-span-2 space-y-2">
                        <label class="text-white font-semibold">Career document instructions</label>
                        <textarea name="detail" rows="5"
                            class=" w-full text-gray-700 rounded-xl border-2 border-purple-800   focus:border-purple-800 focus:ring-2 focus:ring-purple-200 text-base outline-none px-3 leading-8 transition-colors duration-200 ease-in-out placeholder-black @error('detail') border-red-500 @enderror "
                            placeholder="Type details here..."></textarea>
                        @error('detail')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full">
                        <input
                            class="block w-full cursor-pointer text-gray-700  border-2 border-dotted border-purple-800 focus:outline-none focus:border-transparent text-sm rounded-xl p-2 "
                            accept=".pdf,.ppt,.pptx,.doc,.docx,.xls,.xlsx,.csv,.txt,.jpeg,.jpg,.png,.gif,.sav,.sps,.spv,.spo,.mat,.zip,.rar"
                            aria-describedby="email_attacements_help" id="email_attacements" name="emailAttachments[]"
                            type="file" multiple="">
                    </div>

                    <div class="form-check">
                        <input
                            class="form-check-input h-4 w-4 border border-gray-300 rounded-sm  checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                            type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
                            I Agree To <a href="#" class="underline">Terms And Conditions</a>
                        </label>
                    </div>

                    <div class="w-full text-center mt-4">
                        <button type="submit" class="group relative inline-flex  focus:outline-none">
                            <span
                                id="btn-submit" class="shadow-lg bg-gradient-to-l from-purple-600 to-purple-400 border-purple-700 text-white rounded-md py-3 px-4 font-semibold transition duration-300">
                                Order Now
                            </span>
                        </button>
                    </div>


                </div>

            </div>
        </form>
    </section>
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
                        '<svg class="inline-block " width="50px" height="50px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" stroke="#a855f7"><g transform="rotate(0 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(30 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(60 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(90 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(120 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(150 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(180 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(210 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(240 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(270 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(300 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(330 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#312e81"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect></g></svg>'

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

    {{-- country phone codes --}}
    <script>
        $(document).ready(function() {
            const phoneInputField = document.querySelector("#phone");
            const phoneInput = window.intlTelInput(phoneInputField, {
                preferredCountries: ["gb"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });
            $('#order-form').on('submit', function(e) {
                e.preventDefault();
                const phoneNumber = phoneInput.getNumber();
                $('#phone2').val(phoneNumber);
                $.ajax({
                    url: "{{ route('order.store') }}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: $('#order-form').serialize(),
                    beforeSend: function() {
                        $(".order-form-error").empty();
                        $('#order-form').find(':submit').attr("disabled", true);
                        $('#btn-submit').html("Submiting...");
                    },
                    complete: function() {
                        $('#order-form').find(':submit').attr("disabled", false);
                        $('#btn-submit').html("Order Now");
                    },
                    success: function(res) {

                        console.log(res)

                        $('#msg-bag').empty();

                        let msg =
                            '<div class="bg-purple-100 border w-[80%] text-center left-[10%] border-purple-400 text-purple-700 px-4 py-3 rounded relative mb-4" role="alert">';
                        msg += '<strong class="font-bold">Success!</strong>';
                        msg += '<span class="block sm:inline">' + res.success + '</span>';
                        msg += '</div>';

                        $('#msg-bag').append(msg);

                        $(':input', 'form')
                            .not(':button, :submit, :reset, :hidden')
                            .val('')
                            .prop('checked', false)
                            .prop('selected', false);
                    },
                    error: function(err) {
                        if (err.status == 422) {

                            $('#msg-bag').empty();

                            let msg =
                                '  <div class=" left-[10%] bg-red-100 border w-[80%] border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 text-center" role="alert">';
                            msg += '    <strong class="font-bold ">Error!</strong>';
                            msg += '    <span class="block sm:inline">Invalid Data</span>';
                            msg += ' </div>';

                            $('#msg-bag').append(msg);

                            $.each(err.responseJSON.errors, function(i, error) {
                                var el = $('#order-form').find('[name="' + i + '"]');
                                el.after($('<span class="order-form-error text-red-900">' +
                                    error[0] + '</span>'));
                            });

                            $('.order-form-error').delay(2000).fadeOut();
                        } else {
                            $('#msg-bag').empty();
                            let msg =
                                '  <div class=" left-[10%] bg-red-100 border w-[80%] border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 text-center" role="alert">';
                            msg += '    <strong class="font-bold ">Error!</strong>';
                            msg += '    <span class="block sm:inline">Server Error</span>';
                            msg += ' </div>';

                            $('#msg-bag').append(msg);

                        }

                    },
                });
            });






        });
    </script>
@endsection
