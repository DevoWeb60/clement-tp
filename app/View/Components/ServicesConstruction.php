<?php

namespace App\View\Components;

use App\Models\Service;
use Illuminate\View\Component;

class ServicesConstruction extends Component
{
    public $target;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($target)
    {
        $this->target = $target;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $constructions = null;
        switch ($this->target) {
            case "professionnal":
                $constructions = Service::where('type', 'construction')->whereNotNull('professionnal')->get();
                break;
            case "customers":
                $constructions = Service::where('type', 'construction')->whereNotNull('description')->get();
                break;
            default:
                $constructions = Service::where('type', 'construction')->get();
                break;
        }

        return view('components.services.services-construction', compact('constructions'));
    }
}
