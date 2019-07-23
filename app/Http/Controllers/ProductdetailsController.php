<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductdetailsController extends Controller
{
    public function index(){
    	return view('home.layouts.singleproduct');
    }
}
