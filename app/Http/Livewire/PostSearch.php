<?php

namespace App\Http\Livewire;

use App\Models\producto;
use Livewire\Component;

class PostSearch extends Component
{
    public $search,$price;
    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        $productos= producto::where('id','>',0)->where('nombre','LIKE','%'. $this->search. '%')->when( $this->price, function($q){
            $q->when($this->price =='mayor',function($q2){
                $q2->orderBy('precio','DESC');
            })->when($this->price =='menor',function($q2){
                $q2->orderBy('precio','ASC');
            });
        })->paginate(8);
        return view('livewire.post-search',compact('productos'));
    }
}
