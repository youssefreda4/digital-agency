<?php

namespace App\Livewire\Dashboard\Pages\Categories;

use App\Models\Category;
use Livewire\Component;

class CreateCategoryComponent extends Component
{
    public $name;

    protected function rules()
    {
        return [
            'name' => 'required|string|unique:categories,name',
        ];
    }

    public function create()
    {
        $data =  $this->validate();

        //save data
        Category::create($data);
        $this->reset([
            'name',
        ]);

        //hide modal
        $this->dispatch('createModalToggle');

        //refresh table
        $this->dispatch('refreshData')->to(CategoriesDataComponent::class);
    }

    public function render()
    {
        return view('dashboard.pages.categories.create-category-component');
    }
}
