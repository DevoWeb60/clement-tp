<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SelectGroupStatic extends Component
{
    public $name;
    public $options;
    public $label;
    public $selected;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $options, $label, $selected)
    {
        $this->name = $name;
        $this->options = $options;
        $this->label = $label;
        $this->selected = $selected;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.select-group-static');
    }
}
