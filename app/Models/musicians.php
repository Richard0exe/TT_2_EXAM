<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class musicians extends Model
{
    use HasFactory;
    protected $fillable = ['stage_name', 'real_name', 'music_label', 'image_path'];
    public function songs(){
        return $this->hasMany(songs::class);
    }
}
