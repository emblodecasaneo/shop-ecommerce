<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\db_article;
use App\Models\db_brand;
use App\Models\db_category;
use App\Models\db_gender;
use App\Models\db_section;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Créer des marques, genres, catégories, sections, et articles
        db_brand::factory(4)->create(); // Crée 5 marques
        db_gender::factory(2)->create(); // Crée 2 genres
        db_category::factory(3)->create(); // Crée 3 catégories
        db_section::factory(4)->create(); // Crée 4 sections

        // Crée 20 articles, chacun étant associé à une marque, un genre, une catégorie et une section
        db_article::factory(10)->create();
    }
}
