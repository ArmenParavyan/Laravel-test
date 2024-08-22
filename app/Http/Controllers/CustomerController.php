<?php

namespace App\Http\Controllers;

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

    // public function update() 
    // {
    //     return view("cusomer-update");
    // }

    public function createCustomer(Request $request) 
    {
        $data = $request->all();
        $customer = Customer::create($data);
        return back();
    }

    public function editCustomer($id) 
    {
        $customer = Customer::find($id);
        return view("cusomer-update", compact("customer"));
    }

    public function updateCustomer(Request $request) {
        echo 'Բա ստեղ ինչ՞';
        $customer = $request->all();
        $data = Customer::update($customer);
        return view("customer", compact("data"));
    }
}
