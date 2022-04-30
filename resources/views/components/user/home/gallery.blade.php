<section id="gallery" class="py-24">
    <div class="w-9/12 mx-auto shadow-2xl shadow-layout-gray bg-layout-lightgray py-10 rounded-2xl  ">

        <div class="text-center">
            <h1 class="text-lg tracking-tight font-extrabold sm:text-1xl md:text-4xl uppercase font-poppins text-transparent bg-clip-text bg-gradient-to-r from-layout-red to-layout-gray">
                Nejnovější opravy
            </h1>
        </div>

        <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8 m-10   ">

            @if (empty($offerCols[0]))
                <div class="flex items-center justify-center lg:h-96 bg-gray-300  p-3">
                    <h1 class="font-bold text-xl">Žádné data</h1>
                </div>
            @else
                <div class="z-20 lg:flex lg:items-center lg:justify-between group flex flex-col lg:h-96 bg-white hover:bg-opacity-100 hover:bg-gray-400  backdrop-filter backdrop-blur-sm bg-opacity-70 px-3 py-6 rounded-md space-y-4 shadow-outSmaller transition duration-500 ease-in-out border border-gray-400 hover:shadow-none  transform hover:scale-95">

                    <div class="flex-1 min-w-0">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate text-center">
                            {{ $offerCols[0]->city }}
                        </h2>
                    </div>

                    <div class="flex flex-row justify-around sm:flex-wrap sm:mt-0 sm:space-x-6 lg:space-x-3">
                        <div class="flex items-center text-sm text-gray-500 group-hover:text-white">
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                            </svg>
                            Nově přídáno
                        </div>

                        <div class="flex items-center text-sm text-gray-500 group-hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-5 w-5 text-black " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                            3D prohlídka
                        </div>
                    </div>

                    <div class=" h-full flex items-center justify-center">
                        <img src="{{ asset('offers/thumbNail/'.$offerCols[0]->cover) }}" style="width: 200px" class="object-center object-cover">
                    </div>

                    <div class="text-center">
                        <span class="block">
                            <a href="{{ route('offer-show',[$offerCols[0]->id, $offerCols[0]->city]) }}" class="inline-flex items-center px-6 py-2 rounded-md shadow-sm text-base font-medium text-blue-custom bg-yellow-custom group focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                Detaily
                            </a>
                        </span>
                    </div>

                </div>
            @endif

            @if (empty($offerCols[1]))
                <div class="flex items-center justify-center lg:h-96 bg-gray-300  p-3">
                    <h1 class="font-bold text-xl">Žádné data</h1>
                </div>
            @else
                <div class="z-20 lg:flex lg:items-center lg:justify-between group flex flex-col lg:h-96 bg-white hover:bg-opacity-100 hover:bg-gray-400  backdrop-filter backdrop-blur-sm bg-opacity-70 px-3 py-6 rounded-md space-y-4 shadow-outSmaller transition duration-500 ease-in-out border border-gray-400 hover:shadow-none  transform hover:scale-95">

                    <div class="flex-1 min-w-0">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate text-center">
                            {{ $offerCols[1]->city }}
                        </h2>
                    </div>

                    <div class="flex flex-row justify-around sm:flex-wrap sm:mt-0 sm:space-x-6 lg:space-x-3">
                        <div class="flex items-center text-sm text-gray-500 group-hover:text-white">
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                            </svg>
                            Nově přídáno
                        </div>

                        <div class="flex items-center text-sm text-gray-500 group-hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-5 w-5 text-black " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                            3D prohlídka
                        </div>
                    </div>

                    <div class=" h-full flex items-center justify-center">
                        <img src="{{ asset('offers/thumbNail/'.$offerCols[1]->cover) }}" style="width: 200px" class="object-center object-cover">
                    </div>

                    <div class="text-center">
                        <span class="block">
                            <a href="{{ route('offer-show',[$offerCols[1]->id, $offerCols[1]->city]) }}" class="inline-flex items-center px-6 py-2 rounded-md shadow-sm text-base font-medium text-blue-custom bg-yellow-custom group focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                Detaily
                            </a>
                        </span>
                    </div>

                </div>
            @endif

            @if (empty($offerCols[2]))
                <div class="flex items-center justify-center lg:h-96 bg-gray-300  p-3">
                    <h1 class="font-bold text-xl">Žádné data</h1>
                </div>
            @else
                <div class="z-20 lg:flex lg:items-center lg:justify-between group flex flex-col lg:h-96 bg-white hover:bg-opacity-100 hover:bg-gray-400  backdrop-filter backdrop-blur-sm bg-opacity-70 px-3 py-6 rounded-md space-y-4 shadow-outSmaller transition duration-500 ease-in-out border border-gray-400 hover:shadow-none  transform hover:scale-95">

                    <div class="flex-1 min-w-0">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate text-center">
                            {{ $offerCols[2]->city }}
                        </h2>
                    </div>

                    <div class="flex flex-row justify-around sm:flex-wrap sm:mt-0 sm:space-x-6 lg:space-x-3">
                        <div class="flex items-center text-sm text-gray-500 group-hover:text-white">
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                            </svg>
                            Nově přídáno
                        </div>

                        <div class="flex items-center text-sm text-gray-500 group-hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-5 w-5 text-black " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                            3D prohlídka
                        </div>
                    </div>

                    <div class=" h-full flex items-center justify-center">
                        <img src="{{ asset('offers/thumbNail/'.$offerCols[2]->cover) }}" style="width: 200px" class="object-center object-cover">
                    </div>

                    <div class="text-center">
                        <span class="block">
                            <a href="{{ route('offer-show',[$offerCols[2]->id, $offerCols[2]->city]) }}" class="inline-flex items-center px-6 py-2 rounded-md shadow-sm text-base font-medium text-blue-custom bg-yellow-custom group focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                Detaily
                            </a>
                        </span>
                    </div>

                </div>
            @endif


        </div>



        <div class="text-center hover:scale-105 transition duration-500 ease-in-out w-2/12 mx-auto bg-layout-red bg-opacity-80 hover:bg-opacity-100 py-2  ">
            <a href="{{ route('gallery') }}" class="font-Rubik font-bold uppercase rounded text-2xl text-layout-white ">
                Vice fotografií
            </a>
        </div>


    </div>



</section>
