<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Message::orderBy('id', 'desc')->get();
        return view('backend.messages.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('message.index')->with('msg', 'Message Deleted Successfully');
    }
}
