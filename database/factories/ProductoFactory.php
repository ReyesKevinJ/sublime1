<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\color;
use App\Models\tamaño;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       
        $name = $this->faker->unique()->word(20);
        return [
            'nombre' => $name,
            'precio' => $this -> faker ->numberBetween($min = 1000, $max = 9000),
            
            'color_id'=> color::all()->random()->id,
            'tamaño_id'=> tamaño::all() ->random()->id,
            'caracteristica' => $this -> faker ->text(200),
        ];
    }
}
