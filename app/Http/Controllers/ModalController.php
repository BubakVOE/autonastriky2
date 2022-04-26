<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ModalController extends Controller
{
    public function store(Request $request)
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

        return redirect()->back()->with('message', 'Úspěšně jsi přidal rezervaci');

    }
}
