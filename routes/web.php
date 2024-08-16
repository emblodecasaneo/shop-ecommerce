<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\WomenController;
use Illuminate\Support\Facades\Route;



    Route::controller(ProductController::class)->group(function() { 

            Route::get('/', 'store');
            Route::get('/store', 'store');

            route::get('/detail/{id}', 'details');

    });


    Route::controller(WomenController::class)->group(function() { 
        Route::get('/women/tops', 'tops');
        Route::get('/women/all', 'all');
        Route::get('/women/pants', 'pants');
        Route::get('/women/t-shirts', 't_shirts');
});



