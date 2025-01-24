<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::orderby('id', 'desc')->get();
        return view('backend.events_component.city.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        return view('backend.events_component.city.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'country' => 'required',
            

        ]);

        $city =  new City;

        $city->name = $request->name;
        $city->country_id = $request->country;
        $city->save();

      return redirect()->route('city.index')->with('msg', 'City Added Successfully');
    }

   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        $countries = Country::all();
        return view('backend.events_component.city.edit', compact('city','countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        
        $request->validate([
            'name' => 'required',
            'country' => 'required',
        ]);

        $city->name = $request->name;
        $city->country_id = $request->country;
        $city->update();

      return redirect()->route('city.index')->with('msg', 'City Name Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
      
        $city->delete();
        return redirect()->route('city.index')->with('msg', 'City Deleted Successfully');
    }
}
