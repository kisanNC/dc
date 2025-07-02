<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'photos';

    protected $fillable = [
        'album_id',
        'photo_url',
        'caption',
        'position',
        'uploaded_at',
    ];

    public $timestamps = false; // because you're using uploaded_at manually

    protected $dates = ['uploaded_at'];

    // Relationship to album
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
