<?php

namespace App\Livewire\Dashboard\Pages\Newsletters;

use App\Models\Newsletter;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class NewsletterDataComponent extends Component
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
        session()->flash('success', 'Category deleted successfully');
    }

    public function render()
    {
        return view('dashboard.pages.newsletters.newsletter-data-component', [
            'newsletters' => Newsletter::where('email', 'LIKE', '%' . $this->search . '%')
                ->latest()
                ->paginate(10),
        ]);
    }
}
