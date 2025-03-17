<?php

namespace App\Livewire\Dashboard\Pages\Skills;

use App\Models\Skill;
use Illuminate\Validation\Rule;
use Livewire\Component;

class UpdateSkillComponent extends Component
{
    public $skill, $name, $progress;

    protected $listeners = [
        'skillUpdate',
    ];

    public function skillUpdate($id)
    {
        //fill $skill with the eloquent model of the same id
        $this->skill = Skill::find($id);

        $this->fill(
            $this->skill->only('name', 'progress'),
            // $this->name =  $this->skill->name ,
            // $this->progress =  $this->skill->progress 
        );

        //reset validation
        $this->resetValidation();

        //show edit modal
        $this->dispatch('editModalToggle');
    }

    protected function rules()
    {
        return [
            'name' => [
                'required',
                'string',
                Rule::unique('skills')->ignore($this->skill),
            ],
            'progress' => 'required|numeric|min:1|max:100',
        ];
    }

    public function update()
    {
        $data =  $this->validate();

        //save data
        $this->skill->update($data);

        //flash success
        $this->dispatch('flashAlertSuccess');

        //hide modal
        $this->dispatch('editModalToggle');

        //refresh table
        $this->dispatch('refreshData')->to(SkillsDataComponent::class);
    }

    public function render()
    {
        return view('dashboard.pages.skills.update-skill-component');
    }
}
