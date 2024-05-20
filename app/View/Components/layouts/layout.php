<?php

namespace App\View\Components\layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class layout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        // return function (array $data) {
        //     // $data['componentName'];
        //     // $data['attributes'];
        //     $data['slot'];

        //     return view('components.layouts.layout');
        // };
        return view('components.layouts.layout');
    }
}
