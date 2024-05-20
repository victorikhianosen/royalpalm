<x-auth>
    <section class="">
    {{-- <section class="hidden lg:block"> --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 w-screen h-screen items-center bg-softGrey">
            <img class="hidden lg:block w-screen h-screen" src="{{ asset('assets/images/home/price3.jpeg') }}"
                alt="">

            <div class="px-10 space-y-12 lg:space-y-24">
                <div class="text-center space-y-8">
                    <h2 class="text-3xl font-bold lg:text-4xl tracking-wider text-primary">Admin Sign in</h2>
                    <p class="text-secondary text-sm lg:text-base font-light">Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit.
                        Sit aliquid, Non distinctio vel iste.</p>
                </div>


                <div>
                    <form action="{{ route('admin_login_submit') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="">
                            <input
                                class="w-full focus:outline-none text-primary border-2
                                 border-softGrey px-2 py-4 placeholder:text-xs placeholder:lg:text-sm
                                 tracking-wider placeholder:text-grey-600 hover:border-2  hover:border-primary"
                                type="text" name="email" id="" placeholder="Enter your email" value="{{ old('email') }}">
                                @error('email')
                                <span class="text-red-900 text-xs">{{ $message }}</span>
                                @enderror
                        </div>

                        <div class="">
                            <input
                                class="w-full focus:outline-none text-primary border-2
                                 border-softGrey px-2 py-4 placeholder:text-xs placeholder:lg:text-sm
                                 tracking-wider placeholder:text-grey-600 hover:border-2  hover:border-primary"
                                type="password" name="password" id="" placeholder="Enter your password">
                                @error('password')
                                <span class="text-red-900 text-xs">{{ $message }}</span>
                                @enderror
                        </div>

                        <div class="pt-4">
                            <button class="text-lg lg:text-xl font-semibold bg-primary hover:bg-hoverPrimary text-white px-12 py-4 tracking-wider">
                                Submit
                            </button>
                        </div>
                    </form>

                    <div class=" flex justify-between">
                        <div class="mt-8 uppercase text-xs text-primary font-extralight transition-all duration-1000 hover:text-hoverPrimary  hover:translate-x-5">
                            <a href="{{ route('admin_forget_password') }}">Forget password</a>
                        </div>
                        <div class="mt-8 uppercase text-xs text-primary font-extralight transition-all duration-1000 hover:text-hoverPrimary  hover:-translate-x-5">
                            <a href="{{ route("admin_register") }}">Register</a>
                        </div>
                    </div>


                </div>

            </div>
        </div>


    </section>

    {{-- <div class="text-center space-y-8 bg-primary px-4 py-8">
        <p class="text-white text-sm lg:text-base font-light">
            Sorry to make some changes on the admin dashbard can only be done through the pc or laptop
        </p>
    </div> --}}
</x-auth>
