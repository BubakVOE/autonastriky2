<?php

namespace App\Http\Controllers\admin;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReserveController extends Controller
{
    public function delete($id)
    {
        $test = Reservation::find($id);

        $test->delete();

        return back()->with('message', 'Úspešně jsi smazal záznam');
    }

    public function update($id)
    {
        $reserve = Reservation::where('id', '=', e($id))->first();

        if ($reserve) {

            $reserve->done = 1;

            $reserve->save();

            return back()->with('message', 'Objednávka č. '. $id .' byla přesunuta');
        };

    }}
