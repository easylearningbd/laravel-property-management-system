<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\BlogCategory; 
use App\Models\BlogPost; 
use App\Models\User;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function AllBlogCategory(){

        $category = BlogCategory::latest()->get();
        return view('backend.category.blog_category',compact('category'));

    } // End Method 


      public function StoreBlogCategory(Request $request){ 

        BlogCategory::insert([ 

            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ','-',$request->category_name)),  
        ]);

          $notification = array(
            'message' => 'BlogCategory Create Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog.category')->with($notification);

    }// End Method 


    public function EditBlogCategory($id){

        $categories = BlogCategory::findOrFail($id);
        return response()->json($categories);

    }// End Method 


 public function UpdateBlogCategory(Request $request){ 

    $cat_id = $request->cat_id;

        BlogCategory::findOrFail($cat_id)->update([ 

            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ','-',$request->category_name)),  
        ]);

          $notification = array(
            'message' => 'BlogCategory Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog.category')->with($notification);


    }// End Method 


    public function DeleteBlogCategory($id){

        BlogCategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'BlogCategory Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method 


   public function AllPost(){

    $post = BlogPost::latest()->get();
    return view('backend.post.all_post',compact('post'));

   }// End Method 


   public function AddPost(){

    $blogcat = BlogCategory::latest()->get();
    return view('backend.post.add_post',compact('blogcat'));

   }// End Method 


   public function StorePost(Request $request){

    $image = $request->file('post_image');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(370,250)->save('upload/post/'.$name_gen);
    $save_url = 'upload/post/'.$name_gen;

    BlogPost::insert([
        'blogcat_id' => $request->blogcat_id,
        'user_id' => Auth::user()->id,
        'post_title' => $request->post_title,
        'post_slug' => strtolower(str_replace(' ','-',$request->post_title)), 
        'short_descp' => $request->short_descp,
        'long_descp' => $request->long_descp,
        'post_tags' => $request->post_tags,
        'post_image' => $save_url, 
        'created_at' => Carbon::now(),
    ]);

     $notification = array(
            'message' => 'BlogPost Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.post')->with($notification);

    }// End Method 


    public function EditPost($id){

        $blogcat = BlogCategory::latest()->get();
        $post = BlogPost::findOrFail($id);
        return view('backend.post.edit_post',compact('post','blogcat'));

    }// End Method


     public function UpdatePost(Request $request){

        $post_id = $request->id;

        if ($request->file('post_image')) {

    $image = $request->file('post_image');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(370,250)->save('upload/post/'.$name_gen);
    $save_url = 'upload/post/'.$name_gen;

    BlogPost::findOrFail($post_id)->update([
        'blogcat_id' => $request->blogcat_id,
        'user_id' => Auth::user()->id,
        'post_title' => $request->post_title,
        'post_slug' => strtolower(str_replace(' ','-',$request->post_title)), 
        'short_descp' => $request->short_descp,
        'long_descp' => $request->long_descp,
        'post_tags' => $request->post_tags,
        'post_image' => $save_url, 
        'created_at' => Carbon::now(),
    ]);

     $notification = array(
            'message' => 'BlogPost Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.post')->with($notification);

        }else{

      BlogPost::findOrFail($post_id)->update([
        'blogcat_id' => $request->blogcat_id,
        'user_id' => Auth::user()->id,
        'post_title' => $request->post_title,
        'post_slug' => strtolower(str_replace(' ','-',$request->post_title)), 
        'short_descp' => $request->short_descp,
        'long_descp' => $request->long_descp,
        'post_tags' => $request->post_tags, 
        'created_at' => Carbon::now(),
    ]);

     $notification = array(
            'message' => 'BlogPost Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.post')->with($notification);

        } // end else 

    }// End Method 

     public function DeletePost($id){

        $post = BlogPost::findOrFail($id);
        $img = $post->post_image;
        unlink($img);

        BlogPost::findOrFail($id)->delete();

         $notification = array(
            'message' => 'BlogPost Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }// End Method


}
 