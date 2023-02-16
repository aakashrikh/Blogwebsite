<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use Session;
class UploadController extends Controller
{
    public function index()
    {
        return view('uploads')->with('data',Upload::get());
    }

    public function store(Request $request)
    {
        $request -> validate([
            'file' => 'required|mimes:png,jpg',
         ]);
        $file = $request -> file('file'); 
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $res = new Upload;
        $destinationPath = public_path('/images');
        $res->image = $file_name;
        $res->path = $destinationPath.'/'.$file_name;
        $res -> save();
        if($res -> save()){
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $file_name);
            Session::flash('success','Image Uploaded!');
            return redirect('uploads');
          }else{
              Session::flash('error','Image Not Uploaded!');
              return redirect('uploads');
          }
    }
    public function destroy($id)
    {
        $res = Upload::destroy($id);
        if($res){
            Session::flash('success','Image Deleted!');
            return redirect('uploads');
          }else{
              Session::flash('error','Image Not Deleted!');
              return redirect('uploads');
          }
    }
}
