<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class animal extends Component
{
    public $animal;
    public function __construct($animal)
    {
        $this->animal= $animal;
    }

    public function render(): View|Closure|string
    {
        return view('components.animal');
    }
}
