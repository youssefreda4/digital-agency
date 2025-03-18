<?php

namespace App\Livewire\Dashboard\Pages\Counter;

use App\Models\Counter;
use Illuminate\Validation\Rule;
use Livewire\Component;

class UpdateCounterComponent extends Component
{
    public $counter, $name, $count, $icon;

    protected $listeners = [
        'counterUpdate',
    ];

    public function counterUpdate($id)
    {
        //fill $counter with the eloquent model of the same id
        $this->counter = Counter::find($id);

        $this->fill(
            $this->counter->only('name', 'count', 'icon'),
        );

        //reset validation
        $this->resetValidation();

        //show edit modal
        $this->dispatch('editModalToggle');
    }

    protected function rules()
    {
        return [
            'name' => [
                'required',
                'string',
                Rule::unique('counters')->ignore($this->counter),
            ],
            'count' => 'required|numeric|min:1',
            'icon' => 'required|string|min:1|max:100',
        ];
    }

    public function update()
    {
        $data =  $this->validate();

        //save data
        $this->counter->update($data);

        //flash success
        $this->dispatch('flashAlertSuccess');

        //hide modal
        $this->dispatch('editModalToggle');

        //refresh table
        $this->dispatch('refreshData')->to(CounterDataComponent::class);
    }

    public function render()
    {
        return view('dashboard.pages.counter.update-counter-component');
    }
}
