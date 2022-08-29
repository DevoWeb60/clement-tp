<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HomePresentation extends Component
{
    public $title;
    public $image;
    public $link;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link, $title, $image)
    {
        $this->title = $title;
        $this->image = $image;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home-presentation');
    }
}
