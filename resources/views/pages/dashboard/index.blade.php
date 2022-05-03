@extends('layouts.dashboard')

@section('content')


<div class="max-w-7xl mx-auto my-40 space-y-16 ">

    <div>
        <div class="font-bold text-4xl font-Rubik text-left">
            <h1 class="text-layout-red border-b">Celkový přehled</h1>
        </div>

        <div class="grid grid-cols-3 mt-20 gap-5">

            <div class="flex flex-col justify-around w-10/12 p-10 mx-auto rounded-xl shadow-2xl bg-layout-red space-y-10">
                <div class="flex justify-around space-x-4 ">

                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>

                    <div class="text-center space-y-2">
                        <h2 class="font-semibold text-white">Nové objednávky</h2>
                        <h1 class="font-bold font-Rubik text-black">{{ $new_cars }}</h1>
                    </div>

                </div>

                <a href=""
                    class="w-5/12 mx-auto py-2 bg-blue-100 font-bold text-center hover:bg-blue-300">
                    Zobrazit
                </a>

            </div>

            <div class="flex flex-col justify-around  w-10/12 p-10 mx-auto rounded-xl shadow-2xl bg-layout-red space-y-10">
                <div class="flex justify-around space-x-4 ">

                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>

                    <div class="text-center space-y-2">
                        <h2 class="font-semibold text-white">Dokončené objednávky</h2>
                        <h1 class="font-bold font-Rubik text-black">{{ $completed_cars }}</h1>
                    </div>

                </div>

                <a href=""
                    class="w-5/12 mx-auto py-2 bg-blue-100 font-bold text-center hover:bg-blue-300 ">
                    Zobrazit
                </a>

            </div>

            <div class="flex flex-col justify-around  w-10/12 p-10 mx-auto rounded-xl shadow-2xl bg-layout-red space-y-10">
                <div class="flex justify-around space-x-4 ">

                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>

                    <div class="text-center space-y-2">
                        <h2 class="font-semibold text-white">Galerie - příspěvky</h2>
                        <h1 class="font-bold font-Rubik text-black">50</h1>
                    </div>

                </div>

                <a href=""
                    class="w-5/12 mx-auto py-2 bg-blue-100 font-bold text-center hover:bg-blue-300">
                    Zobrazit
                </a>

            </div>
        </div>
    </div>

    <div class="grid grid-cols-1">
        <div class="font-bold text-4xl font-Rubik text-left">
            <h1 class="text-layout-red border-b">Nové nabídky</h1>
        </div>

        <div class="grid grid-cols-3 mt-20 gap-5">


        </div>
    </div>
</div>





@endsection



