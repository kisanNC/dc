<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    // Optional: specify table name if different from 'albums'
    // protected $table = 'albums';

    // Fields allowed for mass assignment
    protected $fillable = [
        'title',
        'description',
        'user_id', // if albums belong to a user
    ];

    // An album can have many photos (assuming a Photo model exists)
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
