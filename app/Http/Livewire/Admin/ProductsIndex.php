<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    public $search;

    public function render()
    {
        $products = Product::where('name', 'LIKE', '%' . $this->search . '%')->orWhere('brand', 'LIKE', '%' . $this->search . '%')->orWhere('id', 'LIKE', $this->search)
            ->latest('id')
            ->paginate(8);
        return view('livewire.admin.products-index', compact('products'));
    }
}
