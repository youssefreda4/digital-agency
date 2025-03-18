<?php

namespace App\Livewire\Dashboard\Pages\Counter;

use App\Models\Counter;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class CounterDataComponent extends Component
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
        session()->flash('success', 'Counter created successfully');
    }

    public function flashAlertSuccess()
    {
        session()->flash('success', 'Counter updated successfully');
    }

    public function flashDeleteAlertSuccess()
    {
        session()->flash('success', 'Counter deleted successfully');
    }

    public function render()
    {
        return view('dashboard.pages.counter.counter-data-component', [
            'counters' => Counter::where('name', 'LIKE', '%' . $this->search . '%')
                ->latest()
                ->paginate(10),
        ]);
    }
}
