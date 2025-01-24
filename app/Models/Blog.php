<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'postby',
        'title',
        'photo',
        'details'
    ];

    public function admin(){
        return $this->belongsTo(Admin::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
