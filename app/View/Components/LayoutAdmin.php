<?php

namespace App\View\Components;

use App\Models\SiteInfo;
use Illuminate\View\Component;

class LayoutAdmin extends Component
{
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $siteInfo = SiteInfo::first();
        return view('layouts.layout-admin', compact('siteInfo'));
    }
}
