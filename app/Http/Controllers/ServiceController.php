<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use App\Models\Service;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function dashboardPage()
    {
        if(Auth::user()->role == 'admin'){
            $categories = Category::get();
            $customer = User::get();
            $services = Service::get();
            $booking = Booking::get();
            $photo = Gallery::get();
            return view('Admin.dashboard.dashboard',compact('categories','customer','services' , 'booking' , 'photo'));
        }
        return view('user.main.home');

    }

    public function list()
    {
        $services = Service::select('services.*','categories.name as category_name')
                            ->leftjoin('categories','services.category_id','categories.id')
                            ->paginate(5);
        return view('Admin.service.list',compact('services'));
    }

    public function createPage()
    {
        $categories = Category::select('id','name')->get();
        // dd($categories->toArray());
        return view('Admin.service.create',compact('categories'));
    }

    public function create(Request $request){

        $this->serviceValidationCheck($request , 'create');
        $data = $this->requestServiceInfo($request);

        $fileName = uniqid().$request->file('serviceImage')->getClientOriginalName();
        $request->file('serviceImage')->storeAs('public',$fileName);
        $data['image'] = $fileName;

        Service::create($data);
        return redirect()->route('service#list')->with(['serviceCreateSuccess'=>'ဝန်ဆောင်မှုဖန်တီခြင်းအောင်မြင်ပါသည်။']);

    }

    public function edit($id){
        $categories = Category::get();
        $services = Service::select('services.*','categories.name as category_name')
                            ->leftjoin('categories','services.category_id','categories.id')
                            ->where('services.id',$id)->first();

                            // dd($services->toArray());

                            return view('Admin.service.edit',compact('services','categories'));
    }

    public function update(Request $request){

        $this->serviceValidationCheck($request , 'update');
        // $data = $this->requestServiceInfo($request);
        $service = Service::findorFail($request->serviceId);

        if($request->hasFile('serviceImage')){
            $oldImageName = Service::where('id',$request->serviceId)->first()->image;
            // dd($oldImageName);
            if($oldImageName != null){
                Storage::delete('public/'.$oldImageName);
            }

            $fileName = uniqid().$request->file('serviceImage')->getClientOriginalName();
            $request->file('serviceImage')->storeAs('public',$fileName);
            $service['image'] = $fileName;
        }

        // Service::where('id',$request->serviceId)->update($data);
        $service->category_id = $request->serviceName;
        $service->price = $request->servicePrice;
        $service->description = $request->serviceDescription;
        $service->location = $request->location;
        $service->save();
        return redirect()->route('service#list')->with(['serviceUpdateSuccess'=>'ဝန်ဆောင်မှုဖန်တီခြင်းအောင်မြင်ပါသည်။']);

    }

    public function delete($id){

        Service::where('id',$id)->delete();
        return redirect()->route('service#list')->with(['serviceDeleteSuccess'=>'ဝန်ဆောင်မှုပယ်ဖျက်ခြင်းအောင်မြင်ပါသည်။']);
    }
    private function serviceValidationCheck($request , $action){

        $validationData = [
            'serviceName' => 'required',
            'servicePrice' => 'required',
            'serviceDescription' => 'required',
            'location' => 'required',
        ];

        $validationData['serviceImage'] = $action == 'create' ? 'required' : '';

        Validator::make($request->all(),$validationData)->validate();
    }

    private function requestServiceInfo($request){
        return [
            'category_id' => $request->serviceName ,
            'image' => $request->serviceImage,
            'price' => $request->servicePrice,
            'description' => $request->serviceDescription ,
            'location' => $request->location
        ];
    }
}
