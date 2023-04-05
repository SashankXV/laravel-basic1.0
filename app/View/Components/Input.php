<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $label;
    public $name;
    public $demo;
    /**
     * Create a new component instance.
     */
    public function __construct($type, $label, $name, $demo = 0)
    {
        $this->type = $type;
        $this->label = $label;
        $this->name = $name;
        $this->demo = $demo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
