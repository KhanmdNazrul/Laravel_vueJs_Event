<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function destro($did)
    {
        $comments = Comment::find($did);
        $comments->delete();
        return redirect()->route('comment')->with('msg', 'comment Deleted Successfully');
    }
}
