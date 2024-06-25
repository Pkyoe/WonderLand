<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function dashboardPage()
    {
        if(Auth::user()->role == 'admin'){
            $categories = Category::get();
            $customer = User::get();
            return view('Admin.dashboard.dashboard',compact('categories','customer'));
        }
        return view('user.layout.master');

    }

    public function categories()
    {
        return view('Admin.service.serviceCategories');
    }

    public function serviceList()
    {
        return view('Admin.service.serviceList');
    }

    public function createService()
    {
        return view('Admin.service.createService');
    }
}
