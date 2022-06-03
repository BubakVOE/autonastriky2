@extends('layouts.user')
@section('content')

<div class="pt-32 pb-24 bg-layout-gray  ">
    <div class="w-11/12 xl:w-9/12 mx-auto shadow-xl bg-layout-lightgray py-10 rounded-2xl xl:mt-20  ">

        <div class=" grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8 m-10 place-items-center">

            <div class="shadow-inner border-2 border-transparent bg-layout-gray py-10 rounded-lg w-full h-full group grid grid-cols-1 hover:border-layout-red transition duration-500 ease-in-out">
                <div class="flex items-center justify-center flex-col h-44">
                    <div class="mb-5 bg-layout-lightgray p-1 rounded-full shadow-xl">
                        <div class="block group-hover:hidden">
                            <svg class="h-24 w-24 text-layout-red "  xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>

                        <div  class="hidden group-hover:block">
                            <svg class="h-24 w-24"  xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h1 class="text-4xl border-b border-layout-red font-Rubik font-bold uppercase">
                            Lokace
                        </h1>
                    </div>
                </div>

                <div class="mb-5 grid grid-cols-1 place-items-center">
                    <h1 class="font-Rubik text-xl text-layout-black tracking-tight font-extrabold">
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

            <div class="shadow-inner border-2 border-transparent bg-layout-gray py-10 rounded-lg w-full h-full group grid grid-cols-1 hover:border-layout-red transition duration-500 ease-in-out">
                <div class="flex items-center justify-center flex-col h-44">
                    <div class="mb-5 bg-layout-lightgray p-1 rounded-full shadow-xl">
                        <div class="block group-hover:hidden">
                            <svg class="h-24 w-24 text-layout-red"  xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>

                        <div  class="hidden group-hover:block">
                            <svg class="h-24 w-24 "  xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h1 class="text-4xl border-b border-layout-red font-Rubik font-bold uppercase">
                            informace
                        </h1>
                    </div>
                </div>

                <div class="mb-5 space-y-2 grid grid-cols-1 place-items-center">
                    <div class="grid grid-cols-1 place-items-center">
                        <h1 class="font-Rubik text-xl text-layout-black tracking-tight font-extrabold uppercase">
                            ičo
                        </h1>

                        <h2>
                            63681927
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 place-items-center">
                        <h1 class="font-Rubik text-xl text-layout-black tracking-tight font-extrabold uppercase">
                            dič
                        </h1>

                        <h2>
                            CZ7408235307
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 place-items-center">
                        <h1 class="font-Rubik text-xl text-layout-black tracking-tight font-extrabold uppercase">
                            zaregistrováno v
                        </h1>

                        <h2>
                            Magistrátu města Olomouc
                        </h2>
                    </div>
                </div>
            </div>

            <div class="shadow-inner border-2 border-transparent bg-layout-gray py-10 rounded-lg w-full h-full group grid grid-cols-1 hover:border-layout-red transition duration-500 ease-in-out">
                <div class="flex items-center justify-center flex-col h-44">
                    <div class="mb-5 bg-layout-lightgray p-1 rounded-full shadow-xl">
                        <div class="block group-hover:hidden">
                            <svg class="h-24 w-24 text-layout-red " xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>

                        <div  class="hidden group-hover:block">
                            <svg class="h-24 w-24 " xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h1 class="text-4xl border-b border-layout-red font-Rubik font-bold uppercase">
                            Kontakty
                        </h1>
                    </div>
                </div>

                <div class="mb-5 grid grid-cols-1 place-items-center">
                    <div class="grid grid-cols-1 place-items-center">
                        <h1 class="font-Rubik text-xl text-layout-black tracking-tight font-extrabold uppercase">
                            Telefonní číslo
                        </h1>

                        <h2>
                            +420 608 701 054
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 place-items-center">
                        <h1 class="font-Rubik text-xl text-layout-black tracking-tight font-extrabold uppercase">
                            email
                        </h1>
                        <h2>
                            ludwigjiri@seznam.cz
                        </h2>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>



{{-- <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d684.4624180914803!2d17.327078719597434!3d49.632747267646984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47124bee350c6adf%3A0xd55350258e71df68!2sBablerovo%20n%C3%A1m.%2019%2F4%2C%20779%2000%20Samoti%C5%A1ky!5e1!3m2!1scs!2scz!4v1653755180819!5m2!1scs!2scz"
                        width="450"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe> --}}



@endsection

