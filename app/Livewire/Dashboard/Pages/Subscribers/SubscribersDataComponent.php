<?php

namespace App\Livewire\Dashboard\Pages\Subscribers;

use App\Models\Subscriber;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class SubscribersDataComponent extends Component
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
        'flashDeleteAlertSuccess',
    ];

    public function flashDeleteAlertSuccess()
    {
        session()->flash('success', 'Skill deleted successfully');
    }

    public function render()
    {
        return view('dashboard.pages.subscribers.subscribers-data-component', [
            'subscribers' => Subscriber::where('email', 'LIKE', '%' . $this->search . '%')
                ->latest()
                ->paginate(10),
        ]);
    }
}
