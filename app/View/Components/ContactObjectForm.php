<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ContactObjectForm extends Component
{
    public $object;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($object)
    {
        $this->object = $object;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $method = "POST";
        $action = route('objets.store');
        if ($this->object) {
            $method = "PUT";
            $action = route('objets.update', $this->object);
        }

        return view('components.dashboard.contact-object-form', compact('method', 'action'));
    }
}
