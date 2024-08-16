<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    public function list()
    {
        $photos =Gallery::paginate(5);
        return view('Admin.gallery.list',compact('photos'));
    }

    public function createPage(){
        return view('Admin.gallery.create');
    }

    public function create(Request $request){
        $this->dataValidationCheck($request , 'create');
        $data = $this->requestGalleryInfo($request);

        $fileName = uniqid().$request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public',$fileName);
        $data['image'] = $fileName;

        Gallery::create($data);
        return redirect()->route('gallery#list')->with(['galleryCreateSuccess'=>'ဓာတ်ပုံပြခန်းဖန်တီခြင်းအောင်မြင်ပါသည်။']);
    }

    public function edit($id){
        $photoData = Gallery::where('id',$id)->first();
        return view('Admin.gallery.edit',compact('photoData'));
    }

    public function update(Request $request){
        $this->dataValidationCheck($request ,'update');
        // $data = $this->requestGalleryInfo($request);
        $gallery = Gallery::findorFail($request->id);

        if($request->hasFile('image')){
            $oldImageName = Gallery::where('id',$request->id)->first()->image;
            // dd($oldImageName);
            if($oldImageName != null){
                Storage::delete('public/'.$oldImageName);
            }

            $fileName = uniqid().$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public',$fileName);
            $gallery['image'] = $fileName;
        }

        // Gallery::where('id',$request->id)->update($data);
        $gallery->description = $request->description;
        $gallery->save();
        return redirect()->route('gallery#list')->with(['galleryUpdateSuccess'=>'ဓာတ်ပုံပြခန်းပြင်ဆင်ခြင်းအောင်မြင်ပါသည်။']);
    }

    public function delete($id){
        Gallery::where('id',$id)->delete();
        return redirect()->route('gallery#list')->with(['galleryDeleteSuccess'=>'ဓာတ်ပုံပြခန်းပယ်ဖျက်ခြင်းအောင်မြင်ပါသည်။']);
    }

    private function dataValidationCheck($request ,$action){
        $validationRule = [

            'description' => 'required'
        ];

        $validationRule['image'] = $action == 'create' ? 'required' :'image';

        Validator::make($request->all(), $validationRule)->validate();
    }

    private function requestGalleryInfo($request){

        return [
            'image' => $request->image,
            'description' => $request->description
        ];
    }

    // private function photoValidation($request){
    //     $fileName = uniqid().$request->file('image')->getClientOriginalName();
    //     dd($fileName);
    //     $request->file('image')->storeAs('public',$fileName);
    //     $data['image'] = $fileName;

    //     Gallery::create($fileName);
    //     return $fileName;
    // }

}
