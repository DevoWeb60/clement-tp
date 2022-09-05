<?php

namespace App\View\Components;

use App\Models\Delivery;
use Illuminate\View\Component;

class DeliveriesList extends Component
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
        $deliveries = Delivery::orderBy('id', 'DESC')->get();

        return view('components.dashboard.deliveries-list', compact('deliveries'));
    }
}
