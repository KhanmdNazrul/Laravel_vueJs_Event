<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items =  Catagory::orderBy('id', 'desc')->get();

        return view('backend.catagories.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.catagories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'details' => 'required',
        ]);

        $catagory =  new Catagory;

        $catagory->name = $request->name;
        $catagory->details = $request->details;
        $catagory->save();


      return redirect()->route('catagory.index')->with('msg', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Catagory $catagory)
    {
        return view('backend.catagories.show',compact('catagory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Catagory $catagory)
    {
        return view('backend.catagories.edit',compact('catagory'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Catagory $catagory)
    {
        $request->validate([
            'name' => 'required',
            'details' => 'required',
        ]);
        $catagory->name = $request->name;
        $catagory->details = $request->details;
        $catagory->update();

        return redirect()->route('catagory.index')->with('msg', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catagory $catagory)
    {
    $catagory->delete();
        
       return redirect()->route('catagory.index')->with('msg', 'Deleted Successfully');
    }
}
