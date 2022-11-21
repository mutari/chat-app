<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{

    public string $name;
    public string $id;
    public bool $noMargin;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $noMargin = false, $id = '')
    {
        $this->name = $name;
        $this->id = $id;
        $this->noMargin = $noMargin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
