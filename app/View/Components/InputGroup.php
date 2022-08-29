<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputGroup extends Component
{
    public $label;
    public $name;
    public $type;
    public $required;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $label, $name, $required)
    {
        $this->type = $type;
        $this->label = $label;
        $this->name = $name;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-group');
    }
}
