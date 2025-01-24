<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Attendee;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items =  Attendee::orderBy('id', 'desc')->get();
        return view('backend.attendee.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.attendee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'name'=> 'required',
            'phone'=> 'required',
            'address'=> 'required',
            'photo'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'required|string|lowercase|email|max:255|unique:' . Attendee::class,
            'password'=> 'required|confirmed|min:8',
            
        ]);
        
        if ($image = $request->file('photo')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath.$postImage;
        }else{
            $photo= 'images/nophoto.jpg';
        }

        $attendee =  new Attendee;

        $attendee->name = $request->name;
        $attendee->phone= $request->phone;  
        $attendee->address= $request->address;     
        $attendee->photo = $photo;
        $attendee->email = $request->email;
        $attendee->password = bcrypt( $request->password);
        $attendee->save();

        return redirect()->route('attendee.index')->with('msg', 'Attendee Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $attendee = Attendee::find($id);
        return view('backend.attendee.show', compact('attendee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $attendee = Attendee::find($id);
        return view('backend.attendee.edit', compact('attendee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=> 'required',
            'phone'=> 'required',
            'address'=> 'required',
            'photo'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);
        
        if ($image = $request->file('photo')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath.$postImage;
        }else{
            $photo= 'images/nophoto.jpg';
        }

        $attendee = Attendee::find($id);
        
        $attendee->name = $request->name;
        $attendee->phone= $request->phone;  
        $attendee->address= $request->address;
        $attendee->photo = $photo;
        $attendee->update();

        return redirect()->route('attendee.index')->with('msg', 'Attendee Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $attendee = Attendee::find($id);
        $attendee->delete();
        return redirect()->route('attendee.index')->with('msg', 'Deleted Successfully');
    }
}
