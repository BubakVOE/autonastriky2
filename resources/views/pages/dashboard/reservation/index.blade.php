@extends('layouts.master')

@section('content')

@if(session()->has('message'))
<div class="absolute left-1/2 transform -translate-x-1/2 top-40 translate-y-1 bg-green-500 px-3 py-2 rounded-md">
    <h1 class="text-xl text-white">
        {{ session()->get('message') }}
    </h1>
</div>
@endif

{{-- Objednávky online --}}
<div class="max-w-7xl mx-auto my-40">
    <h1 class="text-xl font-poppins font-bold mb-3">
        Objednávky online
    </h1>

    <div class=" w-full m-auto bg-layout-lightgray p-2 shadow-xl rounded-lg">
        <div class="bg-layout-white grid grid-cols-8  py-5 place-items-center font-bold font-poppins border-b-2 border-layout-black">

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

        <div class="">
            @foreach ($reservations as $reserve)

                @if ($reserve->done == 0)
                    <div class="grid grid-cols-8 place-items-center font-poppins text-sm py-4 border-b border-layout-black">

                        <h1 class="">{{ $reserve->id }}</h1>

                        <h1>{{ $reserve->firstName }} {{ $reserve->lastName }}</h1>

                        <h1>{{ $reserve->email }}</h1>

                        <h1>{{ $reserve->mobile }}</h1>

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
                                    smazat
                                </button>
                            </form>

                            <form action="/dashboard/reserve/update/{{ $reserve->id }}" method="POST">
                                @method('PUT')
                                @csrf
                                    <input type="hidden" name="done"/>
                                    <button class="bg-green-500 px-3 py-2 rounded-r-md text-base hover:text-green-200 focus:outline-none"
                                            type="submit">
                                        Done
                                    </button>
                            </form>

                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto my-40">
    <h1 class="text-xl font-poppins font-bold mb-3">
        Hotové objednávky
    </h1>

    <div class=" w-full m-auto bg-layout-lightgray p-2 shadow-xl rounded-lg">
        <div class="bg-layout-white grid grid-cols-8  py-5 place-items-center font-bold font-poppins border-b-2 border-layout-black">

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

        <div class="">
            @foreach ($reservations as $reserve)
                @if ($reserve->done == 1)
                <div class="grid grid-cols-8 place-items-center font-poppins text-sm py-4 border-b border-layout-black">

                    <h1 class="">{{ $reserve->id }}</h1>

                    <h1>{{ $reserve->firstName }} {{ $reserve->lastName }}</h1>

                    <h1>{{ $reserve->email }}</h1>

                    <h1>{{ $reserve->mobile }}</h1>

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
                            <button class="mr-1 bg-red-500 px-3 py-2 rounded-md text-base hover:text-orange-200" type="submit" >
                                smazat
                            </button>
                        </form>

                    </div>
                </div>

                @endif
            @endforeach
        </div>

    </div>
</div>


@endsection



