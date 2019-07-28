<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
class ProductdetailsController extends Controller
{
    public function index($id){
    	 $product= Product::find($id);
    	return view('home.layouts.singleproduct', compact('product'));
    }
}
