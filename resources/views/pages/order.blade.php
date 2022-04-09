@extends('layouts.web')

@section('title', 'Order')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

    <section class="container mx-auto">
        <div class="grid grid-cols-12 m-4">

            <div class="col-start-2 col-span-10">
                <div class="bg-primary py-2 px-5 rounded-t-lg">
                    <p class="text-xl text-white text-center">Place You Order</p>
                </div>
                <div class=" bg-white shadow-md rounded-b-lg p-5 border border-gray-300 ">
                    <form id="order-form" action="{{ route('order.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-x-2 gap-y-2" enctype="multipart/form-data">
                        @csrf
                        <h4 class="md:col-span-2 text-xl text-primary font-bold uppercase pb-2 mb-2 border-b border-primary">
                            Order Details
                        </h4>
                        <div class="w-full">
                            <select name="content_type" class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('content_type') border-red-500 @enderror">
                                <option hidden="" value="0" disabled="" selected="">Content Required For*</option>
                                <option value="Website">
                                    Website
                                </option>
                                <option value="Aricle">
                                    Aricle
                                </option>
                                <option value="Blog">
                                    Blog
                                </option>
                                <option value="Press Release">
                                    Press Release
                                </option>
                                <option value="Social Media">
                                    Social Media
                                </option>
                                <option value="Meta Description">
                                    Meta Description/Title
                                </option>
                                <option value="Prduct Description">
                                    Prduct Description
                                </option>
                                <option value="Business Proposal">
                                    Business Proposal
                                </option>
                                <option value="Slogan/Taglines">
                                    Slogan/Taglines
                                </option>
                                <option value="SEO Content">
                                    SEO Content
                                </option>
                                <option value="Scripts">
                                    Scripts
                                </option>
                                <option value="E-Books">
                                    E-Books
                                </option>
                                <option value="Magazine">
                                    Magazine
                                </option>
                                <option value="Business Document">
                                    Business Document
                                </option>
                            </select>
                            @error('content_type')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full">
                            <select id="business_category" name="business_category" class="get-fare w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('business_category') border-red-500 @enderror">
                                <option hidden="" value="0" disabled="" selected="">Business Category*</option>
                                <option value="Arts, crafts, and collectibles" >Arts, crafts, and collectibles</option>
                                <option value="Beauty and fragrances" >Beauty and fragrances</option>
                                <option value="Books and magazines" >Books and magazines</option>
                                <option value="Business to business" >Business to business</option>
                                <option value="Clothing, accessories, and shoes" >Clothing, accessories, and shoes</option>
                                <option value="Computers, accessories, and services" >Computers, accessories, and services</option>
                                <option value="Education" >Education</option>
                                <option value="Electronics and telecom" >Electronics and telecom</option>
                                <option value="Entertainment and media" >Entertainment and media</option>
                                <option value="Financial services and products" >Financial services and products</option>
                                <option value="Food retail and service" >Food retail and service</option>
                                <option value="Gifts and flowers" >Gifts and flowers</option>
                                <option value="Health and personal care" >Health and personal care</option>
                                <option value="Home and garden" >Home and garden</option>
                                <option value="Nonprofit" >Nonprofit</option>
                                <option value="Pets and animals" >Pets and animals</option>
                                <option value="Religion and spirituality (for profit)" >Religion and spirituality (for profit)</option>
                                <option value="Retail (not elsewhere classified)" >Retail (not elsewhere classified)</option>
                                <option value="Services - other" >Services - other</option>
                                <option value="Sports and outdoors" >Sports and outdoors</option>
                                <option value="Toys and hobbies" >Toys and hobbies</option>
                                <option value="Travel" >Travel</option>
                                <option value="Vehicle sales" >Vehicle sales</option>
                                <option value="Vehicle service and accessories" >Vehicle service and accessories</option>
                            </select>
                            @error('business_category')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full">
                            <select name="approx_words" class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('approx_words') border-red-500 @enderror">
                                <option hidden="" value="0" disabled="" selected="">Approx Words*</option>

                                <option value="100 - 400" >100 - 400</option>
                                <option value="400 - 700" >400 - 700</option>
                                <option value="700 - 1000" >700 - 1000</option>
                                <option value="1000+" >1000+</option>
                                <option value="No idea" >No idea</option>
                            </select>
                            @error('approx_words')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full">
                            <select id="deadline" name="deadline_id" class="get-fare w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('deadline_id')border-red-500 @enderror">
                                <option hidden="" value="0" disabled="" selected="">Deadline</option>
                                @foreach ($deadlines as $deadline)
                                    <option value="{{ $deadline->id }}" {{old('deadline') == $deadline->id ? 'selected' : '' }}>
                                        {{ $deadline->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('deadline_id')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full md:col-span-2">
                            <textarea name="detail" rows="2"
                            class=" w-full text-gray-700 rounded border border-gray-300 bg-white focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('detail')border-red-500 @enderror"
                            placeholder="Paragraph Text...">{{ old('detail', '') }}</textarea>
                            @error('detail')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <h4 class="md:col-span-2 text-xl text-primary font-bold uppercase pb-2 mb-2 border-b border-primary">
                            Personal Details
                        </h4>

                        <div class="w-full">
                            <input type="text" name="name"
                                class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none px-3 leading-8 transition-colors duration-200 ease-in-out @error('name')border-red-500 @enderror"
                                placeholder="Full Name" value="{{ old('name') }}">
                            @error('name')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full">
                            <input type="email" name="email"
                                class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none px-3 leading-8 transition-colors duration-200 ease-in-out @error('email')border-red-500 @enderror"
                                placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full">
                            <input type="text" name="phone" id="phone"
                                class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none px-3 leading-8 transition-colors duration-200 ease-in-out @error('phone')border-red-500 @enderror"
                                placeholder="Phone" value="{{ old('phone') }}" oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" autocomplete="off" data-intl-tel-input-id="0">
                                <input type="hidden" name="phone" id="phone2" />
                            @error('phone')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full">
                            <select name="country" class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-orange-300  focus:ring-2 focus:ring-red-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('country') border-red-500 @enderror">
                                <option hidden="" value="0" disabled="" selected="">Country</option>
                                @foreach ($countries as $country)
                                    <option {{old('country') == $country->code ? 'selected' : '' }} value="{{ $country->code }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            @error('country')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <h4 class="md:col-span-2 text-xl text-primary font-bold uppercase pb-2 mb-2 border-b border-primary">
                            Attach File
                        </h4>
                        <div class="md:col-span-2 w-full">
                            <input class="block w-full cursor-pointer text-gray-700 bg-white border border-gray-300 focus:outline-none focus:border-transparent text-sm rounded p-2 @error('emailAttachments') border-red-500 @enderror"
                            accept=".pdf,.ppt,.pptx,.doc,.docx,.xls,.xlsx,.csv,.txt,.jpeg,.jpg,.png,.gif,.sav,.sps,.spv,.spo,.mat,.zip,.rar" aria-describedby="email_attacements_help" id="email_attacements" name="emailAttachments[]" type="file" multiple>

                            @if ($errors->has('emailAttachments.*'))
                                @foreach ($errors->get('emailAttachments.*') as  $message)
                                    <p class="text-red-600 text-sm">{{ $message[0] }}</p>
                                @endforeach
                            @endif
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

            $("#order-form").submit(function() {
                $('#order-form').find(':submit').attr("disabled", true);
                $('#btn-submit').html("Submiting...");
                const phoneNumber = phoneInput.getNumber();
                $('#phone2').val(phoneNumber);
                return true;
            });
        });
    </script>
@endsection
