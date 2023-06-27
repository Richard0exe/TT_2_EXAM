<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Annotation;

class AnnotationTableSeeder extends Seeder
{
    public function run()
    {
        Annotation::create([
            'user_id' => 1,
            'song_id' => 1,
            'content' => 'Annotation 1 for Song 1',
        ]);

        Annotation::create([
            'user_id' => 2,
            'song_id' => 2,
            'content' => 'Annotation 1 for Song 2',
        ]);

        // Add more annotations as needed
    }
}
