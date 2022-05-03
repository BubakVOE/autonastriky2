<?php

namespace App\Http\Controllers\admin;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {

        $new_cars = Reservation::where('done', 0)->count();

        $completed_cars = Reservation::where('done', 1)->count();

        return view('pages.dashboard.index',[
            'new_cars' => $new_cars,
            'completed_cars' => $completed_cars,
        ]);
    }
}
