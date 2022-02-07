<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::all();
        return view('customer.index')->with('customers', $customers);
    }

    public function show() {
        $id = request('id');
        $customer = Customer::find($id);
        return $customer;
    }
}
