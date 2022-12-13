<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardPeminjaman extends Component
{
    public $peminjaman;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($peminjaman)
    {
        $this->peminjaman = $peminjaman;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-peminjaman');
    }
}
