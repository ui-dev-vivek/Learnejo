<?php

namespace App\View\Components\Main;

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Studentdashboard extends Component
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
        return view('components.main.studentdashboard');
    }
}