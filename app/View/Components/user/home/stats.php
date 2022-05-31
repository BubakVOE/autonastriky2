<?php

namespace App\View\Components\user\home;

use Illuminate\View\Component;

class stats extends Component
{
    public $newCars;
    public $completedCars;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($newCars, $completedCars)
    {
        $this -> newCars = $newCars;
        $this -> completedCars = $completedCars;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user.home.stats');
    }
}
