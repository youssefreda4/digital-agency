<?php

namespace App\Livewire\Dashboard\Pages\Services;

use App\Models\Service;
use Illuminate\Validation\Rule;
use Livewire\Component;

class UpdateServiceComponent extends Component
{
    public $service, $name, $description, $icon;

    protected $listeners = [
        'serviceUpdate',
    ];

    public function serviceUpdate($id)
    {
        //fill $service with the eloquent model of the same id
        $this->service = Service::find($id);

        $this->fill(
            $this->service->only('name', 'description', 'icon'),
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
                Rule::unique('services')->ignore($this->service),
            ],
            'description' => 'required|string|min:10|max:1500',
            'icon' => 'required|string|min:1|max:100',
        ];
    }

    public function updatedName()
    {
        $this->validateOnly('name');
    }

    public function updatedDescription()
    {
        $this->validateOnly('description');
    }

    public function updatedIcon()
    {
        $this->validateOnly('icon');
    }

    public function update()
    {
        $data =  $this->validate();

        //save data
        $this->service->update($data);

        //flash success
        $this->dispatch('flashAlertSuccess');

        //hide modal
        $this->dispatch('editModalToggle');

        //refresh table
        $this->dispatch('refreshData')->to(ServicesDataComponent::class);
    }

    public function render()
    {
        return view('dashboard.pages.services.update-service-component');
    }
}
