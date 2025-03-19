<?php

namespace App\Livewire\Dashboard\Pages\Categories;

use App\Models\Category;
use Illuminate\Validation\Rule;
use Livewire\Component;

class UpdateCategoryComponent extends Component
{
    public $category, $name ;

    protected $listeners = [
        'categoryUpdate',
    ];

    public function categoryUpdate($id)
    {
        //fill $category with the eloquent model of the same id
        $this->category = Category::find($id);

        $this->fill(
            $this->category->only('name' ),
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
                Rule::unique('categories')->ignore($this->category),
            ],
        ];
    }

    public function update()
    {
        $data =  $this->validate();

        //save data
        $this->category->update($data);

        //flash success
        $this->dispatch('flashAlertSuccess');

        //hide modal
        $this->dispatch('editModalToggle');

        //refresh table
        $this->dispatch('refreshData')->to(CategoriesDataComponent::class);
    }
    public function render()
    {
        return view('dashboard.pages.categories.update-category-component');
    }
}
