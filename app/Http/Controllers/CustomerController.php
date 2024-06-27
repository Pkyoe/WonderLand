<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list()
    {
        $customers = User::get();
        return view('Admin.customer.customerList',compact('customers'));
    }
}
