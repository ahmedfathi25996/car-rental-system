<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table="booking";
    protected $fillable = [
        'id', 'car_id', 'user_id', 'pickup_qty', 'dropout_qty', 'pickup_location', 'pickup_date', 'dropout_date', 'full_name', 'email', 'phone_number', 'created_at', 'updated_at',
    ];

    public function car()
    {
        return $this->belongsTo('App\Car','car_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    
}
