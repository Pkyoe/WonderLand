<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Service;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function homePage(){

        return view('guest.home');
    }

    public function aboutPage(){

        return view('guest.about');
    }

    public function galleryPage(){
        $photos = Gallery::paginate(5);
        return view('guest.gallery' ,compact('photos'));
    }

    public function servicePage(){
        $services = Service::select('services.*','categories.name as category_name')
        ->leftjoin('categories','services.category_id','categories.id')
        ->get();
        return view('guest.service',compact('services'));
    }

    public function contactPage(){
        return view('guest.contact');
    }

}
