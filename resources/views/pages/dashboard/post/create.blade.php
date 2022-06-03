@extends('layouts.dashboard')

@section('content')

    <section class="pt-32 pb-24 bg-layout-gray ">
        <div class="h-full flex flex-col justify-center items-center mt-1/12 ">
            <h1 class="text-2xl font-Rubik font-bold text-layout-red mb-3 uppercase">Přidat fotografie</h1>

            <form
                action="{{ route('post.store') }}"
                method="post"
                enctype="multipart/form-data"
                class="h-11/12 p-14 rounded-md flex flex-col items-center justify-center bg-layout-lightgray  ">
                @csrf

                <div class="grid grid-cols-1 place-items-center">

                    <div class="flex flex-col justify-evenly  h-full">

                        <input  type="text"
                                name="car"
                                class="py-2 px-5 rounded focus:outline-none text-cool-gray-600 focus:text-black-custom  "
                                placeholder="název auta">

                        <input  type="text"
                                name="type"
                                class="py-2 px-5 rounded focus:outline-none text-cool-gray-600 focus:text-black-custom  "
                                placeholder="typ auta">

                        <Textarea   name="description"
                                    cols="20" rows="4"
                                    class="form-textarea text-gray-light"
                                    placeholder="popis"></Textarea>
                    </div>

                    <div>
                        <div class="my-4 flex flex-col font-bold w-5/6 ">
                            <label class="block my-2 text-white font-poppins  text-sm font-bold ">
                                <h1>Hlavní obrázek</h1>
                            </label>

                            <input  class="rounded focus:outline-none ml-2 text-gray-300 focus:text-black-custom"
                                    type="file"
                                    name="cover"
                                    >
                        </div>

                        <div class="my-4 flex flex-col font-bold w-5/6 ">
                            <label class="block my-2 text-white font-poppins  text-sm font-bold ">
                                <h1>Další obrázky</h1>
                            </label>

                            <input  class="rounded focus:outline-none ml-2 text-gray-300 focus:text-black-custom "
                                    type="file"
                                    name="images[]" multiple
                                    >
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="flex flex-row justify-evenly items-center w-32 bg-red-custom px-3 py-2 rounded-md focus:outline-none bg-layout-green text-black border-2 border-black mt-10 ">
                            <h1 class="">Nahrát</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                            </svg>
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </section>





@endsection
