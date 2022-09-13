<?php

namespace App\View\Components;

use App\Models\ContactObject;
use Illuminate\View\Component;

class ContactObjectList extends Component
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
        $objects = ContactObject::all();

        return view('components.dashboard.contact-object-list', compact('objects'));
    }
}
