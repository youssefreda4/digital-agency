<?php

namespace App\Livewire\Dashboard\Pages\Skills;

use App\Models\Skill;
use Livewire\Component;

class ShowSkillComponent extends Component
{
    public $skill, $name, $progress;

    protected $listeners = [
        'skillShow',
    ];

    public function skillShow($id)
    {
        //fill $skill with the eloquent model of the same id
        $this->skill = Skill::find($id);
        $this->fill(
            $this->skill->only('name', 'progress'),
        );

        //show edit modal
        $this->dispatch('showModalToggle');
    }

    public function render()
    {
        return view('dashboard.pages.skills.show-skill-component');
    }
}
