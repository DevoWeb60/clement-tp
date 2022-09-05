<?php

namespace App\View\Components;

use App\Models\PageMenu;
use App\Models\SiteInfo;
use Illuminate\View\Component;

class Footer extends Component
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
        $siteInfo = SiteInfo::first();
        $menus = PageMenu::where('footer', true)->get();
        return view('components.partials.footer', compact('siteInfo', 'menus'));
    }
}
