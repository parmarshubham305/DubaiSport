<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Product;

class ProductRender extends Component
{
    public $categoryId, $products = [], $keyword = '';

    public function mount()
    {
        $this->searchProducts();
    }

    public function searchProducts()
    {
        $this->products = Product::where('title', 'LIKE','%'.$this->keyword.'%')->where('category_id', $this->categoryId)->with(['category'])->get()->toArray();
    }

    public function render()
    {
        return view('livewire.front.product-render');
    }
}
