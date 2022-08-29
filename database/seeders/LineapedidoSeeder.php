<?php

namespace Database\Seeders;

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
        lineapedido::factory(10)->create();
        //prueba


    }
}
