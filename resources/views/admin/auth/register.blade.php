<x-auth>
    <section class="">
        {{-- <section class="hidden lg:block"> --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 w-screen h-screen items-center bg-softGrey">
            <img class="hidden lg:block w-screen h-screen" src="{{ asset('assets/images/home/price2.jpeg') }}"
                alt="">

            <div class="px-10 space-y-12 lg:space-y-24">
                <div class="text-center space-y-8">
                    <h2 class="text-3xl font-bold lg:text-4xl tracking-wider text-primary">Admin Sign Up</h2>
                    <p class="text-secondary text-sm lg:text-base font-light">Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit.
                        Sit aliquid, Non distinctio vel iste.</p>
                </div>


                <div>
                    <form action="{{ route('admin_register_submit') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="flex w-full space-x-6">
                            <div class="w-full">
                                <input
                                    class="w-full focus:outline-none text-primary border-2
                                     border-softGrey px-2 py-4 placeholder:text-xs placeholder:lg:text-sm
                                     tracking-wider placeholder:text-grey-600 hover:border-2  hover:border-primary"
                                    type="text" name="firstname" id="" value="{{ old('firstname') }}" placeholder="Enter first name">
                                <div>
                                    @error('firstname')
                                        <span class="text-red-900 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full">
                                <input
                                    class="w-full focus:outline-none text-primary border-2
                                     border-softGrey px-2 py-4 placeholder:text-xs placeholder:lg:text-sm
                                     tracking-wider placeholder:text-grey-600 hover:border-2  hover:border-primary"
                                    type="text" name="lastname" id="" value="{{ old('lastname') }}" placeholder="Enter last name">
                                <div>
                                    @error('lastname')
                                        <span class="text-red-900 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                

                        <div class="">
                            <input
                                class="w-full focus:outline-none text-primary border-2
                                 border-softGrey px-2 py-4 placeholder:text-xs placeholder:lg:text-sm
                                 tracking-wider placeholder:text-grey-600 hover:border-2  hover:border-primary"
                                type="email" name="email" id=""  value="{{ old('email') }}"  placeholder="Enter your email">
                            <div>
                                @error('email')
                                <span class="text-red-900 text-xs">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="">
                            <input
                                class="w-full focus:outline-none text-primary border-2
                                 border-softGrey px-2 py-4 placeholder:text-xs placeholder:lg:text-sm
                                 tracking-wider placeholder:text-grey-600 hover:border-2  hover:border-primary"
                                type="password" name="password" id="" placeholder="Enter your password">
                            <div>
                                @error('password')
                                <span class="text-red-900 text-xs">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="">
                            <input
                                class="w-full focus:outline-none text-primary border-2
                                 border-softGrey px-2 py-4 placeholder:text-xs placeholder:lg:text-sm
                                 tracking-wider placeholder:text-grey-600 hover:border-2  hover:border-primary"
                                type="password" name="password_confirmation" id="" placeholder="Confirm password">
                            <div>
                                @error('password_confirmation')
                                <span class="text-red-900 text-xs">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="pt-4">
                            <button
                                class="text-lg font-semibold lg:text-xl bg-primary hover:bg-hoverPrimary text-white px-12 py-4 tracking-wider">
                                Submit
                            </button>
                        </div>
                    </form>

                    <div class=" flex justify-between">
                        <div
                            class="mt-8 uppercase text-xs text-primary font-extralight transition-all duration-1000 hover:text-hoverPrimary  hover:translate-x-5">
                            <a href="{{ route('admin_forget_password') }}">Forget password</a>
                        </div>
                        <div
                            class="mt-8 uppercase text-xs text-primary font-extralight transition-all duration-1000 hover:text-hoverPrimary  hover:-translate-x-5">
                            <a href="{{ route('admin_login') }}">Login</a>
                        </div>
                    </div>


                </div>

            </div>
        </div>


    </section>

</x-auth>
