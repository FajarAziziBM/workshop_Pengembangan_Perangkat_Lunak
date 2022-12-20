<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prodi>
 */
class ProdiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_jurusan' => rand(1, 6),
            'kode_prodi' => fake()->unique()->numerify('ABC##'),
            'nama_prodi' => fake()->name(),
        ];
    }
}
