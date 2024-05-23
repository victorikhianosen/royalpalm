@extends('admin.dashboard.index')

@section('heading', 'Dashboard')

@section('main_content')

    <div class="">
        <div class="">

            <div class="flex items-center mb-6">
                <img class="w-56 h-48 rounded-lg" src="{{ asset('assets/images/home/price1.jpeg') }}" alt="">
            </div>

            <form action="{{ route('admin_slide_add') }}" method="POST" class="space-y-6" entype="multipart/form-data">
                @csrf
                <div class="flex items-center space-x-8">
                    <div class="flex flex-col space-y-1">
                        <label for="" class="text-base text-black">Photo</label>
                        <input
                            class="bg-softGrey border-2 rounded-lg
                     border-lightGrey px-2 py-2 w-72 placeholder:text-sm focus:outline-none hover:border-primary"
                            class=""  name="photo" type="file" placeholder="Enter Name">
                            @error('photo')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="" class="text-base text-black">Title</label>
                        <input
                            class="bg-softGrey border-2 rounded-lg
                     border-lightGrey px-2 py-2 w-72 placeholder:text-sm focus:outline-none hover:border-primary"
                            class="" name="title" type="text" placeholder="Enter Name">
                            @error('title')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center space-x-8">
                    <div class="flex flex-col space-y-1">
                        <label for="" class="text-base text-black">Description</label>
                        <input
                            class="bg-softGrey border-2 rounded-lg
                     border-lightGrey px-2 py-2 w-72 placeholder:text-sm focus:outline-none hover:border-primary"
                            class="" name="description" type="text" placeholder="Enter Name">
                            @error('description')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col space-y-1">
                        <label for="" class="text-base text-black">Button</label>
                        <input
                            class="bg-softGrey border-2 rounded-lg
                     border-lightGrey px-2 py-2 w-72 placeholder:text-sm focus:outline-none hover:border-primary"
                            class="" name="button" type="text" placeholder="Enter Name">
                            @error('button')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <div class="flex items-center space-x-8">
                    <button class="bg-primary text-white text-lg tracking-wider py-2 px-4">Submit</button>
                </div>
            </form>

         

        </div>



    </div>

@endsection
