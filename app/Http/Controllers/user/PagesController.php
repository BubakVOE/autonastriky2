<?php

namespace App\Http\Controllers\user;

use App\Models\Post;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        $newCars = Reservation::where('done', 0)->get();

        $completedCars = Reservation::where('done', 1)->get();

        $posts = Post::all();

        return view('pages.user.index',[
            'newCars' => $newCars,
            'completedCars' => $completedCars,
            'posts' => $posts,
        ]);
    }

    public function services()
    {
        return view('pages.user.services.index');
    }

    public function gallery()
    {
        return view('pages.user.gallery.index');
    }

    public function contacts()
    {
        return view('pages.user.contacts.index');
    }

    public function aboutMe()
    {
        return view('pages.user.aboutMe.index');
    }
}
