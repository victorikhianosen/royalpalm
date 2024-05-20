<x-layout>
    <div class="mb-40 lg:mb-64">
        <div class="mx-auto p-6 py-12 lg:py-24 md:py-6 px-6 md:px-16 bg-softGrey">
            <div class="py-0 lgpy-24">
                <h3 class="text-2xl lg:text-4xl text-black font-semibold">Contact</h3>
            </div>
        </div>

        <div class="mx-auto p-6 md:px-16 mt-8 lg:mt-24 bg-white">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mx-12 md:mx-6 lg:mx-0">

                <div class="flex flex-col items-center border-2 border-softBg px-4 py-12 space-y-4 lg:space-y-6">
                    <img class="w-16 h-16 lg:h-20 lg:w-20" src="{{ asset('assets/images/home/contact1.png') }}" alt="">
                    <div class="space-y-4 lg:space-y-6">
                        <h3 class="text-md lg:text-2xl font-semibold text-black tracking-widest lg:tracking-wide">Email
                            Address
                        </h3>
                        <div class="space-y-2 text-sm lg:text-base text-center text-secondary">
                            <p>info@exmaple.com
                            </p>
                            <p>jobs@exmaple.com
                            </p>
                        </div>

                    </div>
                </div>


                <div class="flex flex-col items-center border-2 border-softBg px-4 py-12 space-y-4 lg:space-y-6">
                    <img class="w-16 h-16 lg:h-20 lg:w-20" src="{{ asset('assets/images/home/contact2.png') }}" alt="">
                    <div class="space-y-4 lg:space-y-6">
                        <h3 class="text-md lg:text-2xl font-semibold text-black tracking-widest lg:tracking-wide">Phone
                            Number

                        </h3>
                        <div class="space-y-2 text-sm lg:text-base text-center text-secondary">
                            <p>+0123-456789
                            </p>
                            <p>+987-6543210
                            </p>
                        </div>

                    </div>
                </div>


                <div class="flex flex-col items-center border-2 border-softBg px-4 py-12 space-y-4 lg:space-y-6">
                    <img class="w-16 h-16 lg:h-20 lg:w-20" src="{{ asset('assets/images/home/contact3.png') }}" alt="">
                    <div class="space-y-4 lg:space-y-6">
                        <h3 class="text-md lg:text-2xl font-semibold text-black tracking-widest lg:tracking-wide">Office
                            Address

                        </h3>
                        <div class="space-y-2 text-sm lg:text-base text-center text-secondary">
                            <p>18/A, New Born Town Hall

                            </p>
                            <p>New York, US
                            </p>
                        </div>

                    </div>
                </div>



            </div>

        </div>


        {{-- FORM --}}

        <div class="mx-auto p-6 px-6 md:px-16 mt-8 lg:mt-24 bg-white">
            <div class="border-2 border-primary px-12 py-12">
                <h1 class="text-xl font-semibold border-l-4 border-primary pl-4">Get A Quote</h1>
                <div class="mt-12">
                    <form action="" class="space-y-8">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-6 lg:gap-y-0">
                            <div class="relative border-2 border-softGrey hover:border-primary px-2 py-4">
                                <input
                                    class="w-full pr-10 focus:outline-none text-primary appearance-none placeholder:font-light placeholder:text-sm placeholder:tracking-wider"
                                    type="text" placeholder=" Enter your name">
                                <span class="absolute top-4 right-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-5 h-5 md:w-6 md:h-6 text-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                                    </svg>
                                </span>
                            </div>

                            <div class="relative border-2 border-softGrey hover:border-primary px-2 py-4">
                                <input
                                    class="w-full pr-10 focus:outline-none text-primary appearance-none placeholder:font-light placeholder:text-sm placeholder:tracking-wider"
                                    type="text" placeholder=" Enter email address">
                                <span class="absolute top-4 right-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-5 h-5 md:w-6 md:h-6 text-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                                    </svg>
                                </span>
                            </div>

                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-6 lg:gap-y-0">

                            <div class="relative border-2 border-softGrey hover:border-primary px-2 py-4">
                                <input
                                    class="w-full pr-10 focus:outline-none text-primary appearance-none placeholder:font-light placeholder:text-sm placeholder:tracking-wider"
                                    type="text" placeholder=" Enter your name">
                                <span class="absolute top-4 right-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-5 h-5 md:w-6 md:h-6 text-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                                    </svg>
                                </span>
                            </div>

                            <div class="relative border-2 border-softGrey hover:border-primary px-2 py-4">
                                <input
                                    class="w-full pr-10 focus:outline-none text-primary appearance-none placeholder:font-light placeholder:text-sm placeholder:tracking-wider"
                                    type="text" placeholder=" Enter email address">
                                <span class="absolute top-4 right-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-5 h-5 md:w-6 md:h-6 text-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <div class="relative border-2 border-softGrey hover:border-primary px-2 py-4">

                            <textarea
                                class="w-full pr-10 focus:outline-none
                                 text-gray-400 appearance-none text-left
                                text-sm tracking-wider font-light
                                "
                                name="" id="" cols="30" rows="5">Enter message
                                </textarea>
                            <span class="absolute top-4 right-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6 text-primary">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                                </svg>
                            </span>
                        </div>

                        <div class="flex gap-4 lg:gap-2 text-xs lg:text-sm font-extralight text-secondary tracking-wide">
                            <input type="checkbox" name="" id="">
                            <p>
                                Save my name, email, and website in this browser for the next time I comment.
                            </p>
                        </div>

                        <button class="text-base tracking-widest bg-primary font-light px-12 py-6 text-white uppercase">
                            Get A Service
                        </button>

                    </form>

                </div>
            </div>

        </div>


    </div>
</x-layout>
