<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;

class CreateCategory extends Component
{
    #[Title('Create category')]
    public $category_name;

    protected $rules = [
        'category_name' => ['required', 'min:3', 'max:30', 'regex:/^[a-zA-Z\s\']+$/']
    ];

    protected $messages = [
        'category_name.required' => ' Kategori wajib diisi',
        'category_name.min' => ' Kategori minimal :min karakter',
        'category_name.max' => ' Kategori minimal :max karakter',
        'category_name.regex' => ' Kategori hanya boleh berisi huruf dan spasi',
    ];

    public function render()
    {
        return view('livewire.category.create-category', [
            'title' => 'Create category'
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function saveCategory()
    {
        $this->validate();

        Category::create([
            'category_name' => $this->category_name
        ]);

        return $this->redirect("/backend/category/list", navigate: true);
    }
}
