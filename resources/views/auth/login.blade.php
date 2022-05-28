@extends('layouts.dashboard')

@section('content')

    <div class="bg-layout-gray">
        <div class="flex items-center justify-center md:pt-48 md:py-24 px-4 sm:px-6 lg:px-8">

            <div class=" w-full md:w-4/12 space-y-8 bg-layout-lightgray shadow-xl rounded-lg px-4 py-24 md:px-16 md:py-16">
                <div class="w-full pb-20">

                    <h2 class="mt-6 text-center text-3xl font-extrabold text-white font-Rubik">
                        Přihlaš se do svého účtu
                    </h2>

                </div>

                <form class="mt-8 space-y-6 m-auto w-full " method="POST" action="{{ route('login') }}">
                    @csrf

                    <input type="hidden" name="remember" value="true">

                    <div class="rounded-md ">

                        <div>
                            <label for="email-address" class="sr-only">Emailová adresa</label>
                            <input id="email-address"
                                    name="email"
                                    type="email"
                                    autocomplete="email"
                                    required
                                    class="appearance-none rounded-none relative block w-full px-3 py-2 border border-black-lighter placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-black-custom focus:border-black-custom focus:z-10 sm:text-sm"
                                    placeholder="Emailová adresa">
                        </div>

                        <div>
                            <label for="password" class="sr-only">Heslo</label>
                            <input id="password"
                                    name="password"
                                    type="password"
                                    autocomplete="current-password"
                                    required
                                    class="appearance-none rounded-none relative block w-full px-3 py-2 border border-black-lighter placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-black-custom focus:border-black-custom focus:z-10 sm:text-sm"
                                    placeholder="Heslo">
                        </div>

                    </div>

                    <div class="flex flex-col md:flex-row items-center justify-between">

                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-black-lighter ring-0 focus:ring-0  rounded">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                                Pamatovat si mě
                            </label>
                        </div>

                        <div class="text-sm mt-5 md:mt-0">
                            <a
                                href="{{ route('password.request') }}"
                                class="font-medium text-own-black hover:text-black-custom">
                                Zapomněl jsi heslo ?
                            </a>
                        </div>

                    </div>

                    <div class="pt-20">
                        <button type="submit" class="transition delay-100 duration-300 ease-in-out group relative w-full flex justify-center py-3 px-4 border border-white text-sm font-medium rounded-md text-white bg-layout-gray hover:bg-layout-lightgray focus:outline-none">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3 ">
                                <!-- Heroicon name: solid/lock-closed -->
                                <svg class="h-5 w-5 text-own-orange group-hover:text-own-red group-hover:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                </svg>

                                <svg class="h-5 w-5 text-own-orange group-hover:text-own-red hidden group-hover:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 2a5 5 0 00-5 5v2a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2H7V7a3 3 0 015.905-.75 1 1 0 001.937-.5A5.002 5.002 0 0010 2z" />
                                </svg>

                            </span>
                            Přihlásit se
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
