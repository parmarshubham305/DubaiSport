<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\MasterOption;

class CategoryOptionAttribute extends Component
{
    public $categories = [];

    public function mount()
    {
        $this->categories = Category::pluck('title', 'id')->toArray();
    }

    public function render()
    {
        return view('livewire.category-option-attribute');
    }
}
