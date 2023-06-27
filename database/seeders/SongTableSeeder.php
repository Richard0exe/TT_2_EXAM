<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Song;

class SongTableSeeder extends Seeder
{
    public function run()
    {
        Song::create([
            'title' => 'Song 1',
            'lyrics' => 'Lyrics for Song 1',
            'musician_id' => 1,
        ]);

        Song::create([
            'title' => 'Song 2',
            'lyrics' => 'Lyrics for Song 2',
            'musician_id' => 2,
        ]);

        // Add more songs as needed
    }
}

