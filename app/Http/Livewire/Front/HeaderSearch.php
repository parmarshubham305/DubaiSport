<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use App\Models\MasterOption;
use App\Models\MasterOptionAttribute;

class HeaderSearch extends Component
{
    public $keyword, $brands, $categories, $products;

    public function updated()
    {
        if($this->keyword != '') {
            $this->categories = Category::where('title', 'like', '%'.$this->keyword.'%')->get()->toArray();
            $optionId = MasterOption::where('name', 'like', '%'.'brand'.'%')->value('id');
            $this->brands = MasterOptionAttribute::where('master_option_id', $optionId)->get()->toArray();
            $categoryIds = Category::where('title', 'like', '%'.$this->keyword.'%')->pluck('id', 'id')->toArray();
            $this->products = Product::where('title', 'like', '%'.$this->keyword.'%')->orWhere('category_id', $categoryIds)->with('category')->get()->toArray();
        } else {
            $this->products = [];
            $this->categories = [];
            $this->brands = [];
        }
    }

    public function render()
    {
        return view('livewire.front.header-search');
    }
}
