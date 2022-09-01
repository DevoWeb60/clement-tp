<?php

namespace App\View\Components;

use App\Models\JobOffer;
use Illuminate\View\Component;

class CandidateInformation extends Component
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
        $jobOffers = JobOffer::all();

        return view('components.dashboard.candidate-information', compact('jobOffers'));
    }
}
