<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Country;

class CheckoutController extends Controller
{
    public function index(){
    	$countrys = Country::all();
        return view('home.pages.checkout',compact('countrys'));
    }

    
}
