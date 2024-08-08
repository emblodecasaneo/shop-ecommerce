<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

use function Termwind\render;

class WomenController extends Controller
{
    public function tops(){
        
        return Inertia::render('Women/Tops');
    }

    public function pants(){
        
        return Inertia::render('Women/Pants');
    }

    public function t_shirts(){
        
        return Inertia::render('Women/T-shirts');
    }

    public function all(){
        
        return Inertia::render('Women/All');
    }
}
