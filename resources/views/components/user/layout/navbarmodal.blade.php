<div id="Opacity" class="fixed hidden top-0 left-0 w-full h-screen backdrop-filter backdrop-blur-sm backdrop-brightness-50 z-20">
    <div class="h-full w-full flex items-center justify-center">
        <div class="w-8/12 h-8/12 ">
            <div class="bg-gray-500 bg-gradient-to-br from-layout-red to-layout-gray w-full h-full relative" >

                <div class="text-center  ">
                    <span id="close" class="cursor-pointer close absolute top-5 right-5 w-10 h-10 border-2 border-black-custom rounded-xl bg-gray-light text-2xl font-bold z-30 ">
                        &times;
                    </span>
                </div>

                <div class="flex w-full h-full top-0 absolute justify-center items-center flex-col text-center ">

                    <div class="w-full flex justify-center">
                        <h1 class="text-4xl relative top-5 tracking-tight font-extrabold sm:text-3xl md:text-6xl uppercase font-Rubik mt-2">
                            předběžná Rezervace
                        </h1>
                    </div>

                    <div class="w-6/12 mx-auto h-full  flex justify-center items-center ">

                        <form action="{{ route('rezervace-store') }}" method="POST">
                            @csrf

                            <div class=''>
                                <div class="text-center flex flex-col items-center justify-center py-4 border-b-2 border-gray-medium ">
                                    <h1 class="text-lg font-poppins">Formulář</h1>
                                    <h1 class="">pro příhlašení vozidla</h1>
                                </div>

                                <div class="flex justify-center">
                                    <div class="px-4 py-6">

                                        <div class=" items-center justify-between mb-5">
                                            <div class="flex">
                                                <div class="flex flex-col font-bold w-4/6 px-2">
                                                    <label class="mb-1 ">
                                                        Jméno
                                                    </label>
                                                    <input
                                                        type="text"
                                                        name="firstName"
                                                        placeholder="Pavel"
                                                        class="py-2 px-5 rounded focus:outline-none"
                                                        >
                                                </div>

                                                <div class="flex flex-col font-bold w-4/6 px-2">
                                                    <label class="mb-1 ">
                                                        Příjmení
                                                    </label>
                                                    <input
                                                        type="text"
                                                        name="lastName"
                                                        placeholder="Novák"
                                                        class="py-2 px-5 rounded focus:outline-none"
                                                        >
                                                </div>
                                            </div>

                                            <div class="flex justify-center items-center mt-5">
                                                <div class="flex flex-col font-bold w-2/6 px-2">
                                                    <label class="mb-1 ">
                                                        telefonní číslo
                                                    </label>
                                                    <input
                                                        type="text"
                                                        name="mobile"
                                                        placeholder="730681670"
                                                        class="py-2 px-5 rounded focus:outline-none text-center"
                                                        >
                                                </div>

                                                <div class="flex flex-col font-bold w-3/6 px-2">
                                                    <label class="mb-1 ">
                                                        datum
                                                    </label>
                                                    <input
                                                        type="date"
                                                        name="date"
                                                        class="py-2 px-5 rounded focus:outline-none text-center"
                                                        >
                                                </div>
                                            </div>

                                            <div class="flex justify-center mt-5">
                                                <div class="flex flex-col font-bold w-4/6 px-2">
                                                    <label class="mb-1 ">
                                                        E-mail
                                                    </label>
                                                    <input
                                                        type="text"
                                                        name="email"
                                                        placeholder="Pavelnovak@seznam.cz"
                                                        class="py-2 px-5 rounded focus:outline-none text-center  "
                                                        >
                                                </div>
                                            </div>

                                            <div class="flex justify-center mt-5">
                                                <div class="flex flex-col font-bold w-4/6 px-2 ">

                                                    <label class="mb-1 ">
                                                        Auto
                                                    </label>

                                                    <select name="car" class="py-2 px-5 rounded focus:outline-none">
                                                        <option value="skoda">Škoda</option>
                                                        <option value="audi">Audi</option>
                                                        <option value="bmw">BMW</option>
                                                    </select>
                                                </div>

                                                <div class="flex flex-col font-bold w-4/6 px-2">
                                                    <label class="mb-1 ">
                                                        druh auta
                                                    </label>

                                                    <input
                                                    type="text"
                                                    name="type"
                                                    placeholder="Octavia"
                                                    class="py-2 px-5 rounded focus:outline-none text-center  "
                                                    >
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="text-center relative ">
                                    @if (session()->has('message'))
                                        <div class="absolute -bottom-10 left-1/2 transform -translate-x-1/2">
                                            <h1 class="text-gray-50 bg-green-500 rounded-2xl py-1 px-2">
                                                {{ session()->get('message') }}
                                            </h1>
                                        </div>

                                    @else
                                        <button
                                            type="submit"
                                            class="font-Rubik font-bold uppercase rounded px-4 py-2 mb-5 text-2xl border-2 text-layout-white bg-layout-red bg-opacity-80 hover:bg-opacity-100 transition duration-500 ease-in-out">
                                            Odeslat
                                        </button>
                                    @endif

                                </div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
