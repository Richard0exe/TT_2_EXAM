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
            'album' => 'Donda',
            'lyrics' => 'Lyrics for Song 1',
            'release_date' => '2022-05-06',
        ]);

        Song::create([
            'title' => 'Song 2',
            'lyrics' => 'Lyrics for Song 2',
            'album' => 'Donda',
        ]);

        // Add more songs as needed
    }
}

