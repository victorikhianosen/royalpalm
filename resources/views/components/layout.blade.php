<x-header />


{{-- NAV --}}
<nav id="main-nav" class="relative sticky top-0 right-0 left-0 bg-white z-10">
    <div class="mx-auto p-6 py-4 md:py-6 px-6 md:px-16">
        <div class="flex justify-between items-center">
            <a href="{{ route('home') }}" alt="">
                <img class="w-28 md:w-40" src="{{ asset('assets/images/home/home.png') }}" />
            </a>
            <div class="space-x-10 hidden md:inline-block">
                <a href="{{ route('home') }}"
                    class="text-lg text-black transition duration-150 hover:text-primary">Home</a>
                <a href="{{ route('about') }}"
                    class="text-lg text-black transition duration-150 hover:text-primary">About</a>
                <a href="{{ route('gallery') }}"
                    class="hidden lg:inline-block text-lg text-black transition duration-150 hover:text-primary">Gallery</a>
                <a href=""
                    class="hidden lg:inline-block text-lg text-black transition duration-150 hover:text-primary">Price</a>
                <a href="{{ route('contact') }}"
                    class="text-lg text-black transition duration-150 hover:text-primary">Contact</a>
                <a href="" class="bg-primary py-3 px-6 text-white rounded-lg hover:bg-hoverPrimary">Login</a>
            </div>
        </div>
    </div>


    {{-- HAMBUGER --}}
    <button id="nav-open"
        class="absolute top-4 right-2 inline-block md:hidden transition-opacity duration-300 opacity-100">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-10 h-10 text-primary">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
        </svg>
    </button>

    <button id="nav-close" class="hidden md:hidden absolute top-4 right-2 transition-opacity duration-300 opacity-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-10 h-10 text-primary">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>

    </button>

    {{-- <div id="nav-mobile" class="hidden md:hidden absolute top-0 left-0 right-0 bg-white w-4/5 h-screen z-20"> --}}
    <div id="nav-mobile"
        class="fixed inset-y-0 left-0 w-4/5 bg-white transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden z-20">
        <div class="space-y-16 mt-16 px-12 text-primary cursor-pointer">
            <a href="{{ route('home') }}" alt="">
                <img class="w-28 md:w-46" src="{{ asset('assets/images/home/home.png') }}" </a>
                <div class="flex flex-col space-y-10">
                    <span>
                        <a class="transition-all duration-150 hover:text-hoverPrimary" href="">Home</a>
                    </span>
                    <span>
                        <a class="transition-all duration-150 hover:text-hoverPrimary"
                            href="{{ route('about') }}">About</a>

                    </span>
                    <span>
                        <a class="transition-all duration-150 hover:text-hoverPrimary"
                            href="{{ route('gallery') }}">Gallery</a>

                    </span>
                    <span>
                        <a class="transition-all duration-150 hover:text-hoverPrimary" href="">Price</a>

                    </span>
                    <span>
                        <a class="transition-all duration-150 hover:text-hoverPrimary" href="">Subsription</a>

                    </span>
                    <span>
                        <a class="transition-all duration-150 hover:text-hoverPrimary"
                            href="{{ route('contact') }}">Contact</a>

                    </span>
                </div>
        </div>
    </div>
</nav>



<main>
    {{ $slot }}
</main>


{{-- FOOTER --}}
<section class="">
    <div class="relative h-full bg-hoverPrimary mx-auto p-6 py-10 md:py-20 px-6 md:px-16 space-y-16">

        {{-- Subscribe --}}
        <div class="absolute -top-24 right-0 left-0 mx-6 lg:mx-16 bg-primary p-12 lg:p-16 rounded-lg">

            <div class="grid grid-cols-1 lg:grid-cols-3 space-y-8 lg:space-y-0 justify-between items-center">

                <div class="space-y-4 col-span-2">
                    <h2 class="text-white text-2xl lg:text-4xl font-semibold w-full">
                        Subscribe to Our Newsletter
                    </h2>
                    <p class="text-white text-sm md:text-sm tracking-wider">We help you make the dream of new house
                        a reality

                    </p>
                </div>
                <div class="text-end">
                    <input type="text" placeholder="Enter Email Address"
                        class="appreance-none text-primary focus:outline-none w-full py-2 lg:py-4 pl-4 text-start placeholder:text-xs rounded-lg lg:placeholder:text-sm">
                </div>
            </div>
        </div>

    </div>


</section>


