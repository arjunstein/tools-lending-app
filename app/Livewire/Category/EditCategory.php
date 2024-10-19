<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;

class EditCategory extends Component
{
    #[Title('Edit category')]
    public $category_name;
    public $id;

    protected $rules = [
        'category_name' => ['required', 'min:3', 'max:30', 'regex:/^[a-zA-Z\s\']+$/']
    ];

    protected $messages = [
        'category_name.required' => ' Kategori wajib diisi',
        'category_name.min' => ' Kategori minimal :min karakter',
        'category_name.max' => ' Kategori minimal :max karakter',
        'category_name.regex' => ' Kategori hanya boleh berisi huruf dan spasi',
    ];

    public function mount($id)
    {
        $category = Category::findOrfail($id);
        $this->category_name = $category->category_name;
        $this->id = $category->id;
    }

    public function render()
    {
        return view('livewire.category.edit-category', [
            'title' => 'Edit category'
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updateCategory()
    {
        $this->validate();
        $category = Category::findOrfail($this->id);

        $category->update([
            'category_name' => $this->category_name
        ]);

        return $this->redirect("/backend/category/list", navigate: true);
    }
}
