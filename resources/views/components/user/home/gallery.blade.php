<section id="gallery" class="pb-24 relative">

    <div class="w-11/12 xl:w-9/12 mx-auto shadow-xl bg-layout-lightgray py-10 rounded-2xl xl:mt-20 ">

        <div class="text-center ">
            <h1 class="text-2xl tracking-tight font-extrabold md:text-4xl uppercase font-Rubik text-layout-red ">
                Nejnovější opravy
            </h1>
        </div>

        <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8 m-10   ">

            @foreach ($posts as $post)
                <a href="{{ route('gallery-show',[$post->id, $post->city]) }}">

                    <div class="relative lg:flex lg:items-center lg:justify-center group flex flex-col lg:h-96 bg-layout-red py-3 rounded-md space-y-1 transition duration-500 ease-in-out border border-white">

                        <div>
                            <h2 class="text-xl font-bold text-white font-Rubik sm:text-2xl sm:truncate text-center uppercase">
                                {{ $post->car }} {{ $post->type }}
                            </h2>
                        </div>

                        <div class="relative ">
                            <img src="{{ asset('posts/thumbNail/'.$post->cover) }}" style="width: 280px; height: 280px" class="object-center object-cover rounded-md">

                            <div class="absolute left-0 top-0 space-y-1 ">
                                <div class="rounded-tl-md bg-opacity-60 bg-red-100 p-1 flex items-center text-sm text-black  group-hover:bg-opacity-100 transition duration-500 ease-in-out">
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-black transition duration-500 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                                        <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                                    </svg>
                                    Nově přídáno
                                </div>

                                <div class="bg-opacity-60 bg-red-100 p-1 flex items-center text-sm text-black  group-hover:bg-opacity-100 transition duration-500 ease-in-out">
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-black transition duration-500 ease-in-out" xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                    3D prohlídka
                                </div>
                            </div>
                        </div>

                    </div>
                </a>
            @endforeach

        </div>

        <div class="text-center">
            <a
                href="{{ route('gallery-index') }}"
                class="font-Rubik font-bold uppercase rounded px-4 py-2 text-2xl border text-white border-white bg-layout-red bg-opacity-80 hover:bg-opacity-100 transition duration-500 ease-in-out">
                Vice fotografií
            </a>
        </div>

    </div>

</section>



