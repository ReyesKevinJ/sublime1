<?php

namespace Database\Seeders;

use App\Models\image;
use App\Models\lineapedido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LineapedidoSeeder extends Seeder
{
    /**
     * 
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lineapedido= lineapedido::factory(10)->create();
        //prueba
        foreach ($lineapedido as $lineapedido){
           image::factory(1)->create([
            'imageable_id' => $lineapedido -> id,
            'imageable_type'=> lineapedido::class
           ]); 
        }

    }
}
