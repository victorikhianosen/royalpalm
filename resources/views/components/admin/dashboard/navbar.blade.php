<div class="relative bg-white flex justify-between items-center h-20 ml-60 px-16">

    <div>
        <h2>@yield('heading')</h2>
    </div>
    <div id="open-admin-nav" class="flex justify-center items-center gap-2 cursor-pointer transition-all duration-900 hover:bg-softGrey h-full px-4">
        <img class="w-12 h-12 rounded-full border-2 border-secondary" src="{{ asset('assets/images/home/p1.jpeg') }}" alt="">
        <h3 class="text-sm tracking-wider">Victor</h3>
    </div>

    <div id="admin-nav-modal" class="absolute hidden top-20 text-black right-16 bg-white flex flex-col pl-8 pr-12 py-8 space-y-4 rounded-b-lg">
        <div>
            <a href="" class="transition-all duration-200 hover:text-primary">Profile</a>
        </div>
        <div>
            <a href="{{ route('admin_logout') }}" class="transition-all duration-200 hover:text-primary">Logout</a>
        </div>
    </div>

</div>
