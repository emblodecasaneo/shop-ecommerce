<?php

namespace Database\Factories;

use App\Models\db_section;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\db_section>
 */
class db_sectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = db_section::class;

    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Tops', 'Patns', 'Cats']), // Genre aléatoire
        ];
    }
}
