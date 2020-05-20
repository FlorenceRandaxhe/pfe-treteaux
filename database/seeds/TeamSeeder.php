<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'order' => 1,
            'name' => 'Jérémy Van Moffaert',
            'job' => 'Chef régisseur',
            'img' => 'team.jpg',
            'email' => '',
            'phone' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Team::create([
            'order' => 2,
            'name' => 'Jérémy Van Moffaert',
            'job' => 'Chef régisseur',
            'img' => 'team.jpg',
            'email' => '',
            'phone' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Team::create([
            'order' => 3,
            'name' => 'Jérémy Van Moffaert',
            'job' => 'Chef régisseur',
            'img' => 'team.jpg',
            'email' => '',
            'phone' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Team::create([
            'order' => 4,
            'name' => 'Jérémy Van Moffaert',
            'job' => 'Chef régisseur',
            'img' => 'team.jpg',
            'email' => '',
            'phone' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Team::create([
            'order' => 5,
            'name' => 'Jérémy Van Moffaert',
            'job' => 'Chef régisseur',
            'img' => 'team.jpg',
            'email' => '',
            'phone' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Team::create([
            'order' => 6,
            'name' => 'Jérémy Van Moffaert',
            'job' => 'Chef régisseur',
            'img' => 'team.jpg',
            'email' => '',
            'phone' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
