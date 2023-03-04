<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index(){
        return view('frontend.frontend_dashboard');
    } // End Method 
}
 