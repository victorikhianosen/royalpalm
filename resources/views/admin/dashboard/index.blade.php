<x-header />


    <section class="bg-softGrey">
        <div class="">
            {{-- Sidebar --}}
            <x-admin.dashboard.sidebar />
            {{-- Navbar --}}
            <x-admin.dashboard.navbar />
            {{-- MAIN --}}
            <div class="bg-softGrey flex justify-between ml-60">
                <div class="bg-softGrey h-full p-8">

                    @yield('main_content')

                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('/assets/js/admin.js') }}"></script>
<x-footer />
