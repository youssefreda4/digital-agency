<?php

namespace App\Livewire\Dashboard\Pages\Projects;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateProjectComponent extends Component
{
    use WithFileUploads;

    public $projectObject, $name, $description, $link, $image, $category_id, $imageInput, $categories;

    protected $listeners = [
        'projectUpdate',
    ];

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function projectUpdate($id)
    {
        //fill $project with the eloquent model of the same id
        $this->projectObject = Project::find($id);

        $this->fill(
            $this->projectObject->only('name', 'description', 'link', 'image', 'category_id'),
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
                Rule::unique('projects')->ignore($this->projectObject),
            ],
            'description' => 'required|string|min:10|max:1500',
            'link' => 'required|string|url',
            'imageInput' => 'image',
            'category_id' => 'required|numeric|exists:categories,id',
        ];
    }

    public function validationAttributes()
    {
        return [
            'category_id' => 'category',
            'imageInput' => 'image'
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

    public function update()
    {
        $data =  $this->validate();

        //check if has new image and delete old image
        if ($this->image) {
            unlink($this->projectObject->image);

            //Save image
            $data['image'] = 'storage/' . $this->imageInput->store('photos', 'public');
        }

        //save data
        $this->projectObject->update($data);

        //reset $imageInput after update
        $this->reset('imageInput');

        //flash success
        $this->dispatch('flashAlertSuccess');

        //hide modal
        $this->dispatch('editModalToggle');

        //refresh table
        $this->dispatch('refreshData')->to(ProjectsDataComponent::class);
    }

    public function render()
    {
        return view('dashboard.pages.projects.update-project-component');
    }
}
