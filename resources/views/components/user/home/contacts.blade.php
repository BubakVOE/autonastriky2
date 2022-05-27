<section id="contacts" class="pb-24 pt-16 relative  ">

    <div class="w-9/12 mx-auto shadow-xl bg-layout-lightgray py-10 rounded-2xl mt-20 ">
        <div class="text-center ">
            <h1 class="text-lg tracking-tight font-extrabold sm:text-1xl md:text-4xl uppercase font-Rubik text-layout-red ">
                Kontakty
            </h1>
        </div>

        <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8 m-10 place-items-center   ">
            <div class="w-10/12 mx-auto h-full flex items-center justify-center p-5 shadow-inner border-2 border-transparent bg-layout-gray rounded-3xl transform transition duration-300 hover:scale-105 hover:border-layout-red hover:shadow-xl ">
                <x-user.svg.location/>
            </div>

            <div class="w-10/12 mx-auto h-full flex items-center justify-center p-5 shadow-inner border-2 border-transparent bg-layout-gray rounded-3xl transform transition duration-300 hover:scale-105 hover:border-layout-red hover:shadow-xl ">
                <x-user.svg.information/>
            </div>

            <div class="w-10/12 mx-auto h-full flex items-center justify-center p-5 shadow-inner border-2 border-transparent bg-layout-gray rounded-3xl transform transition duration-300 hover:scale-105 hover:border-layout-red hover:shadow-xl ">
                <x-user.svg.mobile/>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('services') }}"
                class="font-Rubik font-bold uppercase rounded px-4 py-2 text-2xl border text-white border-white bg-layout-red bg-opacity-80 hover:bg-opacity-100 transition duration-500 ease-in-out">
                Rezervovat
            </a>
        </div>

    </div>

</section>
