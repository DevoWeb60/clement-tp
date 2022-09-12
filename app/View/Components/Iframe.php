<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Iframe extends Component
{
    public $iframe;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($iframe)
    {
        $this->iframe = $iframe;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $this->iframe = $this->getURLFromIframe($this->iframe);
        return view('components.partials.iframe');
    }

    public function getURLFromIframe($iframe)
    {
        $googleLink = explode("src=\"", $iframe);
        $googleLink = explode("\"", $googleLink[1])[0];
        return $googleLink;
    }
}
