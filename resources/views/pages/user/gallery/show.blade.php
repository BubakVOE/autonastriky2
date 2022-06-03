@extends('layouts.user')
@section('content')

    <section class="pt-48 pb-20 bg-layout-gray ">

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

                <h1 class="text-5xl font-extrabold font-Rubik text-white uppercase">
                    {{ $post->car }} {{ $post->type }}
                </h1>
            </div>

            <div class="mt-4 lg:mt-0 lg:row-span-3">
                <div class="mt-10">

                    <div class="mt-10">
                        <div class="flex items-center justify-between">
                            <h3 class="text-md font-Raleway font-bold text-gray-900">Další obrázky</h3>
                        </div>

                        <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4 mt-4 pl-4">

                            @foreach ($imagesData as $image)
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
                        <p class="text-base text-gray-900 w-6/12 flex-wrap">
                            {{ $post->description }}
                        </p>
                    </div>
                </div>

                <div class="mt-10">
                    <div>
                        <h3 class="text-md font-Raleway font-bold text-gray-900">
                            Provedené služby
                        </h3>

                        <div class="mt-4 pl-4 flex flex-col ">

                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-5">

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
                </div>

            </div>

        </div>

    </section>



@endsection


