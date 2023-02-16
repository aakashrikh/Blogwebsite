<?php

namespace App\Http\Controllers;

use App\Models\Magzine;
use Illuminate\Http\Request;
use Session;
class MagzineController extends Controller
{
    public function index()
    {
        return view('magazine')->with('data',Magzine::get());
    }

    public function store(Request $request)
    {
         // return $request;
         $request -> validate([
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'url' => 'required|url',
            'folder' => 'required',
            'file' => 'required|mimes:png,jpg',
            'description' => 'required',
         ]);
        $file = $request -> file('file'); 
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $res = new Magzine;
        $res->name = $request->post('name');
        $res->cover_image =  $file_name;
        $res->url = $request->post('url');
        $res->pdf_folder_name = $request->post('folder');
        $res->description = $request->post('description');
        $res -> save();
        if($res -> save()){
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $file_name);
            Session::flash('success','Magzine Added!');
            return redirect('magazine');
          }else{
              Session::flash('error','Magzine Not Added!');
              return redirect('magazine');
          }
    }

    public function getMagzineDetails(Request $req)
    {
        $data = Magzine::find($req->id);
        return $data;
    }

    public function update(Request $request)
    {
        $request -> validate([
            'names' => 'required|regex:/^[a-zA-Z\s]+$/',
            'urls' => 'required|url',
            'folders' => 'required',
            'files' => 'required|mimes:png,jpg',
            'descriptions' => 'required',
         ]);
        $file = $request -> file('files'); 
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $id = $request->post('pid');
        $data = [
        'name' => $request->post('names'),
        'cover_image' =>  $file_name,
        'url' => $request->post('urls'),
        'pdf_folder_name' => $request->post('folders'),
        'description' => $request->post('descriptions'),
        ];
        $res = Magzine::where('id',$id)->update($data);
        if($res){
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $file_name);
            Session::flash('success','Magzine Updated!');
            return redirect('magazine');
          }else{
              Session::flash('error','Magzine Not Updated!');
              return redirect('magazine');
          }
    }

    public function destroy($id)
    {
        $res = Magzine::destroy($id);
        if($res){
            Session::flash('success','Magzine Deleted!');
            return redirect('magazine');
          }else{
              Session::flash('error','Magzine Not Deleted!');
              return redirect('magazine');
          }
    }
}
