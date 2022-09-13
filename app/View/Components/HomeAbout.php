<?php

namespace App\View\Components;

use App\Models\PageContent;
use Illuminate\View\Component;

class HomeAbout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $contents = PageContent::where('page_name', 'home')->where('section_name', 'home-about')->get();


        return view('components.home.home-about', compact('contents'));
    }
}
