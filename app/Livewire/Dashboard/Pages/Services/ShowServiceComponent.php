<?php

namespace App\Livewire\Dashboard\Pages\Services;

use App\Models\Service;
use Livewire\Component;

class ShowServiceComponent extends Component
{
    public $service, $name, $description, $icon;

    protected $listeners = [
        'serviceShow',
    ];

    public function serviceShow($id)
    {
        //fill $service with the eloquent model of the same id
        $this->service = Service::find($id);
        $this->fill(
            $this->service->only('name', 'description', 'icon'),
        );

        //show edit modal
        $this->dispatch('showModalToggle');
    }

    public function render()
    {
        return view('dashboard.pages.services.show-service-component');
    }
}
