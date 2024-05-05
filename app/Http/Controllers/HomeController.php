<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use Inertia\Inertia;
use Carbon\Carbon;

class HomeController extends Controller{
    public function users(){
         $users = ['Michael','James','John','Philip','Samson'];
         $apps = ['Mobile', 'Cloud','serverlet','web','blockchain'];
         return inertia::render('Users', [
            'users'=>$users,
            'applications'=>$apps
        ]);
    }

    public function jobs(){
     $jobs = ['Engineer','Surveyors','Doctor','Lawer'];
      return inertia::render('Jobs', ['jobs'=>$jobs]);
    }

    public function apps(){
         $apps = ['Mobile', 'Cloud','serverlet','web','blockchain'];
         return inertia::render('Apps',['applications'=>$apps] );
    }
}

