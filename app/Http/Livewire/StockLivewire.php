<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Stock;

class StockLivewire extends Component
{
    public $products, $productId, $type, $qty = 0, $histories = [];

    public function mount()
    {
        $this->products = Product::pluck('title', 'id')->toArray();
    }

    public function getReport() {
        $this->histories = Stock::where('product_id', $this->productId)->with('product')->get()->toArray();
    }

    public function submit() {
        Stock::create([
            'product_id' => $this->productId,
            'type' => $this->type,
            'qty' => $this->qty
        ]);

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',  
            'message' => 'Stock has been updated successfully.', 
        ]);

        $this->type = '';
        $this->qty = 0;
    }

    public function render()
    {
        return view('livewire.stock-livewire');
    }
}
