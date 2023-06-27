<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Musician;

class MusicianTableSeeder extends Seeder
{
    public function run()
    {
        Musician::create([
            'name' => 'John Doe',
        ]);

        Musician::create([
            'name' => 'Jane Smith',
        ]);

        // Add more musicians as needed
    }
}
