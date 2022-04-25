<section class="py-24 ">
    <div class="w-10/12 mx-auto">

        <div class="text-left ">
            <h1 class="font-Rubik font-bold text-blue-custom text-2xl border-b border-black">O mně</h1>
        </div>

        <div class="max-w-2xl mx-auto py-16 sm:py-12 px-4 sm:px-6 lg:px-8 lg:max-w-none ">

            <div class=" flex justify-center items-center flex-col md:flex-row  md:w-full md:justify-between space-y-10">
                <div class=" xl:w-5/12 space-y-5 ">
                    <h1 class="font-bold w-56 text-left ">Základní informace</h1>

                    <div class="ml-5 w-64 lg:w-96 mx-auto space-y-5">
                        <p class="  ">
                            Jmenuji se Petr Sitář a působím jako certifikovaný realitní makléř pro Olomoucký kraj. Specializuji se na zprostředkování prodeje a pronájmu
                        </p>

                        <ul class="ml-10 list-disc space-y-2 w-60 font-semibold">
                            <li>bytů</li>
                            <li>domů</li>
                            <li>pozemků</li>
                            <li>komerčních prostor.</li>
                        </ul>

                        <p class="w-56 lg:w-96">
                            Svým klientům nabízím kompletní servis služeb v oblasti
                            realitního trhu – od poradenství až po veškeré administrativní úkony.
                            Jako rodák ze Šternberka a obyvatel Olomouce svůj kraj dobře
                            znám a rád vám poskytnu odborný názor na místní trh s nemovitostmi.
                        </p>
                    </div>

                </div>

                <div class="flex items-center">
                    <img class="w-72 lg:w-80 xl:w-full" src="{{ asset('src/aboutMe/bg.png') }}" alt="">
                </div>
            </div>


        </div>

        <div class="text-center ">
            <a href="{{ route('services') }}" class="uppercase font-bold text-xl font-Rubik text-yellow-custom bg-blue-custom px-5 py-3 rounded-sm">
                Zobrazit více
            </a>
        </div>

    </div>
</section>
