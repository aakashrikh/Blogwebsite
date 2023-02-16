<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;

class ApiController extends Controller
{
    public function category(){
        $category = Category::all()->toArray();

        echo json_encode($category);

    }

    public function singlecategorydata($limit){

            $data = Blog::limit(intval($limit))->get();
            return json_encode($data);
    }
    public function singleblogdata(Request  $request){
        $blog_path = $request->blog_path;
        $blog = Blog::select('page_title as blog_name','upload_image as blog_photo','author_name as posted_by','created_at as time_stamp','description as blog_content')
                    ->where('category_name',$blog_path)->get()->toArray();
        return json_encode($blog);
     }
     public function querysearch($query){
         //meta keyword
         $metakeyword = Blog::where('meta_keyword','LIKE','%'.$query.'%');
         
         return json_encode($metakeyword);
        }
    }

