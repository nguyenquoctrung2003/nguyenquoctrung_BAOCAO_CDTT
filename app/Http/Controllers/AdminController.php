<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Social;
use Socialite;
use App\Login;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

use Validator;
use App\Rules\Captcha;
use Illuminate\Support\Facades\DB as FacadesDB;
session_start();
class AdminController extends Controller
{
   public function index(){
    return view('admin_login');
   }
   public function show_dashboard(){
    return view('admin.dashboard');
   }
    public function dashboard(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result =DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($result)
        {
            session::put('admin_name',$request->admin_name);
            session::put('admin_id',$request->admin_id);
            return redirect::to('/dashboard');
        }else{
            Session::put('message','<i>Mật khẩu hoặc mật khẩu không đúng vui lòng nhập lại !</i>');
            return redirect::to('/admin');
        }

    }
    public function logout(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }


}
