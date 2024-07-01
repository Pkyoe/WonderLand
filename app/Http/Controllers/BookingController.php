<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function list()
    {
        $service = Booking::select('bookings.*','users.name as user_name')
                            ->leftJoin('users','users.id','bookings.user_id')
                            ->get();
                            dd($service->toArray());
        return view('Admin.booking.list',compact('service'));
    }


}
