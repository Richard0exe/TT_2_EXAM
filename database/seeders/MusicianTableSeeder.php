<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Musician;

class MusicianTableSeeder extends Seeder
{
    public function run()
    {
        Musician::create([
            'stage_name' => 'Example Stage Name',
            'real_name' => 'Example Real Name',
            'music_label' => 'Example Music Label',
            'image_path' => null,
        ]);

        Musician::create([
            'stage_name' => 'Jane Smith',
            'real_name' => 'John',
            'music_label' => 'Donda'
        ]);

        // Add more musicians as needed
    }
}
