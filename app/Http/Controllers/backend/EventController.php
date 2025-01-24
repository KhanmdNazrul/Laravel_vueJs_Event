<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use App\Models\City;
use App\Models\Country;
use App\Models\Event;
use App\Models\Organiser;
use App\Models\Speaker;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::orderby('id', 'desc')->get();
        return view('backend.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catagories = Catagory::all();
        $organisers = Organiser::all();
        $speakers = Speaker::all();
        $countries = Country::all();
        $cities = City::all();
        return view('backend.events.create', compact('catagories', 'organisers', 'speakers', 'countries', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'start_time' => 'required',
            'image'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'required',
            'num_tickets' => 'required',
            'unit_price' => 'required',

            'catagory' => 'required',
            'speaker' => 'required',
            'organiser' => 'required',
            'country' => 'required',
            'city' => 'required',
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath.$postImage;
        }else{
            $photo= 'images/nophoto.jpg';
        }

        $event = new Event;
        
        $event->title = $request->title;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->start_time = $request->start_time;
        $event->image = $photo;
        $event->address = $request->address;
        $event->num_tickets = $request->num_tickets;
        $event->unit_price = $request->unit_price;

        $event->catagory_id = $request->catagory;
        $event->speaker_id = $request->speaker;
        $event->organiser_id = $request->organiser;
        $event->country_id = $request->country;
        $event->city_id = $request->city;
        $event->save();


      return redirect()->route('event.index')->with('msg', 'Event Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $catagories = Catagory::all();
        $organisers = Organiser::all();
        $speakers = Speaker::all();
        $countries = Country::all();
        $cities = City::all();

        return view('backend.events.edit', compact('event', 'catagories', 'organisers', 'speakers', 'countries', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'start_time' => 'required',
            'image'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'required',
            'num_tickets' => 'required',
            'unit_price' => 'required',

            'catagory' => 'required',
            'speaker' => 'required',
            'organiser' => 'required',
            'country' => 'required',
            'city' => 'required',
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath.$postImage;
        }else{
            $photo= 'images/nophoto.jpg';
        }
        
        $event->title = $request->title;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->start_time = $request->start_time;
        $event->image = $photo;
        $event->address = $request->address;
        $event->num_tickets = $request->num_tickets;
        $event->unit_price = $request->unit_price;
        $event->catagory_id = $request->catagory;
        $event->speaker_id = $request->speaker;
        $event->organiser_id = $request->organiser;
        $event->country_id = $request->country;
        $event->city_id = $request->city;
        $event->update();


      return redirect()->route('event.index')->with('msg', 'Event Info. Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('event.index')->with('msg', 'Event Deleted Successfully');
    }
}
