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
    public $cat_count = "";
    public function __construct($cat, $publication)
    {
	    $data=DepartmentCategory::get();
        $data2=PublicationCategory::all();

        $this->cat = $data;
        $this->publication = $data2;
        $this->cat_count = count($data);
        $this->pub_count = count($data2);
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
