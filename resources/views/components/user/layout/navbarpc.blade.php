@guest
    <nav id="navbar" class="fixed left-0 top-0 w-full bg-opacity-80 z-20 backdrop-filter bg-layout-black py-6">
        <div class="grid grid-cols-3 place-items-center  ">

            <div class="flex justify-start">
                <div class="flex items-center justify-center w-8/12 mx-auto py-4">
                    <a class="bg-layout-white p-1 rounded-md" href="{{ route('home-index') }}">
                        LOGO
                    </a>
                </div>
            </div>

            <div class="flex items-center justify-center space-x-8">

                <div class="{{ active(['/']) }} relative border-b border-layout-white hover:border-b hover:border-layout-red transition duration-500 ease-in-out ">
                    <a class="xl:uppercase font-bold xl:text-xl font-Rubik text-layout-white"
                        href="{{ route('home-index') }}">
                        domů
                    </a>
                </div>

                <div class="{{ active(['galerie', 'galerie/*']) }} relative border-b border-layout-white hover:border-b hover:border-layout-red transition duration-500 ease-in-out ">
                    <a class="xl:uppercase font-bold xl:text-xl font-Rubik text-layout-white"
                        href="{{ route('gallery-index') }}">
                        galerie
                    </a>
                </div>

                <div class="relative ">
                    <button
                        id="modalBtn"
                        type="button"
                        class="transition duration-500 ease-in-out hover:bg-layout-white hover:text-layout-gray uppercase bg-layout-gray rounded text-layout-white font-bold font-Rubik p-1 xl:text-xl xl:px-3 xl:py-2"
                        aria-expanded="false"
                    >
                        <span>Rezervovat</span>
                    </button>

                    <x-user.layout.navbarmodal/>

                </div>

                <div class="{{ active(['sluzby', 'sluzby/*']) }} relative border-b border-layout-white hover:border-b hover:border-layout-red transition duration-500 ease-in-out ">
                    <a class="xl:uppercase font-bold xl:text-xl font-Rubik text-layout-white"
                        href="{{ route('services-index') }}">
                        služby
                    </a>
                </div>

                <div class="{{ active(['kontakty', 'kontakty/*']) }} relative border-b border-layout-white hover:border-b hover:border-layout-red transition duration-500 ease-in-out ">
                    <a class="xl:uppercase font-bold xl:text-xl font-Rubik text-layout-white"
                        href="{{ route('contacts-index') }}">
                        kontakty
                    </a>
                </div>


            </div>

            <div class="flex items-center justify-center ">
                <div class="flex flex-row items-center justify-center space-x-4">

                    <div class="bg-white p-1 rounded-full">
                        <a class="" target="_blank" href="https://www.instagram.com/petrsitar_vojtareality/">
                            <img class="w-6" src="{{ asset('src/navbar/instagram.png') }}" alt="">
                        </a>
                    </div>

                    <div class="flex ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 3l-6 6m0 0V4m0 5h5M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                        </svg>
                        <h1 class="text-base text-white">+730 681 670</h1>
                    </div>

                </div>

            </div>

        </div>
    </nav>
@endguest

