<?php

namespace App\View\Components;

use App\Models\PageMenu;
use Illuminate\View\Component;

class PageMenuForm extends Component
{
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->id != "false") {
            $menu = PageMenu::find($this->id);
        }

        return view('components.form.page-menu-form', compact('menu'));
    }
}
