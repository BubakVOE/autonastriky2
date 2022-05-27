@extends('layouts.user')

@section('content')

    <x-user.home.introduction/>

    <div class="bg-layout-gray">

        <x-user.home.services :newCars="$newCars" :completedCars="$completedCars" :posts="$posts"/>

        <x-user.home.gallery/>

        <x-user.home.contacts/>

    </div>

{{-- addons --}}
    <x-user.home.leftnav/>

    @if(session()->has('message'))
        <div class="absolute left-1/2 transform -translate-x-1/2 top-40 translate-y-1 bg-green-500 px-3 py-2 rounded-md">
            <h1 class="text-xl text-white">
                {{ session()->get('message') }}
            </h1>
        </div>
    @endif

    @if ($errors->any())
        <div class="absolute left-1/2 transform -translate-x-1/2 top-40 translate-y-1 bg-red-500 px-3 py-2 rounded-md">
            @foreach ($errors->all() as $error)
                <li class="">{{ $error }}</li>
            @endforeach
        </div>
    @endif

@endsection
