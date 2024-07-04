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
    public function accept($id)
    {
        $booking = Booking::find($id);
        if($booking){
            $booking->status = 'accepted';
            $booking->save();

            return redirect()->route('booking#list')->with(['orderAcceptSuccess'=>'Order Accepted Successfully']);
        }
        return response()->json(['message' => 'Order not found.'], 404);

    }

    public function reject  ($id)
    {
        $booking = Booking::find($id);
        if($booking){
            $booking->status = 'rejected';
            $booking->save();

            return redirect()->route('booking#list')->with(['orderRejectSuccess'=>'Order Rejected Successfully']);
        }
        return response()->json(['message' => 'Order not found.'], 404);

    }



}
