<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items =  Employee::orderBy('id', 'desc')->get();
        return view('backend.employee.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'required|string|lowercase|email|max:255',

        ]);

        if ($image = $request->file('photo')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath . $postImage;
        } else {
            $photo = 'images/nophoto.jpg';
        }

        $employee =  new Employee;

        $employee->name = $request->name;
        $employee->designation = $request->designation;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->photo = $photo;
        $employee->email = $request->email;
        $employee->save();

        return redirect()->route('employee.index')->with('msg', 'employee Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('backend.employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
       
        return view('backend.employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'required|string|lowercase|email|max:255',

        ]);

        if ($image = $request->file('photo')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath . $postImage;
        } else {
            $photo = 'images/nophoto.jpg';
        }

        $employee->name = $request->name;
        $employee->designation = $request->designation;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->photo = $photo;
        $employee->email = $request->email;
        $employee->update();

        return redirect()->route('employee.index')->with('msg', 'employee info. Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index')->with('msg', 'Deleted Successfully');
    }
}
