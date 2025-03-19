<?php

namespace App\Livewire\Dashboard\Pages\Messages;

use App\Models\Message;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class MessagesDataComponent extends Component
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
        session()->flash('success', 'Message deleted successfully');
    }

    public function render()
    {
        return view('dashboard.pages.messages.messages-data-component', [
            'messages' => Message::where('email', 'LIKE', '%' . $this->search . '%')
                ->latest()
                ->paginate(10),
        ]);
    }
}
