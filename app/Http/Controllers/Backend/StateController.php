<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PropertyType;
use App\Models\State;


class StateController extends Controller
{
    public function AllState(){

        $state = State::latest()->get();
        return view('backend.state.all_state',compact('state'));

    } // End Method 


}
 