<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MailTo extends Component
{
    public $mail;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($mail)
    {
        $this->mail = $mail;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.partials.mail-to');
    }
}
