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

        return back()->with('delete', 'Objednávka č. '. $id .' byla smazána');
    }

    public function update($id)
    {
        $reserve = Reservation::where('id', '=', e($id))->first();

        if ($reserve) {

            $reserve->done = 1;

            $reserve->save();

            return back()->with('update', 'Objednávka č. '. $id .' byla přesunuta');
        };

    }}
