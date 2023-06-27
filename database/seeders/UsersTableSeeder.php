<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'username' => Str::random(8),
            'email' => 'johndoe@example.com',
            'role' => 'user',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Jane Smith',
            'username' => Str::random(8),
            'email' => 'janesmith@example.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);

        // Add more users as needed
    }
}
