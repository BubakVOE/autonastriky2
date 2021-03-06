@extends('layouts.user')

@section('content')

    <div class="pt-20 bg-layout-gray">
        <div class="md:py-20 m-auto flex items-center w-full md:w-11/12 md:px-2 p-4 ">
            <div class="h-full max-w-md mx-auto rounded-lg overflow-hidden md:max-w-2xl md:w-9/12 w-full bg-gradient-to-br from-own-orange to-gradient-red">
                <div class="">

                    <form   class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 bg-layout-lightgray"
                            method="POST"
                            action="{{ route('register') }}">

                        @csrf

                        <div class="grid grid-cols-1 place-items-center p-3 px-6 py-10">

                            <div>
                                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                                    Zaregistruj si svůj učet
                                </h2>
                                <p class="mt-2 text-center text-sm text-gray-800">
                                    zcela zdarma bez poplatků
                                </p>
                            </div>

                            <div>
                                <div class="md:flex md:justify-between space-x-2">
                                    <div class="mt-14 md:mt-16 relative md:w-6/12">
                                        <span class="absolute px-2 pb-1 bottom-12 ml-1 rounded-t-md bg-black-lighter text-own-orange">
                                            Jméno
                                        </span>
                                        <input  id="givenName"
                                                type="text"
                                                name="givenName"
                                                class="@error('givenName') @enderror h-12 px-2 w-full rounded border border-black-custom outline-none "
                                                required
                                                autocomplete="given-name"
                                                placeholder="Pavel"
                                                >
                                    </div>

                                    <div class="mt-14 md:mt-16 relative md:w-6/12">
                                        <span class="absolute px-2 pb-1 bottom-12 ml-1 rounded-t-md bg-black-lighter text-own-orange">
                                            Příjmení
                                        </span>
                                        <input  type="text"
                                                name="familyName"
                                                class="@error('familyName') @enderror h-12 px-2 w-full rounded border border-black-custom outline-none"
                                                required
                                                autocomplete="family-name"
                                                placeholder="Novák"
                                                >
                                    </div>
                                </div>

                                <div class="mt-14 md:mt-16 relative md:w-9/12 md:mx-auto">
                                    <span class="absolute px-2 pb-1 bottom-12 ml-1 rounded-t-md bg-black-lighter text-own-orange">
                                        Email
                                    </span>
                                    <input  type="text"
                                            name="email"
                                            class="@error('email') @enderror h-12 px-2 w-full rounded border border-black-custom outline-none"
                                            required
                                            autocomplete="email"
                                            placeholder="pavelnovak@seznam.cz"
                                            >
                                    @error('email')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div class="md:flex md:justify-between space-x-2">
                                    <div class="mt-14 md:mt-16 relative md:w-6/12">
                                        <span class="absolute px-2 pb-1 bottom-12 ml-1 rounded-t-md bg-black-lighter text-own-orange">
                                            Heslo
                                        </span>
                                        <input  type="password"
                                                name="password"
                                                class="@error('password') @enderror h-12 px-2 w-full rounded border border-black-custom outline-none"
                                                required
                                                autocomplete="password"
                                                placeholder="************"
                                                >
                                        @error('password')
                                            <p class="text-red-500 text-xs italic mt-4">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <div class="mt-14 md:mt-16 relative md:w-6/12">
                                        <span class="absolute px-2 pb-1 bottom-12 ml-1 rounded-t-md bg-black-lighter text-own-orange">
                                            Potvrdit heslo
                                        </span>
                                        <input  type="password"
                                                name="password_confirmation"
                                                class="h-12 px-2 w-full rounded border border-black-custom outline-none"
                                                required
                                                autocomplete="password"
                                                placeholder="**********"
                                                >
                                    </div>
                                </div>

                            </div>

                            <div class="mt-14 md:mt-20 w-full md:w-5/12 md:mx-auto">
                                <button type="submit" class="transition delay-100 duration-300 ease-in-out group relative w-full py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-layout-gray hover:bg-black-custom focus:outline-none">

                                    <span class="absolute left-0 inset-y-0 flex items-center pl-3 ">
                                        <svg class="h-5 w-5 text-own-orange group-hover:text-own-red group-hover:hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>

                                        <svg class="h-5 w-5 text-own-orange group-hover:text-own-red group-hover:block hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                        </svg>
                                    </span>

                                    Zaregistrovat se
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="absolute ">
                        @foreach ($errors->all('<p>:message</p>') as $input_error)
                        {{ $input_error }}
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
