<?php

namespace App\Http\Controllers;

use App\Models\db_article;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    function view(){
        return Inertia::render('Index');
    }


    function store(){

        $allProduct = db_article::all();

        return Inertia::render('Customers/ProductList' , ['products' => $allProduct]);
    }

    function details($id) {
        $product = db_article::find($id);
        return Inertia::render('Products/OverView', ['product'=> $product]);
    }
}
