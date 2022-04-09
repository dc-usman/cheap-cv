@extends('layouts.web')

@section('title', 'Reviews')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

    <section class="container mx-auto my-10 px-4">
        <div class="mt-10 grid gap-6 lg:grid-cols-2 ">
            <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
                <div
                    class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                        <img src="{{ asset('imgs/male_avatar.svg') }}" alt="profile image" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="text-gray-600">"I was finding my nursing assignment really tough. I contacted them and I was surprised by their efficient customer service. They responded me immediately and delivered the work on time."</p>
                        <div class="text-gray-900 font-bold uppercase mt-6">- Eric Masih.</div>
                        <div class="mt-1 flex space-x-1">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
                <div
                    class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                        <img src="{{ asset('imgs/female_avatar.svg') }}" alt="profile image" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="text-gray-600">"I was fed up trying to write a plagiarism-free research proposal. One of my classmates referred me to their services. I tried them and I was amazed. They wrote my research proposal according to my requirements with 100% originality."</p>
                        <div class="text-gray-900 font-bold uppercase mt-6">- Fabiha Bakht.</div>
                        <div class="mt-1 flex space-x-1">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
                <div
                    class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                        <img src="{{ asset('imgs/male_avatar.svg') }}" alt="profile image" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="text-gray-600">"Affordable services and impressive work! Will come here again if needed."</p>
                        <div class="text-gray-900 font-bold uppercase mt-6">- Faizan Khan.</div>
                        <div class="mt-1 flex space-x-1">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
                <div
                    class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                        <img src="{{ asset('imgs/male_avatar.svg') }}" alt="profile image" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="text-gray-600">"I wanted blogs on a couple of topics. They provided me with excellent content at a relatively cheap rate. They are in the field not to make money instead to help others.  "</p>
                        <div class="text-gray-900 font-bold uppercase mt-6">- Lareb Zaidi.</div>
                        <div class="mt-1 flex space-x-1">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
                <div
                    class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                        <img src="{{ asset('imgs/male_avatar.svg') }}" alt="profile image" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="text-gray-600">"I was struggling with my thesis essay deadline. A friend of mine referred me their services. I would rate their services 10/10 as they delivered the project on an urgent basis. My happiness knew no bounds when my thesis got approval."</p>
                        <div class="text-gray-900 font-bold uppercase mt-6">- Husnain Farooqi.</div>
                        <div class="mt-1 flex space-x-1">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
                <div
                    class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                        <img src="{{ asset('imgs/male_avatar.svg') }}" alt="profile image" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="text-gray-600">"Got my essays on 5 different topics from them. I appreciate their prompt response and on-time delivery. "</p>
                        <div class="text-gray-900 font-bold uppercase mt-6">- Usman Elahi.</div>
                        <div class="mt-1 flex space-x-1">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
                <div
                    class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                        <img src="{{ asset('imgs/female_avatar.svg') }}" alt="profile image" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="text-gray-600">"If you want a highly professional service, then this website is best. I needed SEO-friendly content for my website. They wrote for me the content that generated maximum traffic for my website"</p>
                        <div class="text-gray-900 font-bold uppercase mt-6">- Aqsa Imtiyaz.</div>
                        <div class="mt-1 flex space-x-1">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
                <div
                    class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                        <img src="{{ asset('imgs/male_avatar.svg') }}" alt="profile image" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="text-gray-600">"This website came as a miracle for me. I wanted articles for my website that rank high on search engines. I was hopeless before I contacted them. But their services have provided me with a permanent solution. Going to come here again!"</p>
                        <div class="text-gray-900 font-bold uppercase mt-6">- Daniyal.</div>
                        <div class="mt-1 flex space-x-1">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
                <div
                    class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                        <img src="{{ asset('imgs/male_avatar.svg') }}" alt="profile image" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="text-gray-600">"If you want high-quality engaging content for blogs, then I will definitely recommend this website. 10/10"</p>
                        <div class="text-gray-900 font-bold uppercase mt-6">- Engr Nouman.</div>
                        <div class="mt-1 flex space-x-1">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
                <div
                    class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                        <img src="{{ asset('imgs/male_avatar.svg') }}" alt="profile image" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="text-gray-600">"I have never come across such an affordable online Content Writing Service before. They wrote for me the premium quality assignment at a cheap rate."</p>
                        <div class="text-gray-900 font-bold uppercase mt-6">- Dr Usama.</div>
                        <div class="mt-1 flex space-x-1">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
                <div
                    class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                        <img src="{{ asset('imgs/male_avatar.svg') }}" alt="profile image" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="text-gray-600">"I was in a state of despair and hopelessness as I was unable to hear back from the employer. It is their CV Content Writing Service that did magic through their writing. I have landed my dream job by paying a little for their services."</p>
                        <div class="text-gray-900 font-bold uppercase mt-6">- Asim.</div>
                        <div class="mt-1 flex space-x-1">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
                <div
                    class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                        <img src="{{ asset('imgs/male_avatar.svg') }}" alt="profile image" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="text-gray-600">"If you want the best dissertation Content Writing Services, try them for once. I hired them to write my dissertation and I can’t stop praising my decision. They aim at satisfying their customers no matter how many revisions are required"</p>
                        <div class="text-gray-900 font-bold uppercase mt-6">- Arsalan.</div>
                        <div class="mt-1 flex space-x-1">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
                <div
                    class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                        <img src="{{ asset('imgs/female_avatar.svg') }}" alt="profile image" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="text-gray-600">"I was panicked about the tight deadline for my assignment. However, they relaxed me with utmost patience and delivered my assignment before the promised time."</p>
                        <div class="text-gray-900 font-bold uppercase mt-6">- Rabiya Aslam.</div>
                        <div class="mt-1 flex space-x-1">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                            <img src="{{ asset('imgs/star.svg') }}" alt="profile image" class="w-6 h-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
