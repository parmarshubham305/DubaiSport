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
    $products = [], $keyword = '', $optionAttributeIds = [], $optionAttributes = [], $minPrice = '', $maxPrice = '';

    public function mount() {
        $this->categories = Category::get()->toArray();
        $this->selectedCategories[] = 'category-'.$this->categoryId;

        $categoriesMappedOption = [];

        foreach ($this->categories as $key => $value) {
            $categoriesMappedOption[] = $value['option_ids'];
        }
        $arraySingle = array_unique(call_user_func_array('array_merge', $categoriesMappedOption));

        array_filter($arraySingle, function($item){
            $this->selectedOptions[$item] = [];
        });
        
        $this->masterOptions = MasterOption::whereIn('id', $arraySingle)->with('attributeValues')->get()->toArray();

        $this->renderProducts();
    }

    public function updated($value)
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
            if(($key = array_search('attribute-'.$params, $this->optionAttributeIds)) !== false) {
                unset($this->optionAttributeIds[$key]);
            }
            // foreach ($this->selectedOptions as $key => $attributes) {
            //     if(($key = array_search($params, $attributes)) !== false) {
            //         unset($attributes[$key]);
            //         $this->selectedOptions[$key] = $attributes;
            //     }
            // }
        }
        $this->renderProducts();
    }

    public function clearFilters()
    {
        $this->optionAttributeIds = [];
        $this->optionAttributes = [];
        $this->renderProducts();
    }

    public function priceChange() {
        $this->renderProducts();
    }

    public function renderProducts()
    {
        $selectedCategories = array_filter((str_replace("category-","",$this->selectedCategories)));
        
        $selectedFilters = array_filter((str_replace("attribute-","",$this->optionAttributeIds)));

        $this->optionAttributes = MasterOptionAttribute::whereIn('id', $selectedFilters)->get()->toArray();
        
        $products = new Product();
        if($this->minPrice > 0 && $this->maxPrice > 0 && $this->maxPrice > $this->minPrice) {
            $products->whereBetween('discounted_price', [floatval($this->minPrice), floatval($this->maxPrice)]);
        }
        if(!empty($this->optionAttributeIds)) {
            $this->products = $products->whereIn('category_id', $selectedCategories)->with(['category', 'productSpecification'])->whereHas('productSpecification', function($query) use ($selectedFilters)
            {
                $query->whereIn('option_attribute_id', $selectedFilters);
            })->get()->toArray();
        } else {
            $this->products = $products->whereIn('category_id', $selectedCategories)->with(['category', 'productSpecification'])->get()->toArray();
        }
    }

    public function render()
    {
        return view('livewire.front.product-filter');
    }
}
