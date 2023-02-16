<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Session;
class BlogController extends Controller
{
    public function index()
    {
        $tabledata = Blog::join('categories','blogs.category_name','=','categories.id')->get(['blogs.*','categories.name']);
        // return $tabledata;
        return view('category-content')->with('data',Category::get(['id','name']))->with('tabledata',$tabledata);
    }

    public function search_content(Request $req)
    {
        $tabledata = Blog::join('categories','blogs.category_name','=','categories.id')
        ->where('categories.id','=',$req->category)
        ->get(['blogs.*','categories.name','categories.meta_keyword','categories.meta_title','categories.meta_description']);
        // return $tabledata;
        return view('category-content')->with('data',Category::get(['id','name']))->with('tabledata',$tabledata);
    }

    public function getContent(Request $req)
    {
        $category = Category::get(['id','name']);
        $tabledata = Blog::join('categories','blogs.category_name','=','categories.id')
        ->where('blogs.id',$req->id)
        ->get(['blogs.*','categories.name']);
        return [$category,$tabledata];
    }

    public function new_content()
    {
        return view('new-content')->with('data',Category::get(['id','name']));
    }
    
    public function getCategoryDetails(Request $req)
    {
        $data = Category::find($req->id);
        return $data;
    }
    public function store(Request $request)
    {
        // return $request;
        $request -> validate([
            'page_name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'page_title' => 'required',
            'file' => 'required|mimes:png,jpg',
            'category' => 'required|not_in:0',
            'author_name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'first_paragraph' => 'required',
            'image_text' => 'required',
            'description' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
         ]);
        $file = $request -> file('file'); 
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $res = new Blog;
        $res->page_name = $request->post('page_name');
        $res->path = str_replace(' ','-',$request->post('page_name'))."-".uniqid();
        $res->page_title = $request->post('page_title');
        $res->category_name = $request->post('category');
        $res->author_name = $request->post('author_name');
        $res->image_text = $request->post('image_text');
        $res->first_peragraph = $request->post('first_paragraph');
        $res->description = $request->post('description');
        $res->meta_title = $request->post('meta_title');
        $res->meta_keyword = $request->post('meta_keyword');
        $res->meta_description = $request->post('meta_description');
        $res->upload_image = $file_name;
        $res -> save();
        if($res -> save()){
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $file_name);
            Session::flash('success','New Content Added!');
            return redirect('category-content');
          }else{
              Session::flash('error','New Content Not Added!');
              return redirect('category-content');
          }
    }

    public function update(Request $request)
    {
         // return $request;
         $request -> validate([
            'page_name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'page_title' => 'required',
            'file' => 'mimes:png,jpg',
            'category' => 'required|not_in:0',
            'author_name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'first_paragraph' => 'required',
            'image_text' => 'required',
            'description' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
         ]);
        $file = $request -> file('file'); 
        if(isset($file)){
            $file_name = time().'.'.$file->getClientOriginalExtension();
        }
        $id = $request->post('pid');
        if(isset($file_name)){
            $data = [
                'page_name' => $request->post('page_name'),
                'page_title' => $request->post('page_title'),
                'category_name' => $request->post('category'),
                'author_name' => $request->post('author_name'),
                'image_text' => $request->post('image_text'),
                'first_peragraph' => $request->post('first_paragraph'),
                'description' => $request->post('description'),
                'upload_image' => $file_name,
                'meta_title' => $request->post('meta_title'),
                'meta_keyword' => $request->post('meta_keyword'),
                'meta_description' => $request->post('meta_description'),
                ];
                $destinationPath = public_path('/images');
                $file->move($destinationPath, $file_name);
        }else{
            $data = [
                'page_name' => $request->post('page_name'),
                'page_title' => $request->post('page_title'),
                'category_name' => $request->post('category'),
                'author_name' => $request->post('author_name'),
                'image_text' => $request->post('image_text'),
                'first_peragraph' => $request->post('first_paragraph'),
                'description' => $request->post('description'),
                'meta_title' => $request->post('meta_title'),
                'meta_keyword' => $request->post('meta_keyword'),
                'meta_description' => $request->post('meta_description'),
                ];
        }
        $res = Blog::where('id','=',$id)->update($data);
        if($res){
            Session::flash('success','New Content Updated!');
            return redirect('category-content');
        }else{
            Session::flash('error','New Content Not Updated!');
            return redirect('category-content');
        }
    }

    public function destroy($id)
    {
        $res = Blog::destroy($id);
        if($res){
            Session::flash('success','New Content Deleted!');
            return redirect('category-content');
        }else{
            Session::flash('error','New Content Not Deleted!');
            return redirect('category-content');
        }
    }
}
