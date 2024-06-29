<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Service;
use Illuminate\Http\Request;

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

        return view('user.main.services',compact('services'));
    }

    public function galleryPage(){
        $photos =Gallery::paginate(5);
        return view('user.main.gallery',compact('photos'));
    }

    public function detail(){
        return view('user.main.detail');
    }
}
