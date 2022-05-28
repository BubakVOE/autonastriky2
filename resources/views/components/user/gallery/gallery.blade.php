<div class="bg-layout-gray ronded-md shadow-inner rounded-lg grid grid-cols-1 place-items-center pb-8 space-y-5  ">
    <div class="">
        <h1>{{ $post->car }} {{ $post->type }}</h1>
    </div>

    <div>
        <img src="{{ asset('posts/thumbNail/'.$post->cover) }}" style="width: 250px" class="object-center object-cover">
    </div>

    <div class="text-center">
        <a href="{{ route('gallery-show', $post->id) }}"
            class="font-Rubik font-bold uppercase rounded px-2 py-1 text-lg border text-white border-white bg-layout-red bg-opacity-80 hover:bg-opacity-100 transition duration-500 ease-in-out">
            Zobrazit
        </a>
    </div>
</div>

