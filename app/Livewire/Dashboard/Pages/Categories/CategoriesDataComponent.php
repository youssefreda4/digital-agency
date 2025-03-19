<?php

namespace App\Livewire\Dashboard\Pages\Categories;

use App\Models\Category;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriesDataComponent extends Component
{
    use WithPagination;

    #[Url(except: '')]
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $listeners = [
        'refreshData' => '$refresh',
        'flashCreatedAlertSuccess',
        'flashAlertSuccess',
        'flashDeleteAlertSuccess',
    ];

    public function flashCreatedAlertSuccess()
    {
        session()->flash('success', 'Category created successfully');
    }

    public function flashAlertSuccess()
    {
        session()->flash('success', 'Category updated successfully');
    }

    public function flashDeleteAlertSuccess()
    {
        session()->flash('success', 'Category deleted successfully');
    }
    public function render()
    {
        return view('dashboard.pages.categories.categories-data-component', [
            'categories' => Category::where('name', 'LIKE', '%' . $this->search . '%')
                ->latest()
                ->paginate(10),
        ]);
    }
}
