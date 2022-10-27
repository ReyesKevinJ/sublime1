<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\pedido;

class Pedidoindex extends Component
{
    public function render()
    {
        $pedido=pedido::where('user_id', auth()->user()->id);
        return view('livewire.pedidoindex');
    }
}
