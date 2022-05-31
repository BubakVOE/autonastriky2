<?php

namespace App\Http\Controllers\user;

use App\Models\Post;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        $newCars = Reservation::where('done', 0)->get();

        $completedCars = Reservation::where('done', 1)->get();

        $posts = Post::take(3)->get();

        return view('pages.user.index',[
            'newCars' => $newCars,
            'completedCars' => $completedCars,
            'posts' => $posts,
        ]);
    }
}
