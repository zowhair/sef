<?php

namespace App\View\Components;

use Illuminate\View\Component;
// use App\Models\Department;
use App\Models\DepartmentCategory;
class nav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $cat="";
   
    public function __construct( )
    {
        $data=DepartmentCategory::all();
            $this->cat = $data;

      
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
