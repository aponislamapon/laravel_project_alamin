<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class DashboardController extends Controller
{
    public function index(){
    	return view('admin.admin_login');
    }

    public function admin_dashboard(){
        return view('admin.dashboard');
    }

    public function logout(){
        Session::flush();
        return redirect('/admin');
    }
    
    public function dashboard(Request $request){
    	$admin_email= $request->admin_email;
    	$admin_password= $request->admin_password;
    	$result= DB::table('admins')
    			->where('admin_email', $admin_email)
    			->where('admin_password',$admin_password)
    			->first();
    			if($result){
    				Session::put('admin_name', $result->admin_name);
    				Session::put('admin_id', $request->admin_id);
    				 return view('admin.dashboard');
    			}else{
    				Session::put('messege', 'Email or password invalid');
    				return redirect('/admin');
    			}
    }
}
