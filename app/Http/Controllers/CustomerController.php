<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerListPage()
    {
        return view('Admin.customer.customerList');
    }
}
