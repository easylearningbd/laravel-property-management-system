<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\MultiImage;
use App\Models\Facility;
use App\Models\Amenities;
use App\Models\PropertyType; 
use App\Models\User; 
use App\Models\PackagePlan; 

class IndexController extends Controller
{
    public function PropertyDetails($id,$slug){

        return view('frontend.property.property_details');

    }// End Method 
}
 