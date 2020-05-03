<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name' => 'Concert',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Type::create([
            'name' => 'Théâtre',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Type::create([
            'name' => 'Jeune public',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Type::create([
            'name' => 'Humour',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Type::create([
            'name' => 'Artiste',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
