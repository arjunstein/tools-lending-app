<?php

namespace App\Livewire\Item;

use App\Models\Item;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

class ListItem extends Component
{
    #[Title('List barang')]
    #[Url()]

    public $search = '';

    public function updatingSearch()
    {
        $this->reset();
    }

    private function _getItem()
    {
        return Item::where(function ($query) {
            $query->where('item_name', 'like', '%' . $this->search . '%');
        })->paginate(10);
    }

    public function render()
    {
        return view('livewire.item.list-item', [
            'title' => 'List barang'
        ]);
    }
}
