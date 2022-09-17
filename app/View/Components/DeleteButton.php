<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DeleteButton extends Component
{
    public $route;
    public $element;
    public $isButton;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $element, $isButton)
    {
        $this->route = $route;
        $this->element = $element;
        $this->isButton = $isButton;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.delete-button');
    }
}
