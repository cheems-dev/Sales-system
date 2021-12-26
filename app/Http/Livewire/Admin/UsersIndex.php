<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    public $search;

    public function render()
    {
        $users = User::where('name', 'LIKE', '%' . $this->search . '%')->orWhere('address', 'LIKE', '%' . $this->search . '%')->orWhere('phone', 'LIKE', '%' . $this->search . '%')->orWhere('id', 'LIKE', $this->search)
            ->latest('id')
            ->paginate(8);

        return view('livewire.admin.users-index', compact('users'));
    }
}
