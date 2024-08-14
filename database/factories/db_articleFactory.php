<?php

namespace Database\Factories;

use App\Models\db_article;
use App\Models\db_brand;
use App\Models\db_category;
use App\Models\db_gender;
use App\Models\db_section;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\db_article>
 */
class db_articleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = db_article::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word, // Nom aléatoire pour l'article
            'description' => $this->faker->paragraph, // Description aléatoire
            'price' => $this->faker->numberBetween(1000, 100000), // Prix aléatoire
            'image' => $this->faker->imageUrl(640, 480, 'fashion', false), // URL d'image aléatoire
            'db_brand_id' => rand(1,4), // Associe une marque
            'db_gender_id' => rand(1,2), // Associe un genre
            'db_category_id' => rand(1,3), // Associe une catégorie
            'db_section_id' => rand(1,4), // Associe une section
        ];
    }
}
