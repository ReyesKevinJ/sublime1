<?php

namespace Database\Factories;


use App\Models\producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lineapedido>
 */
class LineapedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'cantidad' => $this -> faker ->numberBetween(1,100),
           'producto_id'=> producto::all()->random()->id,
        ];
    }
}
