<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => 'News',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Tag::create([
            'name' => 'Spectacle',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Tag::create([
            'name' => 'Tréteaux',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Tag::create([
            'name' => 'Jeune public',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Tag::create([
            'name' => 'Artiste',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
