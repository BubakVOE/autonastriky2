<?php

namespace App\Http\Controllers\admin;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {

        $new_cars = Reservation::where('done', 0)->get();

        $completed_cars = Reservation::where('done', 1)->get();

        $posts = Post::all();

        return view('pages.dashboard.index',[
            'new_cars' => $new_cars,
            'completed_cars' => $completed_cars,
            'posts' => $posts,
        ]);
    }
}
