<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\MasterOptionAttribute;
use App\Models\MasterOption;
use Illuminate\Support\Str;

class ProductFilter extends Component
{
    public $categoryId, $categories = [], $selectedCategories = [], $masterOptions = [], $selectedOptions = [],
    $products = [], $keyword = '', $optionAttributeIds = [], $optionAttributes = [], $minPrice = 10, $maxPrice = 10000;

    public function mount() {
        $this->categories = Category::get()->toArray();
        $this->selectedCategories[] = 'category-'.$this->categoryId;

        $this->masterOptions = MasterOption::with('attributeValues')->get()->toArray();
        $this->renderProducts();
    }

    public function updated()
    {
        $this->renderProducts();
    }

    public function removeSelection($id)
    {
        if(($key = array_search($id, $this->optionAttributeIds)) !== false) {
            unset($this->optionAttributeIds[$key]);
        }
        $tempAttributes = $this->optionAttributeIds;

        $this->optionAttributes = MasterOptionAttribute::whereIn('id', $this->optionAttributeIds)->get()->toArray();

        if($tempAttributes) {
            $this->products = Product::where('category_id', $this->categoryId)->with(['category', 'productSpecification'])->whereHas('productSpecification', function($query) use ($tempAttributes)
            {
                $query->whereIn('option_attribute_id', $tempAttributes);
            })->get()->toArray();
            
            $this->removeFilters($id);
        } else {
            $this->clearFilters();
        }

    }

    public function removeFilters($params = null)
    {
        if(!empty($params))
        { 
            foreach ($this->selectedOptions as $key => $attributes) {
                if(($key = array_search($params, $attributes)) !== false) {
                    unset($attributes[$key]);
                    $this->selectedOptions[$key] = $attributes;
                }
            }
        } else {
            foreach ($this->selectedOptions as $key => $attributes) {
                $this->selectedOptions[$key] = [];
            }
        }
    }

    public function clearFilters()
    {
        $this->optionAttributeIds = [];
        $this->optionAttributes = [];
        $this->renderProducts();
    }

    public function renderProducts()
    {
        $selectedCategories = array_filter((str_replace("category-","",$this->selectedCategories)));
        
        $selectedFilters = array_filter((str_replace("attribute-","",$this->optionAttributeIds)));

        $this->optionAttributes = MasterOptionAttribute::whereIn('id', $selectedFilters)->get()->toArray();
        
        if(!empty($this->optionAttributeIds)) {
            $this->products = Product::whereBetween('discounted_price', [floatval($this->minPrice), floatval($this->maxPrice)])->whereIn('category_id', $selectedCategories)->with(['category', 'productSpecification'])->whereHas('productSpecification', function($query) use ($selectedFilters)
            {
                $query->whereIn('option_attribute_id', $selectedFilters);
            })->get()->toArray();
        } else {
            $this->products = Product::whereBetween('discounted_price', [floatval($this->minPrice), floatval($this->maxPrice)])->whereIn('category_id', $selectedCategories)->with(['category', 'productSpecification'])->get()->toArray();
        }
    }

    public function render()
    {
        return view('livewire.front.product-filter');
    }
}
