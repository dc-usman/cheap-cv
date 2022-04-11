@extends('layouts.web')

@section('content')
    <main>
      <div class="bg-primary py-8">
        <h1 class="text-xl md:text-4xl pb-3 font-medium text-purple-900 text-center">Reviews showcasing CVWritings integrity</h1>
        <p class="text-lg md:text-2xl font-medium text-center text-white">We invest in customer's satisfaction and success</p>
        <hr class="h-1 w-1/5 mx-auto mt-6 bg-white">
        <p class="text-xl md:text-2xl font-medium pt-8 text-center text-white">CUSTOMER REVIEWS</p>
        <p class="text-7xl font-medium pt-8 text-purple-900 text-center">4.9<span class="text-xl ml-2">/5</span> </p>
        <ul class="flex mt-5 justify-center">

            <li class="my-auto text-cyan-600">
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor"
                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                </path>
              </svg>
            </li>
            <li class="my-auto">
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor"
                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                </path>
              </svg>
            </li>
            <li class="my-auto">
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor"
                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                </path>
              </svg>
            </li>
            <li class="my-auto">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor"
                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                </path>
              </svg>
            </li>
            <li class="my-auto">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor"
                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                </path>
              </svg>
            </li>
          </ul> 
        <p class="text-2xl pt-8 text-purple-900 text-center">OVERALL RATING</p>
         
      </div>
        <section class="container mx-auto my-10 px-4">
          <div class="mt-10 grid gap-6 lg:grid-cols-3 ">
            
          <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
            <div class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                    <img src="../imgs/icon1.svg" alt="profile image" class="w-full h-full object-cover">
                </div>
                <div>
                    <p class="">“I would love to write a review for this professional CV writing agency in England. They are well-proficient in their service.”</p>
                    <div class="text-gray-900 font-bold uppercase mt-6">- James.</div>
                    <ul class="flex mt-1">

                        <li class="my-auto text-cyan-600">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                            class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                          </svg>
                        </li>
                        <li class="my-auto">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                            class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                          </svg>
                        </li>
                        <li class="my-auto">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                            class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                          </svg>
                        </li>
                        <li class="my-auto">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                            class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                          </svg>
                        </li>
                        <li class="my-auto">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                            class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                          </svg>
                        </li>
                      </ul>
                </div>
            </div>
          </div>

          <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
              <div class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                  <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                      <img src="../imgs/icon1.svg" alt="profile image" class="w-full h-full object-cover">
                  </div>
                  <div>
                      <p class=>"I am 100% satisfied with my cover letter and customized resume.”</p>
                      <div class="text-gray-900 font-bold uppercase mt-6">- Mary.</div>
                      <ul class="flex mt-1">

                          <li class="my-auto text-cyan-600">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                              class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                              <path fill="currentColor"
                                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                              </path>
                            </svg>
                          </li>
                          <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                              class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                              <path fill="currentColor"
                                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                              </path>
                            </svg>
                          </li>
                          <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                              class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                              <path fill="currentColor"
                                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                              </path>
                            </svg>
                          </li>
                          <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                            class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                          </svg>
                          </li>
                          <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                            class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                          </svg>
                          </li>
                        </ul>
                  </div>
              </div>
          </div>
   
          <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
              <div class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                  <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                      <img src="../imgs/icon1.svg" alt="profile image" class="w-full h-full object-cover">
                  </div>
                  <div>
                      <p class="">“Glad to know CVWritings is offering such quality-driven work at such affordable rates.”</p>
                      <div class="text-gray-900 font-bold uppercase mt-6">- Robert.</div>
                      <ul class="flex mt-1">

                          <li class="my-auto text-cyan-600">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                              class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                              <path fill="currentColor"
                                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                              </path>
                            </svg>
                          </li>
                          <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                              class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                              <path fill="currentColor"
                                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                              </path>
                            </svg>
                          </li>
                          <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                              class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                              <path fill="currentColor"
                                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                              </path>
                            </svg>
                          </li>
                          <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                              class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                              <path fill="currentColor"
                                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                              </path>
                            </svg>
                          </li>
                          <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                            class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                          </svg>
                          </li>
                        </ul>
                  </div>
              </div>
          </div>

          <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
            <div class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                    <img src="../imgs/icon1.svg" alt="profile image" class="w-full h-full object-cover">
                </div>
                <div>
                    <p class="">“Highly recommended to all my friends and colleagues.”</p>
                    <div class="text-gray-900 font-bold uppercase mt-6">- Patricia.</div>
                    <ul class="flex mt-1">

                        <li class="my-auto text-cyan-600">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                            class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                          </svg>
                        </li>
                        <li class="my-auto">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                            class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                          </svg>
                        </li>
                        <li class="my-auto">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                            class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                          </svg>
                        </li>
                        <li class="my-auto">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                            class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                          </svg>
                        </li>
                        <li class="my-auto">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                          class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                          <path fill="currentColor"
                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                          </path>
                        </svg>
                        </li>
                      </ul>
                </div>
            </div>
          </div>

          <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
          <div class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
              <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                  <img src="../imgs/icon1.svg" alt="profile image" class="w-full h-full object-cover">
              </div>
              <div>
                  <p class="">“One of their customer representatives was so friendly and cooperative that they actually helped in choosing the right package.”</p>
                  <div class="text-gray-900 font-bold uppercase mt-6">- John.</div>
                  <ul class="flex mt-1">

                      <li class="my-auto text-cyan-600">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                          class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                          <path fill="currentColor"
                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                          </path>
                        </svg>
                      </li>
                      <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                          class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                          <path fill="currentColor"
                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                          </path>
                        </svg>
                      </li>
                      <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                          class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                          <path fill="currentColor"
                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                          </path>
                        </svg>
                      </li>
                      <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                          class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                          <path fill="currentColor"
                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                          </path>
                        </svg>
                      </li>
                      <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                        class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor"
                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                        </path>
                      </svg>
                      </li>
                    </ul>
              </div>
          </div>
          </div>

          <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
        <div class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
            <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                <img src="../imgs/icon1.svg" alt="profile image" class="w-full h-full object-cover">
            </div>
            <div>
                <p class="">“I am impressed with my top-tier LinkedIn profile at such pretty low rates.”</p>
                <div class="text-gray-900 font-bold uppercase mt-6">- Jennifer.</div>
                <ul class="flex mt-1">

                    <li class="my-auto text-cyan-600">
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                        class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor"
                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                        </path>
                      </svg>
                    </li>
                    <li class="my-auto">
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                        class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor"
                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                        </path>
                      </svg>
                    </li>
                    <li class="my-auto">
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                        class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor"
                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                        </path>
                      </svg>
                    </li>
                    <li class="my-auto">
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                        class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor"
                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                        </path>
                      </svg>
                    </li>
                    <li class="my-auto">
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                      class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                      <path fill="currentColor"
                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                      </path>
                    </svg>
                    </li>
                  </ul>
            </div>
        </div>
          </div>

          <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
            <div class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                    <img src="../imgs/icon1.svg" alt="profile image" class="w-full h-full object-cover">
                </div>
                <div>
                    <p class="">“My CV just passed the ATS scan with a 99% score. Glad to choose CVWritings.”</p>
                    <div class="text-gray-900 font-bold uppercase mt-6">- Joseph.</div>
                    <ul class="flex mt-1">
    
                        <li class="my-auto text-cyan-600">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                            class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                          </svg>
                        </li>
                        <li class="my-auto">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                            class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                          </svg>
                        </li>
                        <li class="my-auto">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                            class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                          </svg>
                        </li>
                        <li class="my-auto">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                            class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                          </svg>
                        </li>
                        <li class="my-auto">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                          class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                          <path fill="currentColor"
                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                          </path>
                        </svg>
                        </li>
                      </ul>
                </div>
            </div>
              </div>
    
              <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
                <div class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                        <img src="../imgs/icon1.svg" alt="profile image" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="">“A few months back, I got my CV done from here and within a month, I got two calls from the leading IT companies.”</p>
                        <div class="text-gray-900 font-bold uppercase mt-6">- Thomas.</div>
                        <ul class="flex mt-1">
        
                            <li class="my-auto text-cyan-600">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                              </svg>
                            </li>
                            <li class="my-auto">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                              </svg>
                            </li>
                            <li class="my-auto">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                              </svg>
                            </li>
                            <li class="my-auto">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                              </svg>
                            </li>
                            <li class="my-auto">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                              class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                              <path fill="currentColor"
                                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                              </path>
                            </svg>
                            </li>
                          </ul>
                    </div>
                </div>
                  </div>
              
                  <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
                    <div class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                        <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                            <img src="../imgs/icon1.svg" alt="profile image" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <p class="">“The website and working procedure are user-friendly.”</p>
                            <div class="text-gray-900 font-bold uppercase mt-6">- Susan.</div>
                            <ul class="flex mt-1">
            
                                <li class="my-auto text-cyan-600">
                                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                      d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                  </svg>
                                </li>
                                <li class="my-auto">
                                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                      d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                  </svg>
                                </li>
                                <li class="my-auto">
                                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                      d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                  </svg>
                                </li>
                                <li class="my-auto">
                                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                      d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                  </svg>
                                </li>
                                <li class="my-auto">
                                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                  class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                  <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                  </path>
                                </svg>
                                </li>
                              </ul>
                        </div>
                    </div>
                      </div>
                     
                      <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
                        <div class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                            <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                                <img src="../imgs/icon1.svg" alt="profile image" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <p class="">“They have good packages for fresher who are low on budget. I hope the rates for student CV will be reduced to few dollars more.”</p>
                                <div class="text-gray-900 font-bold uppercase mt-6">- Anthony.</div>
                                <ul class="flex mt-1">
                
                                    <li class="my-auto text-cyan-600">
                                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                      </svg>
                                    </li>
                                    <li class="my-auto">
                                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                      </svg>
                                    </li>
                                    <li class="my-auto">
                                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                      </svg>
                                    </li>
                                    <li class="my-auto">
                                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                      </svg>
                                    </li>
                                    <li class="my-auto">
                                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                      class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                      <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                      </path>
                                    </svg>
                                    </li>
                                  </ul>
                            </div>
                        </div>
                          </div>

                          <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
                            <div class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                                <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                                    <img src="../imgs/icon1.svg" alt="profile image" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <p class="">“I needed my resume, LinkedIn profile, and cover letter urgently in 2 days and they completed it within the deadline. They surely rescued me.”</p>
                                    <div class="text-gray-900 font-bold uppercase mt-6">- Kimberly.</div>
                                    <ul class="flex mt-1">
                    
                                        <li class="my-auto text-cyan-600">
                                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                            class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                            </path>
                                          </svg>
                                        </li>
                                        <li class="my-auto">
                                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                            class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                            </path>
                                          </svg>
                                        </li>
                                        <li class="my-auto">
                                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                            class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                            </path>
                                          </svg>
                                        </li>
                                        <li class="my-auto">
                                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                            class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                            </path>
                                          </svg>
                                        </li>
                                        <li class="my-auto">
                                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                          class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                          <path fill="currentColor"
                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                          </path>
                                        </svg>
                                        </li>
                                      </ul>
                                </div>
                            </div>
                              </div>

                              <div class="flex items-center border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
                                <div class="testimonial p-6 rounded-lg flex hover:bg-gray-100 transition-colors duration-300">
                                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4 md:mr-6 flex-shrink-0">
                                        <img src="../imgs/icon1.svg" alt="profile image" class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <p class="">“They make good cover letters. I was confused about how to make a promising letter for my nursing career and they did an exceptional job.”</p>
                                        <div class="text-gray-900 font-bold uppercase mt-6">- Andrew.</div>
                                        <ul class="flex mt-1">
                        
                                            <li class="my-auto text-cyan-600">
                                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                              </svg>
                                            </li>
                                            <li class="my-auto">
                                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                              </svg>
                                            </li>
                                            <li class="my-auto">
                                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                              </svg>
                                            </li>
                                            <li class="my-auto">
                                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                              </svg>
                                            </li>
                                            <li class="my-auto">
                                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                              class="w-6 h-6 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                              <path fill="currentColor"
                                                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                              </path>
                                            </svg>
                                            </li>
                                          </ul>
                                    </div>
                                </div>
                                  </div>
          </div>
        </section>
    </main>
 @endsection