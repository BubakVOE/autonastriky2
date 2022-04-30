<?php

namespace App\Http\Controllers\admin;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();

        return view('pages.dashboard.index', [
            'reservations' => $reservations,
        ]);
    }
}
