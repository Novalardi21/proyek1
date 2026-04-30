<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Apotek;

class ApotekFactory extends Factory
{
    protected $model = Apotek::class;

    public function definition(): array
    {
        return [
            'nama_apotek' => fake()->company(),
            'email' => fake()->safeEmail(),
            'alamat' => 'legok indramayu',
        ];
    }
}
