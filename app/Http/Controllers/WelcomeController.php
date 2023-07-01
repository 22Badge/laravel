<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request){
        //dd($request ->sort_by);
        //dd($request -> method());
        return View('welcome');
    }
}
