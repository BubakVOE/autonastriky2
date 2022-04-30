<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.user.index');
    }

    public function services()
    {
        return view('pages.user.services.index');
    }

    public function gallery()
    {
        return view('pages.user.gallery.index');
    }

    public function contacts()
    {
        return view('pages.user.contacts.index');
    }

    public function aboutMe()
    {
        return view('pages.user.aboutMe.index');
    }
}
