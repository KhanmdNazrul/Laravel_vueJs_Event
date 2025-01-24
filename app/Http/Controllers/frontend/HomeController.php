<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Speaker;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::orderBy('id')->limit(6)->get();
        $speakers = Speaker::orderBy('id')->limit(3)->get();
        $events = Event::OrderBy('id', 'desc')->limit(3)->get();
        $feedbacks = Testimonial::orderBy('id', 'desc')->get();
        $blogs = Blog::orderBy('id')->limit(4)->get();
        return view('frontend.home',compact('speakers','events','galleries','feedbacks','blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
   
}
