<?php

namespace Database\Seeders;

use App\Models\image;
use App\Models\producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto= producto::factory(10)->create();
        //prueba
        foreach ($producto as $productos){
           image::factory(1)->create([
            'imageable_id' => $productos -> id,
            'imageable_type'=> producto::class
           ]); 
        }
    }
}
