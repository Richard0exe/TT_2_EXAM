<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{

    use HasFactory;
    protected $fillable = ['title', 'album','release_date', 'lyrics'];

    public function musician()
    {
        return $this->belongsTo(Musician::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function annotations()
    {
        return $this->hasMany(Annotation::class);
    }
}