<section>
    <div class="h-full pt-24 lg:pt-0 pb-16 bg-hoverPrimary mx-auto p-6 px-6 md:px-16 space-y-16">
        {{-- Real Footer --}}
        <div class="grid grid-cols-1 pt-8 lg:grid-cols-5 text-white gap-8 space-y-8 md:space-y-0">

            <div class="space-y-4 col-span-1 lg:col-span-2">
                <a href="">
                    <img class="w-32 md:w-40" src="{{ asset('assets/images/home/home.png') }}" alt="">
                </a>
                <p class="text-sm md:text-base tracking-wider leading-7 lg:lead-8 text-white">
                    Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is dummy text of
                    the printing.
                    ypesetting industry. Lorem Ipsum is dummy text of the printing.
                </p>
                <p class="text-sm md:text-base tracking-wider text-white">
                    Ikeja, Lagos State, Nigeria
                </p>

                <p
                    class="text-sm md:text-base tracking-wider text-white transition-all duration-200 hover:translate-x-3 hover:text-secondary">
                    +1234456689
                </p>
                <p
                    class="text-base tracking-wider text-white transition-all duration-200 hover:translate-x-3 hover:text-secondary">
                    example@example.com
                </p>
            </div>

            <div class="space-y-6 md:space-y-10">
                <h3 class="font-semibold text-base lg:text-2xl tracking-wider">Company</h3>
                <div class="flex flex-col space-y-6">
                    <a href=""
                        class="text-sm lg:text-base transition-all duration-200 hover:translate-x-3 hover:text-secondary">About</a>
                    <a href=""
                        class="text-sm lg:text-base transition-all duration-200 hover:translate-x-3 hover:text-secondary">Blog</a>
                    <a href=""
                        class="text-sm lg:text-base transition-all duration-200 hover:translate-x-3 hover:text-secondary">All
                        Property</a>
                    <a href=""
                        class="text-sm lg:text-base transition-all duration-200 hover:translate-x-3 hover:text-secondary">FAQ</a>
                    <a href=""
                        class="text-sm lg:text-base transition-all duration-200 hover:translate-x-3 hover:text-secondary">Contact
                        US</a>
                </div>
            </div>

            <div class="space-y-6 md:space-y-10">
                <h3 class="font-semibold text-base lg:text-2xl tracking-wider">Services</h3>
                <div class="flex flex-col space-y-6">
                    <a href=""
                        class="text-sm lg:text-base transition-all duration-200 hover:translate-x-3 hover:text-secondary">About</a>
                    <a href=""
                        class="text-sm lg:text-base transition-all duration-200 hover:translate-x-3 hover:text-secondary">Blog</a>
                    <a href=""
                        class="text-sm lg:text-base transition-all duration-200 hover:translate-x-3 hover:text-secondary">All
                        Property</a>
                    <a href=""
                        class="text-sm lg:text-base transition-all duration-200 hover:translate-x-3 hover:text-secondary">FAQ</a>
                    <a href=""
                        class="text-sm lg:text-base transition-all duration-200 hover:translate-x-3 hover:text-secondary">Contact
                        US</a>
                </div>
            </div>


            <div class="space-y-6 md:space-y-10">
                <h3 class="font-semibold text-base lg:text-2xl tracking-wider">Customer Care

                </h3>
                <div class="flex flex-col space-y-6">
                    <a href=""
                        class="text-sm lg:text-base transition-all duration-200 hover:translate-x-3 hover:text-secondary">About</a>
                    <a href=""
                        class="text-sm lg:text-base transition-all duration-200 hover:translate-x-3 hover:text-secondary">Blog</a>
                    <a href=""
                        class="text-sm lg:text-base transition-all duration-200 hover:translate-x-3 hover:text-secondary">All
                        Property</a>
                    <a href=""
                        class="text-sm lg:text-base transition-all duration-200 hover:translate-x-3 hover:text-secondary">FAQ</a>
                    <a href=""
                        class="text-sm lg:text-base transition-all duration-200 hover:translate-x-3 hover:text-secondary">Contact
                        US</a>
                </div>
            </div>

        </div>
    </div>

    {{-- <div
            class="bg-primary py-8 space-y-4 lg:space-y-0 lg:pt-12 mx-auto md:py-10 px-6 md:px-16 grid grid-cols-1 text-center lg:text-start md:grid-cols-2">
            <div>
                <p class="text-white text-sm font-light tracking-wider">All Rights Reserved @ Company 2024</p>
            </div>

            <div class="lg:text-end text-white space-x-10 text-sm font-light tracking-wider">
                <a href="" alt="" class="transition-all duration-200 hover:text-secondary">
                    Terms & Conditions
                </a>
                <a href="" alt="" class="transition-all duration-200 hover:text-secondary">
                    Claim
                </a>
                <a href="" alt="" class="transition-all duration-200 hover:text-secondary">
                    Privacy & Policy
                </a>
            </div>
        </div> --}}
</section>

<div
    class="bg-primary flex justify-between items-center px-14 py-8">
    <div>
        <p class="text-white text-sm font-light tracking-wider">All Rights Reserved @ Company 2024</p>
    </div>

    <div class=" text-white space-x-10 text-sm font-light tracking-wider">
        <a href="" alt="" class="transition-all duration-200 hover:text-secondary">
            Terms & Conditions
        </a>
        <a href="" alt="" class="transition-all duration-200 hover:text-secondary">
            Claim
        </a>
        <a href="" alt="" class="transition-all duration-200 hover:text-secondary">
            Privacy & Policy
        </a>
    </div>
</div>



<script src="{{ asset('assets/js/main.js') }}"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script>
    var swiper = new Swiper(".mySwiper-hero", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        loop: true, // Enable infinite loop
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 'auto', // Show as many slides as possible
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            // When window width is <= 768px (sm)
            768: {
                slidesPerView: 1,
            },
            // When window width is > 768px (sm) and <= 976px (xl)
            976: {
                slidesPerView: 2,
            },
            // When window width is > 976px (xl) and <= 1024px (2xl)
            1024: {
                slidesPerView: 3,
            },
        }
    });
</script>

<script>
    var swiper = new Swiper(".mySwiper-details", {
        slidesPerView: 2, // Show as many slides as possible
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        // breakpoints: {
        //     // When window width is <= 768px (sm)
        //     768: {
        //         slidesPerView: 1,
        //     },
        //     // When window width is > 768px (sm) and <= 976px (xl)
        //     976: {
        //         slidesPerView: 2,
        //     },
        //     // When window width is > 976px (xl) and <= 1024px (2xl)
        //     1024: {
        //         slidesPerView: 3,
        //     },
        // }
    });
</script>



