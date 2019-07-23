<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $allcustomer = Customer::all()->toArray();

        return view('admin.customer.index', compact('allcustomer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = new Customer;
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->password = $request->get('password');
        $data->mobile = $request->get('mobile');
        $data->country = $request->get('country');
        $data->zip_code = $request->get('zip_code');
        $data->address = $request->get('address');

        $data->save();

        return redirect()->route('index');
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
        $customer = Customer::find($id);
        return view('admin.customer.edit', compact('customer'));
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
         $customer = Customer::find($id);
       $customer->name = $request->get('name');
        $customer->email = $request->get('email');
        $customer->password = $request->get('password');
        $customer->mobile = $request->get('mobile');
        $customer->country = $request->get('country');
        $customer->zip_code = $request->get('zip_code');
        $customer->address = $request->get('address');

        $customer->save();

        return redirect('admin/customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('admin/customer');
    }
}
