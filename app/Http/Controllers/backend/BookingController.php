<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Attendee;
use App\Models\Booking;
use App\Models\Event;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::orderBy('id', 'desc')->get();
        return view('backend.bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $attendees = Attendee::all();
        $events = Event::all();
         return view('backend.bookings.create', compact('attendees', 'events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'attendee' => 'required',
            'event' => 'required',
            'num_tickets' => 'required',
        ]);

    //   $uprice = 90;

    $events = Event::all();

    foreach($events as $event){
        $unitPrice = $event->unit_price;
    };
         
        $booking =  new Booking;

        $booking->attendee_id = $request->attendee;
        $booking->event_id = $request->event;
        $booking->num_tickets = $request->num_tickets;
        $booking->total_price=$request->num_tickets * $unitPrice;
        $booking->save();


      return redirect()->route('booking.index')->with('msg', 'Booking added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('booking.index')->with('msg', 'Booking Deleted Successfully');
    }
    
    public function changeStatus($id)
    {
        $record = Booking::find($id);
        $record->status == 'pending' ? $record->status = 'confirmed' : $record->status = 'pending' ;

        $record->update();

        return redirect()->back();
    }
}
