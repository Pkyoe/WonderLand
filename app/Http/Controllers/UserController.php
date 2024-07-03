<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Booking;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
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
        ->leftjoin("categories","bookings.service_name","categories.id")
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

    public function detail(){
        return view('user.main.detail');
    }

    public function bookingForm(){
        $categories = Category::select('id','name')->get();
        return view('user.main.booking',compact('categories'));
    }

    public function create(Request $request){
        $this->serviceValidationCheck($request);
        $info = $this->requestBookingData($request);
        // dd($info);
        Booking::create($info);
        return redirect()->route('user#message')->with('successBooking','Booking created successfully!Please Wait Admin Response ...');

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
            'service_name' => $request->serviceName,
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
