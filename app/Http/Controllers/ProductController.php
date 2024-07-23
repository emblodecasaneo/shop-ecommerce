<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Inertia\Inertia;

class ProductController extends Controller
{
    function view(){
        $products = Product::all();

        return Inertia::render('Index', ['articles'=>$products] );
    }
}
