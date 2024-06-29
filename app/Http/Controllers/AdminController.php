<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function changePasswordPage()
    {
        return view('Admin.account.change');
    }

    public function changePassword(Request $request)
    {
        $this->passwordValidationCheck($request);

        $currentUserId = Auth::user()->id;
        $user = User::select('password')->where('id', $currentUserId)->first();
        $dbPassword =$user->password;//hash value

        if(Hash::check($request->oldPassword,$dbPassword)){
            $data = [
                'password' => Hash::make($request->newPassword)
            ];
            User::where('id',Auth::user()->id)->update($data);

            return redirect()->route('guest#homePage');

                //  return view('Admin.account.change')->with(['changeSuccess' => 'Password Change Successful']);
        }
        return back()->with(['notMatch' => 'The Old Password Not Match.Try Again!']) ;

    }

    //password Validation check
    private function passwordValidationCheck($request){
        Validator::make($request->all(),[
            'oldPassword' =>'required | min:6' ,
            'newPassword' =>'required | min:6'  ,
            'confirmPassword' =>'required |min:6| same:newPassword'
        ])->validate();
    }
}
