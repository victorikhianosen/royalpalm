<x-layout>


    {{-- HERRO --}}
    <section>
        <div class=" bg-softGrey">
            <div class="mx-auto p-6 py-10 md:py-20 px-6 md:px-16">
                <div class="swiper mySwiper-hero">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide grid grid-cols-1 items-center gap-8 lg:gap-6 lg:grid-cols-2 ">
                            <div class="space-y-4 md:space-y-8">
                                <h1
                                    class="text-3xl md:text-4xl lg:text-5xl font-bold text-black leading-9 md:leading-snug tracking-wide">
                                    Find Your Dream House By Us</h1>
                                <p class="text-sm lg:text-base text-secondary leading-7 tracking-wide">Lorem ipsum dolor
                                    sit amet consectetur adipisicing elit. Ab modi omnis eum assumenda
                                    eligendi, sapiente minima mollitia veniam magnam quia.</p>
                                <button
                                    class="text-sm md:text-lg text-white bg-primary rounded-lg py-3 px-8 md:px-8 md:py-4 hover:bg-hoverPrimary">Make
                                    An Enquiry</button>
                            </div>

                            <div class="">
                                <img class="w-96 h-full md:w-full md:h-96"
                                    src="{{ asset('assets/images/home/hero.png') }}" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide grid grid-cols-1 items-center gap-8 lg:gap-6 lg:grid-cols-2 ">
                            <div class="space-y-4 md:space-y-8">
                                <h1
                                    class="text-3xl md:text-4xl lg:text-5xl font-bold text-black leading-9 md:leading-loose tracking-wide">
                                    Find Your Dream House By Us</h1>
                                <p class="text-sm lg:text-base text-secondary leading-7 tracking-wide">Lorem ipsum dolor
                                    sit amet consectetur adipisicing elit. Ab modi omnis eum assumenda
                                    eligendi, sapiente minima mollitia veniam magnam quia.</p>
                                <button
                                    class="text-sm md:text-lg text-white bg-primary rounded-lg py-3 px-8 md:px-8 md:py-4 hover:bg-hoverPrimary">Make
                                    An Enquiry</button>
                            </div>

                            <div class="">
                                <img class="w-96 h-full md:w-full md:h-96"
                                    src="{{ asset('assets/images/home/hero.png') }}" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- ABOUT --}}

    <section>
        <div class="mx-auto p-6 py-10 md:py-20 px-6 md:px-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div>
                    <img class="w-96 md:w-full" src="{{ asset('assets/images/home/about.png') }}" alt="">
                </div>
                <div class="space-y-6">
                    <h4 class="text-sm md:text-base text-primary">About Us</h4>
                    <h2 class="text-2xl md:text-3xl lg:text-5xl font-semibold tracking-wide leading-loose text-black">
                        Dream Living
                        Spaces Setting New Build
                    </h2>
                    <p class="text-sm lg:base leading-7 tracking-wide text-secondary pb-8">Over 39,000 people work for
                        us in
                        more than 70 countries all over the This breadth of global
                        coverage, combined with specialist services
                    </p>

                    <div class="space-y-8">

                        <div
                            class="flex justify-center gap-3 border-2 py-5 px-4 transition-all duration-400 border-softGrey hover:shadow-lg">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-12 h-12 lg:w-14 lg:h-14 text-primary">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                            </span>
                            <div>
                                <a href=""
                                    class="text-sm md:text-base lg:text-lg text-black font-semibold transition-all duration-200 hover:text-primary tracking-wide">
                                    The Perfect Residency
                                </a>
                                <p class="text-xs lg:text-sm leading-5 md:leading-7 tracking-wide text-secondary">
                                    Lorem ipsum dolor sit amet, consectetur adipisic do eiusmod tempor incididunt ut
                                    labore
                                    et
                                </p>
                            </div>
                        </div>

                        <div
                            class="flex justify-center gap-3 border-2 py-5 px-4 transition-all duration-400 border-softGrey hover:shadow-lg">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-12 h-12 lg:w-14 lg:h-14 text-primary">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                            </span>
                            <div>
                                <a href=""
                                    class="text-sm md:text-base lg:text-lg text-black  font-semibold hover:text-primary tracking-wide">
                                    Global Architect Experts
                                </a>
                                <p class="text-xs lg:text-sm leading-5 md:leading-7 tracking-wide text-secondary">
                                    Lorem ipsum dolor sit amet, consectetur adipisic do eiusmod tempor incididunt ut
                                    labore
                                    et
                                </p>
                            </div>
                        </div>

                        <div
                            class="flex justify-center gap-3 border-2 py-5 px-4 transition-all duration-400 border-softGrey hover:shadow-lg">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-12 h-12 lg:w-14 lg:h-14 text-primary">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                            </span>
                            <div>
                                <a href=""
                                    class="text-sm md:text-base lg:text-lg text-black  font-semibold hover:text-primary tracking-wide">
                                    Built-in Storage Cupboards
                                </a>
                                <p class="text-xs lg:text-sm leading-5 md:leading-7 tracking-wide text-secondary">
                                    Lorem ipsum dolor sit amet, consectetur adipisic do eiusmod tempor incididunt ut
                                    labore
                                    et
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- Building Facilities --}}
    <section>
        <div class="mx-auto bg-softGrey">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 ">

                <div class="space-y-4 md:space-y-6 my-12 md:my-0 flex flex-col justify-center items-start pl-16">
                    <h4 class="text-sm md:text-base text-primary">Building Facilities</h4>
                    <h2 class="text-2xl md:text-3xl lg:text-5xl font-semibold text-black leading-1 tracking-wide">
                        Making living
                        spaces More Beautiful
                    </h2>
                    <p class="text-sm w-4/5 md:w-full lg:text-base leading-7 tracking-wide text-secondary pb-8">
                        Over 39,000 people work for us in more than 70 countries all over the This breadth of global
                        coverage, combined with speciali5t services
                    </p>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 md:gap-4">
                        <div>
                            <div class="flex items-start gap-3">
                                <span class="bg-softBg rounded-full p-2 lg:mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-3 h-3 lg:w-4 lg:h-4 text-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                </span>
                                <p
                                    class="text-sm lg:text-base font-extralight leading-6 lg:tracking-wide text-secondary pb-8"">
                                    Living rooms are pre-wired for Surround
                                </p>
                            </div>

                            <div class="flex items-start gap-3">
                                <span class="bg-softBg rounded-full p-2 lg:mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-3 h-3 lg:w-4 lg:h-4 text-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                </span>
                                <p
                                    class="text-sm lg:text-base font-extralight leading-6 lg:tracking-wide text-secondary pb-8"">
                                    Nestled in the Buckhead Vinings communities
                                </p>
                            </div>

                            <div class="flex items-start gap-3">
                                <span class="bg-softBg rounded-full p-2 lg:mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-3 h-3 lg:w-4 lg:h-4 text-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                </span>
                                <p
                                    class="text-sm lg:text-base font-extralight leading-6 lg:tracking-wide text-secondary pb-8"">
                                    A rare combination of inspired architecture
                                </p>
                            </div>

                        </div>

                        <div>
                            <div class="flex items-start gap-3">
                                <span class="bg-softBg rounded-full p-2 lg:mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-3 h-3 lg:w-4 lg:h-4 text-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                </span>
                                <p
                                    class="text-sm lg:text-base font-extralight leading-6 lg:tracking-wide text-secondary pb-8"">
                                    Luxurious interior design and amenities
                                </p>
                            </div>

                            <div class="flex items-start gap-3">
                                <span class="bg-softBg rounded-full p-2 lg:mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-3 h-3 lg:w-4 lg:h-4 text-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                </span>
                                <p
                                    class="text-sm lg:text-base font-extralight leading-6 lg:tracking-wide text-secondary pb-8"">
                                    Private balconies with stunning views
                                </p>
                            </div>

                            <div class="flex items-start gap-3">
                                <span class="bg-softBg rounded-full p-2 lg:mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-3 h-3 lg:w-4 lg:h-4 text-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                </span>
                                <p
                                    class="text-sm lg:text-base font-extralight leading-6 lg:tracking-wide text-secondary pb-8"">
                                    Outdoor grilling with dining court
                                </p>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="hidden md:inline-block">
                    <img class="w-full h-96 lg:w-full lg:h-screen" src="{{ asset('assets/images/home/new.jpeg') }}"
                        alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="mx-auto p-6 py-10 md:py-20 px-6 md:px-16">
            <div class="space-y-8 md:space-y-24">
                <div class="space-y-4 text-center">
                    <h4 class="text-sm md:text-base text-primary">Our Services
                    </h4>
                    <h2 class="text-2xl md:text-3xl lg:text-5xl tracking-wide font-semibold leading-snug text-black">
                        Our Main Focus
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <!-- FIRST CARD -->
                    <div id="card1"
                        class="card flex flex-col justify-center items-center shadow-lg px-10 py-14 space-y-4 md:space-y-9 border-b-4 md:border-b-8 border-primary cursor-pointer">
                        <span class="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="w-12 h-12 md:w-16 md:h-16 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819" />
                            </svg>
                        </span>
                        <a href="#"
                            class="text-lg md:text-2xl font-bold text-black transition-all duration-150 hover:text-hoverPrimary">Buy
                            a
                            home</a>
                        <p class="text-sm md:text-base leading-6 md:leading-0 text-center text-secondary">over 1
                            million+ homes for sale available on the website, we
                            can match you with a house you will want to call home.</p>
                        <div class="relative group">
                            <a href="#"
                                class="text-primary text-md md:text-lg pt-4 group-hover:text-hoverPrimary">
                                Find A Home
                                <span class="absolute top-0 left-28 md:left-32">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gold">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>

                    <!-- SECOND CARD -->
                    <div id="card2"
                        class="card flex flex-col justify-center items-center border-b-4 md:border-b-8 shadow-lg px-10 py-14 space-y-9 cursor-pointer">
                        <span class="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                            </svg>
                        </span>
                        <a href="#"
                            class="text-2xl font-bold text-black transition-all duration-150 hover:text-primary">Rent a
                            home</a>
                        <p class="text-center text-secondary">over 1 million+ homes for sale available on the website,
                            we
                            can match you with a house you will want to call home.</p>
                        <div class="relative group">
                            <a href="#" class="text-primary text-lg pt-4 group-hover:text-hoverPrimary">
                                Find A Home
                                <span class="absolute top-0 left-32">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gold">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                    </svg>


                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="" />
                                    </svg>

                                </span>
                            </a>
                        </div>
                    </div>

                    <!-- THIRD CARD -->
                    <div id="card3"
                        class="card flex flex-col justify-center items-center border-b-4 md:border-b-8 shadow-lg px-10 py-14 space-y-9 cursor-pointer">
                        <span class="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                            </svg>
                        </span>
                        <a href="#"
                            class="text-2xl font-bold text-black transition-all duration-150 hover:text-primary">Sell a
                            home</a>
                        <p class="text-center text-secondary">over 1 million+ homes for sale available on the website,
                            we
                            can match you with a house you will want to call home.</p>
                        <div class="relative group">
                            <a href="#" class="text-primary text-lg pt-4 group-hover:text-hoverPrimary">
                                Find A Home
                                <span class="absolute top-0 left-32">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gold">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="mx-auto p-6 py-10 md:py-20 px-6 md:px-16 space-y-10 bg-softGrey">

            <div class="space-y-6">
                <h4 class="text-sm md:text-base text-primary">Properties</h4>
                <h2 class="text-2xl md:text-3xl md:w-1/2 lg:text-5xl font-semibold text-black tracking-wide">
                    Featured Listings
                </h2>
            </div>



            <div class="swiper mySwiper relative">
                <div class="swiper-wrapper">

                    {{-- LIST 1 --}}

                    <div id="list1" class="swiper-slide shadow-lg bg-white rounded-lg p-4 space-y-6">
                        <div class="relative">
                            <img class="rounded-lg w-fit" src="{{ asset('assets/images/home/price1.jpeg') }}"
                                alt="">
                            <span
                                class="absolute top-2 left-2 bg-white text-xs md:text-sm rounded-lg px-3 py-2 text-primary">
                                &#x20A6;25.5M
                            </span>
                        </div>
                        <div class="space-y-2 md:space-y-3">
                            <p class="text-start text-secondary text-xs md:text-sm tracking-wide">Lagos</p>
                            <h3 class="font-semibold text-lg md:text-2xl text-black tracking-wider">Semi Detach</h3>
                            <div class="relative pb-4">
                                <a href=""
                                    class="text-primary tracking-wider text-sm md:text-base pt-24 transition-all duration-2000 hover:text-hoverPrimary">
                                    View
                                    Property
                                    <span class="absolute top-0 left-32">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-4 h-6 md:w-6 md:h-6 text-primary transition-all duration-3000 animate-ping">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>


                    {{-- LIST 2 --}}
                    <div id="list2" class="swiper-slide shadow-lg bg-white rounded-lg p-4 space-y-6">
                        <div class="relative">
                            <img class="rounded-lg w-fit" src="{{ asset('assets/images/home/price2.jpeg') }}"
                                alt="">
                            <span
                                class="absolute top-2 left-2 bg-white text-xs md:text-sm rounded-lg px-3 py-2 text-primary">
                                &#x20A6;56.9M
                            </span>
                        </div>
                        <div class="space-y-2 md:space-y-3">
                            <p class="text-start text-secondary text-xs md:text-sm tracking-wide">Kano</p>
                            <h3 class="font-semibold text-lg md:text-2xl text-black tracking-wider">Detach</h3>
                            <div class="relative pb-4">
                                <a href=""
                                    class="text-primary tracking-wider text-sm md:text-base pt-24 transition-all duration-2000 hover:text-hoverPrimary">
                                    View
                                    Property
                                    <span class="absolute top-0 left-32">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-4 h-6 md:w-6 md:h-6 text-primary transition-all duration-3000 animate-ping">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- LIST 3 --}}
                    <div id="list3" class="swiper-slide shadow-lg bg-white rounded-lg p-4 space-y-6">
                        <div class="relative">
                            <img class="rounded-lg w-fit" src="{{ asset('assets/images/home/price3.jpeg') }}"
                                alt="">
                            <span
                                class="absolute top-2 left-2 bg-white text-xs md:text-sm rounded-lg px-3 py-2 text-primary">
                                &#x20A6;100M
                            </span>
                        </div>
                        <div class="space-y-2 md:space-y-3">
                            <p class="text-start text-secondary text-xs md:text-sm tracking-wide">Abuja</p>
                            <h3 class="font-semibold text-lg md:text-2xl text-black tracking-wider">Mansion</h3>
                            <div class="relative pb-4">
                                <a href=""
                                    class="text-primary tracking-wider text-sm md:text-base pt-24 transition-all duration-2000 hover:text-hoverPrimary">
                                    View
                                    Property
                                    <span class="absolute top-0 left-32">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-4 h-6 md:w-6 md:h-6 text-primary transition-all duration-3000 animate-ping">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>



                    {{-- LIST 4 --}}
                    <div id="list2" class="swiper-slide shadow-lg bg-white rounded-lg p-4 space-y-6">
                        <div class="relative">
                            <img class="rounded-lg w-fit" src="{{ asset('assets/images/home/price2.jpeg') }}"
                                alt="">
                            <span
                                class="absolute top-2 left-2 bg-white text-xs md:text-sm rounded-lg px-3 py-2 text-primary">
                                &#x20A6;56.9M
                            </span>
                        </div>
                        <div class="space-y-2 md:space-y-3">
                            <p class="text-start text-secondary text-xs md:text-sm tracking-wide">Port Harcourt</p>
                            <h3 class="font-semibold text-lg md:text-2xl text-black tracking-wider">Apartment</h3>
                            <div class="relative pb-4">
                                <a href=""
                                    class="text-primary tracking-wider text-sm md:text-base pt-24 transition-all duration-2000 hover:text-hoverPrimary">
                                    View
                                    Property
                                    <span class="absolute top-0 left-32">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-4 h-6 md:w-6 md:h-6 text-primary transition-all duration-3000 animate-ping">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="absolute swiper-button-next text-primary text-sm"></div>
                <div class="swiper-button-prev text-primary"></div> --}}
            </div>

        </div>
    </section>


    {{-- Neighbour --}}
    <section class="">
        <div class="mx-auto p-6 py-10 md:py-20 px-6 md:px-16 space-y-16">
            <div class="space-y-6 pb-4">
                <h4 class="text-sm md:text-base text-primary">Building Facilities</h4>
                <h2 class="text-2xl md:text-3xl md:w-1/2 lg:text-5xl font-semibold text-black tracking-wide">
                    Find Your Dream House
                    Search By Area
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-8">


                <div class="relative col-span-2">
                    <img id="facility-img" class="" src="{{ asset('assets/images/home/neighbour.jpeg') }}"
                        alt="">

                    {{-- Small Images --}}
                    <div class="absolute w-72 md:w-96 bottom-4 right-0 left-0 grid grid-cols-3 gap-6 mx-6">
                        <span id="facility-img-1" class="border-8 md:border-8 border-white">
                            <img class="small-img" src="{{ asset('assets/images/home/neighbour.jpeg') }}"
                                alt="">
                        </span>
                        <span id="facility-img-2" class="border-8 md:border-8 border-white">
                            <img class="small-img" src="{{ asset('assets/images/home/neighbour2.jpeg') }}"
                                alt="">
                        </span>
                        <span id="facility-img-3" class="border-8 md:border-8 border-white">
                            <img class="small-img" src="{{ asset('assets/images/home/neighbour3.jpeg') }}"
                                alt="">
                        </span>
                    </div>
                </div>



                <div class="shadow-lg p-4 rounded-lg col-span-2 md:col-span-1">
                    <img class="" src="{{ asset('assets/images/home/n1.jpeg') }}" alt="">
                    <div class="mt-8 space-y-4">
                        <h3
                            class="text-lg md:text-xl font-semibold transition-all duration-150 hover:text-hoverPrimary cursor-pointer">
                            Shopping Center</h3>
                        <p class="text-secondary text-sm md:text-base">
                            <span class="text-primary">1,50m</span> / 15 min. walk
                        </p>
                        <p class="text-sm md:text-base text-secondary tracking-wide">Lorem ipsum dolor sit amet,
                            consecur
                            adipisicing elit, sed tempor incididunt ut
                            labore Enim ullamco laboris.

                        </p>
                        <div class="relative pb-4">
                            <a href=""
                                class="text-primary tracking-wider text-sm md:text-base pt-24 transition-all duration-2000 hover:text-hoverPrimary">
                                View
                                Property
                                <span class="absolute top-0 left-32">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-4 h-6 md:w-6 md:h-6 text-primary transition-all duration-3000 animate-ping">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                    </svg>
                                </span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                {{-- FIrst DIV --}}
                <div class="space-y-6">

                    <div class="group cursor-pointer flex items-center gap-4 border-b-4 border-softGrey pb-6">
                        <span class="bg-primary p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                            </svg>
                        </span>
                        <h1
                            class="text-black transition-all duration-200 group-hover:text-primary font-semibold text-md md:text-lg tracking-wider">
                            University / College</h1>
                    </div>

                    <div class="group cursor-pointer flex items-center gap-4 border-b-4 border-softGrey pb-6">
                        <span class="bg-primary p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                            </svg>
                        </span>
                        <h1
                            class="text-black transition-all duration-200 group-hover:text-primary font-semibold text-md md:text-lg tracking-wider">
                            Medical Hospital</h1>
                    </div>

                    <div class="group cursor-pointer flex items-center gap-4 border-b-4 border-softGrey pb-6">
                        <span class="bg-primary p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                            </svg>
                        </span>
                        <h1
                            class="text-black transition-all duration-200 group-hover:text-primary font-semibold text-md md:text-lg tracking-wider">
                            Railway Station</h1>
                    </div>



                </div>


                {{-- Seond DIV --}}
                <div class="space-y-6">

                    <div class="group cursor-pointer flex items-center gap-4 border-b-4 border-softGrey pb-6">
                        <span class="bg-primary p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                            </svg>
                        </span>
                        <h1
                            class="text-black transition-all duration-200 group-hover:text-primary font-semibold text-md md:text-lg tracking-wider">
                            Airport/Biman</h1>
                    </div>

                    <div class="group cursor-pointer flex items-center gap-4 border-b-4 border-softGrey pb-6">
                        <span class="bg-primary p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                            </svg>
                        </span>
                        <h1
                            class="text-black transition-all duration-200 group-hover:text-primary font-semibold text-md md:text-lg tracking-wider">
                            Shopping Mall</h1>
                    </div>

                    <div class="group cursor-pointer flex items-center gap-4 border-b-4 border-softGrey pb-6">
                        <span class="bg-primary p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                            </svg>
                        </span>
                        <h1
                            class="text-black transition-all duration-200 group-hover:text-primary font-semibold text-md md:text-lg tracking-wider">
                            Children Playland</h1>
                    </div>



                </div>
            </div>
        </div>
    </section>


    {{-- Testimonial --}}

    <section class="mb-6 lg:mb-36">
        <div class="relative mx-auto p-6 py-10 md:py-20 px-6 md:px-16 space-y-10 md:space-y-16 bg-lightGrey">

            <div class="text-center md:text-start space-y-6 lg:pb-24">
                <h4 class="text-sm md:text-base text-primary">Testimonial</h4>
                <h2 class="text-2xl md:text-3xl md:w-1/2 lg:text-5xl font-semibold text-black tracking-wide">
                    Our Client
                    Says About Us
                </h2>
            </div>

            <div id="testimonial-card"
                class="lg:absolute px-16 lg:-bottom-32 lg:right-0 lg:left-0 grid grid-cols-1 md:grid-cols-2 gap-6">

                <div id="testimonial-card-1" class="bg-white p-10 rounded-lg space-y-6 shadow-md">
                    <div class="flex items-center gap-3">
                        <span>
                            <img class="w-16 h-16 rounded-full" src="{{ asset('assets/images/home/p1.jpeg') }}"
                                alt="">
                        </span>
                        <div>
                            <h4 class="font-semibold text-sm lg:text-lg tracking-wider">Victor</h4>
                            <p class="text-secondary tracking-wider text-xs md:text-sm">Sell Agent</p>
                        </div>
                    </div>
                    <p class="text-xs lg:text-sm md:text-base leading-7 tracking-wide text-secondary">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eligendi illo nisi quis.
                        Pariatur, harum eaque, iste, ex magni quia tenetur ratione in atque tempore inventore. Cumque
                        nostrum eum nam.
                    </p>
                </div>


                <div id="testimonial-card-2"
                    class="bg-white p-10 rounded-lg space-y-6 shadow-md hidden lg:inline-block">
                    <div class="flex items-center gap-3">
                        <span>
                            <img class="w-16 h-16 rounded-full" src="{{ asset('assets/images/home/p1.jpeg') }}"
                                alt="">
                        </span>
                        <div>
                            <h4 class="font-semibold text-sm lg:text-lg tracking-wider">John Doe</h4>
                            <p class="text-secondary tracking-wider text-xs md:text-sm">Sell Agent</p>
                        </div>
                    </div>
                    <p class="text-xs lg:text-sm md:text-base leading-7 tracking-wide text-secondary">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eligendi illo nisi quis.
                        Pariatur, harum eaque, iste, ex magni quia tenetur ratione in atque tempore inventore. Cumque
                        nostrum eum nam.
                    </p>
                </div>

            </div>
        </div>
    </section>



    {{-- BLOG --}}
    <section class="mb-36">
        <div class="mx-auto p-6 py-10 md:py-20 px-6 md:px-16 space-y-10 bg-white">

            <div class="space-y-6 text-center">
                <h4 class="text-sm md:text-base text-primary">News & Blogs
                </h4>
                <h2 class="text-2xl md:text-3xl lg:text-5xl font-semibold text-black tracking-wide">
                    Leatest News Feeds

                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">


                {{-- List 1 --}}
                <div class="shadow-lg bg-white rounded-lg p-4 space-y-6">
                    <div class="relative">
                        <img class="rounded-lg w-fit" src="{{ asset('assets/images/home/price1.jpeg') }}"
                            alt="">
                    </div>

                    <div class="space-y-2 md:space-y-8">
                        <p class="text-start text-secondary text-xs md:text-sm tracking-wide">Interior</p>
                        <h3
                            class="font-semibold text-sm md:text-lg hover:text-primary cursor-pointer text-black tracking-wider">
                            The Most inspiring
                            interior design in 2024</h3>
                        <div class="border-t-2 py-7 flex justify-between items-center">
                            <p class="text-xs md:text-sm text-secondary">23 June, 2024</p>
                            {{-- <p>Read More</p> --}}
                            <div class="flex justify-center items-center gap-3">
                                <span>
                                    <a href=""
                                        class="text-primary tracking-wider text-sm md:text-md pt-24 transition-all duration-2000 hover:text-hoverPrimary">
                                        Read More
                                    </a>
                                </span>
                                <span class=" top-0 left-32">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-4 h-6 md:w-6 md:h-6 text-primary ctransition-all duration-4000 animate-ping">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                    </svg>
                                </span>

                            </div>

                        </div>
                    </div>
                </div>

                {{-- List 2 --}}
                <div class="shadow-lg bg-white rounded-lg p-4 space-y-6">
                    <div class="relative">
                        <img class="rounded-lg w-fit" src="{{ asset('assets/images/home/price2.jpeg') }}"
                            alt="">
                    </div>

                    <div class="space-y-2 md:space-y-8">
                        <p class="text-start text-secondary text-xs md:text-sm tracking-wide">Interior</p>
                        <h3
                            class="font-semibold text-sm md:text-lg hover:text-primary cursor-pointer text-black tracking-wider">
                            The Most inspiring
                            interior design in 2024</h3>
                        <div class="border-t-2 py-7 flex justify-between items-center">
                            <p class="text-xs md:text-sm text-secondary">23 June, 2024</p>
                            {{-- <p>Read More</p> --}}
                            <div class="flex justify-center items-center gap-3">
                                <span>
                                    <a href=""
                                        class="text-primary tracking-wider text-sm md:text-md pt-24 transition-all duration-2000 hover:text-hoverPrimary">
                                        Read More
                                    </a>
                                </span>
                                <span class="top-0 left-32">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-4 h-6 md:w-6 md:h-6 text-primary transition-all duration-4000 animate-ping">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                    </svg>
                                </span>

                            </div>

                        </div>
                    </div>
                </div>


                {{-- List 3 --}}
                <div class="shadow-lg bg-white rounded-lg p-4 space-y-6">
                    <div class="relative">
                        <img class="rounded-lg w-fit" src="{{ asset('assets/images/home/price3.jpeg') }}"
                            alt="">
                    </div>

                    <div class="space-y-2 md:space-y-8">
                        <p class="text-start text-secondary text-xs md:text-sm tracking-wide">Interior</p>
                        <h3
                            class="font-semibold text-sm md:text-lg hover:text-primary cursor-pointer text-black tracking-wider">
                            The Most inspiring
                            interior design in 2024</h3>
                        <div class="border-t-2 py-7 flex justify-between items-center">
                            <p class="text-xs md:text-sm text-secondary">23 June, 2024</p>
                            {{-- <p>Read More</p> --}}
                            <div class="flex justify-center items-center gap-3">
                                <span>
                                    <a href=""
                                        class="text-primary tracking-wider text-sm md:text-md pt-24 transition-all duration-2000 hover:text-hoverPrimary">
                                        Read More
                                    </a>
                                </span>
                                <span class=" top-0 left-32">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-4 h-6 md:w-6 md:h-6 text-primary transition-all duration-4000 animate-ping">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                    </svg>
                                </span>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</x-layout>
