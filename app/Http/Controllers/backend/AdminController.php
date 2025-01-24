<?php

namespace App\Http\Controllers\backend;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items =  Admin::orderBy('id', 'desc')->get();
        return view('backend.admin.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.create');
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
            'email' => 'required|string|lowercase|email|max:255|unique:' . Admin::class,
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

        $admin =  new Admin;

        $admin->name = $request->name;
        $admin->phone= $request->phone;
        $admin->address=$request->address;
        $admin->image =  $photo;
        $admin->email = $request->email;
        $admin->password = bcrypt( $request->password);
        $admin->save();

        return redirect()->route('general_admin.index')->with('msg', 'Admin Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin = Admin::find($id);
        return view('backend.admin.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = Admin::find($id);
        return view('backend.admin.edit', compact('admin'));
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
            'email' => 'required|string|lowercase|email|max:255',
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

        $admin =Admin::find($id);

        $admin->name = $request->name;
        $admin->phone= $request->phone;
        $admin->address=$request->address;
        $admin->image =  $photo;
        $admin->email = $request->email;
        $admin->password = bcrypt( $request->password);
        $admin->update();

        return redirect()->route('general_admin.index')->with('msg', 'Admin Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect()->route('general_admin.index')->with('msg', 'Deleted Successfully');
    }
}
