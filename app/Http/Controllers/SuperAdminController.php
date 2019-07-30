<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();
class SuperAdminController extends Controller
{

	public function index(){
		//$this->AdminAuthCheck();
		return view('admin.dashboard');
	}

    public function logout(){
    	Session::flush();
    	return redirect('/admin');
    }

    public function AdminAuthCheck(){

    	$id=Session::get('id');
    	if($id){
    		return;
    	}else{
    		return Redirect::to('/admin')->send();
    	}
    }
}
