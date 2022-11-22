<?php

namespace App\View\Components\Main;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Studentdashboard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $student;
    public function __construct()
    {
        if (Session::has('StudentId')) {
            $this->student = DB::table('users')->where('student_id', session('StudentId'))->first();
        }
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