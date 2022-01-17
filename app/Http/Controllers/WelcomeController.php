<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $user = \Auth::user();
        if($user == null) {
            return view('welcome');
        } else {
            return redirect('/tasks'); 
        }
    }
}
