<?php

namespace App\View\Components;

use App\Models\PageContent;
use Illuminate\View\Component;

class HomeTarget extends Component
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
        return view('components.home.home-target');
    }
}
