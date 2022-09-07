<?php

namespace App\View\Components;

use App\Models\Service;
use Illuminate\View\Component;

class ServicesList extends Component
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
        $services = Service::orderBy('type', 'ASC')->get();

        return view('components.dashboard.services-list', compact('services'));
    }
}
