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
                <!-- <a class="py-4 px-4 text-gray-500 font-semibold hover:text-purple-500 transition duration-300" href="services.html">
            Services</a> -->

            {{-- @click.away="open=false" x-data="{ open: false }" --}}
                <div  class="relative group">
                    {{-- Dropdown toggle button --}}
                    {{-- @click="open = !open" --}}
                    {{-- {{ $service=$services[0] }}
                    {{ $service_second=$services[1] }}
                    || request()->routeIs('services.show', $service->slug) || request()->routeIs('services.show', $service_second->slug) --}}
                    <a class="py-4 px-4 cursor-pointer text-gray-500 font-semibold hover:text-purple-500 transition duration-300 {{  (request()->is('services/*')) ? 'border-b-4 border-purple-500' :''}}" href="{{route('services')}}">
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

                <a class="py-4 px-4 text-gray-500 font-semibold hover:text-purple-500 transition duration-300 {{ request()->routeIs('about') ? 'border-b-4 border-purple-500' : '' }}"
                    href="{{ route('about') }} "> About
                    Us</a>
                <a class="py-4 px-4 text-gray-500 font-semibold hover:text-purple-500 transition duration-300 {{ request()->routeIs('contact') ? 'border-b-4 border-purple-500' : '' }}"
                    href="{{ route('contact') }}">
                    Contact</a>
                <a class="py-4 px-4 text-gray-500 font-semibold hover:text-purple-500 transition duration-300 {{ request()->routeIs('reviews') ? 'border-b-4 border-purple-500' : '' }}"
                    href="{{ route('reviews') }}">
                    Reviews</a>
                    <a class=" rounded relative inline-flex font-medium group items-center justify-center py-2 px-6 m-1 cursor-pointer  active:shadow-none shadow-lg bg-gradient-to-tr overflow-hidden from-purple-600 to-purple-500 border-purple-700 text-white {{ request()->routeIs('order') ? 'border-b-4 border-purple-500' : '' }}"
                    href="{{ route('order') }}">
                    {{-- border-b-4 border-l-2 active:border-purple-600 --}}
                    <span
                        class="transition-all duration-300 ease-out animate-ping absolute w-full h-12  bg-white opacity-80 rounded-full "></span>
                     <span class="relative">Order Now</span></a>
                {{-- <a class="py-4 px-4 text-gray-500 font-semibold hover:text-purple-500 transition duration-300" href="{{ route('blogs') }}">
            Blogs</a> --}}
                {{-- <a class="py-4 px-4 text-gray-500 font-semibold hover:text-purple-500 transition duration-300" href="{{ route('writings') }}">
              Writings</a> --}}
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
                    <a aria-current="page" class="block text-sm px-6 py-4 text-purple-600  font-semibold hover:bg-purple-400 hover:text-white"
                        href="{{ route('home') }}">
                        Home</a>
                </li>
                <li>
                    <a class="block text-sm px-6 py-4 text-purple-600 bg-white font-semibold hover:bg-purple-400 hover:text-white" href="{{ route('about') }}">About</a>
                </li>
                <li>
                    <a class="block text-sm px-6 py-4 text-purple-600 bg-white font-semibold hover:bg-purple-400 hover:text-white" href="{{ route('contact') }}">Contact
                        Us</a>
                </li>
                <li>
                    <a class="block text-sm px-6 py-4 text-purple-600 bg-white font-semibold hover:bg-purple-400 hover:text-white" href="{{ route('contact') }}">Services
                        </a>
                </li>

                <li class="">
                    <a class=" "
                        href="{{ route('order') }}">
                        {{-- border-b-4 border-l-2 active:border-purple-600 --}}
                        <span
                            class=" text-purple-600  transition-all duration-300 ease-out animate-ping absolute w-full    "></span>
                         <span class="block relative px-6 py-4 text-sm font-semibold  text-purple-600 hover:bg-purple-400 hover:text-white">Order Now</span></a> 
                </li>
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
