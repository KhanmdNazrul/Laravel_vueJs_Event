<?php

namespace App\Http\Controllers\backend\attendee;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Booking;
use App\Models\Employee;
use App\Models\Event;
use App\Models\Message;
use App\Models\Speaker;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class EventShowController extends Controller
{
    public function shown($id)
    {
      $event = Event::find($id);
  
      $stickets = Booking::where('event_id', '=', $id)->get();
      $booked = $stickets->sum('num_tickets');
      $beginning = $event->num_tickets;
      $total = $beginning - $booked;
      return view('backend.eventdetailsn', compact('event', 'total'));
    }
  
    public function speakern($sidn)
    {
      $speaker = Speaker::find($sidn);
      return view('backend.speakern', compact('speaker'));
    }
  
    public function eventn()
    {
      $nazruls = Event::OrderBy('id', 'desc')->get();
      return view('backend.eventsn', compact('nazruls'));
    }
  
    public function aboutn()
    {
      $admins = Admin::all();
      foreach($admins as $admin){
  $admin = $admin;
      }
      $testimonials = Testimonial::all();
      $employee = Employee::OrderBy('id', 'desc')->get();
      return view('backend.aboutn', compact('employee', 'admin','testimonials'));
    }
  
    public function contactn()
    {
      return view('backend.contactn');
    }
  
    public function nstore(Request $request)
    {
      
      $request->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'message' => 'required',
    ]);
  
    $message = new Message;
  
    $message->name = $request->name;
    $message->email = $request->email;
    $message->phone = $request->phone;
    $message->message = $request->message;
  
    $message->save();
  
    return redirect()->route('acontact')->with('msg', "Successfully sent your message");
    }
    
}
