@guest
    <nav class="h-10 w-full  fixed left-0 top-0 bg-layout-black z-50 flex justify-end">

        <button class="text-white" onclick="hamburgerToggle()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <div id="hamburgerLinks" class="hidden z-40 absolute top-10 inset-x-0 p-3 ">
            <div class="rounded-lg bg-layout-gray border-2 border-black ">

                <nav class="grid gap-8 w-10/12 mx-auto mt-8 pb-6 ">

                    <a href="{{ route('home-index') }}" class="-m-3 p-3 flex items-center bg-layout-lightgray rounded-lg hover:bg-gray-50 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-layout-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>

                        <span class="ml-3 text-base font-medium text-white">
                            Domů
                        </span>
                    </a>

                    <a href="{{ route('gallery-index') }}" class="-m-3 p-3 flex items-center bg-layout-lightgray rounded-lg hover:bg-gray-50 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-layout-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="ml-3 text-base font-medium text-white">
                            galerie
                        </span>
                    </a>

                    <a href="{{ route('contacts-index') }}" class="-m-3 p-3 flex items-center bg-layout-lightgray rounded-lg hover:bg-gray-50 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-layout-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>

                        <span class="ml-3 text-base font-medium text-white">
                            kontakty
                        </span>
                    </a>

                    <a href="{{ route('services-index') }}" class="-m-3 p-3 flex items-center bg-layout-lightgray rounded-lg hover:bg-gray-50 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-layout-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>

                        <span class="ml-3 text-base font-medium text-white">
                            služby
                        </span>
                    </a>


                    <div class="relative ">
                        <button id="modalBtn" type="button" class="transition duration-500 ease-in-out hover:bg-layout-white hover:text-layout-gray uppercase bg-layout-gray rounded text-layout-white font-bold font-Rubik p-1 xl:text-xl xl:px-3 xl:py-2" aria-expanded="false">
                            <span>Rezervovat</span>
                        </button>

                        <x-user.layout.navbarmodal/>

                    </div>


                </nav>



            </div>
        </div>
    </nav>
@endguest

@auth
    @if (Auth::user()->isAdmin == 1)
        <nav class="h-10 w-full  fixed left-0 top-0 bg-layout-black z-50 flex justify-end">

            <button class="text-white" onclick="hamburgerToggle()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <div id="hamburgerLinks" class="hidden z-40 absolute top-10 inset-x-0 p-3 ">
                <div class="rounded-lg bg-layout-gray border-2 border-black ">

                    <nav class="grid gap-8 w-10/12 mx-auto mt-8 ">

                        <a
                        href="{{ route('home-index') }}"
                        class="-m-3 p-3 flex items-center bg-layout-lightgray rounded-lg hover:bg-gray-50 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-layout-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>

                            <span class="ml-3 text-base font-medium text-white">
                                Domů
                            </span>
                        </a>

                        <a href="{{ route('gallery-index') }}" class="-m-3 p-3 flex items-center bg-layout-lightgray rounded-lg hover:bg-gray-50 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-layout-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-white">
                                galerie
                            </span>
                        </a>

                        <a href="{{ route('contacts-index') }}" class="-m-3 p-3 flex items-center bg-layout-lightgray rounded-lg hover:bg-gray-50 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-layout-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>

                            <span class="ml-3 text-base font-medium text-white">
                                kontakty
                            </span>
                        </a>

                        <a href="{{ route('services-index') }}" class="-m-3 p-3 flex items-center bg-layout-lightgray rounded-lg hover:bg-gray-50 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-layout-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>

                            <span class="ml-3 text-base font-medium text-white">
                                služby
                            </span>
                        </a>


                    </nav>

                    <div class="py-6 px-5 space-y-6">

                        <a
                        href="{{ route('dashboard-index') }}"
                        class="w-10/12 mx-auto flex items-center justify-center px-4 py-2 border border-white rounded-md shadow-sm text-base font-medium text-white bg-layout-red hover:bg-indigo-700">
                            Dashboard
                        </a>

                    </div>

                </div>
            </div>
        </nav>
    @else
        <nav class="h-10 w-full  fixed left-0 top-0 bg-layout-black z-50 flex justify-end">

            <button class="text-white" onclick="hamburgerToggle()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <div id="hamburgerLinks" class="hidden z-40 absolute top-10 inset-x-0 p-3 ">
                <div class="rounded-lg bg-layout-gray border-2 border-black ">

                    <nav class="grid gap-8 w-10/12 mx-auto mt-8 ">

                        <a href="{{ route('home-index') }}" class="-m-3 p-3 flex items-center bg-layout-lightgray rounded-lg hover:bg-gray-50 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-layout-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>

                            <span class="ml-3 text-base font-medium text-white">
                                Domů
                            </span>
                        </a>

                        <a href="{{ route('gallery-index') }}" class="-m-3 p-3 flex items-center bg-layout-lightgray rounded-lg hover:bg-gray-50 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-layout-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-white">
                                galerie
                            </span>
                        </a>

                        <a href="{{ route('contacts-index') }}" class="-m-3 p-3 flex items-center bg-layout-lightgray rounded-lg hover:bg-gray-50 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-layout-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>

                            <span class="ml-3 text-base font-medium text-white">
                                kontakty
                            </span>
                        </a>

                        <a href="{{ route('services-index') }}" class="-m-3 p-3 flex items-center bg-layout-lightgray rounded-lg hover:bg-gray-50 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-layout-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>

                            <span class="ml-3 text-base font-medium text-white">
                                služby
                            </span>
                        </a>

                        <div class="relative ">
                            <button id="modalBtn" type="button" class="transition duration-500 ease-in-out hover:bg-layout-white hover:text-layout-gray uppercase bg-layout-gray rounded text-layout-white font-bold font-Rubik p-1 xl:text-xl xl:px-3 xl:py-2" aria-expanded="false">
                                <span>Rezervovat</span>
                            </button>

                            <x-user.layout.navbarmodal/>

                        </div>

                    </nav>



                </div>
            </div>
        </nav>
    @endif
@endauth




{{--



    --}}
