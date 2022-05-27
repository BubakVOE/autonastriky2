<section
    id="introduction"
    class="h-screen relative grid grid-cols-1 place-items-end items-center "
    style="background-image: linear-gradient(to bottom right, rgba(255, 47, 0, 0.98), rgba(248, 149, 0, 0.397) , rgba(10, 10, 10, 0.397));
    ">

{{-- >1280 px --}}
    <div class="hidden xl:grid grid-cols-2 w-11/12 h-full">

        <div class="flex items-center justify-center">
            <div class="space-y-5 w-full text-center relative left-28 ">

                <div>
                    <h1 class="font-Rubik font-bold text-layout-gray text-md ">Přátelský a férový autoservis</h1>
                </div>

                <div>
                    <h1 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-7xl uppercase font-poppins text-transparent bg-clip-text bg-gradient-to-l from-layout-red to-layout-gray">
                        <span class="block md:inline">Nástřiky</span>
                        <span class="block md:inline  ">podvozku</span>
                    </h1>
                </div>

                <div class="grid grid-cols-2">
                    <div class="space-x-2 flex items-center justify-center">
                        <a class="font-Rubik font-bold uppercase rounded px-4 py-2 text-2xl border-2 text-layout-white bg-layout-red bg-opacity-80 hover:bg-opacity-100 transition duration-500 ease-in-out"
                            href="{{ route('services') }}">
                            Služby !
                        </a>

                        <a class="font-Rubik font-bold uppercase rounded px-4 py-2 text-2xl border-2 text-layout-red border-layout-red hover:bg-layout-white transition duration-500 ease-in-out"
                            href="{{ route('gallery') }}">
                            galerie
                        </a>
                    </div>

                    <div class="relative right-10 ">
                        <div class="space-y-2 bg-layout-gray bg-opacity-40 p-3 rounded-lg">
                            <h2 class="text-left text-lg font-Rubik flex-wrap">
                                Nabízíme spoust služeb od <span class="font-bold">nástřiku podvozku</span>, <span class="font-bold">přezutí pneumatik</span> až po <span class="font-bold">umytí auta</span>
                            </h2>

                            <p class="text-left flex-wrap">
                                V průběhu působení v malířské oblasti jsme se rozšířili dalé do stavebních prací v roce 2007. Naše péče o zákazníky zahrnuje odborné poradenství, zaměření prostoru a celkový cenový návrh.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-5 flex flex-col items-end justify-end space-y-4 ">
            <div class="border-2 border-black p-3 rounded-tr-2xl rounded-bl-2xl bg-layout-gray bg-opacity-40 backdrop-filter backdrop-blur-lg divide-x divide-layout-red ">

                <h1 class="font-rubik font-bold flex items-center justify-center flex-col space-y-2 ">
                    <span class="text-layout-black text-lg">
                        „Vůz má svoje vlastní srdce a emoce. Proto ho musíte milovat.“
                    </span>
                    <span class="text-layout-gray text-sm">
                        Juan Manuel Fangio
                    </span>
                </h1>
            </div>
        </div>

        <div class="absolute xl:top-1/2 transform xl:-translate-y-1/2 xl:right-0 xl:w-5/12">
            <x-user.svg.cargarage/>
        </div>

    </div>

{{--   ....<1280px  || mobile/tablet --}}
    <div class="grid grid-cols-1 m-5 xl:hidden space-y-5">

        <div class="">
            <h1 class="text-center text-6xl tracking-tight font-extrabold uppercase font-poppins text-transparent bg-clip-text bg-gradient-to-l from-layout-red to-layout-gray">
                <span class="block">Nástřiky</span>
                <span class="block">podvozku</span>
            </h1>
        </div>

        <div class="grid grid-cols-1 space-y-5">
            <div class="space-x-2 flex items-center justify-center">
                <a class="font-Rubik font-bold uppercase rounded px-4 py-2 text-2xl border-2 text-layout-white bg-layout-red bg-opacity-80 hover:bg-opacity-100 transition duration-500 ease-in-out"
                    href="{{ route('services') }}">
                    Služby !
                </a>

                <a class="font-Rubik font-bold uppercase rounded px-4 py-2 text-2xl border-2 text-layout-red border-layout-red hover:bg-layout-white transition duration-500 ease-in-out"
                    href="{{ route('gallery') }}">
                    galerie
                </a>
            </div>

            <div class="space-y-2 bg-layout-gray bg-opacity-40 p-3 rounded-lg">
                <h2 class="text-left text-lg font-Rubik flex-wrap">
                    Nabízíme spoust služeb od <span class="font-bold">nástřiku podvozku</span>, <span class="font-bold">přezutí pneumatik</span> až po <span class="font-bold">umytí auta</span>
                </h2>
            </div>

        </div>

        <div>
            <x-user.svg.cargarage/>

        </div>
    </div>


        {{-- <div class="flex items-center justify-center mt-16">
            <div class="space-y-5 w-full text-center">

                <div>
                    <h1 class="text-6xl tracking-tight font-extrabold uppercase font-poppins text-transparent bg-clip-text bg-gradient-to-l from-layout-red to-layout-gray">
                        <span class="block">Nástřiky</span>
                        <span class="block">podvozku</span>
                    </h1>
                </div>

                <div class="grid grid-cols-1 space-y-5">
                    <div class="space-x-2 flex items-center justify-center">
                        <a class="font-Rubik font-bold uppercase rounded px-4 py-2 text-2xl border-2 text-layout-white bg-layout-red bg-opacity-80 hover:bg-opacity-100 transition duration-500 ease-in-out"
                            href="{{ route('services') }}">
                            Služby !
                        </a>

                        <a class="font-Rubik font-bold uppercase rounded px-4 py-2 text-2xl border-2 text-layout-red border-layout-red hover:bg-layout-white transition duration-500 ease-in-out"
                            href="{{ route('gallery') }}">
                            galerie
                        </a>
                    </div>

                    <div class="">
                        <div class="space-y-2 bg-layout-gray bg-opacity-40 p-3 rounded-lg">
                            <h2 class="text-left text-lg font-Rubik flex-wrap">
                                Nabízíme spoust služeb od <span class="font-bold">nástřiku podvozku</span>, <span class="font-bold">přezutí pneumatik</span> až po <span class="font-bold">umytí auta</span>
                            </h2>

                            <p class="text-left flex-wrap">
                                V průběhu působení v malířské oblasti jsme se rozšířili dalé do stavebních prací v roce 2007. Naše péče o zákazníky zahrnuje odborné poradenství, zaměření prostoru a celkový cenový návrh.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}

        {{-- <div class="flex flex-col items-end justify-end space-y-4 ">
            <div class="border-2 border-black p-3 rounded-tr-2xl rounded-bl-2xl bg-layout-gray bg-opacity-40 backdrop-filter backdrop-blur-lg divide-x divide-layout-red ">

                <h1 class="font-rubik font-bold flex items-center justify-center flex-col space-y-2 ">
                    <span class="text-layout-black text-lg">
                        „Vůz má svoje vlastní srdce a emoce. Proto ho musíte milovat.“
                    </span>
                    <span class="text-layout-gray text-sm">
                        Juan Manuel Fangio
                    </span>
                </h1>
            </div>
        </div> --}}

        <div class="absolute xl:top-1/2 transform xl:-translate-y-1/2 xl:right-0 xl:w-5/12">
            <x-user.svg.cargarage/>
        </div>

    </div>

</section>
