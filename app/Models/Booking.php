<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'attendee_id',
        'event_id',
        'num_tickets'
    ];


    public function attendee(){
        return $this->belongsTo(Attendee::class);
    }

    public function event(){
        return $this->belongsTo(Event::class);
    }

    public function payment(){
        return $this->hasMany(Payment::class);
    }

}
