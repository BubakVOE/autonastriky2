@extends('layouts.dashboard')
@section('content')

    <section class="pt-48 pb-20 bg-layout-gray ">

            <form
                action="{{ route('post.update', $post->id) }}"
                method="post"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="rounded-xl relative shadow-xl max-w-2xl mx-auto py-16 px-4 sm:px-6 lg:max-w-7xl lg:py-24 lg:px-8 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 bg-layout-lightgray">

                    <div class="absolute text-xs top-2 left-2 grid grid-cols-2 gap-x-2 text-gray-300">
                        <h1>vytvořeno</h1>
                        <h1>{{ date('jS M Y', strtotime($post->created_at)) }}</h1>

                        <h1>aktualizováno</h1>
                        <h1> {{ date('jS M Y', strtotime($post->updated_at)) }}</h1>
                    </div>

                    <div class="lg:col-span-2 lg:border-r lg:border-black-custom lg:pr-8 flex items-center flex-row">
                        <img
                        src="{{ asset('posts/thumbNail/'.$post->cover) }}"
                        class="w-40 h-40 mr-5 rounded-full object-center object-cover">




                        <div class="flex flex-row">

                            <div class="relative md:w-5/12">
                                <span class="absolute px-2 pb-1 bottom-12 ml-1 rounded-t-md bg-black-lighter text-own-orange">
                                    Auto
                                </span>
                                <input  type="text"
                                        name="car"
                                        class="h-12 px-2 w-full rounded border border-black-custom outline-none"
                                        required
                                        autocomplete="car"
                                        value="{{ $post->car }}"
                                        placeholder="BMW"
                                        >
                            </div>

                            <div class="relative md:w-5/12">
                                <span class="absolute px-2 pb-1 bottom-12 ml-1 rounded-t-md bg-black-lighter text-own-orange">
                                    Auto
                                </span>
                                <input  type="text"
                                        name="type"
                                        class="h-12 px-2 w-full rounded border border-black-custom outline-none"
                                        required
                                        value="{{ $post->type }}"
                                        placeholder="octavie">
                            </div>

                        </div>
                    </div>

                    <div class="mt-4 lg:mt-0 lg:row-span-3">
                        <div class="mt-10">

                            <div class="mt-10">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-md font-Raleway font-bold text-gray-900">Další obrázky</h3>
                                </div>

                                <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4 mt-4 pl-4">

                                    @foreach ($images as $image)
                                        <img src="{{ asset('posts/images/'.$image->image) }}" alt="">
                                    @endforeach

                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-black-custom lg:pr-8">

                        <div>
                            <h1 class="text-md font-bold font-Raleway text-gray-900">
                                Popisek
                            </h1>

                            <div class="space-y-6 pl-4  ">
                                <div class="mb-4 w-full bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
                                    <div class="flex justify-between items-center py-2 px-3 border-b dark:border-gray-600">
                                        <div class="flex flex-wrap items-center divide-gray-200 sm:divide-x dark:divide-gray-600">
                                            <div class="flex items-center space-x-1 sm:pr-4">
                                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path></svg>
                                                </button>
                                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                                                </button>
                                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path></svg>
                                                </button>
                                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                </button>
                                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z" clip-rule="evenodd"></path></svg>
                                                </button>
                                            </div>
                                            <div class="flex flex-wrap items-center space-x-1 sm:pl-4">
                                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                                </button>
                                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                                                </button>
                                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                                </button>
                                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                </button>
                                            </div>
                                        </div>
                                        <button type="button" data-tooltip-target="tooltip-fullscreen" class="p-2 text-gray-500 rounded cursor-pointer sm:ml-auto hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 11-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15 13.586V12a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                        </button>
                                        <div id="tooltip-fullscreen" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                                            Show full screen
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 bg-white rounded-b-lg dark:bg-gray-800">
                                        <label for="editor" class="sr-only">Publish post</label>
                                        <textarea
                                            id="editor"
                                            name="description"
                                            rows="8"
                                            class="block px-0 w-full text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                            placeholder="Write an article..."
                                            required>{{ $post->description  }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-10">
                            <h3 class="text-md font-Raleway font-bold text-gray-900">
                                Provedené služby
                            </h3>

                            <div class="ml-4 mt-4 grid grid-cols-1 lg:grid-cols-2 gap-y-5">

                                <dt class="hover:scale-105 transform transition duration-500 ease-in-out flex items-center justify-center bg-layout-gray shadow-inner py-2 rounded-lg w-11/12">
                                    <div class="text-layout-green flex items-center justify-center h-12 w-12 rounded-full bg-layout-lightgray ">
                                        <svg class="h-10 w-10 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                        </svg>
                                    </div>

                                    <p class="ml-16 text-lg leading-6 font-bold text-layout-green ">Výměna pneumatik</p>
                                </dt>

                                <dt class="hover:scale-105 transform transition duration-500 ease-in-out flex items-center justify-center bg-layout-gray shadow-inner py-2 rounded-lg w-11/12">
                                    <div class="text-layout-green flex items-center justify-center h-12 w-12 rounded-full bg-layout-lightgray ">
                                        <svg class="h-10 w-10 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                        </svg>
                                    </div>

                                    <p class="ml-16 text-lg leading-6 font-bold text-layout-green ">Výměna pneumatik</p>
                                </dt>

                                <dt class="hover:scale-105 transform transition duration-500 ease-in-out flex items-center justify-center bg-layout-gray shadow-inner py-2 rounded-lg w-11/12">
                                    <div class="text-layout-green flex items-center justify-center h-12 w-12 rounded-full bg-layout-lightgray ">
                                        <svg class="h-10 w-10 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                        </svg>
                                    </div>

                                    <p class="ml-16 text-lg leading-6 font-bold text-layout-green ">Výměna pneumatik</p>
                                </dt>

                            </div>
                        </div>

                    </div>

                    <button
                    type="submit"
                    class="flex flex-row items-center justify-center text-layout-red font-Rubik font-extrabold text-3xl uppercase bg-layout-gray shadow-inner border border-transparent w-6/12 p-3 rounded-lg hover:shadow-none hover:border-white hover:bg-layout-lightgray">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                    </svg>
                    uložit
                    </button>

                </div>

            </form>

    </section>








{{--
    <div class="h-full flex flex-col justify-center items-center mt-1/12 ">
        <h1 class="text-xl font-poppins font-bold text-cool-gray-300 mb-3">
            Přidat nabídku
        </h1>

        <form action="/dashboard/post/update/{{ $post->id }}" method="post" enctype="multipart/form-data" class="w-full h-11/12 px-10 bg-gray-light py-10 flex flex-col items-center justify-center ">
            @csrf
            @method('PUT')

            <div class="flex flex-col justify-evenly  h-full w-6/12 mx-auto space-y-5 bg-gray-300 p-5">

                <div class="flex justify-between items-center space-x-2 ">
                    <div class="w-4/12 ">
                        <span class="">
                            Auto
                        </span>
                        <input
                            type="text"
                            name="car"
                            class="h-12 px-2 w-full border-2 border-own-black rounded focus:border-black focus:ring-0 placeholder-gray-400 focus:placeholder-white"
                            required
                            value="{{ $post->car }}"
                            placeholder="BMW">
                    </div>

                    <div class="w-2/12 space-y-3 ">


                        <div class="space-y-1">
                            <span class="">
                                typ
                            </span>
                            <select
                            name="type"
                            class="text-left w-full border-2 rounded focus:border-black focus:ring-0 placeholder-gray-400  focus:placeholder-white"
                            >
                                <option value="byt">Byt</option>
                                <option value="dum">Dům</option>
                                <option value="pozemek">Pozemek</option>
                            </select>
                        </div>

                    </div>

                </div>

                <div class="relative w-6/12 mx-auto">

                    <label class="block text-left" >
                        <span class="text-gray-700">
                            Popis
                        </span>


                        <textarea
                            name="description"
                            class="form-textarea mt-1 block w-full"
                            rows="3"
                            placeholder="Enter some long form content."
                        >
                            {{ $post->description  }}
                        </textarea>

                    </label>

                </div>


                <div class="flex flex-col items-center space-y-2 ">
                    <div class="flex flex-col font-bold ">
                        <label class="block my-2 text-black font-poppins  text-sm font-bold ">
                            <h1>Změnit náhled</h1>
                        </label>

                        <input  class="rounded focus:outline-none ml-2 text-red-custom focus:text-black-custom"
                                type="file"
                                name="cover"
                                >
                    </div>

                    <div class="flex flex-col font-bold  ">
                        <label class="block my-2 text-black font-poppins  text-sm font-bold ">
                            <h1>Přidat obrázky</h1>
                        </label>

                        <input  class="rounded focus:outline-none ml-2 text-red-custom focus:text-black-custom "
                                type="file"
                                name="images[]" multiple
                                >
                    </div>
                </div>


                <div class="flex justify-center ">
                    <button type="submit" class="flex flex-row justify-evenly items-center w-32 bg-black px-3 py-2 rounded-md focus:outline-none ">
                        <h1 class="font-montserrat text-yellow-custom ">Nahrát</h1>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-custom" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                        </svg>
                    </button>
                </div>
            </div>
        </form>

        <div class="flex flex-col justify-center items-center">
            <h1 class="font-poppins pb-5">Náhlední fotka</h1>

            <div class="flex flex-col items-center justify-between bg-gray-medium pb-7 pt-5 px-5 ">

                <form action="/dashboard/post/deleteThumbnail/{{ $post->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="flex items-center justify-center bg-red-custom rounded-full p-1 mb-4 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                    </button>

                </form
                >
                <img src="{{ asset('posts/thumbNail/'.$post->cover) }}" style="max-height:100px; max-width:100px" >
            </div>

        </div>


        <div class="flex flex-col justify-center items-center">
            <h1 class="font-poppins pb-5">Náhlední fotka</h1>

            <div class="grid grid-cols-5 gap-5">
                @foreach ($images as $image)

                    <form action="/dashboard/post/deleteimage/{{ $post->id }}" method="post">
                        @csrf
                        @method('delete')

                        <div class="bg-blue-custom p-2 rounded flex flex-col items-center ">
                            <button class="flex items-center justify-center bg-red-500 rounded-full p-2 mb-4 font-extrabold  ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-custom" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>

                            <img class="bg-yellow-custom p-2 rounded" src="{{ asset('posts/images/'.$image['image']) }}" style="max-height:100px; max-width:100px; min-height:100px; min-width:100px" >
                        </div>

                    </form>

                @endforeach
            </div>

        </div>
    </div> --}}


@endsection
