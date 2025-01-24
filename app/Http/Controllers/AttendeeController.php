<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $attendees = Attendee::orderBy('id','desc')->get();

        return view('backend.users.index', compact('attendees'))->with('i',1);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);

        $input = $request->all();
  
       
  
       Attendee::create($input);
   
        return redirect()->route('backend.users.index')->with('success','New Attendee Add Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Attendee $attendee)
    {
        return view('backend.users.show',compact('attendee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendee $attendee)
    {
        return view('users.edit',compact('attendee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attendee $attendee)
    {
       
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);
  
        $input = $request->all();
        $attendee->update($input);
  
        return redirect()->route('backend.users.index')->with('success','Information Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendee $attendee)
    {
        $attendee->delete();
  
        return redirect()->route('backend.users.index')->with('success','Deleted Successfully');
    }
}
