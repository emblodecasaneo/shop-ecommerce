<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\WomenController;
use Illuminate\Support\Facades\Route;



    Route::controller(ProductController::class)->group(function() { 

            Route::get('/', 'view');
            Route::get('/store', 'store');

    });


    Route::controller(WomenController::class)->group(function() { 

        Route::get('/women/tops', 'tops');

});



