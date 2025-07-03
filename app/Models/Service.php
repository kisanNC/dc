<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'title',
        'description',
        'category',
        'price',
        'duration',
        'uploaded_by',
        'created_at',
    ];

    public $timestamps = false;

    protected $dates = ['created_at'];


    public function uploader()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }

    // Relationship to bookings
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
