<?php

namespace App\Livewire\Dashboard\Pages\Counter;

use App\Models\Counter;
use Livewire\Component;

class CreateCounterComponent extends Component
{
    public $name, $count, $icon;

    protected function rules()
    {
        return [
            'name' => 'required|string|unique:counters,name',
            'count' => 'required|numeric|min:1',
            'icon' => 'required|string|min:1|max:100',
        ];
    }

    public function updatedName()
    {
        $this->validateOnly('name');
    }

    public function updatedCount()
    {
        $this->validateOnly('count');
    }

    public function updatedIcon()
    {
        $this->validateOnly('icon');
    }

    public function create()
    {
        $data =  $this->validate();

        //save data
        Counter::create($data);
        $this->reset([
            'name',
            'count',
            'icon',
        ]);

        //flash success
        $this->dispatch('flashCreatedAlertSuccess');

        //hide modal
        $this->dispatch('createModalToggle');

        //refresh table
        $this->dispatch('refreshData')->to(CounterDataComponent::class);
    }

    public function render()
    {
        return view('dashboard.pages.counter.create-counter-component');
    }
}
