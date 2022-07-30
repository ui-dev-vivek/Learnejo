<?php

namespace App\View\Components\Layout\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $admin;
    public function __construct()
    {
        $this->admin = DB::table('myladmin')->where('adid', session('MyLAdminId'))->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.admin.navbar');
    }
}