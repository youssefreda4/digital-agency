<?php

namespace App\Livewire\Dashboard\Pages\Counter;

use App\Models\Counter;
use Livewire\Component;

class ShowCounterComponent extends Component
{
    public $counter, $name, $count, $icon;

    protected $listeners = [
        'counterShow',
    ];

    public function counterShow($id)
    {
        //fill $counter with the eloquent model of the same id
        $this->counter = Counter::find($id);
        $this->fill(
            $this->counter->only('name', 'count', 'icon'),
        );

        //show edit modal
        $this->dispatch('showModalToggle');
    }

    public function render()
    {
        return view('dashboard.pages.counter.show-counter-component');
    }
}
