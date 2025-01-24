<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Gallery;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('backend.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'admin_id' => 'required', 
            'title' => 'required',
            'photo'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required',
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
        
        $blog = new Blog;
        $blog->admin_id = $request->admin_id;
        $blog->title = $request->title;
        $blog->photo = $photo;
        $blog->date = $request->date;
        $blog->details = $request->details;
       
      
        $blog->save();


      return redirect()->route('blog.index')->with('msg', 'Blog created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('backend.blogs.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('backend.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'admin_id' => 'required', 
            'title' => 'required',
            'photo'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required',
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
        
        $blog->admin_id = $request->admin_id;
        $blog->title = $request->title;
        $blog->photo = $photo;
        $blog->date = $request->date;
        $blog->details = $request->details;
        $blog->update();
      return redirect()->route('blog.index')->with('msg', 'Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')->with('msg', 'Blog Deleted Successfully');

    }

    public function comment()
    {
        $comments = Comment::orderBy('id', 'desc')->get();
        return view('backend.blogs.comment', compact('comments'));
    }

   

    public function gallery()
    {
        $galleries = Gallery::orderBy('id', 'desc')->get();
        return view('backend.gallery.gallery', compact('galleries'));
    }

    public function dest($gid)
    {
        $comm = Gallery::find($gid);
        $comm->delete();
        return redirect()->route('gallery')->with('msg', 'Photo Deleted Successfully');

    }
}
