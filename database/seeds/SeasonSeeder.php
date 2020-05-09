<?php

use Illuminate\Database\Seeder;
use App\Season;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Season::create([
            'year' => '2017-2018',
            'archived' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Season::create([
            'year' => '2018-2019',
            'archived' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Season::create([
            'year' => '2019-2020',
            'archived' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
