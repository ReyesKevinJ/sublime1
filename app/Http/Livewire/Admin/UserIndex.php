<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UserIndex extends Component
{
    use WithPagination;
    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $users= User::where('name', 'LIKE' ,'%'. $this->search .'%' )->paginate();
        return view('livewire.admin.user-index', compact('users'));
    }
}
