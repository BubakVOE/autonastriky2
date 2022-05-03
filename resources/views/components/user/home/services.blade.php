<section id="services" class="pb-24 relative  ">

    <div class="grid grid-cols-3 place-items-center bg-layout-gray py-10 ">
        <div class="w-96 h-96">
            <x-user.svg.boxes/>
        </div>

        <div class="grid grid-cols-3 place-items-center gap-5 p-3 ">

            <div class="flex flex-col items-center justify-center p-5 space-y-2 w-48 bg-layout-red rounded-lg hover:bg-layout-white transition duration-500 ease-in-out shadow-xl ">
                <svg class="flex-shrink-0 h-10 w-10 text-layout-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                </svg>

                <h1 class="font-bold text-layout-black font-Rubik">
                    50
                </h1>

                <h1 class="text-layout-black font-Rubik font-semibold">
                    Rezervovaná auta
                </h1>
            </div>

            <div class="flex flex-col items-center justify-center p-5 space-y-2 w-48 bg-layout-red rounded-lg hover:bg-layout-white transition duration-500 ease-in-out shadow-xl ">
                <svg class="flex-shrink-0 h-10 w-10 text-layout-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                </svg>

                <h1 class="font-bold text-layout-black font-Rubik">
                    250
                </h1>

                <h1 class="text-layout-black font-Rubik font-semibold">
                    Hotová auta
                </h1>
            </div>

            <div class="flex flex-col items-center justify-center p-5 space-y-2 w-48 bg-layout-red rounded-lg hover:bg-layout-white transition duration-500 ease-in-out shadow-xl ">
                <svg class="flex-shrink-0 h-10 w-10 text-layout-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>

                <h1 class="font-bold text-layout-black font-Rubik">
                    94 %
                </h1>

                <h1 class="text-layout-black font-Rubik font-semibold">
                    Spokojenost lidí
                </h1>
            </div>
        </div>

        <div class="w-96 h-96">
            <x-user.svg.boxes/>
        </div>
    </div>


    <div class="absolute -bottom-44 -z-10">
        <img class="w-4/12" src="{{ asset('src/bg/Iphone-bg_cross.png') }}" >
    </div>

{{-- <div class="absolute">
    <img class="w-4/12 " src="{{ asset('src/bg/Iphone-bg_column.png') }}" >
</div> --}}

    <div class="w-9/12 mx-auto shadow-2xl shadow-layout-gray bg-layout-lightgray py-10 rounded-2xl mt-20 ">
        <div class="text-center ">
            <h1 class="text-lg tracking-tight font-extrabold sm:text-1xl md:text-4xl uppercase font-poppins text-transparent bg-clip-text bg-gradient-to-r from-layout-red to-layout-gray">
                Služby, které nabízíme
            </h1>
        </div>

        <div class="grid grid-cols-1 gap-x-6 gap-y-8 xl:gap-x-10 sm:grid-cols-2 lg:grid-cols-4 m-10  ">
            <x-user.services.service text='Výměna pneumatik'/>
            <x-user.services.service text='Nástřiky dutin'/>
            <x-user.services.service text='Umytí a naleštění skel'/>
            <x-user.services.service text='Vyluxování auta'/>
        </div>

        <div class="text-center hover:scale-105 transition duration-500 ease-in-out w-2/12 mx-auto bg-layout-red bg-opacity-80 hover:bg-opacity-100 py-2  ">
            <a href="{{ route('services') }}" class="font-Rubik font-bold uppercase rounded text-2xl text-layout-white ">
                Zobrazit služby
            </a>
        </div>

    </div>

</section>
