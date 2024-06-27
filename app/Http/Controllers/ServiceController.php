<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use App\Models\Category;
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
            return view('Admin.dashboard.dashboard',compact('categories','customer','services'));
        }
        return view('user.layout.master');

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
        return redirect()->route('service#list')->with(['serviceCreateSuccess'=>'Service Created Successful']);

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
        $data = $this->requestServiceInfo($request);

        if($request->hasFile('serviceImage')){
            $oldImageName = Service::where('id',$request->serviceId)->first()->image;
            // dd($oldImageName);
            if($oldImageName != null){
                Storage::delete('public/'.$oldImageName);
            }

            $fileName = uniqid().$request->file('serviceImage')->getClientOriginalName();
            $request->file('serviceImage')->storeAs('public',$fileName);
            $data['image'] = $fileName;
        }

        Service::where('id',$request->serviceId)->update($data);
        return redirect()->route('service#list')->with(['serviceUpdateSuccess'=>'Service Updated Successful']);

    }

    public function delete($id){

        Service::where('id',$id)->delete();
        return redirect()->route('service#list')->with(['serviceDeleteSuccess'=>'Service Deleted Successful']);
    }
    private function serviceValidationCheck($request , $action){

        $validationData = [
            'serviceName' => 'required',
            'servicePrice' => 'required',
            'serviceDescription' => 'required'
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
        ];
    }
}
