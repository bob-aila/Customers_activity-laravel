<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\customer;


class customersController extends Controller
{
    public function index()
    {
        $customers = customer::all();
        return view ('customer.index')->with('customers', $customers);
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Customer::create($input);
        return redirect('customer')->with('flash_message', 'Customer Addedd!');  
    }
    
    public function show($id)
    {
        $customer = customer::find($id);
        return view('customer.show')->with('customers', $customer);
    }
    
    public function edit($id)
    {
        $customer = customer::find($id);
        return view('customer.edit')->with('customers', $customer);
    }
  
    public function update(Request $request, $id)
    {
        $customer = customer::find($id);
        $input = $request->all();
        $customer->update($input);
        return redirect('customer')->with('flash_message', 'Customers Updated!');  
    }
  
    public function destroy($id)
    {
        customer::destroy($id);
        return redirect('customer')->with('flash_message', 'customer deleted!');  
    }
}
