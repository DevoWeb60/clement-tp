<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CheckboxGroup extends Component
{
    public $label;
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name)
    {
        $this->label = $label;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.checkbox-group');
    }
}
