<?php

namespace Database\Factories;

use App\Models\db_category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\db_category>
 */
class db_categoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = db_category::class;

    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Clotches', 'Accessories']), // Genre aléatoire
        ];
    }
}
