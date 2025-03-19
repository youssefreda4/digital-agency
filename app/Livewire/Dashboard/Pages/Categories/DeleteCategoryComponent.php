<?php

namespace App\Livewire\Dashboard\Pages\Categories;

use App\Models\Category;
use Livewire\Component;

class DeleteCategoryComponent extends Component
{
    public $category;

    protected $listeners = [
        'categoryDelete',
    ];

    public function categoryDelete($id)
    {
        //fill $category with the eloquent model of the same id
        $this->category = Category::find($id);

        //show edit modal
        $this->dispatch('deleteModalToggle');
    }

    public function delete()
    {
        //delete data
        $this->category->delete();

        //reset data
        $this->reset('category');

        //flash success
        $this->dispatch('flashDeleteAlertSuccess');

        //hide modal
        $this->dispatch('deleteModalToggle');

        //refresh table
        $this->dispatch('refreshData')->to(CategoriesDataComponent::class);
    }

    public function render()
    {
        return view('dashboard.pages.categories.delete-category-component');
    }
}
