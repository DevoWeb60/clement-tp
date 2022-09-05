<?php

namespace App\View\Components;

use App\Models\Delivery;
use Illuminate\View\Component;

class DeliveryForm extends Component
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
        $delivery = null;
        $method = "POST";
        $route = route('coupons.store');
        if ($this->id != "false") {
            $delivery = Delivery::find($this->id);
            $method = "PUT";
            $route = route("coupons.update", $delivery);
        }

        return view('components.form.delivery-form', compact('delivery', 'method', 'route'));
    }
}
