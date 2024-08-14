<?php

namespace Database\Factories;

use App\Models\db_gender;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\db_gender>
 */
class db_genderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = db_gender::class;

    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Men', 'Women']), // Genre aléatoire
        ];
    }
}
