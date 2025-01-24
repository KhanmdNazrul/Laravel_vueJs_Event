<?php

namespace App\Models;

use GdImage;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Attendee extends Authenticatable
{
    use HasApiTokens, HasFactory,Notifiable;


    protected $guard = 'attendee';

    protected $fillable = [
        'name',
        'phone',
        'photo',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function event(){
        return $this->hasMany(Event::class);
    }

    public function booking(){
        return $this->hasMany(Booking::class);
    }

    public function testimonial(){
        return $this->hasMany(Testimonial::class);
    }

    
    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function gallrey(){
        return $this->hasMany(Gallery::class);
    }

};

