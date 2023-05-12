<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use App\Models\Infographic as Model;

class Infographic extends Component
{
    public $collections;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->collections = Model::latest()->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.infographic', [
            'collections' => $this->collections
        ]);
    }
}
