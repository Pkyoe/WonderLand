<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Log\Logger;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redis;

class BookingController extends Controller
{
    public function list()
    {
        $categories = Category::all();
        $booking = Booking::select("bookings.*", "categories.name as service_name")
            ->leftjoin("categories", "bookings.service_id", "categories.id")
            ->paginate(5);
        if (request()->ajax()) {
            $tableRows = view('Admin.pagination.tbody', compact('booking'))->render();
            $paginationLinks = $booking->links('pagination::bootstrap-5')->render();

            return response()->json(['tableRows' => $tableRows, 'paginationLinks' => $paginationLinks]);
        }

        return view('Admin.booking.list', compact('booking', 'categories'));
    }

    public function filter($id)
    {
        $categories = Category::all();
        if ($id == "All") {
            $booking = Booking::select("bookings.*", "categories.name as service_name")
                ->leftJoin("categories", "bookings.service_id", "=", "categories.id")
                ->paginate(5);
        } else {
            $booking = Booking::select("bookings.*", "categories.name as service_name")
                ->leftJoin("categories", "bookings.service_id", "=", "categories.id")
                ->where('service_id', $id)
                ->paginate(5);
        }

        // Check if the request is AJAX
        if (request()->ajax()) {
            $tableRows = view('Admin.pagination.tbody', compact('booking'))->render();
            $paginationLinks = $booking->links('pagination::bootstrap-5')->render();
            return response()->json(['tableRows' => $tableRows, 'paginationLinks' => $paginationLinks]);
        }

        // For non-AJAX requests, return the full view
        return view('Admin.booking.list', compact('booking', 'categories'));
    }



    public function filterData(Request $request)
    {
        $from_date = Carbon::parse($request->from_date)->startOfDay()->format('Y-m-d');
        $to_date = Carbon::parse($request->to_date)->endOfDay()->format('Y-m-d');

        $query = Booking::select('bookings.*', 'categories.name as service_name')
                        ->leftJoin('categories', 'bookings.service_id', '=', 'categories.id');

        if ($from_date && $to_date) {
            $query->whereBetween('bookings.date', [$from_date, $to_date]);
        }

        $booking = $query->paginate(5);

        if ($request->ajax()) {
            $tableRows = view('Admin.pagination.tbody', compact('booking'))->render();
            $paginationLinks = $booking->links('pagination::bootstrap-5')->render();
            return response()->json(['tableRows' => $tableRows, 'paginationLinks' => $paginationLinks]);
        }

        return view('Admin.booking.list', compact('booking', 'categories'));
    }




    public function feedbackPage()
    {
        $feedBack = Contact::paginate(5);
        return view('Admin.booking.feedback', compact('feedBack'));
    }

    public function feedbackDelete($id)
    {
        Contact::where('id', $id)->delete();
        return redirect()->route('feedback#list')->with(['feedbackDeleteSuccess' => 'အကြံပြုချက်ကို အောင်မြင်စွာ ဖျက်ပြီးပါပြီ။']);
    }
    public function accept($id)
    {
        $booking = Booking::find($id);
        if ($booking) {
            $booking->status = 'accepted';
            $booking->save();

            return redirect()->route('booking#list')->with(['orderAcceptSuccess' => 'ကြိုတင်မှာယူခြင်းကို အောင်မြင်စွာ လက်ခံပြီးပါပြီ။']);
        }
        return response()->json(['message' => 'ကြိုတင်မှာယူထားခြင်းမရှိပါ'], 404);
    }

    public function reject($id)
    {
        $booking = Booking::find($id);
        if ($booking) {
            $booking->status = 'rejected';
            $booking->save();

            return redirect()->route('booking#list')->with(['orderRejectSuccess' => 'ကြိုတင်မှာယူခြင်းကိုပယ်ဖျက်ပီးပါပြီ။']);
        }
        return response()->json(['message' => 'ကြိုတင်မှာယူထားခြင်းမရှိပါ။'], 404);
    }
}
