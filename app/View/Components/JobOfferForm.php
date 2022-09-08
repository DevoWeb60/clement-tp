<?php

namespace App\View\Components;

use Illuminate\View\Component;

class JobOfferForm extends Component
{
    public $jobOffer;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($jobOffer)
    {
        $this->jobOffer = $jobOffer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $action = route('offres.store');
        $method = 'POST';
        $iframe = false;
        if ($this->jobOffer) {
            $action = route('offres.update', ['offre' => $this->jobOffer]);
            $method = 'PUT';
            $iframe = $this->getURLFromIframe($this->jobOffer->iframe_map);
        }

        return view('components.form.job-offer-form', compact('action', 'method', 'iframe'));
    }

    public function getURLFromIframe($iframe)
    {
        $googleLink = explode("src=\"", $iframe);
        $googleLink = explode("\"", $googleLink[1])[0];
        return $googleLink;
    }
}
