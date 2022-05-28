@extends('layouts.user')

@section('content')

    <div class="pt-32 pb-24 bg-layout-gray ">
        <div class="w-11/12 xl:w-9/12 mx-auto shadow-xl bg-layout-lightgray py-10 rounded-2xl xl:mt-20 ">
            <div class="text-center ">
                <h1 class="text-lg tracking-tight font-extrabold sm:text-1xl md:text-4xl uppercase font-Rubik text-layout-red ">
                    Hotové auta
                </h1>
            </div>

            <div class="grid grid-cols-1 gap-6  xl:gap-10 sm:grid-cols-2 lg:grid-cols-4 m-10   ">
                @foreach ($posts as $post)
                    <x-user.gallery.gallery :post='$post'/>
                @endforeach
            </div>



        </div>
    </div>

@endsection
