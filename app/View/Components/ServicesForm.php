<?php

namespace App\View\Components;

use App\Models\Service;
use Illuminate\View\Component;

class ServicesForm extends Component
{
    public $service;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($service)
    {
        $this->service = $service;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $method = "POST";
        $action = route('services.store');
        if ($this->service) {
            $method = "PUT";
            $action = route('services.update', $this->service);
        }
        $options = ['construction', 'service', 'processus'];

        return view('components.dashboard.services-form', compact('method', 'action', 'options'));
    }
}
