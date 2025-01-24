<?php

namespace App\Http\Controllers\backend\attendee;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Gallery;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogn()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
       foreach($blogs as $blog){
        $id = $blog->id;
       }
       $total = Comment::where('blog_id',$id)->count();
        return view('backend.blogn', compact('blogs','total'));
    }
    
    public function blogdetailsn($bidn)
    {
        $ablogs = Blog::orderBy('id', 'desc')->get();
        $blog = Blog::find($bidn);
        $comments = Comment::where('blog_id',$bidn)->get();
        $total = Comment::where('blog_id',$bidn)->count();
        return view('backend.blogdetailsn', compact('blog','comments','ablogs','total'));
    }

    public function galleryn()
    { 

        $galleries = Gallery::all();
       
        return view('backend.galleryn', compact('galleries'));
    }

    public function galleryup(Request $request)
    { 
        $request->validate([
            
            'photo' => 'required',
            'caption' => 'required'
        ]);
        if ($image = $request->file('photo')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath.$postImage;
        }else{
            $photo= 'images/nophoto.jpg';
        }

        $idk = Auth()->guard()->user()->id;
        $gallery = new Gallery;
        $gallery->attendee_id = $idk;
        $gallery->photo = $photo;
        $gallery->caption = $request->caption;
        $gallery->save();
        return  redirect()->route('galleryn')->with('msg', "Photo Successfully Uploaded");
    }



    public function blogstore(Request $request)
    {

        $request->validate([
            'attendee_id' => 'required',
            'blog_id' => 'required',
            'message' => 'required'
        ]);
        $date = date('Y-m-d H:i:s');
      
        $comment = new Comment;
      
        $comment->attendee_id = $request->attendee_id;
        $comment->blog_id = $request->blog_id;
        $comment->content = $request->message;
        $comment->date = $date;
      
        $comment->save();
      
        return  redirect()->to('/blogdetailsn/{bidn?}')->with('msg', "Successfully sent your comment");

    }

}
