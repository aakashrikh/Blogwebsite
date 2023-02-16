<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Validator;
use Session;
class CategoryController extends Controller
{
    public function index()
    {
        return view('category')->with('data',category::get());
    }

    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
         ]);
        
        $res = new Category;
        $res->name = $request->post('name'); 
        $res->path = str_replace(' ','-',$request->post('name'))."-".uniqid(); 
        $res->meta_title = $request->post('meta_title');
        // $res->meta_title = str_replace(' ','-',$request->post('meta_title'))."-".uniqid();
        $res->meta_keyword = $request->post('meta_keyword'); 
        $res->meta_description = $request->post('meta_description'); 
        $res->save(); 
        if($res->save()){
          Session::flash('success','Category Added!');
          return redirect('category');
        }else{
            Session::flash('error','Category Not Added!');
            return redirect('category');
        }
    }

    public function getDetails(Request $req)
    {
        $data = Category::find($req->id);
        return $data;
    }
    
    public function update(Request $request)
    {
        // return $request->post('name');
        $request -> validate([
            'names' => 'required|regex:/^[a-zA-Z\s]+$/',
            'meta_titles' => 'required',
            'meta_keywords' => 'required',
            'meta_descriptions' => 'required',
         ]);
        $id = $request->post('id');
        $data = [
            'name' => $request->post('names'), 
            'meta_title' => $request->post('meta_titles'), 
            'meta_keyword' => $request->post('meta_keywords'),
            'meta_description' => $request->post('meta_descriptions'),
        ];
        $res = Category::where('id', $id)->update($data);
        if($res){
          Session::flash('success','Category Updated!');
          return redirect('category');
        }else{
            Session::flash('error','Category Not Updated!');
            return redirect('category');
        }
    }

    public function destroy($id)
    {
        $res = Category::destroy($id);
        if($res){
            Session::flash('success','Category Deleted!');
            return redirect('category');
          }else{
              Session::flash('error','Category Not Deleted!');
              return redirect('category');
          }
    }
}
