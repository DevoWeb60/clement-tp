<?php

namespace App\View\Components;

use App\Models\Contact;
use Illuminate\View\Component;

class Messenger extends Component
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
        $messages = Contact::orderBy('id', 'desc')->get();
        $notView = 0;
        foreach ($messages as $message) {
            if ($message->viewed == 0) {
                $notView++;
            }
        }
        return view('components.dashboard.messenger', compact('messages', 'notView'));
    }
}
