<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use App\Models\Post as Model;

class MenuOrganization extends Component
{
    public $collections;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->collections = Model::select(['id', 'slug', 'name'])->whereHas('postCategories', function ($query) {
            $query->where('slug', 'organization');
        })->latest()->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu-organization', [
            'collections' => $this->collections
        ]);
    }
}
