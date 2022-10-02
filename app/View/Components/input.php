<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{

    public string $name;
    public string $type;
    public string $value;
    public string $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $type, $value, $id = null)
    {
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
        $this->id = (!is_null($id) ? $id : $value);
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
