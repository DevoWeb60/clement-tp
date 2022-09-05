<?php

namespace App\View\Components;

use App\Models\PageMenu;
use Illuminate\View\Component;

class PageMenuList extends Component
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
        $pageMenus = PageMenu::all();

        return view('components.dashboard.page-menu-list', compact('pageMenus'));
    }
}
