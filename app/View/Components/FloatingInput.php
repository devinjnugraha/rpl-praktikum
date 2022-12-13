<?php

namespace App\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class FloatingInput extends Component
{
    public $id;
    public $name;
    public $type;
    public $label;
    public $value;
    public $readonly;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name = '', $value = '', $type = 'text', $readonly = false)
    {
        $this->id = Str::random(8);
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
        $this->value = $value;
        $this->readonly = $readonly;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.floating-input');
    }
}
