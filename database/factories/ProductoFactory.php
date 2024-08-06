<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            "Nombre"    => fake()->word(),
            "Precio"    => fake()->numberBetween(50000,100000000),
            "Stock"     => fake()->numberBetween(0,1000),
            "Proveedor" => fake()->word(),

        ];
    }
}
