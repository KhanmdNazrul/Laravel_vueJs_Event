<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $speakers = Speaker::orderby('id', 'desc')->get();
        return view('backend.speakers.index', compact('speakers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.speakers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
        $request->validate([
            'name' => 'required',
            'profession' => 'required',
            'photo'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'details' => 'required',
        ]);
        if ($image = $request->file('photo')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath.$postImage;
        }else{
            $photo= 'images/nophoto.jpg';
        }

        $speaker =  new Speaker;

        $speaker->name = $request->name;
        $speaker->profession = $request->profession;
        $speaker->photo = $photo;
        $speaker->details = $request->details;
        $speaker->save();


      return redirect()->route('speaker.index')->with('msg', 'New Speaker Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Speaker $speaker)
    {
        return view('backend.speakers.show', compact('speaker'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Speaker $speaker)
    {
        return view('backend.speakers.edit', compact('speaker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Speaker $speaker)
    {
        $request->validate([
            'name' => 'required',
            'profession' => 'required',
            'photo'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'details' => 'required',
        ]);
        if ($image = $request->file('photo')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath.$postImage;
        }else{
            $photo= 'images/nophoto.jpg';
        }

        $speaker->name = $request->name;
        $speaker->profession = $request->profession;
        $speaker->photo = $photo;
        $speaker->details = $request->details;
        $speaker->update();


      return redirect()->route('speaker.index')->with('msg', 'Speaker Info. Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Speaker $speaker)
    {
        $speaker->delete();
        return redirect()->route('speaker.index')->with('msg', 'Speaker Info. Successfully Deleted');
    }
}
