<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(MusicianTableSeeder::class);
        $this->call(SongTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(AnnotationTableSeeder::class);
        // Add more seeders as needed
    }
}
