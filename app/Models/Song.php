<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['title', 'lyrics', 'musician_id'];

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
