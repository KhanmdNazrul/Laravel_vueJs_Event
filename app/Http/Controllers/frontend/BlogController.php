<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Gallery;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
       foreach($blogs as $blog){
        $id = $blog->id;
       }
       $total = Comment::where('blog_id',$id)->count();
        return view('frontend.blog', compact('blogs','total'));
    }

    
    public function blog_details($bid)
    {
        $ablogs = Blog::orderBy('id', 'desc')->get();
        $blog = Blog::find($bid);
        $comments = Comment::where('blog_id',$bid)->get();
        $total = Comment::where('blog_id',$bid)->count();
        return view('frontend.blogdetails', compact('blog','comments','ablogs','total'));
    }

    public function gallery()
    { 
        $galleries = Gallery::all();
       
        return view('frontend.gallery', compact('galleries'));
    }

}
