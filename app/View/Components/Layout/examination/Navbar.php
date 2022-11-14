<?php

namespace App\View\Components\layout\examination;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $student;
    public function __construct()
    {
        if (!Session::has('StudentId')) {
            Session::put('StudentId', 'Guest-Students');
        }
        $this->student = DB::table('student_profile')->where('students_id', session('StudentId'))->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.examination.navbar')->compact('user');
    }
}