<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'title' => 'Delta',
            'slug' => 'delta',
            'intro' => 'Lauréat des Octaves de la Musique 2018',
            'img' => 'img.jpg',
            'description' => 'Révélé au sein de son trio avec deux albums, "Road Story", et "Motion", le jeune pianiste belge Igor Gehenot se met au service d\'une musique riche en poésie et en couleur en laissant à chaque note la place de s\'épanouir pour arriver à l\'essentiel. Il revient cette fois-ci avec son tout nouveau quartet. Entouré du bugliste breton Alex Tassel, lauréat des Talents Jazz Adami en 2011, et figure de proue de la scène française tant en matière de jazz électrique qu\'acoustique, Igor Gehenot choisit une section rythmique de haut vol composée du jeune contrebassiste suédois Viktor Nyberg et du batteur luxembourgeois Jéröme Klein. Ce nouveau projet s\'inscrit dans la lignée mélodique de Gehenot, alternant mélodies fortes, grooves ancrés, et swings élégants.',
            'distribution' => 'Une création collective, avec :
                Maud LEFÈBVRE, Marie-Noëlle HÉBRANT, David SCARPUZZA et Benoit DE LEU DE CECIL
                Mise en scène : Marie-Odile DUPUIS et Jérôme PONCIN
                Scénographie : Aurélie DELOCHE assistée par Elisabeth BOSQUET, Margaux VANDERVELDEN et Margaud CARPENTIERS
                Univers sonore et musical : Gloria BOATENG
                Création lumière et régie : Loïc SCUTTENAIRE
                Vidéos : Rocio ALVAREZ
                Avec l’aide de : Laetitia SALSANO
                Photo : Ger SPENDEL',
            'info' => 'Ouverture du Foyer : 18h30 Ouverture de la salle : 20h15',
            'details' => '[]',
            'gallery' => '[]',
            'press' => '[]',
            'date' => now(),
            'featured' => false,
            'resto' => true,
            'type_id' => 1,
            'season_id' => 2,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Event::create([
            'title' => 'Le Sonneur',
            'slug' => 'le-sonneur',
            'intro' => 'Par Les Fous d\'Scène',
            'img' => 'img.jpg',
            'description' => 'Après s\'être régalés de chocolat, après avoir voyagé de planète en planète, après avoir tenté de sauver le monde, Les Fous d\'Scène et les ateliers de théâtre de l\'Asbl Le Tremplin montent sur scène ensemble pour sonner les cloches. Suivez Clopin avec nous en l\'An 1482 pour découvrir notre nouveau spectacle musical intergénérationnel : Le Sonneur. Quasimodo, jeune orphelin difforme, est le sonneur de Notre-Dame. Il vit à l\'écart de la société sous la surveillance de son maître, le puissant juge Claude Frollo. Sous l\'impulsion de ses seuls amis gargouilles, Quasimodo, rêvant de vivre libre au milieu de tous ceux qu\'il observe d\'en haut, profite de la fête des fous pour désobéir à Frollo et se mêler au peuple. Comment les gitans vont-ils l\'accueillir ? Comment Frollo va-t-il réagir ? Comment Esmeralda va-t-elle intervenir ? Envie de connaître les réponses à ces questions et bien quitter la Cour des Miracles et rejoignez le cœur de la Cité. L\'homme est-il un monstre ou le monstre un homme ?',
            'distribution' => 'Une création collective, avec :
                Maud LEFÈBVRE, Marie-Noëlle HÉBRANT, David SCARPUZZA et Benoit DE LEU DE CECIL
                Mise en scène : Marie-Odile DUPUIS et Jérôme PONCIN
                Scénographie : Aurélie DELOCHE assistée par Elisabeth BOSQUET, Margaux VANDERVELDEN et Margaud CARPENTIERS
                Univers sonore et musical : Gloria BOATENG
                Création lumière et régie : Loïc SCUTTENAIRE
                Vidéos : Rocio ALVAREZ
                Avec l’aide de : Laetitia SALSANO
                Photo : Ger SPENDEL',
            'info' => 'Ouverture du Foyer : 18h30 Ouverture de la salle : 20h15',
            'details' => '[]',
            'gallery' => '[]',
            'press' => '[]',
            'date' => now(),
            'featured' => false,
            'resto' => true,
            'type_id' => 2,
            'season_id' => 2,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
