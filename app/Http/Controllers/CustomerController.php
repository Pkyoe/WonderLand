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
        return redirect()->route('customer#list')->with(['blockSuccess'=>'ဖောက်သည်ကို အောင်မြင်စွာ ပိတ်လိုက်ပြီးပါပြီ။']);
    }

    public function changeRole($id , Request $request)
    {
       $data = $this->getData($request);
       User::where('id',$id)->update($data);
       return redirect()->route('customer#list')->with(['changeSuccess'=>'အခန်းကဏ္ဍ‌‌ ‌ပြောင်းလဲခြင်းအောင်မြင်ပါသည်။']);
    }

    private function getData($request)
    {
        return [

            'role' => $request->role
        ];
    }
}
