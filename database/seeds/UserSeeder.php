<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'mail@mail.com',
            'name' => 'Tréteaux',
            'email_verified_at' => now(),
            'password' => bcrypt('password')
        ]);
    }
}
