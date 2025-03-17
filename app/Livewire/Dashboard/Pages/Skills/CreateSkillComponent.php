<?php

namespace App\Livewire\Dashboard\Pages\Skills;

use App\Models\Skill;
use Livewire\Component;

class CreateSkillComponent extends Component
{
    public $name, $progress;


    protected function rules()
    {
        return [
            'name' => 'required|string|unique:skills,name',
            'progress' => 'required|numeric|min:1|max:100',
        ];
    }

    public function create()
    {
        $data =  $this->validate();

        //save data
        Skill::create($data);
        $this->reset([
            'name',
            'progress',
        ]);

        //hide modal
        $this->dispatch('createModalToggle');

        //refresh table
        $this->dispatch('refreshData')->to(SkillsDataComponent::class);
    }

    public function render()
    {
        return view('dashboard.pages.skills.create-skill-component');
    }
}
