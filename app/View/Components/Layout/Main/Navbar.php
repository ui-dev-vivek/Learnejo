<?php

namespace App\View\Components\Layout\Main;


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
    public $coursesCatg;
    public $topic;
    public function __construct()
    {

        if (Session::has('StudentId')) {
            $this->student = DB::table('users')->where('student_id', session('StudentId'))->first();
            // $this->student = DB::table('users')->where('student_id', 'ASG2Ub9HFdIBBBk')->first();
        }

        $this->coursesCatg = DB::table('courses')->select('catg')->groupBy('catg')->Where('status', 1)->get();
        $this->topic = DB::table('mock_test_topic')->get();
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.main.navbar');
    }
}