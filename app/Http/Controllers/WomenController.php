<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use function Termwind\render;

class WomenController extends Controller
{
    public function tops(){

        return Inertia::render('Women/Tops');
    }
}
