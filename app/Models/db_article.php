<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class db_article extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'description', 'price', 'image', 'marque_id', 'genre_id', 'categorie_id', 'section_id'];

    public function marque()
    {
        return $this->belongsTo(db_brand::class, 'db_brand_id');
    }

    public function gender()
    {
        return $this->belongsTo(db_gender::class, 'db_gender_id');
    }

    public function categorie()
    {
        return $this->belongsTo(db_category::class, 'db_category_id');
    }

    public function section()
    {
        return $this->belongsTo(db_section::class, 'db_section_id');
    }
}
