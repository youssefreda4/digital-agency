<?php

namespace App\Livewire\Dashboard\Pages\Services;

use App\Models\Service;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ServicesDataComponent extends Component
{
    use WithPagination;

    #[Url(except: '')]
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $listeners = [
        'refreshData' => '$refresh',
        'flashAlertSuccess',
        'flashCreatedAlertSuccess',
        'flashDeleteAlertSuccess',
    ];

    public function flashCreatedAlertSuccess()
    {
        session()->flash('success', 'Service created successfully');
    }

    public function flashAlertSuccess()
    {
        session()->flash('success', 'Service updated successfully');
    }

    public function flashDeleteAlertSuccess()
    {
        session()->flash('success', 'Service deleted successfully');
    }
    public function render()
    {
        return view('dashboard.pages.services.services-data-component', [
            'services' => Service::where('name', 'LIKE', '%' . $this->search . '%')
                ->latest()
                ->paginate(10),
        ]);
    }
}
