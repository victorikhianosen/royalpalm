<div class="bg-white fixed top-0 right-0 left-0 h-24 z-10 p-6 mx-auto lg:px-16 ">
    <div class="flex justify-between items-center">
        <div>
            <img class="w-36" src="{{ asset('assets/images/home/home.png') }}" alt="">
        </div>


        <div class="relative">
            <div>
                <button id="admin-nav-btn">
                    <img class="w-16 border-4 border-primary rounded-full" src="{{ asset('assets/images/home/p1.jpeg') }}"
                        alt="">
                </button>
            </div>

            <div id="admin-nav-modal" class="hidden inline-block
            absolute top-16 right-0 bg-white flex flex-col pt-8 pb-10 rounded-b-lg
             pl-4 pr-20 space-y-4 border-primary border-2">
                <a href="" class="transition duration-1000 hover:translate-x-6">Account</a>
                <a href="{{ route('admin_logout') }}" class="transition duration-1000 hover:translate-x-6"> Logout</a>
                <button class="transition duration-1000 hover:translate-x-6">Logout</button>
            </div>
        </div>
    </div>
</div>
