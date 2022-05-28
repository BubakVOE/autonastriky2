<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

    public function contacts()
    {
        return view('pages.user.contacts.index');
    }
}
