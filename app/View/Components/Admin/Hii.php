<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Hii extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $hii;
    public function __construct()
    {
        $this->hii = "HI iam Vivekkkkk";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.hii');
    }
}