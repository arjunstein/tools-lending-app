<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ListCategory extends Component
{
    use WithPagination;

    #[Title('List Kategori')]
    #[Url()]

    public $search = '';

    public function updatingSearch()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.category.list-category', [
            'categories' => $this->getCategory(),
            'title' => 'List Kategori'
        ]);
    }

    private function getCategory()
    {
        return Category::where(function ($query) {
            $query->where('category_name', 'like', '%' . $this->search . '%');
        })->paginate(10);
    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
    }
}
