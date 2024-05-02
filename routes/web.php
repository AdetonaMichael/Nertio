<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return inertia::render('Welcome',[
        'name'=>'Michael Adetona',
        'frameworks'=>[
            'Larvel','Vue','Inertia','James Web Telescope'
        ]
    ]);
});
Route::get('/users', [HomeController::class,'users']);
Route::get('/jobs', [HomeController::class,'jobs']);
Route::get('/apps', [HomeController::class,'apps']);
Route::post('/logout', function(){
    
})
