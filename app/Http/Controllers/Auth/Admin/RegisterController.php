<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Models\Admin;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Termwind\Components\Hr;

class RegisterController extends Controller
{
    public function index()
    {
        $items =  Admin::orderBy('id', 'desc')->get();

        return view('backend.admin.index',compact('items'));
    }

    public function create(): View
    {
        return view('backend.admin.create');
    }

    public function store(Request $request) //: RedirectResponse
    {
       
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'address' => ['required'],
            'image' => ['required', 'image','mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Admin::class],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $input = $request->all();
       
        $input['password'] = Hash::make('password');

        $image = $request->file('image');
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
           
            Admin::create($input);
            Auth::guard('admin');
        
        
        
        return redirect()->route('general_admin.index')->with('msg', 'Admin Created Successfully');
    }

    public function show(Admin $admin)
    {
        //
        return view();
    }

    public function edit(Admin $admin)
    {
        //
        return view('backend.admin.edit', compact('admin'));
    }

    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'address' => ['required'],
            'image' => ['image','mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Admin::class],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $input = $request->all();
       
        $input['password'] = bcrypt('password');

        $image = $request->file('image');
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
           
            $admin->update($input);

            Auth::guard('admin');
        
        
        
        return redirect()->route('general_admin.index')->with('msg', 'Admin info. Updated Successfully');
    }


    public function destroy(Admin $admin)
    {
        //s
    }
}
