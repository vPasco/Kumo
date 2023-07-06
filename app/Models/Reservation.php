<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ReservationMail;

class Reservation extends Model
{
    use HasFactory;

    public $fillable = ['name', 'email', 'event_type', 'date_time', 'theme','estimated_pax','message'];
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "vpasco@gbox.adnu.edu.ph";
            Mail::to($adminEmail)->send(new ReservationMail($item));
        });
    }
}
