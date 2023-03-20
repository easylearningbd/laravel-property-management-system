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

        $property = Property::findOrFail($id);

        $amenities = $property->amenities_id;
        $property_amen = explode(',',$amenities);


        $multiImage = MultiImage::where('property_id',$id)->get();
        $facility = Facility::where('property_id',$id)->get();

        $type_id = $property->ptype_id;
        $relatedProperty = Property::where('ptype_id',$type_id)->where('id','!=',$id)->orderBy('id','DESC')->limit(3)->get();

        return view('frontend.property.property_details',compact('property','multiImage','property_amen','facility','relatedProperty'));

    }// End Method 
}
 