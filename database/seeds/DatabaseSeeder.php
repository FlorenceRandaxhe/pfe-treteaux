<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(SeasonSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(MediaSeeder::class);
        $this->call(RestoSeeder::class);
        $this->call(TeamSeeder::class);
    }
}
