@extends('layouts.user')

@section('content')

{{-- main pages --}}
    <x-user.home.introduction/>

    <x-user.home.services/>

    <x-user.home.gallery/>

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
