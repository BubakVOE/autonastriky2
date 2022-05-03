<?php

namespace App\View\Components\user\home;

use Illuminate\View\Component;

class services extends Component
{
    public $newCars;
    public $completedCars;
    public $posts;

    public function __construct($newCars, $completedCars, $posts)
    {
        $this -> newCars = $newCars;
        $this -> completedCars = $completedCars;
        $this -> posts = $posts;
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
