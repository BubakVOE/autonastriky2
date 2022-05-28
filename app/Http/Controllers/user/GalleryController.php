<?php

namespace App\Http\Controllers\user;

use App\Models\Post;
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
        dd($post);

        return view('pages.user.gallery.show',[

        ]);
    }


}
