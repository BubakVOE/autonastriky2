<?php

namespace App\Http\Controllers\user;

use App\Models\Post;
use App\Models\Galerie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function gallery()
    {
        $posts = Post::all();

        return view('pages.user.gallery.index', [
            'posts' => $posts,
        ]);
    }


    public function show($id)
    {
        $post = Post::find($id);


        $images = Galerie::where('post_id', $id)->get();

            $imagesData = [];

            foreach ($images as $image)
            {
                $imagesData[] = $image;
            }


        return view('pages.user.gallery.show',[
            'post' => $post,
            'imagesData' => $imagesData,
        ]);
    }


}
