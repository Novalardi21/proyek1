<?php

namespace Database\Factories;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    protected $model = Admin::class;

    public function definition(): array
    {
        return [
            'username' => fake()->userName(),
            'email' => fake()->safeEmail(),
            'password' => bcrypt('password'),
            'role' => 'admin_apotek',
            'status' => 'Disetujui',
        ];
    }
}
