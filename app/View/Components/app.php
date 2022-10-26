<?php

namespace App\View\Components;

use Illuminate\View\Component;

class app extends Component
{

    public string $icon;
    public string $href;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($icon, $href)
    {
        $this->icon = $icon;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.app');
    }
}
