<?php

namespace Database\Seeders;

use App\Models\color;
use App\Models\image;
use App\Models\lineapedido;
use App\Models\pedido;
use App\Models\producto;
use App\Models\tamaño;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('image');
        Storage::makeDirectory('image');
        User::factory(10)->create();
        color::factory(10)->create();
        tamaño::factory(10)->create();
        producto::factory(10)->create();
        $this->call(lineapedidoSeeder::class); 
        
       
      
    }
}
