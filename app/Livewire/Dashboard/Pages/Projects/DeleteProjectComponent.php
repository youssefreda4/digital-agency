<?php

namespace App\Livewire\Dashboard\Pages\Projects;

use App\Models\Project;
use Livewire\Component;

class DeleteProjectComponent extends Component
{
    public $project;

    protected $listeners = [
        'projectDelete',
    ];

    public function projectDelete($id)
    {
        //fill $project with the eloquent model of the same id
        $this->project = Project::find($id);

        //show edit modal
        $this->dispatch('deleteModalToggle');
    }

    public function delete()
    {
        //delete data
        $this->project->delete();

        //delete image
        unlink($this->project->image);

        //reset data
        $this->reset('project');

        //flash success
        $this->dispatch('flashDeleteAlertSuccess');

        //hide modal
        $this->dispatch('deleteModalToggle');

        //refresh table
        $this->dispatch('refreshData')->to(ProjectsDataComponent::class);
    }

    public function render()
    {
        return view('dashboard.pages.projects.delete-project-component');
    }
}
