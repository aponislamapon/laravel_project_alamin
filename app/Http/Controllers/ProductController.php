<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cat;
use App\Brand;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $products = Product::all()->toArray();
        $allCategory=Cat::all()->toArray(); 
        $allBrand=Brand::all()->toArray();
        return view('admin.product.index', compact('products', 'allCategory', 'allBrand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'product_image' => 'required',
            'product_image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasfile('product_image'))
         {

            foreach($request->file('product_image') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
               $data = $name;  
            }
         }


        $products = new Product;
        $products->cat_id=$request->get('cat_id');
        $products->brand_id=$request->get('brand_id');
        $products->product_name=$request->get('product_name'); //title
        $products->product_price=$request->get('product_price');
        $products->product_qty=$request->get('product_qty');

         $products->product_name= $request->product_name;
        $products->product_image=json_encode($data);  


      

        $products->save();
        return redirect('admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $product= Product::find($id);
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'product_image' => 'required',
            'product_image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasfile('product_image'))
         {

            foreach($request->file('product_image') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
               $data = $name;  
            }
         }



        $products = Product::find($id);
       $products->cat_id=$request->get('cat_id');
        $products->brand_id=$request->get('brand_id');
        $products->product_name=$request->get('product_name'); //title
        $products->product_price=$request->get('product_price');
        $products->product_qty=$request->get('product_qty');

         $products->product_name= $request->product_name;
        $products->product_image=json_encode($data);   

        $products->save();
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/product');
    }

    
}
