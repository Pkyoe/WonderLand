<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function list()
    {
        $booking = Booking::select("bookings.*","categories.name as service_name")
                            ->leftjoin("categories","bookings.service_id","categories.id")
                            ->paginate(5);

        return view('Admin.booking.list',compact('booking'));
    }

    public function feedbackPage()
    {
        $feedBack = Contact::paginate(5);
        return view('Admin.booking.feedback',compact('feedBack'));
    }

    public function feedbackDelete($id)
    {
        Contact::where('id',$id)->delete();
        return redirect()->route('feedback#list')->with(['feedbackDeleteSuccess'=>'Feedback Deleted Successfully']);
    }
    public function orderAccept(Booking $booking)
    {
        if($booking->status == 0 ){
            return redirect()->back()->with(['orderAcceptSuccess'=>'Order Accepted Successfully']);
        }
    }


}
