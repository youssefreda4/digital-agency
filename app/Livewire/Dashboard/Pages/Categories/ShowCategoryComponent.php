<?php

namespace App\Livewire\Dashboard\Pages\Categories;

use App\Models\Category;
use Livewire\Component;

class ShowCategoryComponent extends Component
{
    public $category, $name;

    protected $listeners = [
        'categoryShow',
    ];

    public function categoryShow($id)
    {
        //fill $category with the eloquent model of the same id
        $this->category = Category::find($id);
        $this->fill(
            $this->category->only('name'),
        );

        //show edit modal
        $this->dispatch('showModalToggle');
    }

    public function render()
    {
        return view('dashboard.pages.categories.show-category-component');
    }
}
