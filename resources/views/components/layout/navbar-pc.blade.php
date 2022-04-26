<div id="navbar" class="fixed left-0 top-0 w-full bg-yellow-custom bg-opacity-80 py-4 z-20 backdrop-filter bg-layout-black">
    <div class="flex flex-row items-center justify-evenly  xl:justify-between md:space-x-10 w-11/12 xl:w-10/12 mx-auto ">

{{-- left side --}}
        <div class="flex items-center lg:w-0 lg:flex-1">
            <a class="bg-layout-white p-1 rounded-md" href="{{ route('home-index') }}">
                LOGO
            </a>
        </div>

        <nav class="hidden md:flex items-center space-x-10 ">

{{-- services --}}
            <div class="{{ active(['sluzby', 'sluzby/*']) }} relative border-b border-layout-white hover:border-b hover:border-layout-red transition duration-500 ease-in-out ">
                <a href="{{ route('services') }}">
                    <x-layout.navbar-text text='služby'/>
                </a>
            </div>

{{-- 'offer/*' --}}
            <div class="{{ active(['gallery', 'gallery/*']) }} relative border-b border-layout-white hover:border-b hover:border-layout-red transition duration-500 ease-in-out ">
                <a href="{{ route('gallery') }}">
                    <x-layout.navbar-text text='galerie'/>
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
                    <button id="modalBtn" type="button" class="transition duration-500 ease-in-out hover:bg-layout-white hover:text-layout-gray uppercase bg-layout-gray rounded text-layout-white font-bold font-Rubik p-1 xl:text-xl xl:px-3 xl:py-2" aria-expanded="false">
                        <span>Rezervovat</span>
                    </button>

                    <x-layout.navbar-modal/>

                </div>
            @endguest

{{-- kontakt --}}
            <div class="{{ active(['contacts', 'contacts/*']) }} relative border-b border-layout-white hover:border-b hover:border-layout-red transition duration-500 ease-in-out ">
                <a href="{{ route('contacts') }}">
                    <x-layout.navbar-text text='kontakty'/>
                </a>
            </div>

{{-- aboutMe --}}
            <div class="{{ active(['aboutMe', 'aboutMe/*']) }} relative border-b border-layout-white hover:border-b hover:border-layout-red transition duration-500 ease-in-out ">
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
                        <a class="bg-layout-white p-1 rounded-md" target="_blank" href="{{ route('dashboard-index') }}">
                            <img class="w-6" src="{{ asset('src/navbar/facebook.png') }}" alt="">
                        </a>

                        <a class="bg-layout-white p-1 rounded-md" target="_blank" href="https://www.instagram.com/petrsitar_vojtareality/">
                            <img class="w-6" src="{{ asset('src/navbar/instagram.png') }}" alt="">
                        </a>
                        <a class="bg-layout-white p-1 rounded-md" target="_blank" href="">
                            <img class="w-6" src="{{ asset('src/navbar/youtube.png') }}" alt="">
                        </a>
                    </div>

                    <div class="lg:flex flex-row items-center justify-center bg-layout-white p-1 rounded-md">
                        <img  class="w-3 h-3 xl:w-6 xl:h-6" src="{{ asset('src/navbar/phone.png') }}" alt="">
                        <h1 class="text-xs xl:text-base">+730 681 670</h1>
                    </div>
                </div>
            @endguest

        </div>




    </div>
</div>

