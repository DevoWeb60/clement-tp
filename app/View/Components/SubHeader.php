<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SubHeader extends Component
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
        $subMenus = [
            [
                "name" => "Coupons",
                "link" => "coupons.index"
            ],
            [
                "name" => "Newsletter",
                "link" => "newsletters.index"
            ],
            [
                "name" => "Menu",
                "link" => "menus.index"
            ],
            [
                'name' => "Mon Compte",
                "link" => "utilisateurs.index"
            ]
        ];
        return view('components.partials.sub-header', compact('subMenus'));
    }
}
