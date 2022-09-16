<?php

namespace App\View\Components;

use App\Models\PageMenu;
use Illuminate\Support\Facades\Request;
use Illuminate\View\Component;

class SectionPageForm extends Component
{
    public $action;
    public $method;
    public $section;
    public $pageName;
    public $sectionData;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pageName, $section, $action, $method, $sectionData)
    {
        $this->section = $section;
        $this->action = $action;
        $this->method = $method;
        $this->sectionData = $sectionData;
        $this->pageName = $pageName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $inputTitle = true;
        $inputContent = true;
        $inputImage = true;
        $inputLink = false;
        $inputLinkText = false;

        switch ($this->section) {
            case 'home-about':
                $inputLink = true;
                $inputLinkText = true;
                break;
            case 'home-presentation':
                $inputLink = true;
                break;
            case 'about-content':
                $inputImage = false;
                break;
            default:
                break;
        }
        $menus = PageMenu::all();

        return view(
            'components.dashboard.section-page-form',
            compact(
                'inputTitle',
                'inputContent',
                'inputImage',
                'inputLink',
                'inputLinkText',
                'menus',
            )
        );
    }
}
