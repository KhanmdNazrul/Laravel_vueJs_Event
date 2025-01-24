<?php

namespace App\Http\Controllers\backend\attendee;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Event;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function bookingn($bokid)
    {
        $event = Event::find($bokid);

        $unitPrice = $event->unit_price;

        $stickets = Booking::where('event_id', '=', $bokid)->get();
        $booked = $stickets->sum('num_tickets');
        $beginning = $event->num_tickets;
        $total = $beginning - $booked;



        return view('backend.bookingn', compact('bokid', 'total', 'unitPrice'));
    }

    public function cbooking(Request $request)
    {
        $request->validate([
            'attendee_id' => 'required',
            'event_id' => 'required',
            'num_tickets' => 'required',
        ]);

        //   $uprice = 90;
        $eiid = $request->event_id;
        $events = Event::find($eiid);


        $unitPrice = $events->unit_price;

        $booking =  new Booking;
        $booking->attendee_id = $request->attendee_id;
        $booking->event_id = $request->event_id;
        $booking->num_tickets = $request->num_tickets;
        $booking->total_price = $request->num_tickets * $unitPrice;
        $booking->save();

        return redirect()->route('paymentn');
    }

    public function paymentn()
    {
        $aid = Auth()->guard()->user()->id;
        $bookings = Booking::where('attendee_id', $aid)->orderBy('id', 'desc')->limit(1)->get();
        return view('backend.paymentn', compact('bookings'));
    }

    public function paymentstore(Request $request)
    {
        $request->validate([
            'booking_id' => 'required',
            'method' => 'required',
            'amount' => 'required',
            'trxn' => 'required',
        ]);
        $booid = $request->booking_id;;

        $payment = new Payment;
        $payment->booking_id = $request->booking_id;
        $payment->method = $request->method;
        $payment->amount = $request->amount;
        $payment->trxn_no = $request->trxn;
        $payment->save();

        return redirect()->route('invoicen', ['booid' => $booid]);
    }

    public function mybooking()
    {
        $aids = Auth()->guard()->user()->id;
        $mbook = Booking::where('attendee_id', '=', $aids)->get();

        return view('backend.mybooking', compact('mbook'));
    }

    public function transaction()
    {
        $aids = Auth()->guard()->user()->id;
        $mbooks = Booking::where('attendee_id', '=', $aids)->pluck('id'); // Get all booking IDs
        
        $mbook = Payment::whereIn('booking_id', $mbooks)->get(); // Get payment records for all booking IDs
        return view('backend.mytransaction', compact('mbook'));
    }
}
