<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{


    public function home()
    {
        return view('pages.home');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }

    public function aboutMe()
    {
        return view('pages.aboutMe');
    }

}
