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
    public function logout(){
    	Session::flush();
    	return redirect('/admin');
    }
}
