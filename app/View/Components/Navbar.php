<?php

namespace App\View\Components;
use Illuminate\View\Component;
use App\Models\DepartmentCategory;
use App\Models\PublicationCategory;
class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $cat="";
    public $publication="";
    public function __construct($cat, $publication)
    {
	    $data=DepartmentCategory::all();
        $data2=PublicationCategory::all();

        $this->cat = $data;
        $this->publication = $data2;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar');
    }
}
