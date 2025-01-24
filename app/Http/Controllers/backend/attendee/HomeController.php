<?php

namespace App\Http\Controllers\backend\attendee;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Speaker;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dash()
    {
        $nazrul = 'I am The King';
        $galleries = Gallery::orderBy('id')->limit(6)->get();
        $speakers = Speaker::orderBy('id')->limit(3)->get();
        $events = Event::OrderBy('id', 'desc')->limit(3)->get();
        $feedbacks = Testimonial::orderBy('id', 'desc')->get();
        $blogs = Blog::orderBy('id')->limit(4)->get();
        return view('backend.attendee_dashboardn', compact('galleries','speakers','events','feedbacks','blogs'));
    }
}
