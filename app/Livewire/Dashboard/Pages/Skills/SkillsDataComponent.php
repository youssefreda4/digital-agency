<?php

namespace App\Livewire\Dashboard\Pages\Skills;

use App\Models\Skill;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class SkillsDataComponent extends Component
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
        'flashDeleteAlertSuccess',
    ];

    public function flashAlertSuccess()
    {
        session()->flash('success', 'Skill updated successfully');
    }

    public function flashDeleteAlertSuccess()
    {
        session()->flash('success', 'Skill deleted successfully');
    }

    public function render()
    {
        return view('dashboard.pages.skills.skills-data-component', [
            'skills' => Skill::where('name', 'LIKE', '%' . $this->search . '%')
                ->latest()
                ->paginate(10),
        ]);
    }
}
