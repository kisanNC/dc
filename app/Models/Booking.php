<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'user_id',
        'service_id',
        'status',
        'booking_date',
        'booking_time',
        'created_at',
    ];

    public $timestamps = false;

    protected $dates = ['booking_date', 'created_at'];

    // Each booking belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Each booking is for one service
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
