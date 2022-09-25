<?php

namespace Database\Factories;

use App\Models\lineapedido;
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
        return [
            'lineadepedidos_id'=> lineapedido::all()->random()->id,
            'users_id'=> User::all()->random()->id,
        ];
    }
}
