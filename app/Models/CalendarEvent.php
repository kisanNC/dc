<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    use HasFactory;

    protected $table = 'calendar_events';

    protected $fillable = [
        'title',
        'description',
        'start_time',
        'end_time',
        'created_by',
        'created_at',
    ];

    public $timestamps = false; // because you're manually handling created_at

    protected $dates = ['start_time', 'end_time', 'created_at'];

    // Relationship to the user who created the event
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
