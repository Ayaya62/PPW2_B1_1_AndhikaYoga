<?php

namespace Database\Factories;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => $this->faker->word(),
            'harga' => $this->faker->numberBetween(0, 1000000),
            'stok' => $this->faker->numberBetween(10, 5000),
            'id_supplier' => $this->faker->numberBetween(1, 100)
        ];
    }
}