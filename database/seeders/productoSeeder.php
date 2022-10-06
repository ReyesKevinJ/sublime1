<?php

namespace Database\Seeders;

use App\Models\image;
use App\Models\producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos= producto::factory(10)->create();
        //prueba
        foreach ($productos as $producto){
           image::factory(1)->create([
            'imageable_id' => $producto -> id,
            'imageable_type'=> producto::class
           ]); 
        }
    }
}
