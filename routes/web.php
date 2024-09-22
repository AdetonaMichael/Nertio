<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

Route::get('/', function () {
   return inertia('Welcome');
});

Route::get('/users', function(){
    return inertia('Users',[
        'time'=> now()->toTimeString()
    ]);
});

Route::get('/settings', function(){
    return inertia('Settings');
});

Route::post('/logout', function(){
    dd('logging out...');
});
