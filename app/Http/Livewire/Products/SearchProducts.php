<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Illuminate\View\View;

class SearchProducts extends Component
{
    public $search = '';

    public function render(): View
    {
        $viewData = [];
        $viewData['products'] = [];
        if(!empty($this->search)){
            $viewData['products'] = Product::where('name', 'LIKE', '%'.$this->search.'%')->get();
        }
        return view('livewire.products.search-products')->with('viewData', $viewData);
    }
}
