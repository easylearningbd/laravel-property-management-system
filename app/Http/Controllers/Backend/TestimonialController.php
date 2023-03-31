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


    public function EditTestimonials($id){

        $testimonial = Testimonial::findOrFail($id);
        return view('backend.testimonial.edit_testimonial',compact('testimonial'));

    }// End Method 


     public function UpdateTestimonials(Request $request){

        $test_id = $request->id;

        if ($request->file('image')) {

   $image = $request->file('image');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(100,100)->save('upload/testimonial/'.$name_gen);
    $save_url = 'upload/testimonial/'.$name_gen;

    Testimonial::findOrFail($test_id)->update([
        'name' => $request->name,
        'position' => $request->position,
        'message' => $request->message,
        'image' => $save_url, 
    ]);

     $notification = array(
            'message' => 'Testimonial Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.testimonials')->with($notification);

        }else{

      Testimonial::findOrFail($test_id)->update([
        'name' => $request->name,
        'position' => $request->position,
        'message' => $request->message, 
    ]);

     $notification = array(
            'message' => 'Testimonial Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.testimonials')->with($notification);

        }

    }// End Method 


    public function DeleteTestimonials($id){

        $test = Testimonial::findOrFail($id);
        $img = $test->image;
        unlink($img);

        Testimonial::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Testimonial Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }// End Method





}
 