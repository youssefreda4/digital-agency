<?php

namespace App\Livewire\Dashboard\Pages\Skills;

use App\Models\Skill;
use Livewire\Component;

class DeleteSkillComponent extends Component
{
    public $skill;

    protected $listeners = [
        'skillDelete',
    ];

    public function skillDelete($id)
    {
        //fill $skill with the eloquent model of the same id
        $this->skill = Skill::find($id);

        //show edit modal
        $this->dispatch('deleteModalToggle');
    }

    public function delete()
    {
        //delete data
        $this->skill->delete();

        //reset data
        $this->reset('skill');

        //flash success
        $this->dispatch('flashDeleteAlertSuccess');

        //hide modal
        $this->dispatch('deleteModalToggle');

        //refresh table
        $this->dispatch('refreshData')->to(SkillsDataComponent::class);
    }

    public function render()
    {
        return view('dashboard.pages.skills.delete-skill-component');
    }
}
