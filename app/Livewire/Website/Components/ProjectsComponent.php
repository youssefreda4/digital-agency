<?php

namespace App\Livewire\Website\Components;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;

class ProjectsComponent extends Component
{
    public function render()
    {
        return view('website.components.projects-component' ,[
            'projects' => Project::with('category')->take(6)->get(),
            'categories' => Category::all(),
        ]);
    }
}
