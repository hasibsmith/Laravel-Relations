<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Products;
use App\Models\Authors;
use App\Models\Cities;
use App\Models\Doctor;
use App\Models\Role_User;
use App\Models\Doctor_Patient;
use App\Models\Patient;
use App\Models\User_2;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
  public function post_details(){

    $post = Post::with('comment')->get();
    // $comments = $post->comment;
    // $post = Post::all();
   
    return view('Blog.post',compact('post'));


  }

  public function category_details(){

    $info = Category::with('products')->get();


    return view('Blog.category',compact('info'));
  }
  public function authors_details(){

    // $info = Authors::with('books')->get();
    $info = Authors::with('firstAddress')->get();


    return view('Blog.authors',compact('info'));
  }

  public function cities_details(){

    $info = Cities::all();
    
    // $info = Cities::with('addresses')->get();
    // $info = Cities::with('firstAddress')->get();


    return view('Blog.cities',compact('info'));
  }

  public function role_details(){
    $user = Role_User::all();	

    // dd($user) ;
    return $user;

  }

  public function doctor_details()
  {
      $doctor=Doctor::find(1);
   
return  $doctor->patient;

  }


}
