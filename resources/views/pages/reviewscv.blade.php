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
                    <p class="text-gray-600">"I was fed up trying to write a plagiarism-free research proposal. One of my classmates referred me to their services. I tried them and I was amazed. They wrote my research proposal according to my requirements with 100% originality."</p>
                    <div class="text-gray-900 font-bold uppercase mt-6">- Fabiha Bakht.</div>
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
                      <p class="text-gray-600">"I was fed up trying to write a plagiarism-free research proposal. One of my classmates referred me to their services. I tried them and I was amazed. They wrote my research proposal according to my requirements with 100% originality."</p>
                      <div class="text-gray-900 font-bold uppercase mt-6">- Fabiha Bakht.</div>
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
                      <p class="text-gray-600">"I was fed up trying to write a plagiarism-free research proposal. One of my classmates referred me to their services. I tried them and I was amazed. They wrote my research proposal according to my requirements with 100% originality."</p>
                      <div class="text-gray-900 font-bold uppercase mt-6">- Fabiha Bakht.</div>
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
                    <p class="text-gray-600">"I was fed up trying to write a plagiarism-free research proposal. One of my classmates referred me to their services. I tried them and I was amazed. They wrote my research proposal according to my requirements with 100% originality."</p>
                    <div class="text-gray-900 font-bold uppercase mt-6">- Fabiha Bakht.</div>
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
                  <p class="text-gray-600">"I was fed up trying to write a plagiarism-free research proposal. One of my classmates referred me to their services. I tried them and I was amazed. They wrote my research proposal according to my requirements with 100% originality."</p>
                  <div class="text-gray-900 font-bold uppercase mt-6">- Fabiha Bakht.</div>
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
                <p class="text-gray-600">"I was fed up trying to write a plagiarism-free research proposal. One of my classmates referred me to their services. I tried them and I was amazed. They wrote my research proposal according to my requirements with 100% originality."</p>
                <div class="text-gray-900 font-bold uppercase mt-6">- Fabiha Bakht.</div>
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