<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Accordion extends Component
{
    public $title;
    public $id;
    public $route;
    public $button;
    public $image;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $id, $route, $button, $image)
    {
        $this->title = $title;
        $this->id = $id;
        $this->route = $route;
        $this->button = $button;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.accordion');
    }
}
