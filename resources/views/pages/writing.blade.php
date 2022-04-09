@extends('layouts.web')

@section('content')
    <section class="container mx-auto my-10 px-4 service-section ">
        <div class="md:h-screen grid md:grid-cols-12 gap-y-3">
            {{-- <form action="" method="POST"> --}}
           
            <form class="md:col-span-5 lg:col-span-4" action="{{ route('get.fare') }}" method="POST">
                @csrf
                <div class="mx-auto max-w-sm mt-6">
                    <div class="bg-gradient-to-l from-purple-900 to-purple-400 py-2 px-5 rounded-t-lg">
                        <p class="text-xl text-white text-center">Calculate Your Price</p>
                    </div>
                    <div
                        class="bg-white shadow-md rounded-b-lg p-5 flex flex-col md:ml-auto w-full  border border-gray-200">
                        <div class="mb-2">
                            <select name="paper_type"
                                class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                                <option hidden="" value="0" disabled="" selected="">Paper Type</option>
                                {{-- <option value="1">Essay</option>
                                <option value="2">Essay2</option> --}}
                                @foreach ($PaperTypes as $PaperType)
                                <option {{ old('$PaperType')==$PaperType->id ? 'selected':'' }} value="{{ $PaperType->id }}">{{ $PaperType->name}}</option> 
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-2">
                            <select id="academic_level" name="academic_level"
                                class="get-fare w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                                <option hidden="" value="0" disabled="" selected="">Academic level</option>
                                {{-- <option value="1">Undergraduate / Diploma</option>
                                <option value="1">Undergraduate / Diploma</option> --}}
                                @foreach ($AcademicLevels as $AcademicLevel)
                                <option {{ old('$AcademicLevel')==$AcademicLevel->id ? 'selected':'' }} value="{{ $AcademicLevel->id }}">{{ $AcademicLevel->name}}</option> 
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-2">
                            <select id="deadline" name="deadline"
                                class="get-fare w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                                <option hidden="" value="0" disabled="" selected="">Deadline</option>
                                {{-- <option value="1">15 Days</option>
                                <option value="2">10 Days</option> --}}
                                @foreach ($Deadlines as $Deadline)
                                <option {{ old('$Deadline')==$Deadline->id ? 'selected':'' }} value="{{ $Deadline->id }}">{{$Deadline->name}}</option> 
                                @endforeach

                            </select>
                        </div>

                        <div class="mb-2">
                            <select name="number_of_pages" id="no_of_pages"
                                class="get-fare w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                                <option hidden="" value="0" disabled="" selected="">No of words</option>
                                {{-- <option value="1">250 Words - 1 Pages</option>
                                <option value="2">350 Words - 2 Pages</option> --}}
                                @for ($p = 1; $p <= 200; $p++)
                                <option value="{{ $p }}"
                                    {{ old('number_of_pages') == $p ? 'selected' : '' }}>
                                    {{ $p * 250 }} Words - {{ $p }} Pages
                                </option>
                                @endfor
                            </select>
                        </div>

                        <h4 class="my-4 text-center text-1xl text-primary font-bold uppercase ">
                            Pricing: <span class="text-3xl"> <span id="cost"> 0</span> PKR </span>
                        </h4>

                        <button
                            class="group relative inline-flex border border-purple-900 focus:outline-none w-1/2 mx-auto" type="submit" >
                            <span
                                class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-primary text-center font-bold uppercase bg-white ring-1 ring-purple-700 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                               <a href="{{ route('order') }}"> Place Order Now </a>
                    </span>
                </button>
                    </div>
                </div>
            {{-- </div> --}}
            </form>
            <!-- Scroll wrapper -->
            <div class="md:col-span-7 lg:col-span-8 flex-1 flex overflow-hidden">
                <div class="flex-1 overflow-y-scroll px-4">

                    <h1 class="text-center md:text-left text-primary">Academic Writer Service in Karachi Offers You
                        Affordable Writing Services</h1>
                    <p>Do you have a lot of writing tasks and a tight deadline? In search of affordable academic writing
                        service in Pakistan?&nbsp;</p>
                    <p>You don’t need to worry at all because we are here to serve you the best. Contact us to relieve
                        your academic stress.&nbsp;</p>
                    <h2 class="text-primary">All You Need is a Trusted Platform for Academic Writing in Pakistan</h2>
                    <p>We understand that being a student, you are requipurple to be everywhere. Whether it’s a lecture,
                        test, exam, or assignment, the study load adds to your burden. Stuck in all these assessments,
                        you might desire assistance to get your pending assignments and thesis done. That’s where we
                        come to the rescue. Our online help is the best solution if you have no time for
                        academic&nbsp;writing.&nbsp;</p>
                    <p>However, you might fear relying on academic writing companies in Pakistan as it is a matter of
                        your grades and career. So,&nbsp;if you are a student who is in search of trusted and reliable
                        academic writing services in Pakistan, then we are here to give you an excellent
                        experience.&nbsp;</p>
                    <p>Whether you need your assignment done on time, or you want help in thesis writing, our team is
                        here with the expert and top-notch assignment writers. You don’t need to worry if the deadline
                        is just around, our team can sort it for you. From lengthy homework problems to quality essays,
                        we are the go-to platform to get the work done with perfection.&nbsp;</p>
                    <p>Contact us today if you’re looking for academic help and also to save your time.&nbsp;</p>
                    <h3>What makes us the Best Academic Writing Help in Pakistan</h3>
                    <p>Academic writing impacts the academic career of students, and we keep this fact in mind while
                        providing students with our services. We know how to achieve the best in life and now it’s time
                        to help students achieve their academic goals in the best possible manner.</p>
                    <p>There are many reasons to hire our academic help online but what makes us unique from the other
                        websites is our dedication to work on your growth. You might find us similar to other online
                        websites, but we guarantee that you won’t find the similar quality in other services. Here are
                        some of the best reasons to choose us:</p>
                    <ul>
                        <li>Our excellent team of academic writers is familiar and up to date with the formats and
                            patterns of academic writing in Pakistan, thus providing you with accurate assignments
                            aligning with your guidelines and requirements.&nbsp;</li>
                    </ul>
                    <p>&nbsp;</p>
                    <ul>
                        <li>We have writers who are adept at writing academic papers and assignments. Also, we value
                            your precious time and never make a compromise on quality and commitment. We are aware of
                            the significance of deadlines of assignments in your life, and therefore, you will never
                            experience a delay in our services.&nbsp;</li>
                    </ul>
                    <p>&nbsp;</p>
                    <ul>
                        <li>We assure to deliver you quality work on time. The first and foremost duty of our academic
                            writing service in Karachi is to satisfy you with our quality work.&nbsp; &nbsp;</li>
                    </ul>
                    <p>You will never find a more satisfying platform for academic writing in Pakistan. Contact us and
                        discuss your requirements to get your task done on time.&nbsp;</p>
                    <p>&nbsp;</p>

                </div>
            </div>
        </div>
    </section>
    @endsection

    @section('scripts')
    <!-- Initialize Swiper -->
    <script>
        $(".get-fare").change(function(e) {
            e.preventDefault();
            var data = {
                "_token": "{{ csrf_token() }}",
                "deadline_id": $('#deadline').val(),
                "academic_level_id": $('#academic_level').val(),
            }
            $.ajax({
                method: 'POST',
                url: '{{ route('get.fare') }}',
                beforeSend: function() {
                    // $("#cost-per-page").html("Loading...")
                    const loading =
                        '<svg class="inline-block " width="50px" height="50px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" stroke="#771818"><g transform="rotate(0 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(30 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(60 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(90 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(120 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(150 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(180 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(210 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(240 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(270 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(300 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(330 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect></g></svg>'

                    $("#cost").html(loading)
                },
                complete: function() {
                    // $("#loading").removeClass("d-block");
                },
                data: data,
                success: function(res) {
                    // console.log(res);
                    $("#cost").html((res.per_page_price * ($("#no_of_pages").val() == null ? 1 : $(
                        "#no_of_pages").val())))
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });
    </script>
@endsection

