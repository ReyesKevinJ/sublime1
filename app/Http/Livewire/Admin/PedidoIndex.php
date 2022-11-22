<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\pedido;
use Livewire\WithPagination;

class PedidoIndex extends Component
{
    use WithPagination;
    public $search;
    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        $pedidos= pedido::where('id','>',0)->where('created_at','LIKE','%'. $this->search.'%')->paginate();
        return view('livewire.admin.pedido-index',compact('pedidos'));
    }
}
