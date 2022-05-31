@extends('layouts.dashboard')

@section('content')

    @if(session()->has('update'))
        <div class="absolute left-1/2 transform -translate-x-1/2 top-40 translate-y-1 bg-green-500 px-3 py-2 rounded-md">
            <h1 class="text-xl text-white">
                {{ session()->get('update') }}
            </h1>
        </div>
    @elseif(session()->has('delete'))
        <div class="absolute left-1/2 transform -translate-x-1/2 top-40 translate-y-1 bg-red-500 px-3 py-2 rounded-md">
            <h1 class="text-xl text-white">
                {{ session()->get('delete') }}
            </h1>
        </div>
    @endif

    <div class="bg-layout-gray">
        <div class="max-w-7xl mx-auto py-40 space-y-16  ">
        {{-- celkový přehled --}}
            <div>
                <div class="font-bold text-4xl font-Rubik text-left">
                    <h1 class="text-white pb-2 border-b">Celkový přehled</h1>
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
                                <h1 class="font-bold font-Rubik text-black">{{ $new_cars->count() }}</h1>
                            </div>

                        </div>

                        <a href=""
                            class="w-5/12 mx-auto py-2 bg-white font-bold text-center hover:bg-gray-300 transition duration-500 ease-in-out">
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
                                <h1 class="font-bold font-Rubik text-black">{{ $completed_cars->count() }}</h1>
                            </div>

                        </div>

                        <a href=""
                            class="w-5/12 mx-auto py-2 bg-white font-bold text-center hover:bg-gray-300 transition duration-500 ease-in-out ">
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
                                <h1 class="font-bold font-Rubik text-black">{{ $posts->count() }}</h1>
                            </div>

                        </div>

                        <a href=""
                            class="w-5/12 mx-auto py-2 bg-white font-bold text-center hover:bg-gray-300 transition duration-500 ease-in-out">
                            Zobrazit
                        </a>

                    </div>
                </div>
            </div>

        {{-- nové nabídky --}}
            <div class="grid grid-cols-1">
                <div class="font-bold text-4xl font-Rubik text-left">
                    <h1 class="text-white pb-2 border-b">Nové nabídky</h1>
                </div>

                <div class="mt-10 bg-layout-red p-2 shadow-xl">
                    <div class="bg-gray-200 grid grid-cols-8 py-5 place-items-center font-bold font-poppins border-b-2 border-layout-black">

                        <h1>ID</h1>

                        <h1>Jméno</h1>

                        <h1>E-mail</h1>

                        <h1>telefonní číslo</h1>

                        <h1>auto</h1>

                        <div class="flex flex-col items-center justify-center">
                            <h1>datum</h1>
                            <h1 class="font-light text-xs">den/měsíc/rok</h1>
                        </div>

                        <h1>Předběžná rezervace</h1>

                        <div class="flex flex-col items-center justify-center">
                            <h1>Upravy</h1>
                            <h1 class="font-light text-xs">smazat / hotovo</h1>
                        </div>

                    </div>

                    @foreach ($new_cars as $reserve)

                        <div class="grid grid-cols-8 place-items-center font-poppins text-sm py-4 border-b border-layout-black bg-gray-600">

                            <h1 class="">
                                {{ $reserve->id }}asdfasdfasdfasdf
                            </h1>

                            <h1>
                                {{ $reserve->firstName }} {{ $reserve->lastName }}
                            </h1>

                            <h1>
                                {{ $reserve->email }}
                            </h1>

                            <h1>
                                {{ $reserve->mobile }}
                            </h1>

                            <div>
                                <h1>
                                    {{ $reserve->car }} {{ $reserve->type }}
                                </h1>
                            </div>

                            <h1>{{ date('jS M Y', strtotime($reserve->created_at)) }}</h1>

                            <h1>{{ date('jS M Y', strtotime($reserve->date)) }}</h1>

                            <div class="flex flex-row justify-evenly">

                                <form action="/dashboard/reserve/delete/{{ $reserve->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 px-3 py-2 rounded-l-md text-base hover:text-orange-200 focus:outline-none"
                                            type="submit" >
                                        Smazat
                                    </button>
                                </form>

                                <form action="/dashboard/reserve/update/{{ $reserve->id }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                        <input type="hidden" name="done"/>
                                        <button class="bg-green-500 px-3 py-2 rounded-r-md text-base hover:text-green-200 focus:outline-none"
                                                type="submit">
                                            Hotovo
                                        </button>
                                </form>

                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        {{-- historie nabídek --}}
            <div class="grid grid-cols-1">
                <div class="font-bold text-4xl font-Rubik text-left">
                    <h1 class="text-white pb-2 border-b">Historie nabídek</h1>
                </div>

                <div class="mt-10 bg-layout-red p-2 shadow-xl">
                    <div class="bg-gray-200 grid grid-cols-8 py-5 place-items-center font-bold font-poppins border-b-2 border-layout-black">

                        <h1>ID</h1>

                        <h1>Jméno</h1>

                        <h1>E-mail</h1>

                        <h1>telefonní číslo</h1>

                        <h1>auto</h1>

                        <div class="flex flex-col items-center justify-center">
                            <h1>datum</h1>
                            <h1 class="font-light text-xs">den/měsíc/rok</h1>
                        </div>

                        <h1>Předběžná rezervace</h1>

                        <div class="flex flex-col items-center justify-center">
                            <h1>Upravy</h1>
                        </div>

                    </div>

                    @foreach ($completed_cars as $completed_car)

                        <div class="grid grid-cols-8 place-items-center font-poppins text-sm py-4 border-b border-layout-black bg-gray-200">

                            <h1 class="">{{ $completed_car->id }}</h1>

                            <h1>{{ $completed_car->firstName }} {{ $completed_car->lastName }}</h1>

                            <h1>{{ $completed_car->email }}</h1>

                            <h1>{{ $completed_car->mobile }}</h1>

                            <div>
                                <h1>
                                    {{ $completed_car->car }} {{ $completed_car->type }}
                                </h1>
                            </div>

                            <h1>{{ date('jS M Y', strtotime($completed_car->created_at)) }}</h1>

                            <h1>{{ date('jS M Y', strtotime($completed_car->date)) }}</h1>

                            <div class="flex flex-row justify-evenly">

                                <form action="/dashboard/reserve/delete/{{ $completed_car->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-layout-red px-3 py-2 rounded-md text-base hover:text-orange-200 focus:outline-none"
                                            type="submit" >
                                        Smazat
                                    </button>
                                </form>

                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        {{-- Galerie --}}
            <div class="grid grid-cols-1 ">
                <div class="flex flex-row space-x-4 font-bold text-4xl font-Rubik text-left border-b">
                    <h1 class="text-white pb-2 ">Galerie</h1>

                    <a  class="flex items-center justify-center relative left-48 bottom-4 border-2 border-layout-green text-layout-green group px-4 py-1 "
                        href="{{ route('galerie.create') }}">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 group-hover:bg-layout-green group-hover:text-layout-red rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                        <span>
                            Přidat
                        </span>
                    </a>
                </div>

                <div class="mt-10 bg-layout-red p-2 shadow-xl">
                    <div class="bg-gray-200 grid grid-cols-7 py-5 place-items-center font-bold font-poppins border-b-2 border-layout-black">

                        <h1>ID</h1>

                        <h1>cover</h1>

                        <h1>auto</h1>

                        <h1>Popis</h1>

                        <div class="flex flex-col items-center justify-center">
                            <h1>poslední upravy</h1>
                            <h1 class="font-light text-xs">den/měsíc/rok</h1>
                        </div>

                        <div class="flex flex-col items-center justify-center">
                            <h1>vytvořeno</h1>
                            <h1 class="font-light text-xs">den/měsíc/rok</h1>
                        </div>

                        <div class="flex flex-col items-center justify-center">
                            <h1>Upravy</h1>
                            <h1 class="font-light text-xs">smazat / upravit / ukázat </h1>
                        </div>


                    </div>

                    @foreach ($posts as $post)

                        <div class="p-2 grid grid-cols-7 place-items-center font-poppins text-sm py-4 border-b border-layout-black bg-gray-200">

                            <h1 class="font-semibold">{{ $post->id }}</h1>

                            <img class="w-24" src="{{ asset('posts/thumbNail/'.$post->cover) }}" alt="">

                            <h1>{{ $post->car }}_{{ $post->type }}</h1>

                            <h1 class="w-24 overflow-auto">{{ $post->description }}</h1>

                            <h1>{{ date('jS M Y', strtotime($post->created_at)) }}</h1>

                            <h1>{{ date('jS M Y', strtotime($post->updated_at)) }}</h1>

                            <div class="p-2 flex flex-col items-center justify-center space-y-1 w-20 mx-auto bg-layout-white">

                                <button class="bg-layout-red px-2 py-1 rounded font-Rubik text-base focus:outline-none"
                                        type="submit" >
                                    Smazat
                                </button>

                                <a href=" "
                                    class="bg-blue-500 px-2 py-1 rounded font-Rubik text-base focus:outline-none">
                                    Upravit
                                </a>

                                <a href=" "
                                    class="bg-layout-green px-2 py-1 rounded font-Rubik text-base focus:outline-none">
                                    Ukázat
                                </a>

                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>





@endsection



