<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormContact extends Component
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
        $data = [
            [
                'id' => 1,
                'name' => 'Demande de devis',
            ],
            [
                'id' => 2,
                'name' => 'Renseignement',
            ]
        ];
        $objectsKeys = ['name'];
        return view('components.form-contact', [
            'data' => $data,
            'objectsKeys' => $objectsKeys,
        ]);
    }
}
