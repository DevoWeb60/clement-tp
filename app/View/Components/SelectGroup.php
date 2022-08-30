<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SelectGroup extends Component
{
    public $name;
    public $options;
    public $valueKey;
    public $label;
    public $labelKeys;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $options, $valueKey, $label, $labelKeys)
    {
        $this->name = $name;
        $this->options = $options;
        $this->valueKey = $valueKey;
        $this->label = $label;
        $this->labelKeys = $labelKeys;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.select-group');
    }
}
