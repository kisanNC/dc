<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;


    protected $table = 'videos';


    protected $fillable = [
        'title',
        'description',
        'video_url',
        'thumbnail_url',
        'uploaded_at',
        'uploaded_by',
    ];


    protected $dates = ['uploaded_at'];

    // Relationships
    public function uploader()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}


