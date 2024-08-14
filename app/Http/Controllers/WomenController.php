<?php

namespace App\Http\Controllers;

use App\Models\db_article;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

use function Termwind\render;

class WomenController extends Controller
{
    public function tops(){

        $womenTops = db_article::whereHas('categorie', function($query) {
            $query->where('name', 'Clotches');
        })
        ->whereHas('section', function($query) {
            $query->where('name', 'Tops');
        })
        ->whereHas('gender', function($query) {
            $query->where('name', 'Women');
        })
        ->get();
        
        return Inertia::render('Women/Tops', [ 'tops' => $womenTops]);
    }

    public function pants(){

        $womenPants = db_article::whereHas('categorie', function($query) {
            $query->where('name', 'Clotches');
        })
        ->whereHas('section', function($query) {
            $query->where('name', 'Pants');
        })
        ->whereHas('gender', function($query) {
            $query->where('name', 'Women');
        })
        ->get();
        
        return Inertia::render('Women/Pants', ['pants'=> $womenPants]);
    }

    public function t_shirts(){
        
        return Inertia::render('Women/T-shirts');
    }

    public function all(){
        
        return Inertia::render('Women/All');
    }
}
