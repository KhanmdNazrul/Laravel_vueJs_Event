<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'attendee_id',
       'blog_id',
       'content'
    ];

    public function attendee(){
        return $this->belongsTo(Attendee::class);
    }

    public function blog(){
        return $this->belongsTo(Blog::class);
    }

}
