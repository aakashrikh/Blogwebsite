<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use Illuminate\Http\Request;
use Session;
use Auth;
class AdminController extends Controller
{
    public function index()
    {
        return view('password');
    }
    // public function login(Request $req)
    // {
    //     return view('login');
    // }
    public function auth(Request $req){
          // $remember_me = $req->has('remember_me') ? true : false;
          $username = $req -> post('email');
          $pas = $req -> post('password');
          $result = Admin::where(['email' => $username,'password' => $pas])->get();
          foreach ($result as $value) {
            $id = $value -> id;
            $username = $value -> email;
          }
          // if (isset($result['0'] -> id,$remember_me)) {
          if (isset($result['0'] -> id)) {
            // session() -> put('id',$id);
            Session::put('id', $id);
            // session() -> put('username',$username);
            Session::put('username', $username);
            Session::put('ADMIN_LOGIN',true);
            Session::put('ADMIN_ID',$result['0'] -> id);
            return response() -> json(['status' => 'success',
              'msg' => 'You are logged in now!']);
          }else{
            return response() -> json(['status' => 'error',
              'error' => 'Please enter correct details!']);
          }
    }
    // public function auth_api(Request $request)
    // {
    //   // dd(1);
    //     $email = $request->post('email');
    //     $password = $request->post('password');
    //     $result = Admin::where('user_id', '=', $email)->where('password', '=', $password)->get();
    //     if (isset($result['0']->id)) {
    //       if ($request->checkbox == 'true') {
    //         Session::put('email', $email);
    //         Session::put('password', $password);
    //       }
    //         Session::put('ADMIN_LOGIN', true);
    //         Session::put('ADMIN_ID', $result['0']->id);
    //         return redirect('index');
    //     } else {
    //       Session::flash('error', 'Please enter the Valid login details');
    //     }
    // }

    public function change_password(Request $req)
    {
      $req -> validate([
        'old_password' => 'required',
        'new_password' => 'required|required_with:confirm_password|same:confirm_password',
     ]);
        $old = $req->old_password;
        $new = $req->new_password;
        $id = Session::get('id');
        // return $id;
        $data = Admin::find($id);
        if($old == $data->password){
            $res = Admin::where('id', $id)
            ->limit(1) 
            ->update(['password' =>$new]);
            if($res){
              Session::flash('success','Password Changed!');
              return redirect('password');
            }else{
              Session::flash('error','Password Not Changed!');
              return redirect('password');
            }
        }else{
          Session::flash('error','Old Password not Matched!');
          return redirect('password');
        }
    }
}
