<?php

namespace App\Livewire\Dashboard\Pages\Projects;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;

class ShowProjectComponent extends Component
{
    public $projectObject, $name, $description, $link, $image, $category_id;

    protected $listeners = [
        'projectShow',
    ];

    public function projectShow($id)
    {
        //fill $projectObject with the eloquent model of the same id
        $this->projectObject = Project::find($id);
        $this->fill(
            $this->projectObject->only('name', 'description', 'link','image','category_id'),
        );

        //show edit modal
        $this->dispatch('showModalToggle');
    }

    public function render()
    {
        return view('dashboard.pages.projects.show-project-component',[
            'categories' => Category::all(),
        ]);
    }
}
