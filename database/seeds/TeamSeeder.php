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
            'name' => 'Mathieu Ulrici',
            'job' => 'Echevin de la Culture',
            'img' => 'team.jpg',
            'email' => 'culture@vise.be',
            'phone' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Team::create([
            'order' => 2,
            'name' => 'Marcel Neven',
            'job' => 'Président de l’ASBL “Les Centres Culturels Visétois”',
            'img' => 'team.jpg',
            'email' => '',
            'phone' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Team::create([
            'order' => 3,
            'name' => 'Dany Salme',
            'job' => 'Chef de service',
            'img' => 'team.jpg',
            'email' => 'dany.salme@vise.be',
            'phone' => '04/374 85 50',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Team::create([
            'order' => 4,
            'name' => 'France Levaux',
            'job' => 'Secrétariat et billetterie',
            'img' => 'team.jpg',
            'email' => 'lestreteaux@vise.be',
            'phone' => '04/374 85 52',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Team::create([
            'order' => 5,
            'name' => 'Béatrice Cahay',
            'job' => 'Secrétariat et billetterie',
            'img' => 'team.jpg',
            'email' => 'lestreteaux@vise.be',
            'phone' => '04/374 85 53',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Team::create([
            'order' => 6,
            'name' => 'Jérémy Van Moffaert',
            'job' => 'Logistiques et coordination',
            'img' => 'team.jpg',
            'email' => 'jeremy.vanmoffaert@vise.be',
            'phone' => '04/374 85 54',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Team::create([
            'order' => 7,
            'name' => 'Michaël Labiouse',
            'job' => 'Accueil technique',
            'img' => 'team.jpg',
            'email' => 'michael.labiouse@vise.be',
            'phone' => '04/374 85 ??',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Team::create([
            'order' => 8,
            'name' => 'Léon Carens',
            'job' => 'Accueil technique',
            'img' => 'team.jpg',
            'email' => '',
            'phone' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Team::create([
            'order' => 9,
            'name' => 'Daniel Hakier',
            'job' => 'Programmation ',
            'img' => 'team.jpg',
            'email' => 'daniel.acquier@vise.be',
            'phone' => '04/374 85 60',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
