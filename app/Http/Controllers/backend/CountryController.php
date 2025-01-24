<?php

namespace App\Http\Controllers\backend;

use App\Models\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::orderby('id', 'desc')->get();
        return view('backend.events_component.country.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.events_component.country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $country =  new Country;

        $country->name = $request->name;
       
        $country->save();


      return redirect()->route('country.index')->with('msg', 'Country Added Successfully');
    }
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $country = Country::find($id);
        return view('backend.events_component.country.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'name' => 'required',
        ]);

        $country = Country::find($id);

        $country->name = $request->name;
       
        $country->update();


      return redirect()->route('country.index')->with('msg', 'Country Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $countries = Country::find($id);
        $countries->delete();
        return redirect()->route('country.index')->with('msg', 'Country Deleted Successfully');
    }
}
