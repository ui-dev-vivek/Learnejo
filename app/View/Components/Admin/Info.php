<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Info extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $demo;
    public function __construct()
    {
        $this->demo = "hi vivek";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.info');
    }
}