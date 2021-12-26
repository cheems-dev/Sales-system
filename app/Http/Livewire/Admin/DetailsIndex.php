<?php

namespace App\Http\Livewire\Admin;

use App\Models\Detail;
use Livewire\Component;
use Livewire\WithPagination;

class DetailsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    public $search;

    public function render()
    {
        $details =  (!$this->search)
            ? Detail::with([
                'sale.user',
                'product'
            ])->paginate(6)
            : Detail::with([
                'sale.user',
                'product'
            ])
            ->where('quantity_total', 'LIKE',  $this->search)
            ->orWhere('product_id', 'LIKE', $this->search)->paginate(6);

        return view('livewire.admin.details-index', compact('details'));
    }
}
