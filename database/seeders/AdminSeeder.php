<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'hardeyslim@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('enterpassword'),
            'admin' => 1,
            'approved_at' => now(),
        ]);
    }
}
