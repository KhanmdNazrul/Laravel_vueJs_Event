<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Booking;
use App\Models\Employee;
use App\Models\Event;
use App\Models\Message;
use App\Models\Speaker;
use App\Models\Testimonial;
use Illuminate\Http\Request;


class eventShowController extends Controller
{
  public function show($id)
  {
    $event = Event::find($id);

    $stickets = Booking::where('event_id', '=', $id)->get();
    $booked = $stickets->sum('num_tickets');
    $beginning = $event->num_tickets;
    $total = $beginning - $booked;
    return view('frontend.eventDetails', compact('event', 'total'));
  }

  public function speaker($sid)
  {
    $speaker = Speaker::find($sid);
    return view('frontend.speaker', compact('speaker'));
  }

  public function event()
  {
    $nazruls = Event::OrderBy('id', 'desc')->get();
    return view('frontend.events', compact('nazruls'));
  }

  public function about()
  {
    $admins = Admin::all();
    foreach($admins as $admin){
$admin = $admin;
    }
    $testimonials = Testimonial::all();
    $employee = Employee::OrderBy('id', 'desc')->get();
    return view('frontend.about', compact('employee', 'admin','testimonials'));
  }

  public function contact()
  {
    return view('frontend.contact');
  }

  public function store(Request $request)
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

  return redirect()->route('contact')->with('msg', "Successfully sent your message");
  }
}
