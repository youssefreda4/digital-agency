<?php

namespace App\Livewire\Dashboard\Pages\Services;

use App\Models\Service;
use Livewire\Component;

class DeleteServiceComponent extends Component
{
    public $service;

    protected $listeners = [
        'serviceDelete',
    ];

    public function serviceDelete($id)
    {
        //fill $service with the eloquent model of the same id
        $this->service = Service::find($id);

        //show edit modal
        $this->dispatch('deleteModalToggle');
    }

    public function delete()
    {
        //delete data
        $this->service->delete();

        //reset data
        $this->reset('service');

        //flash success
        $this->dispatch('flashDeleteAlertSuccess');

        //hide modal
        $this->dispatch('deleteModalToggle');

        //refresh table
        $this->dispatch('refreshData')->to(servicesDataComponent::class);
    }
    public function render()
    {
        return view('dashboard.pages.services.delete-service-component');
    }
}
