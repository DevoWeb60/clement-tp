<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputRadioGroup extends Component
{
    public $mainLabel;
    public $name;
    public $options;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($mainLabel, $name, $options)
    {
        $this->mainLabel = $mainLabel;
        $this->name = $name;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input-radio-group');
    }
}
