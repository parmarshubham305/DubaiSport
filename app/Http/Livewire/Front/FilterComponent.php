<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Category;
use App\Models\MasterOption;
use App\Models\MasterOptionAttribute;

class FilterComponent extends Component
{
    public $categories, $categoryGroupId, $categoryId, $selectedCategories = [], $masterOptions, $selectedOptions = [];

    protected $listeners = ['removeFilters'];

    public function mount()
    {
        // $this->selectedCategories[] = $this->categoryId;

        $this->categories = Category::where('category_group_id', $this->categoryGroupId)->get()->toArray();

        $categoriesMappedOption = [];

        foreach ($this->categories as $key => $value) {
            $categoriesMappedOption[] = $value['option_ids'];
        }

        $arraySingle = array_unique(call_user_func_array('array_merge', $categoriesMappedOption));

        array_filter($arraySingle, function($item){
            $this->selectedOptions[$item] = [];
        });
        
        $this->masterOptions = MasterOption::whereIn('id', $arraySingle)->with('attributeValues')->get()->toArray();

        $this->emit('filterProducts', [ $this->selectedCategories, $this->selectedOptions ]);
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

    public function updated()
    {
        $this->emit('filterProducts', [ $this->selectedCategories, $this->selectedOptions ]);
    }

    public function categoryUpdate()
    {
        $this->emit('filterProducts', [ $this->selectedCategories, $this->selectedOptions ]);
    }

    public function render()
    {
        return view('livewire.front.filter-component');
    }
}
