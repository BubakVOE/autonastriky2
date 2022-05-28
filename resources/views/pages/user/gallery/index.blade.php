
@extends('layouts.user')
@section('content')




<div class="pt-32 pb-24 bg-layout-gray ">
    <div class="w-11/12 xl:w-9/12 mx-auto shadow-xl bg-layout-lightgray py-10 rounded-2xl xl:mt-20 ">
        <div class="text-center ">
            <h1 class="text-lg tracking-tight font-extrabold sm:text-1xl md:text-4xl uppercase font-Rubik text-layout-red ">
                Hotové auta
            </h1>
        </div>

        <div class="grid grid-cols-1 gap-x-6 gap-y-8 xl:gap-x-10 sm:grid-cols-2 lg:grid-cols-4 m-10   ">
            <x-user.services.service text='Výměna pneumatik'/>
            <x-user.services.service text='Nástřiky dutin'/>
            <x-user.services.service text='Umytí a naleštění skel'/>
            <x-user.services.service text='Vyluxování auta'/>
        </div>

        <div class="text-center">
            <a href="{{ route('services-index') }}"
                class="font-Rubik font-bold uppercase rounded px-4 py-2 text-2xl border text-white border-white bg-layout-red bg-opacity-80 hover:bg-opacity-100 transition duration-500 ease-in-out">
                Zobrazit služby
            </a>
        </div>

    </div>
</div>




@endsection
