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
    
    public function dashboard(Request $request){
    	$email= $request->email;
    	$password= $request->password;
    	$result= DB::table('admins')
    			->where('email', $email)
    			->where('password',$password)
    			->first();
    			if($result){
    				Session::put('name', $result->name);
    				Session::put('id', $request->id);
    				return redirect('/dashboard');
    			}else{
    				Session::put('messege', 'Email or password invalid');
    				return redirect('/admin');
    			}
    }
}
