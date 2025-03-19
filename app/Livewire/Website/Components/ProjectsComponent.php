<?php

namespace App\Livewire\Website\Components;

use App\Models\Project;
use Livewire\Component;

class ProjectsComponent extends Component
{
    public function render()
    {
        return view('website.components.projects-component' ,[
            'projects' => Project::take(6)->get(),
        ]);
    }
}
