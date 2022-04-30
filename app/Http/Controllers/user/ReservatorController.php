<?php

namespace App\Http\Controllers\user;

use App\Models\Reservation;
use App\Http\Controllers\Controller;
use App\Http\Requests\modal\ReservationRequest;

class ReservatorController extends Controller
{
    public function store(ReservationRequest $request)
    {
        $reservation = Reservation::create([
            'firstName' => $request -> input('firstName'),
            'lastName' => $request -> input('lastName'),
            'mobile' => $request -> input('mobile'),
            'date' => $request -> input('date'),
            'email' => $request -> input('email'),
            'car' => $request -> input('car'),
            'type' => $request -> input('type'),
        ]);

        return back()->with('message', 'Úspěšně jsi přidal rezervaci');

    }
}
