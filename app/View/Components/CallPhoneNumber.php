<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CallPhoneNumber extends Component
{
    public $phoneNumber;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $telFormatted = $this->formatToCall($this->phoneNumber);

        return view('components.partials.call-phone-number', compact('telFormatted'));
    }

    public function formatToCall($number)
    {
        $telFormatted = $number;
        if (strpos($number, '0', 0) === 0) {
            $telFormatted = substr($number, 1);
        }
        if (str_contains($number, ' ')) {
            $telFormatted = implode("", explode(" ", $telFormatted));
        }
        return "+33" . $telFormatted;
    }
}
