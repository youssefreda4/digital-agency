<?php

namespace App\Livewire\Website\Components;

use App\Models\Service;
use Livewire\Component;

class ServicesComponent extends Component
{
    public function render()
    {
        return view('website.components.services-component',[
            'services' => Service::all(),
        ]);
    }
}
