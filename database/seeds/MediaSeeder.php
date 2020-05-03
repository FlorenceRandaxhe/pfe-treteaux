<?php

use Illuminate\Database\Seeder;
use App\Media;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Media::create([
            'title' => 'Les Tréteaux : une programmation dense',
            'excerpt' => 'Musique tantôt classique, tantôt populaire et théâtre de qualité pour petits et grands sont au programme de la première saison complète de la salle des Tréteaux à Visé.',
            'source' => 'Le Soir',
            'published_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Media::create([
            'title' => ' Première saison complète pour la salle visétoise «Les Tréteaux»',
            'excerpt' => 'La salle visétoise, rénovée, va accueillir beaucoup de spectacles au cours des prochains mois.',
            'source' => 'La Meuse',
            'published_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Media::create([
            'title' => 'Nous avons visité «Les Tréteaux», à Visé: la salle sera unique en Belgique!',
            'excerpt' => 'Les travaux d’aménagement et de rénovation du centre culturel de Visé battent leur plein.  Le public pourra visiter le chantier ce samedi à 14h. La salle sera entièrement modulable, une innovation unique en Belgique.',
            'source' => 'L\'avenir',
            'published_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
