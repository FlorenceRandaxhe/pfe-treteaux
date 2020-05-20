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
            'order' => 1,
            'name' => 'Au Joïa',
            'menu' => 'Menu entrée/plat/dessert (choix à la carte)

apéritif offert

1 place de spectacle',
            'price' => '42',
            'url' => 'https://www.joia-vise.be',
            'address' => 'Rue de Berneau',
            'latitude' => '50.737649',
            'longitude' => '5.693616',
            'distance' => '5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Resto::create([
            'order' => 2,
            'name' => 'A la Brasserie du Joïa',
            'menu' => 'Menu entrée/plat

apéritif offert

1 place de spectacle',
            'price' => '37',
            'url' => 'https://www.joia-vise.be',
            'address' => 'Rue de Berneau',
            'latitude' => '50.737658',
            'longitude' => '5.694522',
            'distance' => '5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Resto::create([
            'order' => 3,
            'name' => 'Le Robinson',
            'menu' => 'Menu entrée/plat/dessert

2 verres de vin

1 café

1 place de spectacle',
            'price' => '52',
            'url' => 'https://www.restaurantlerobinson.be',
            'address' => 'Rue de Berneau',
            'latitude' => '50.737023',
            'longitude' => '5.693597',
            'distance' => '5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Resto::create([
            'order' => 4,
            'name' => 'Le Côté Sud',
            'menu' => 'Menu entrée / Plat / Café Gourmand

1 place de spectacle',
            'price' => '40',
            'url' => 'https://www.lecotesud.be',
            'address' => 'Rue de Berneau',
            'latitude' => '50.738292',
            'longitude' => '5.693666',
            'distance' => '5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Resto::create([
            'order' => 5,
            'name' => 'La Cour Interdite',
            'menu' => 'Menu du mois entrée / plat / dessert ou café

apéritif offert

1 place de spectacle',
            'price' => '40',
            'url' => 'https://fr-fr.facebook.com/LaCourInterdite',
            'address' => 'Rue de Berneau',
            'latitude' => '50.737801',
            'longitude' => '5.696507',
            'distance' => '5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
