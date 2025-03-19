<?php

namespace App\Livewire\Dashboard\Pages\Services;

use App\Models\Service;
use Livewire\Component;

class CreateServiceComponent extends Component
{
    public $name, $description, $icon;

    protected function rules()
    {
        return [
            'name' => 'required|string|unique:services,name',
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

    public function create()
    {
        $data =  $this->validate();

        //save data
        Service::create($data);
        $this->reset([
            'name',
            'description',
            'icon',
        ]);

        //flash success
        $this->dispatch('flashCreatedAlertSuccess');

        //hide modal
        $this->dispatch('createModalToggle');

        //refresh table
        $this->dispatch('refreshData')->to(ServicesDataComponent::class);
    }
    
    public function render()
    {
        return view('dashboard.pages.services.create-service-component');
    }
}
