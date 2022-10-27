<?php

namespace Database\Factories;

use App\Models\lineapedido;
use App\Models\producto;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pedido>
 */
class pedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $unixTimestamp = '1461067200'; 
        return [
            
            'users_id'=> User::all() ->random()->id,
            
        ];
    }
}
