<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index() 
    {
        $data = Customer::all();
        return view("customer", compact("data"));
    }

    public function create() 
    {
        return view("customer-create");
    }

    public function createCustomer(CustomerRequest $request) 
    {
        $data = $request->all();
        Customer::create($data);
        return back();
    }

    public function editCustomer($id) 
    {
        $customer = Customer::find($id);
        
        return view("cusomer-update", compact("customer"));
    }
    public function updateCustomer(CustomerRequest $request) 
    {
        $customer = Customer::find($request->id);
        $customer->update($request->validated()); 
        return redirect('/customer');
    }

    public function destroyCustomer($id) 
    {
        $customer = Customer::find($id);
        $customer->delete(); 
        return redirect('/customer');
    }

    public function filterByGender(Request $request) 
    {
        $gender = $request->gender;
        if ($gender === 'all') {
            $data = Customer::all(); 
        } else {
            $data = Customer::where('gender', $gender)->get(); 
        }
        return view("customer", compact("data","gender"));
    }
    
    

}
