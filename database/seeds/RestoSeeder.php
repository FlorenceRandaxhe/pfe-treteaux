<?php

use Illuminate\Database\Seeder;
use App\Resto;

class RestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resto::create([
            'name' => 'Au Joïa',
            'menu' => 'Menu entrée/plat/dessert (choix à la carte), apéritif offert et 1 place de spectacle',
            'price' => '42',
            'url' => 'https://www.joia-vise.be',
            'lat' => '50.737649',
            'lng' => '5.693616',
            'distance' => '5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Resto::create([
            'name' => 'A la Brasserie du Joïa',
            'menu' => 'Menu entrée/plat, apéritif offert et 1 place de spectacle',
            'price' => '37',
            'url' => 'https://www.joia-vise.be',
            'lat' => '50.737658',
            'lng' => '5.694522',
            'distance' => '5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Resto::create([
            'name' => 'Le Robinson',
            'menu' => 'Menu entrée/plat/dessert, 2 verres de vin, 1 café et 1 place de spectacle',
            'price' => '52',
            'url' => 'https://www.restaurantlerobinson.be',
            'lat' => '50.737023',
            'lng' => '5.693597',
            'distance' => '5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Resto::create([
            'name' => 'Le Côté Sud',
            'menu' => 'Menu entrée / Plat / Café Gourmand et 1 place de spectacle',
            'price' => '40',
            'url' => 'https://www.lecotesud.be',
            'lat' => '50.738292',
            'lng' => '5.693666',
            'distance' => '5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Resto::create([
            'name' => 'La Cour Interdite',
            'menu' => 'Menu du mois entrée / plat / dessert ou café, apéritif offert et 1 place de spectacle',
            'price' => '40',
            'url' => 'https://fr-fr.facebook.com/LaCourInterdite',
            'lat' => '50.737801',
            'lng' => '5.696507',
            'distance' => '5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
