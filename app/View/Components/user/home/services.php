<?php

namespace App\View\Components\user\home;

use Illuminate\View\Component;

class services extends Component
{


    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user.home.services');
    }
}