@auth()
    @if (Auth::user()->isAdmin == 1)
        <nav id="navbar" class="fixed left-0 top-0 w-full bg-opacity-80 z-20 backdrop-filter bg-layout-black py-6">
            <div class="grid grid-cols-3 place-items-center  ">

                <div class="flex justify-start">
                    <div class="flex items-center justify-center w-8/12 mx-auto py-4">
                        <a class="bg-layout-white p-1 rounded-md" href="{{ route('home-index') }}">
                            LOGO
                        </a>
                    </div>
                </div>

                <div class="flex items-center justify-center space-x-8">

                    <div class="{{ active(['/']) }} relative border-b border-layout-white hover:border-b hover:border-layout-red transition duration-500 ease-in-out ">
                        <a class="xl:uppercase font-bold xl:text-xl font-Rubik text-layout-white"
                            href="{{ route('home-index') }}">
                            domů
                        </a>
                    </div>

                    <div class="{{ active(['galerie', 'galerie/*']) }} relative border-b border-layout-white hover:border-b hover:border-layout-red transition duration-500 ease-in-out ">
                        <a class="xl:uppercase font-bold xl:text-xl font-Rubik text-layout-white" href="{{ route('gallery-index') }}">
                            galerie
                        </a>
                    </div>

                    <div class="relative">
                        <a
                        href="{{ route('dashboard-index') }}"
                        class="transition duration-500 ease-in-out hover:bg-layout-white hover:text-layout-gray uppercase bg-layout-gray rounded text-layout-white font-bold font-Rubik p-1 xl:text-xl xl:px-3 xl:py-2"
                        aria-expanded="false">
                            <span>Dashboard</span>
                        </a>
                    </div>

                    <div class="{{ active(['kontakty', 'kontakty/*']) }} relative border-b border-layout-white hover:border-b hover:border-layout-red transition duration-500 ease-in-out ">
                        <a class="xl:uppercase font-bold xl:text-xl font-Rubik text-layout-white" href="{{ route('contacts-index') }}">
                            kontakty
                        </a>
                    </div>

                    <div class="{{ active(['sluzby', 'sluzby/*']) }} relative border-b border-layout-white hover:border-b hover:border-layout-red transition duration-500 ease-in-out ">
                        <a class="xl:uppercase font-bold xl:text-xl font-Rubik text-layout-white" href="{{ route('services-index') }}">
                            služby
                        </a>
                    </div>

                </div>

                <div class="flex items-center justify-center ">
                    <div class="flex flex-row items-center justify-center space-x-4">

                        <div class="bg-white p-1 rounded-full">
                            <a class="" target="_blank" href="https://www.instagram.com/petrsitar_vojtareality/">
                                <img class="w-6" src="{{ asset('src/navbar/instagram.png') }}" alt="">
                            </a>
                        </div>

                        <div class="flex ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 3l-6 6m0 0V4m0 5h5M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                            </svg>
                            <h1 class="text-base text-white">+730 681 670</h1>
                        </div>

                    </div>

                </div>

            </div>
        </nav>
    @else
        <nav id="navbar" class="fixed left-0 top-0 w-full bg-opacity-80 z-20 backdrop-filter bg-layout-black py-6">
            <div class="grid grid-cols-3 place-items-center  ">

                <div class="flex justify-start">
                    <div class="flex items-center justify-center w-8/12 mx-auto py-4">
                        <a
                            class="bg-layout-white p-1 rounded-md"
                            href="{{ route('home-index') }}">
                            LOGO
                        </a>
                    </div>
                </div>

                <div class="flex items-center justify-center space-x-8">

                    <div class="{{ active(['/']) }} relative border-b border-layout-white hover:border-b hover:border-layout-red transition duration-500 ease-in-out ">
                        <a
                            class="xl:uppercase font-bold xl:text-xl font-Rubik text-layout-white"
                            href="{{ route('services-index') }}">
                            Domů
                        </a>
                    </div>

                    <div class="{{ active(['galerie', 'galerie/*']) }} relative border-b border-layout-white hover:border-b hover:border-layout-red transition duration-500 ease-in-out ">
                        <a class="xl:uppercase font-bold xl:text-xl font-Rubik text-layout-white" href="{{ route('gallery-index') }}">
                            galerie
                        </a>
                    </div>

                    <div class="relative ">
                        <button id="modalBtn" type="button" class="transition duration-500 ease-in-out hover:bg-layout-white hover:text-layout-gray uppercase bg-layout-gray rounded text-layout-white font-bold font-Rubik p-1 xl:text-xl xl:px-3 xl:py-2" aria-expanded="false">
                            <span>Rezervovat</span>
                        </button>

                        <x-user.layout.navbarmodal/>

                    </div>

                    <div class="{{ active(['kontakty', 'kontakty/*']) }} relative border-b border-layout-white hover:border-b hover:border-layout-red transition duration-500 ease-in-out ">
                        <a class="xl:uppercase font-bold xl:text-xl font-Rubik text-layout-white" href="{{ route('contacts-index') }}">
                            kontakty
                        </a>
                    </div>

                    <div class="{{ active(['sluzby', 'sluzby/*']) }} relative border-b border-layout-white hover:border-b hover:border-layout-red transition duration-500 ease-in-out ">
                        <a class="xl:uppercase font-bold xl:text-xl font-Rubik text-layout-white" href="{{ route('services-index') }}">
                            služby
                        </a>
                    </div>

                </div>

                <div class="flex items-center justify-center ">
                    <div class="flex flex-row items-center justify-center space-x-4">

                        <div class="bg-white p-1 rounded-full">
                            <a class="" target="_blank" href="https://www.instagram.com/petrsitar_vojtareality/">
                                <img class="w-6" src="{{ asset('src/navbar/instagram.png') }}" alt="">
                            </a>
                        </div>

                        <div class="flex ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 3l-6 6m0 0V4m0 5h5M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                            </svg>
                            <h1 class="text-base text-white">+730 681 670</h1>
                        </div>

                    </div>

                </div>

            </div>
        </nav>
    @endif
@endif


