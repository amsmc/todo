<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'amsz',
            'email' => 'apacoba@gmail.com',
            'password' => Hash::make('hitam'),
            'avatar' => null,
            'is_admin' => true, // ubah sesuai kebutuhan
        ]);


    }
}
