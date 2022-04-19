<nav>
    <div class="container mx-auto items-center my-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div>
                    <a class="flex items-center py-4 px-2" href="/">
                        <img src="../imgs/logo.svg" alt="Logo" class="h-20"></a>
                </div>

            </div>

            <div class="hidden lg:flex items-center space-x-2 text-lg mr-10">
                <a aria-current="page"
                    class="py-4 px-2 font-semibold hover:text-purple-500 transition duration-300 text-gray-500 {{ request()->routeIs('home') ? 'border-b-4 border-purple-500' : '' }}"
                    href="{{ route('home') }}">Home</a>

                    <a class="py-4 px-4 text-gray-500 font-semibold hover:text-purple-500 transition duration-300 {{ request()->routeIs('about') ? 'border-b-4 border-purple-500' : '' }}"
                        href="{{ route('about') }} "> About
                    Us</a>
                
                    
                <div class="relative group">
                  
                    <a class="py-4 px-4 cursor-pointer text-gray-500 font-semibold hover:text-purple-500 transition duration-300 {{ request()->is('services/*') ? 'border-b-4 border-purple-500' : '' }}"
                        href="{{ route('services') }}">
                        Services
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180':open, 'rotate-0':!open}"
                            class="inline w-4 h-4 ml-1 transition-transform duration-200 transform md:-mt-1 rotate-0">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <!-- Dropdown menu -->
                    <div x-show="open" x-transition:enter.duration.500ms x-transition:leave.duration.800ms
                        class="absolute left-0 w-48 py-2 mt-2 bg-gray-100 rounded-md shadow-xl z-10 hidden group-hover:block">
                        {{-- :class="{'hidden':!open}" --}}
                        @if (!empty($services))
                            @foreach ($services as $service)
                                {{-- <li class="py-1"> --}}
                                <a href="{{ route('services.show', $service->slug) }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white ">{{ $service->name }}</a>
                                {{-- </li> --}}
                            @endforeach
                        @endif
                    </div>

                </div>

                <a class="py-4 px-4 text-gray-500 font-semibold hover:text-purple-500 transition duration-300 {{ request()->routeIs('sample') ? 'border-b-4 border-purple-500' : '' }}"
                    href="{{ route('sample') }}">
                    Samples</a>
                <a class="py-4 px-4 text-gray-500 font-semibold hover:text-purple-500 transition duration-300 {{ request()->routeIs('reviews') ? 'border-b-4 border-purple-500' : '' }}"
                        href="{{ route('reviews') }}">
                Reviews</a>
                <a class="py-4 px-4 text-gray-500 font-semibold hover:text-purple-500 transition duration-300 {{ request()->routeIs('contact') ? 'border-b-4 border-purple-500' : '' }}"
                    href="{{ route('contact') }}">
                    Contact</a>
                  <a class=" rounded relative inline-flex font-medium group items-center justify-center py-2 px-6 m-1 cursor-pointer  active:shadow-none shadow-lg bg-gradient-to-tr overflow-hidden from-purple-600 to-purple-500 border-purple-700 text-white {{ request()->routeIs('order') ? 'border-b-4 border-purple-500' : '' }} animate-wiggle hover:animate-none" style="animation-name:tada;           animation-duration:5s; animation-delay:1s;"
                    href="{{ route('order') }}">
                    <span
                        class=" absolute w-full h-12    rounded-full "></span>
                <span class="relative">Order Now</span></a> 
                   

                
            </div>
            <div class="lg:hidden flex items-center mr-6">
                <button class="outline-none mobile-menu-button">
                    <svg class=" w-6 h-6 text-gray-500 hover:text-purple-500 " x-show="!showMenu" fill="none"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>


        {{-- mobile drop down menu --}}
        <div class=" hidden mobile-menu">
            <ul>
                <li>
                    <a aria-current="page"
                        class="block text-sm px-6 py-4 text-purple-600  font-semibold hover:bg-purple-400 hover:text-white"
                        href="{{ route('home') }}">
                    Home</a>
                </li>
                <li>
                    <a class="block text-sm px-6 py-4 text-purple-600 bg-white font-semibold hover:bg-purple-400 hover:text-white"
                        href="{{ route('about') }}">About</a>
                </li>
                

                <li>
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <p @click="open = !open"
                            class=" flex flex-row items-center w-full px-4  text-sm text-left bg-transparent  md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-dullgreen hover:text-purple-500 group">
                            <span class="block text-sm px-2 py-2 text-purple-600  font-semibold ">Services
                            </span>

                            <svg fill="#9333ea" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                                class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </p>

                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            class="absolute right-0 w-full bg-gray-400 origin-top-right  md:w-48 shadow-lg">
                            <div class="px-2 py-2 bg-white ">
                                @if (!empty($services))
                                    @foreach ($services as $service)
                                        {{-- <li class="py-1"> --}}
                                        <a href="{{ route('services.show', $service->slug) }}"
                                            class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0   hover:bg-green-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline text-purple-600 ">{{ $service->name }}</a>
                                        {{-- </li> --}}
                                    @endforeach
                                @endif
                                {{-- <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-green-600 focus:text-gray-900 hover:bg-green-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline text-gray-500"
                                    href="">Press Release Writing</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-green-600 focus:text-gray-900 hover:bg-green-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline text-gray-500"
                                    href="">Content Writing</a> --}}

                            </div>
                        </div>
                    </div>

                </li>

                <div class="-z-10">

                    <li>
                        <a class="block  text-sm px-6 py-4 text-purple-600 bg-white font-semibold hover:bg-purple-400 hover:text-white"
                            href="{{ route('sample') }}">Samples
                        </a>
                    </li>
                    <li>
                        <a class="block  text-sm px-6 py-4 text-purple-600 bg-white font-semibold hover:bg-purple-400 hover:text-white"
                            href="{{ route('reviews') }}">Reviews
                        </a>
                    </li>
                    
                    <li>
                        <a class="block text-sm px-6 py-4 text-purple-600 bg-white font-semibold hover:bg-purple-400 hover:text-white"
                            href="{{ route('contact') }}">Contact
                            Us</a>
                    </li>
                    <li class="">
                        <a class=" " href="{{ route('order') }}">
                            {{-- border-b-4 border-l-2 active:border-purple-600 --}}
                            <span
                                class=" text-purple-600  transition-all duration-300 ease-out animate-ping  w-full    "></span>
                            <span
                                class="block  px-6 py-4 text-sm font-semibold  text-purple-600 hover:bg-purple-400 hover:text-white">Order
                                Now</span></a>
                    </li>
                </div>

            </ul>
        </div>
    </div>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</nav>
