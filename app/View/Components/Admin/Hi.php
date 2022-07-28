<?php

namespace App\View\Components\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Hi extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $hi;
    public function __construct()
    {
        $this->hi = "love you";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.hi');
    }
}