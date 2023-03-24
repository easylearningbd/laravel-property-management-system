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
use Illuminate\Support\Facades\Auth;
use App\Models\PropertyMessage;  
use Carbon\Carbon;

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

    public function PropertyMessage(Request $request){

        $pid = $request->property_id;
        $aid = $request->agent_id;

        if (Auth::check()) {
            
        PropertyMessage::insert([

            'user_id' => Auth::user()->id,
            'agent_id' => $aid,
            'property_id' => $pid,
            'msg_name' => $request->msg_name,
            'msg_email' => $request->msg_email,
            'msg_phone' => $request->msg_phone,
            'message' => $request->message,
            'created_at' => Carbon::now(), 

        ]);

        $notification = array(
            'message' => 'Send Message Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);



        }else{

            $notification = array(
            'message' => 'Plz Login Your Account First',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
        }

    }// End Method 


    public function AgentDetails($id){

        $agent = User::findOrFail($id);
        $property = Property::where('agent_id',$id)->get();
        $featured = Property::where('featured','1')->limit(3)->get();
        return view('frontend.agent.agent_details',compact('agent','property','featured'));

    }// End Method 


     public function AgentDetailsMessage(Request $request){
 
        $aid = $request->agent_id;

        if (Auth::check()) {
            
        PropertyMessage::insert([

            'user_id' => Auth::user()->id,
            'agent_id' => $aid, 
            'msg_name' => $request->msg_name,
            'msg_email' => $request->msg_email,
            'msg_phone' => $request->msg_phone,
            'message' => $request->message,
            'created_at' => Carbon::now(), 

        ]);

        $notification = array(
            'message' => 'Send Message Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);



        }else{

            $notification = array(
            'message' => 'Plz Login Your Account First',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
        }

    }// End Method 



}
 