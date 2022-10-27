<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\producto;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\WithPagination;
class ProductoIndex extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {

        $productos= producto::where('id','>',0)->where('nombre','LIKE','%'. $this->search. '%')->paginate(5);
        return view('livewire.admin.producto-index',compact('productos'));
    }
}
