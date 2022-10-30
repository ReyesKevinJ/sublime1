<?php

namespace Database\Seeders;

use App\Models\color;
use App\Models\image;
use App\Models\lineapedido;
use App\Models\pedido;
use App\Models\producto;
use App\Models\tamaño;
use App\Models\User;
use Database\Factories\pedidoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Database\Seeders\ProductoSeeder;

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
        $this->call(RolesSeeder::class);
        $this->call(UserSeeder::class);
        color::factory(10)->create();
        tamaño::factory(10)->create();
        $this->call(ProductoSeeder::class);
        pedido::factory(10)->hasLineapedido(10)->create();




    }
}
