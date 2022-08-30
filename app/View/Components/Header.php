<?php

namespace App\View\Components;

use App\Models\PageMenu;
use Illuminate\View\Component;

class Header extends Component
{
    public $role;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($role)
    {
        $this->role = $role;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $home = "home";
        $menus = PageMenu::where('header', 1)->orderBy('id')->get();

        if ($this->role === "admin") {
            $menus = [
                [
                    'name' => 'Général',
                    'link' => 'general.index',
                ],
                [
                    'name' => 'Offres d\'emplois',
                    'link' => 'offres.index',
                ],
                [
                    'name' => 'Pages',
                    'link' => 'pages.index',
                ],
                [
                    'name' => 'Services',
                    'link' => 'services.index',
                ],
            ];
            $menus = json_decode(json_encode($menus));
            $home = "dashboard";
        }

        return view('components.partials.header', compact('menus', 'home'));
    }
}
