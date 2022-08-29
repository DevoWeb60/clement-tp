<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TitleOnBackground extends Component
{
    public $title;
    public $image;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $image)
    {
        $this->title = $title;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.title-on-background');
    }
}
