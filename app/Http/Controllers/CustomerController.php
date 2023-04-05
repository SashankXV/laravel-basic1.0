<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create()
    {
        $url = url('/customer');
        $customer = new Customer;
        $title = "Customer Registration";
        $data = compact('customer', 'url', 'title');
        return view('customer')->with($data);   
    }
    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'address' =>'required',
                'state' =>'required',
                'country' =>'required',
                'dob' => 'required',
            ]
            );

        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];  
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();

        return redirect('/customer');
    }
    
    public function view()
    {
        // echo "<pre>";
        // print_r($customer);  //toArray() is used to print the data only when the data is not empty.
        // echo "</pre>";
        // die;
        
        $customer = Customer::all();    
        $data = compact('customer');
        return view('customer-view')->with($data);
    }

    
    
    public function remove($id)
    {
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect('customer');
    }
    
    public function edit($id)
    {
        $customer = Customer::find($id);
        if (is_null($customer)) {
            return redirect('/customer');
            // echo "hello there";
            // die;
        }
        else 
        {
            $title = "Update Customer";
            $url = url('/customer/update') . "/" . $id;
            $data = compact('customer', 'title', 'url');
            return view('customer')->with($data);
        }
    }    
}
