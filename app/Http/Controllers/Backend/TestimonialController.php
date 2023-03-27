<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PropertyType;
use App\Models\Testimonial;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
     public function AllTestimonials(){

        $testimonial = Testimonial::latest()->get();
        return view('backend.testimonial.all_testimonial',compact('testimonial'));

    } // End Method 


    public function AddTestimonials(){
        return view('backend.testimonial.add_testimonial');
    }// End Method 


 public function StoreTestimonials(Request $request){

    $image = $request->file('image');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(100,100)->save('upload/testimonial/'.$name_gen);
    $save_url = 'upload/testimonial/'.$name_gen;

    Testimonial::insert([
        'name' => $request->name,
        'position' => $request->position,
        'message' => $request->message,
        'image' => $save_url, 
    ]);

     $notification = array(
            'message' => 'Testimonial Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.testimonials')->with($notification);

    }// End Method 




}
 