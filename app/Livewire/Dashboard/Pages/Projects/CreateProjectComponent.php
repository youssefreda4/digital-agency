<?php

namespace App\Livewire\Dashboard\Pages\Projects;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProjectComponent extends Component
{
    use WithFileUploads;

    public $name, $description, $link, $image, $category_id, $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    protected function rules()
    {
        return [
            'name' => 'required|string|unique:projects,name',
            'description' => 'required|string|min:10|max:1500',
            'link' => 'required|string|url',
            'image' => 'required|image',
            'category_id' => 'required|numeric|exists:categories,id',
        ];
    }

    public function validationAttributes()
    {
        return [
            'category_id' => 'category'
        ];
    }

    public function updatedName()
    {
        $this->validateOnly('name');
    }

    public function updatedDescription()
    {
        $this->validateOnly('description');
    }

    public function updatedLink()
    {
        $this->validateOnly('link');
    }

    public function updatedImage()
    {
        $this->validateOnly('image');
    }

    public function updatedCategory_id()
    {
        $this->validateOnly('category_id');
    }

    public function create()
    {
        $data =  $this->validate();

        //Save image
        $data['image'] = 'storage/' . $this->image->store('photos', 'public');

        //save data
        Project::create($data);
        $this->reset([
            'name',
            'description',
            'link',
            'image',
            'category_id',
        ]);

        //flash success
        $this->dispatch('flashCreatedAlertSuccess');

        //hide modal
        $this->dispatch('createModalToggle');

        //refresh table
        $this->dispatch('refreshData')->to(ProjectsDataComponent::class);
    }

    public function render()
    {
        return view('dashboard.pages.projects.create-project-component');
    }
}
