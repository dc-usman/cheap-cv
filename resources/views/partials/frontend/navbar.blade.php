<nav class=" bg-white z-10 relative  shadow-lg">
    {{-- <div class="container mx-auto items-center shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)]"> --}}
    <div class="container mx-auto items-center">
        <div class="flex justify-between">
            <div class="">
                <a class="flex items-center p-2 h-24" href="{{route('home')}}">
                    <img class="h-24" src="{{asset('imgs/logo.png')}}" alt="Logo" class="h-32 mt-3">
                </a>
            </div>
            <div class="hidden md:flex items-center space-x-3 mr-10 text-sm">
                <a class="p-2 font-semibold transition duration-300  uppercase {{request()->routeIs('home')  ? "text-primary hover:text-primary border-b-4 border-primary " : "text-secondary hover:text-primary" }}" href="{{route('home')}}">Home</a>
                <a class="p-2 font-semibold transition duration-300 uppercase {{request()->routeIs('about')  ? "text-primary hover:text-primary border-b-4 border-primary " : "text-secondary hover:text-primary" }}" href="{{route('about')}}">About</a>
                <a class="p-2 font-semibold transition duration-300 uppercase {{request()->routeIs('contact')  ? "text-primary hover:text-primary border-b-4 border-primary " : "text-secondary hover:text-primary" }}" href="{{route('contact')}}">Contact</a>
                <a class="group relative inline-flex border border-primary focus:outline-none w-full md:w-auto animate-wiggle-slow hover:animate-none" href="{{route('order')}}">
                    <span class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-primary text-center font-bold uppercase bg-white ring-1 ring-primary ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                        Order Now
                    </span>
                </a>
            </div>
            <div class="md:hidden flex items-center mr-6">
                <button class="outline-none" id="mobile-menu-button">
                    <svg class=" w-6 h-6 text-secondary hover:text-primary " x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    {{-- Mobile menu --}}
    <div class="hidden md:hidden mobile-menu">
        <ul>
            <li>
                <a class="block text-sm px-2 py-4 text-white bg-primary font-semibold uppercase" href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a class="block text-sm px-2 py-4 text-primary bg-white font-semibold uppercase" href="{{route('about')}}">About Us</a>
            </li>
            <li>
                <a class="block text-sm px-2 py-4 text-primary bg-white font-semibold uppercase" href="{{route('contact')}}">Contact</a>
            </li>
            <li class="mx-7">
                <a class="group relative inline-flex border border-primary focus:outline-none w-full md:w-auto" href="{{route('order')}}">
                    <span class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-primary text-center font-bold uppercase bg-white ring-1 ring-primary ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                        Order Now
                    </span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<script>
	// Grab HTML Elements
	const btn = document.getElementById("mobile-menu-button");
	const menu = document.querySelector(".mobile-menu");

	// Add Event Listeners
	btn.addEventListener("click", () => {
	    menu.classList.toggle("hidden");
	});
</script>
