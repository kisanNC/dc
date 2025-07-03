<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'user_id',
    ];

    // An album can have many photos (assuming a Photo model exists)
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
