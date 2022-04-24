<div id="navbar" class="fixed left-0 top-0 w-full bg-yellow-custom bg-opacity-80 py-8 z-20 backdrop-filter bg-layout-black">
    <div class="flex flex-row items-center justify-evenly  xl:justify-between md:space-x-10 w-11/12 xl:w-10/12 mx-auto ">

    {{-- left side --}}
        <div class="flex items-center lg:w-0 lg:flex-1">
            <a class="bg-layout-gray p-1 rounded-md" href="{{ route('home-index') }}">
                <img class="h-8 lg:h-14   " src="{{ asset('src/navbar/PS-logo.png') }}" alt="">
            </a>
        </div>

        <nav class="hidden md:flex items-center space-x-10 ">
{{-- offers --}}
            <div class="{{ active(['offers', 'offers/*', 'offer/*']) }} relative border-b border-yellow-custom hover:border-b hover:border-layout-red transition duration-500 ease-in-out ">
                <a href="{{ route('offers') }}">
                    <x-layout.navbar-text text='nabídky'/>
                </a>
            </div>

{{-- services --}}
            <div class="{{ active(['services', 'services/*']) }} relative border-b border-yellow-custom hover:border-b hover:border-layout-red transition duration-500 ease-in-out ">
                <a href="{{ route('services') }}">
                    <x-layout.navbar-text text='služby'/>
                </a>
            </div>

{{-- Sejít se --}}
            @auth()
                <div class="relative">
                    <a href="{{ route('dashboard-index') }}" class="uppercase bg-blue-custom rounded text-yellow-custom font-bold font-Rubik p-1 xl:text-xl xl:px-3 xl:py-2" aria-expanded="false">
                        <span>Dashboard</span>
                    </a>
                </div>
            @endauth

            @guest
                <div class="relative ">
                    <button type="button" onclick="vipToggle()" class="uppercase bg-layout-gray rounded text-layout-white font-bold font-Rubik p-1 xl:text-xl xl:px-3 xl:py-2" aria-expanded="false">
                        <span>Sejít se</span>
                    </button>

                    <div id="vipLinks" class="absolute hidden z-40 left-1/2 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-md sm:px-0">

                        <div class="rounded-lg shadow-lg overflow-hidden">

                            <div class="relative grid gap-6 bg-own-lightgray px-5 py-6 sm:gap-8 sm:p-8">
                                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-own-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Předplatné
                                        </p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Analýzy, grafy, data navíc
                                        </p>
                                    </div>
                                </a>

                                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">

                                    <svg class="flex-shrink-0 h-6 w-6 text-own-orange" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>

                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Discord
                                        </p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Discord server, o který se pečuje a jsou zde jenom aktivní hráči, kteří zde hrávají
                                        </p>
                                    </div>
                                </a>

                                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-own-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                                    </svg>

                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Giveawaye
                                        </p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Větší šance než plebíci na výhru
                                        </p>
                                    </div>
                                </a>

                            </div>

                            <div class="px-5 py-5 bg-own-darkgray sm:px-8 sm:py-8">
                                <ul role="list" class="mt-4 space-y-4">
                                    <li class="text-base truncate">
                                        <a href="#" class="font-medium text-gray-900 hover:text-gray-700">
                                            Další výhody se připravují
                                        </a>
                                    </li>

                                    <li class="text-base truncate">
                                        <a href="#" class="font-medium text-gray-900 hover:text-gray-700">
                                            Další výhody se připravují
                                        </a>
                                    </li>

                                </ul>
                            </div>

                        </div>

                    </div>

                </div>
            @endguest

{{-- kontakt --}}
            <div class="{{ active(['contacts', 'contacts/*']) }} relative border-b border-yellow-custom hover:border-b hover:border-layout-red transition duration-500 ease-in-out ">
                <a href="{{ route('contacts') }}">
                    <x-layout.navbar-text text='kontakt'/>
                </a>
            </div>

{{-- aboutMe --}}
            <div class="{{ active(['aboutMe', 'aboutMe/*']) }} relative border-b border-yellow-custom hover:border-b hover:border-layout-red transition duration-500 ease-in-out ">
                <a href="{{ route('aboutMe') }}">
                    <x-layout.navbar-text text='o mně'/>
                </a>
            </div>
        </nav>

        <div class="hidden lg:flex justify-end md:flex-1 lg:w-0">
            @auth()
                <nav class="space-x-4 text-black text-sm sm:text-base">
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                        class="no-underline hover:underline"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        Odhlásit se
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            @endauth

            @guest
                <div class="flex flex-col space-y-2 ">
                    <div class="flex justify-between">
                        {{-- <a href="https://www.facebook.com/petr.sitar.9"> --}}
                        <a class="bg-layout-gray p-1 rounded-md" target="_blank" href="{{ route('dashboard-index') }}">
                            <img class="w-6" src="{{ asset('src/navbar/facebook.png') }}" alt="">
                        </a>

                        <a class="bg-layout-gray p-1 rounded-md" target="_blank" href="https://www.instagram.com/petrsitar_vojtareality/">
                            <img class="w-6" src="{{ asset('src/navbar/instagram.png') }}" alt="">
                        </a>
                        <a class="bg-layout-gray p-1 rounded-md" target="_blank" href="">
                            <img class="w-6" src="{{ asset('src/navbar/youtube.png') }}" alt="">
                        </a>
                    </div>

                    <div class="lg:flex flex-row items-center justify-center bg-layout-gray p-1 rounded-md">
                        <img  class="w-3 h-3 xl:w-6 xl:h-6" src="{{ asset('src/navbar/phone.png') }}" alt="">
                        <h1 class="text-xs xl:text-base">+730 681 670</h1>
                    </div>
                </div>
            @endguest

        </div>




    </div>
</div>

