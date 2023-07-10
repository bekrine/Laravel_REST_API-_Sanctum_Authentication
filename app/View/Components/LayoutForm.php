<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LayoutForm extends Component
{

    public $fields;
    /**
     * Create a new component instance.
     */
    public function __construct($fields)
    {
        $this->fields = $fields;
      
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout-form');
    }
}
