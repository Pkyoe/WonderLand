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

    public function changeRolePage($id)
    {
        $users = User::select('users.*')->where('id',$id)->first();
        return view('Admin.customer.change', compact('users'));
    }

    public function block($id)
    {
        User::where('id',$id)->delete();
        return redirect()->route('customer#list')->with(['blockSuccess'=>'Customer Blocked Successful']);
    }

    public function changeRole($id , Request $request)
    {
       $data = $this->getData($request);
       User::where('id',$id)->update($data);
       return redirect()->route('customer#list')->with(['changeSuccess'=>'Role Changed Successful']);
    }

    private function getData($request)
    {
        return [

            'role' => $request->role
        ];
    }
}
