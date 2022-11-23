<?php

namespace App\View\Components;

use Illuminate\View\Component;

class nav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $cat="";
   
    public function __construct($category )
    {
        
            $this->cat = $category;

      
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        
        return view('components.nav');
    }
}
