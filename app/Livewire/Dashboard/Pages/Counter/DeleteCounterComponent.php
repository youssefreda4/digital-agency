<?php

namespace App\Livewire\Dashboard\Pages\Counter;

use App\Models\Counter;
use Livewire\Component;

class DeleteCounterComponent extends Component
{
    public $counter;

    protected $listeners = [
        'counterDelete',
    ];

    public function counterDelete($id)
    {
        //fill $counter with the eloquent model of the same id
        $this->counter = Counter::find($id);

        //show edit modal
        $this->dispatch('deleteModalToggle');
    }

    public function delete()
    {
        //delete data
        $this->counter->delete();

        //reset data
        $this->reset('counter');

        //flash success
        $this->dispatch('flashDeleteAlertSuccess');

        //hide modal
        $this->dispatch('deleteModalToggle');

        //refresh table
        $this->dispatch('refreshData')->to(CounterDataComponent::class);
    }

    public function render()
    {
        return view('dashboard.pages.counter.delete-counter-component');
    }
}
