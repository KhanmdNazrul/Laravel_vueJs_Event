<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\Comment;
use App\Models\Employee;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\Speaker;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontController extends Controller
{
    public function index()
    {
        $attendee = Attendee::all();
        $galleries = Gallery::with('attendee')->orderBy('id', 'desc')->limit(6)->get();
        $speakers = Speaker::orderBy('id', 'desc')->limit(3)->get();
        $speaker = Speaker::all();
        $events =  Event::with(['speaker', 'organiser', 'city'])->OrderBy('id', 'desc')->limit(3)->get();
        $feedback = Testimonial::with('attendee')->orderBy('id', 'desc')->get();
        $blogs = Blog::with('admin')->orderBy('id','desc')->limit(4)->get();

        return Inertia::render('HomeView',compact('events', 'speaker', 'speakers', 'galleries', 'feedback', 'attendee', 'blogs'));
    }


    public function about()
    {
        $feedbacks = Testimonial::with('attendee')->orderBy('id', 'desc')->get();
        $employees = Employee::orderBy('id', 'desc')->limit(6)->get();
        return Inertia::render('AboutView', compact('employees', 'feedbacks'));
    }

    public function event()
    {
        $events =  Event::with(['speaker', 'organiser', 'city'])->OrderBy('id', 'desc')->limit(10)->get();
        return Inertia::render('EventView', compact('events'));
    }


    public function blog()
    {
        $blog = Blog::with('admin')->orderBy('id','desc')->limit(5)->get();
        $blogs = Blog::with('admin')->orderBy('id','desc')->limit(3)->get();
        return Inertia::render('BlogView', compact('blogs','blog'));
    }

    public function gallery()
    {
        $galleries = Gallery::with('attendee')->orderBy('id', 'desc')->limit(6)->get();
        return Inertia::render('GalleryView', compact('galleries'));
    }

    public function contact()
    {

        return Inertia::render('ContactView');
    }

    public function store(Request $request)
    {
        $post = new Message($request->all());
        $post->save();

        return redirect()->back()->with('msg', "Successfully sent your message");
    }

    public function blogDetails($blgid)
    {
        $blog = Blog::orderBy('id', 'desc')->limit(4)->get();
        $blogs = Blog::with('admin')->findOrFail($blgid);
        $comments = Comment::with('attendee')->where('blog_id', $blgid)->get();
        $total = Comment::where('blog_id',$blgid)->count();
        
        return Inertia::render('BlogDetails', compact('blogs', 'blog', 'comments', 'total'));
    }

    public function event_details($eeid)
    {
        $events = Event::with(['speaker', 'organiser', 'city'])->findOrFail($eeid);
        $stickets = Booking::where('event_id', '=', $eeid)->get();
        $booked = $stickets->sum('num_tickets');
        $beginning = $events->num_tickets;
        $total = $beginning - $booked;
        return Inertia::render('EventDetails', compact('events', 'total'));
    }
}
