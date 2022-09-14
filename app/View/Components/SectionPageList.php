<?php

namespace App\View\Components;

use App\Models\PageContent;
use Illuminate\View\Component;

class SectionPageList extends Component
{
    public $title;
    public $pageName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pageName, $title)
    {
        $this->title = $title;
        $this->pageName = $pageName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $contents = PageContent::where('page_name', $this->pageName)->get();

        return view('components.dashboard.section-page-list', compact('contents'));
    }
}
