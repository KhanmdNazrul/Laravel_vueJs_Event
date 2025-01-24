<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Organiser;
use Illuminate\Http\Request;

class OrganiserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organisers = Organiser::orderby('id', 'desc')->get();
        return view('backend.organisers.index',compact('organisers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.organisers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $organiser =  new Organiser;

        $organiser->name = $request->name;
        $organiser->email = $request->email;
        $organiser->phone = $request->phone;
        $organiser->address = $request->address;
       
        $organiser->save();


      return redirect()->route('organiser.index')->with('msg', 'New Organiser Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Organiser $organiser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organiser $organiser)
    {
        return view('backend.organisers.edit', compact('organiser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organiser $organiser)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $organiser->name = $request->name;
        $organiser->email = $request->email;
        $organiser->phone = $request->phone;
        $organiser->address = $request->address;
        $organiser->update();
      return redirect()->route('organiser.index')->with('msg', 'Organiser info. Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organiser $organiser)
    {
        $organiser->delete();
        return redirect()->route('organiser.index')->with('msg', 'Organiser Deleted Successfully');
    }
}
