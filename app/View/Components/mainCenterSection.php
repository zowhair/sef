<?php

namespace App\View\Components;

use Illuminate\View\Component;

class mainCenterSection extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name = '';
    public $data;
    public function __construct($name,$data)
    {
        $this->$name = $name;
        $this->$data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.main-center-section');
    }
}
