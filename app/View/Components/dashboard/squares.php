<?php

namespace App\View\Components\dashboard;

use Illuminate\View\Component;

class squares extends Component
{

    public $new_cars;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($new_cars)
    {
        $this -> $new_cars = $new_cars;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.squares');
    }
}

