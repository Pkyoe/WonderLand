<?php

namespace App\Http\Controllers;

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
        dd($info);
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

}