{{--
    @if (empty($posts[0]))
        <div class="flex items-center justify-center lg:h-96 p-3 border-2 border-layout-white bg-layout-red rounded-xl">
            <h1 class="font-bold text-xl text-white">Žádné data</h1>
        </div>
    @else
        <div class="relative lg:flex lg:items-center lg:justify-between group flex flex-col lg:h-96 bg-layout-red px-3 py-6 rounded-md space-y-4 transition duration-500 ease-in-out border-2 border-white">

            <div class="flex-1 min-w-0">
                <h2 class="text-xl font-bold leading-7 text-white font-Rubik sm:text-2xl sm:truncate text-center uppercase">
                    {{ $posts[0]->car }} {{ $posts[0]->type }}
                </h2>
            </div>

            <div class="absolute flex flex-row justify-around sm:flex-wrap sm:mt-0 sm:space-x-6 lg:space-x-3">
                <div class="flex items-center text-sm text-black group-hover:text-white transition duration-500 ease-in-out">
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-black group-hover:text-white transition duration-500 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                        <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                    </svg>
                    Nově přídáno
                </div>

                <div class="flex items-center text-sm text-black group-hover:text-white transition duration-500 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-5 w-5 text-black group-hover:text-white transition duration-500 ease-in-out " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                    3D prohlídka
                </div>
            </div>

            <div class=" h-full flex items-center justify-center">
                <img src="{{ asset('posts/thumbNail/'.$posts[0]->cover) }}" style="width: 280px; height: 280px" class="object-center object-cover rounded-md">
            </div>

            <div class="text-center">
                <a
                    href="{{ route('gallery-show',[$posts[0]->id, $posts[0]->city]) }}"
                    class="shadow-lg inline-flex items-center px-6 py-2 rounded-md  text-base font-medium text-black bg-white group focus:outline-none"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Detaily
                </a>
            </div>

        </div>
    @endif

    @if (empty($posts[1]))
        <div class="flex items-center justify-center lg:h-96 p-3 border-2 border-layout-white bg-layout-red rounded-xl">
            <h1 class="font-bold text-xl text-white">Žádné data</h1>
        </div>
    @else
        <div class="lg:flex lg:items-center lg:justify-between group flex flex-col lg:h-96 bg-layout-red px-3 py-6 rounded-md space-y-4 transition duration-500 ease-in-out border-2 border-white">

            <div class="flex-1 min-w-0">
                <h2 class="text-xl font-bold leading-7 text-white font-Rubik sm:text-2xl sm:truncate text-center uppercase">
                    {{ $posts[1]->car }} {{ $posts[1]->type }}
                </h2>
            </div>

            <div class="flex flex-row justify-around sm:flex-wrap sm:mt-0 sm:space-x-6 lg:space-x-3">
                <div class="flex items-center text-sm text-black group-hover:text-white transition duration-500 ease-in-out">
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-black group-hover:text-white transition duration-500 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                        <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                    </svg>
                    Nově přídáno
                </div>

                <div class="flex items-center text-sm text-black group-hover:text-white transition duration-500 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-5 w-5 text-black group-hover:text-white transition duration-500 ease-in-out " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                    3D prohlídka
                </div>
            </div>

            <div class=" h-full flex items-center justify-center">
                <img src="{{ asset('posts/thumbNail/'.$posts[1]->cover) }}" style="width: 250px; height: 200px" class="object-center object-cover rounded-md">
            </div>

            <div class="text-center">
                <a
                    href="{{ route('gallery-show',[$posts[1]->id, $posts[1]->city]) }}"
                    class="shadow-lg inline-flex items-center px-6 py-2 rounded-md  text-base font-medium text-black bg-white group focus:outline-none"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Detaily
                </a>
            </div>

        </div>
    @endif

    @if (empty($posts[2]))
        <div class="flex items-center justify-center lg:h-96 p-3 border-2 border-layout-white bg-layout-red rounded-xl">
            <h1 class="font-bold text-xl text-white">Žádné data</h1>
        </div>
    @else
        <div class="lg:flex lg:items-center lg:justify-between group flex flex-col lg:h-96 bg-layout-red px-3 py-6 rounded-md space-y-4 transition duration-500 ease-in-out border-2 border-white">

            <div class="flex-1 min-w-0">
                <h2 class="text-xl font-bold leading-7 text-white font-Rubik sm:text-2xl sm:truncate text-center uppercase">
                    {{ $posts[2]->car }} {{ $posts[2]->type }}
                </h2>
            </div>

            <div class="flex flex-row justify-around sm:flex-wrap sm:mt-0 sm:space-x-6 lg:space-x-3">
                <div class="flex items-center text-sm text-black group-hover:text-white transition duration-500 ease-in-out">
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-black group-hover:text-white transition duration-500 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                        <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                    </svg>
                    Nově přídáno
                </div>

                <div class="flex items-center text-sm text-black group-hover:text-white transition duration-500 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-5 w-5 text-black group-hover:text-white transition duration-500 ease-in-out " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                    3D prohlídka
                </div>
            </div>

            <div class=" h-full flex items-center justify-center">
                <img src="{{ asset('posts/thumbNail/'.$posts[2]->cover) }}" style="width: 250px; height: 200px" class="object-center object-cover rounded-md">
            </div>

            <div class="text-center">
                <a
                    href="{{ route('gallery-show',[$posts[2]->id, $posts[2]->city]) }}"
                    class="shadow-lg inline-flex items-center px-6 py-2 rounded-md  text-base font-medium text-black bg-white group focus:outline-none"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Detaily
                </a>
            </div>

        </div>
    @endif
--}}

