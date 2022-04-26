@extends('layouts.master')

@section('content')

    <x-home.introduction/>

    <x-home.services/>

    <x-home.gallery/>


    <x-home.leftnav/>


    @if(session()->has('message'))
    <div class="absolute left-1/2 transform -translate-x-1/2 top-40 translate-y-1 bg-green-500 px-3 py-2 rounded-md">
        <h1 class="text-xl text-black-custom">
            {{ session()->get('message') }}
        </h1>
    </div>
@endif

@endsection
