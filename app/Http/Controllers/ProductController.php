<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    function view(){
        return Inertia::render('Index');
    }


    function store(){
        return Inertia::render('Customers/ProductList' );
    }
}
