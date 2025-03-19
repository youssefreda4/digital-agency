<?php

namespace App\Livewire\Dashboard\Pages\Projects;

use App\Models\Project;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectsDataComponent extends Component
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
        session()->flash('success', 'Project created successfully');
    }

    public function flashAlertSuccess()
    {
        session()->flash('success', 'Project updated successfully');
    }

    public function flashDeleteAlertSuccess()
    {
        session()->flash('success', 'Project deleted successfully');
    }

    public function render()
    {
        return view('dashboard.pages.projects.projects-data-component', [
            'projects' => Project::where('name', 'LIKE', '%' . $this->search . '%')
                ->latest()
                ->paginate(10),
        ]);
    }
}
