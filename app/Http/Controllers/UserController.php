<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function homePage(){
        return view('user.main.home');
    }

    public function aboutUsPage(){
        return view('user.main.aboutUs');
    }

    public function contactUsPage(){
        return view('user.main.contactUs');
    }

    public function profilePage(){
        return view('user.account.profile');
    }

    public function editProfilePage(){
        return view('user.account.edit');
    }

    public function update($id , Request $request){
        $updateData = $this->getUserData($request);
        // dd($updateData);
        User::where('id',$id)->update($updateData);
        return redirect()->route('user#profilePage')->with(['updateSuccess' => 'Profile Update Success']);
    }

    public function message()
    {
        $booking = Booking::select("bookings.*","categories.name as service_name")
        ->leftjoin("categories","bookings.service_id","categories.id")
        ->get();
        return view('user.main.message',compact('booking'));
    }
    public function servicePage()
    {
        $services = Service::select('services.*','categories.name as category_name')
                            ->leftjoin('categories','services.category_id','categories.id')
                            ->get();
        // ->paginate(5);
        // dd($services->toArray());

        return view('user.main.services',compact('services'));
    }

    public function galleryPage(){
        $photos =Gallery::paginate(5);
        return view('user.main.gallery',compact('photos'));
    }

    public function detail($id){
        $detail = Service::select('services.*','categories.name as category_name')
        ->leftjoin('categories','services.category_id','categories.id')
        ->where('services.id',$id)->first();
        // dd($detail->toArray());
        return view('user.main.detail',compact('detail'));
    }
    public function changePasswordPage()
    {
        return view('user.account.change');
    }

    public function bookingForm(){
        $categories = Category::select('id','name')->get();
        return view('user.main.booking',compact('categories'));
    }

    public function create(Request $request){
        $this->serviceValidationCheck($request);
        $info = $this->requestBookingData($request);
        Booking::create($info);
        return redirect()->route('user#message')->with('successBooking','Booking created successfully!Please Wait Admin Response ...');

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

    public function contact(Request $request)
    {
        $this->contactValidationCheck($request);
        $userContact = $this->getMessage($request);
        Contact::create($userContact);
        return redirect()->route('user#contactUsPage')->with(['contactSuccess' => 'Your Message Send Successfully']);
    }

    private function contactValidationCheck($request){
        $validationData = [
            'name' => 'required',
            'email' => 'required',
            'feedback' => 'required'
        ];

        Validator::make($request->all(),$validationData)->validate();
    }

    private function getMessage($request)
    {
        return[
            'name' => $request->name,
            'email' => $request->email,
            'feedback' => $request->feedback
        ];
    }

    private function passwordValidationCheck($request){
        Validator::make($request->all(),[
            'oldPassword' =>'required | min:6' ,
            'newPassword' =>'required | min:6'  ,
            'confirmPassword' =>'required |min:6| same:newPassword'
        ])->validate();
    }

    private function serviceValidationCheck($request){
        $validationData = [
            'mrName' => 'required',
            'missName' => 'required',
            'serviceName' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date' => 'required',
        ];
        Validator::make($request->all(),$validationData)->validate();
    }

    private function requestBookingData($request){
        return [
            'mr_name' => $request->mrName ,
            'miss_name' => $request->missName,
            'service_id' => $request->serviceName,
            'email' => $request->email ,
            'phone' => $request->phone ,
            'date' => $request->date ,
        ];
    }

    private function getUserData($request){
        return [
            'name' => $request-> userName,
            'email' => $request-> email,
            'phone' => $request-> phone,
            'updated_at' => Carbon::now()
        ];
    }

}
