<section id="contacts" class="pb-44 relative">

    <div class="w-11/12 xl:w-9/12 mx-auto shadow-xl bg-layout-lightgray py-10 rounded-2xl xl:mt-20 ">
        <div class="text-center ">
            <h1 class="text-2xl tracking-tight font-extrabold md:text-4xl uppercase font-Rubik text-layout-red ">
                Kontakty
            </h1>
        </div>

        <div class=" grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8 m-10 place-items-center   ">
            <div class="group w-10/12 h-80 mx-auto flex items-center justify-center p-5 shadow-inner border-2 border-transparent bg-layout-gray rounded-3xl transform transition duration-300 hover:scale-105 hover:border-layout-red hover:shadow-xl ">
                <div class="group-hover:hidden">
                    <x-user.svg.location/>
                </div>

                <div class="hidden group-hover:grid">
                    <div class="grid grid-cols-1 place-items-center">
                        <h1 class="font-Rubik text-xl text-layout-red tracking-tight font-extrabold">
                            Provozovna firmy
                        </h1>
                        <a
                            href="https://www.google.com/maps/place/Bablerovo+n%C3%A1m.+19%2F4,+779+00+Samoti%C5%A1ky/@49.6326924,17.3271093,158m/data=!3m1!1e3!4m5!3m4!1s0x47124bee350c6adf:0xd55350258e71df68!8m2!3d49.6327303!4d17.3275503!5m1!1e4"
                            class="flex flex-row space-x-2 mt-3 underline"
                            target="_blank"
                            >
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </span>
                            <span>
                                Samotišky 453
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="group w-10/12 h-80 mx-auto flex items-center justify-center p-5 shadow-inner border-2 border-transparent bg-layout-gray rounded-3xl transform transition duration-300 hover:scale-105 hover:border-layout-red hover:shadow-xl ">
                <div class="group-hover:hidden">
                    <x-user.svg.information/>
                </div>

                <div class='hidden group-hover:grid grid-cols-1 gap-y-5 place-items-center'>
                    <div class="grid grid-cols-1 place-items-center">
                        <h1 class="font-Rubik text-xl text-layout-red tracking-tight font-extrabold uppercase">
                            ičo
                        </h1>

                        <h2>
                            63681927
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 place-items-center">
                        <h1 class="font-Rubik text-xl text-layout-red tracking-tight font-extrabold uppercase">
                            dič
                        </h1>

                        <h2>
                            CZ7408235307
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 place-items-center">
                        <h1 class="font-Rubik text-xl text-layout-red tracking-tight font-extrabold uppercase">
                            zaregistrováno v
                        </h1>

                        <h2>
                            Magistrátu města Olomouc
                        </h2>
                    </div>
                </div>
            </div>

            <div class="group w-10/12 h-80 mx-auto flex items-center justify-center p-5 shadow-inner border-2 border-transparent bg-layout-gray rounded-3xl transform transition duration-300 hover:scale-105 hover:border-layout-red hover:shadow-xl ">
                <div class="group-hover:hidden">
                    <x-user.svg.mobile/>
                </div>

                <div class='hidden group-hover:grid grid-cols-1 gap-y-5 place-items-center'>
                    <div class="grid grid-cols-1 place-items-center">
                        <h1 class="font-Rubik text-xl text-layout-red tracking-tight font-extrabold uppercase">
                            Telefonní číslo
                        </h1>

                        <h2>
                            +420 608 701 054
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 place-items-center">
                        <h1 class="font-Rubik text-xl text-layout-red tracking-tight font-extrabold uppercase">
                            email
                        </h1>
                        <h2>
                            ludwigjiri@seznam.cz
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('contacts-index') }}"
                class="font-Rubik font-bold uppercase rounded px-4 py-2 text-2xl border text-white border-white bg-layout-red bg-opacity-80 hover:bg-opacity-100 transition duration-500 ease-in-out">
                Zobrazit více
            </a>
        </div>

    </div>

</section>
