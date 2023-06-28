<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentTableSeeder extends Seeder
{
    public function run()
    {
        Comment::create([
            'user_id' => 1,
            'song_id' => 1,
            'content' => 'Comment 1 for Song 1',
        ]);

        Comment::create([
            'user_id' => 2,
            'song_id' => 1,
            'content' => 'Comment 2 for Song 1',
        ]);

        // Add more comments as needed
    }
}
