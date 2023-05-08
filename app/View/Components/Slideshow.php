<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use App\Models\Slideshow as ModelSlideshow;

class Slideshow extends Component
{
    public $collections;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->collections = ModelSlideshow::orderBy('sequence')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.slideshow', [
            'test' => 'hei'
        ]);
    }
}
