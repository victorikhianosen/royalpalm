@extends('admin.dashboard.index')

@section('heading', 'Dashboard')

@section('main_content')

<div class="">
    <div class="">

        <form action="" method="POST" class="space-y-6">


            <div class="flex items-center space-x-8">
                <div class="flex flex-col space-y-1">
                    <label for="" class="text-base text-black">Photo</label>
                    <input class="bg-softGrey border-2 rounded-lg
                     border-lightGrey px-2 py-2 w-72 placeholder:text-sm focus:outline-none hover:border-primary"
                        class="" type="file" placeholder="Enter Name">
                </div>

            </div>


        </form>


    </div>



</div>

@endsection