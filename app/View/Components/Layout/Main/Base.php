<?php

namespace App\View\Components\Layout\Main;

use Illuminate\View\Component;

class Base extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title, $image, $description;
    public function __construct($title, $image, $description)
    {
        $this->title = $title;
        $this->image = $image;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.main.base');
    }
}