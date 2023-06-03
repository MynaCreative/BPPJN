<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class Statistic extends Component
{
    public $collections;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->collections = Http::get(config('app.spip_url'))->json();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.statistic', [
            'collections' => $this->collections
        ]);
    }
}
