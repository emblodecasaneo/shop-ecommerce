<?php

namespace Database\Factories;

use App\Models\db_brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\db_brand>
 */
class db_brandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = db_brand::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company, // Nom aléatoire pour la marque
        ];
    }
}
