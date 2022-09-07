<?php

namespace App\View\Components;

use App\Models\Service;
use Illuminate\View\Component;

class ServicesConstruction extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $constructions = Service::where('type', 'construction')->get();

        return view('components.services.services-construction', compact('constructions'));
    }
}
