<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'La nouvelle saison est arrivée',
            'slug' => 'la-nouvelle-saison-est-arrivee',
            'content' => 'content',
            'img' => 'img.jpg',
            'published_at' => now(),
            'tag_id' => 2,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'title' => 'Annulation de spectacles',
            'slug' => 'annulation-de-spectacles',
            'content' => 'content',
            'img' => 'event-1.jpg',
            'published_at' => now(),
            'tag_id' => 2,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'title' => 'Inauguration des Tréteaux',
            'slug' => 'inauguration-des-tréteaux',
            'content' => 'content',
            'img' => 'event-2.jpg',
            'published_at' => now(),
            'tag_id' => 3,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'title' => 'La nouvelle saison est arrivée',
            'slug' => 'la-nouvelle-saison-est-arrivee2',
            'content' => 'content',
            'img' => 'event-3.jpg',
            'published_at' => now(),
            'tag_id' => 2,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'title' => 'Annulation de spectacles',
            'slug' => 'annulation-de-spectacleS2',
            'content' => 'content',
            'img' => 'img.jpg',
            'published_at' => now(),
            'tag_id' => 2,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'title' => 'Inauguration des Tréteaux',
            'slug' => 'inauguration-des-tréteaux2',
            'content' => 'content',
            'img' => 'event-1.jpg',
            'published_at' => now(),
            'tag_id' => 3,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'title' => 'Annulation de spectacles',
            'slug' => 'annulation-de-spectacleS3',
            'content' => 'content',
            'img' => 'event-2.jpg',
            'published_at' => now(),
            'tag_id' => 2,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'title' => 'Inauguration des Tréteaux',
            'slug' => 'inauguration-des-tréteaux3',
            'content' => 'content',
            'img' => 'img.jpg',
            'published_at' => now(),
            'tag_id' => 3,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
