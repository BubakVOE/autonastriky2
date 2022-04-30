<section id="services" class="pb-24 pt-16 relative  ">

    <div class="absolute -bottom-44 -z-10">
        <img class="w-4/12" src="{{ asset('src/bg/Iphone-bg_cross.png') }}" >
    </div>

{{-- <div class="absolute">
    <img class="w-4/12 " src="{{ asset('src/bg/Iphone-bg_column.png') }}" >
</div> --}}

    <div class="w-9/12 mx-auto shadow-2xl shadow-layout-gray bg-layout-lightgray py-10 rounded-2xl  ">
        <div class="text-center ">
            <h1 class="text-lg tracking-tight font-extrabold sm:text-1xl md:text-4xl uppercase font-poppins text-transparent bg-clip-text bg-gradient-to-r from-layout-red to-layout-gray">
                Práce, které nabízíme
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
