<?php

namespace App\Livewire\Website\Components;

use App\Models\Counter;
use Livewire\Component;

class CountersComponent extends Component
{
    public function render()
    {
        return view('website.components.counters-component', [
            'counters' => Counter::take(4)->get(),
        ]);
    }
}
