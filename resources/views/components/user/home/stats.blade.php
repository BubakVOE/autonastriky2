<section id="stats" class="pb-24 relative ">
    <div class="grid grid-cols-1 lg:grid-cols-3 place-items-center py-10  ">
        <div class="hidden lg:block xl:w-96 xl:h-96">
            <x-user.svg.leftbox/>
        </div>

        <div class="grid grid-cols-1 gap-y-5 xl:gap-y-0 md:grid-cols-3 place-items-center gap-x-16 p-3 ">
            <div class="border border-white flex flex-col items-center justify-center p-5 space-y-2 w-48 max-w-2xl bg-layout-red rounded-lg hover:scale-105 transition duration-500 ease-in-out shadow-xl cursor-default ">
                <svg class="flex-shrink-0 h-10 w-10 text-layout-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                </svg>

                <h1 class="font-bold text-layout-white font-Rubik">
                    {{ $newCars->count() }}
                </h1>

                <h1 class="text-layout-white font-Rubik font-semibold">
                    Rezervovan√° auta
                </h1>
            </div>

            <div class="border border-white flex flex-col items-center justify-center p-5 space-y-2 w-48 max-w-2xl bg-layout-red rounded-lg hover:scale-105 transition duration-500 ease-in-out shadow-xl cursor-default ">
                <svg class="flex-shrink-0 h-10 w-10 text-layout-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                </svg>

                <h1 class="font-bold text-layout-white font-Rubik">
                    {{ $completedCars->count() }}
                </h1>

                <h1 class="text-layout-white font-Rubik font-semibold">
                    Hotov√° auta
                </h1>
            </div>

            <div class="border border-white flex flex-col items-center justify-center p-5 space-y-2 w-48 max-w-2xl bg-layout-red rounded-lg hover:scale-105 transition duration-500 ease-in-out shadow-xl cursor-default ">
                <svg class="flex-shrink-0 h-10 w-10 text-layout-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>

                <h1 class="font-bold text-layout-white font-Rubik">
                    94 %
                </h1>

                <h1 class="text-layout-white font-Rubik font-semibold">
                    Spokojenost lid√≠
                </h1>
            </div>
        </div>

        <div class="hidden lg:block xl:w-96 xl:h-96">
            <x-user.svg.rightbox/>
        </div>
    </div>
</section>
