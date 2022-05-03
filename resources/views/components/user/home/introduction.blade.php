<section id="introduction" class="h-screen relative grid grid-cols-1 place-items-end items-center"
                style="background-image: linear-gradient(to bottom right, rgba(255, 47, 0, 0.98), rgba(248, 149, 0, 0.397) , rgba(10, 10, 10, 0.397)); ">

    <div class="grid grid-cols-2 w-11/12 h-full">

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

    </div>

    <div class="absolute top-1/2 transform -translate-y-1/2 right-0 w-5/12">
        <x-user.svg.cargarage/>
    </div>


    <div class="absolute bottom-0 left-36 w-5/12">
        <x-user.svg.truckgarage/>
    </div>



    {{-- <div class="absolute left-20 bottom-10">
        <img src="{{ asset('src/bg/home.png') }}"
            alt="3D dům"
            class="w-4/12">
    </div> --}}

</section>
