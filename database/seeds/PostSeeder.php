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
            'content' => '## La salle visétoise, rénovée, va accueillir beaucoup de spectacles au cours des prochains mois.

Inaugurée en janvier dernier, la salle de spectacle Les Tréteaux, qui a fait l’objet d’une rénovation, va proposer une programmation variée pour cette saison 2019-2020. Petit tour d’horizon en compagnie de Daniel Hakier, programmateur de la salle.

Le 28 septembre prochain, ce sera Thierry Luthers qui ouvrira le bal, en chantant et racontant Johnny. Onofrio Palumbo et Bénédicte Vignol proposeront quant à eux un spectacle de guitare classique et de chant le 12 octobre.

Du 18 au 20 octobre, "place au Festival de Visé 2019, consacré à la musique classique et au jazz, organisé par Michaël Grailet, qui se déroulera à la salle des Tréteaux et à l’église Notre-Dame du Mont-Carmel de Devant-le-Pont. Le 26 octobre, ce sera au tour du rock’n’roll avec le Blue Moon Festival , au cours duquel plusieurs groupes viendront se produire " , détaille Daniel Haskier.

Alors que Guy Lukowski fera résonner les cordes du Sud de sa guitare le 18 décembre, l’Orchestre d’Harmonie royale Saint-Martin se produira le 19 janvier en terres visétoises. Il faudra attendre le 29 février pour voir se produire le quatuor à cordes Strings 4ever, composé de quatre musiciennes. Christophe Celen, Christophe Genette et Madeleine Jacques présenteront leur spectacle Goldman Confidentiel à Visé le 24 avril pour faire découvrir au public les morceaux les plus intimistes du chanteur français, tandis que le groupe de jazz Delta, où l’on retrouve le talentueux Igor Gehenot, se produira le 29 mai prochain. Plusieurs autres concerts de jazz sont prévus pour cette saison, avec notamment O Juliette le 11 juin prochain et Mark Frankinet Quarter le lendemain.

## Différentes pièces de théâtre

Côté théâtre, de nombreuses pièces sont prévues. Ni dieux ni maître mais du rouge le 8 novembre , L’Âge de bière, le spectacle qui mousse le 9 novembre , Migraaaants (On est trop nombreux sur ce putain de bateau) du 14 au 17 novembre , Les Poissons vert pâle le 7 décembre, Isabelle Hauban a des caractères le 10 janvier, Callas, Il était une voix le 30 janvier, L’Invité le 14 février, et bien sûr le Festival de théâtre en wallon Marcelle Martin du 24 au 26 janvier…

Sans oublier les spectacles jeune public (Drôles de Zoziaux le 3 novembre ou Qui Vive le 15 décembre), ou les comédies musicales (C’était au temps consacré au répertoire de Jacques Brel le 8 février ou La Scatola le 7 mars, présenté par un groupe vocal polyphonique italien). Pierre Kroll occupera pour sa part la scène des Tréteaux pour un spectacle le 29 novembre, avec de l’interactivité, des surprises en direct, beaucoup d’éclats de rire et de réflexions diverses.',
            'img' => 'eD9gVFbVLZ94Y7VZW8gSglPZjnoNJ9hEjS3HrJJc.jpeg',
            'alt' => 'description de l\'image',
            'published_at' => '2020-05-13 18:33:01',
            'tag_id' => 2,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'title' => 'Annulation de spectacles',
            'slug' => 'annulation-de-spectacles',
            'content' => 'Face à la crise du coronavirus et à l\'incertitude dans laquelle se trouve le milieu de la culture, l\'équipe des Tréteaux a choisi de travailler avec optimisme sans pour autant négliger la sécurité de tous !

**Suivant les recommandations des pouvoirs publics, notre saison 2019-2020 est donc malheureusement officiellement terminée.**

Mais notre enthousiasme reste intact ! Notre volonté reste de vous proposer un maximum de spectacles de qualité et donc, dans la mesure du possible, de pouvoir inclure les spectacles qui ne pourront avoir lieu dans la prochaine saison.

Aujourd\'hui, nous pouvons annoncer que le concert de Goldman Confidentiel fera partie de la saison 2020-2021 !! Il aura lieu le jeudi 24 septembre 2020 (si les conditions de sécurité sanitaire le permettent). Les places du 24 avril restent valables à la nouvelle date pour les personnes qui le désirent. Les autres pourront se faire rembourser (plus d\'infos : culture@vise.be).

Pour des raisons pratiques, les remboursements ne pourront débuter qu\'à la sortie du confinement.

Les conditions de remboursement sont similaires pour les autres spectacles annulés.

Nous vous remercions de votre compréhension suite à cette crise inédite et nous espérons vous revoir le plus tôt possible en toute sécurité pour une saison 2020-2021 qui est fin prête et que nous avons hâte de vous présenter dans son entièreté.

Restez-en contact',
            'img' => 'oATJj18c7OvMSFhKJdcuxScAgYVkdz1EThgl2UF8.jpeg',
            'alt' => 'description de l\'image',
            'published_at' => '2020-05-14 08:33:01',
            'tag_id' => 2,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'title' => 'Inauguration des Tréteaux',
            'slug' => 'inauguration-des-tréteaux',
            'content' => '## Inaugurée en janvier dernier, la salle de spectacle est un véritable poumon culturel pour la Ville de Visé.

La salle de spectacle Les Tréteaux, propriété de la Ville de Visé et située dans l’ancien gymnase de l’athénée, fonctionnait depuis les années 80. Ne disposant pas de budget d’aménagement, les spectacles se bricolaient au gré des possibilités. Une ancienne scène était utilisée, des barres soutenaient les projecteurs, des podestres artisanaux et des chaises étaient déplacés pour réaliser diverses dispositions.

Cela faisait de très nombreuses années que les autorités visétoises souhaitent rénover en profondeur cette salle. C’est finalement en 2015, grâce au subside d’un million d’euros octroyé par la province de Liège dans le cadre de la supracommunalité et des projets de Liège Europe Métropole, que la Ville de Visé a pu relancer ce projet de transformation. Au total, plus de 2,9 millions d’euros ont été investis dans la rénovation des lieux.

**Les travaux avaient démarré en 2017, et la salle fraîchement rénovée a été inaugurée à la fin du mois de janvier dernier.**

La salle de spectacle a été complètement transformée, avec une nouvelle capacité de 320 places. Elle est en outre adaptable selon le spectacle proposé. La scène est modifiable, et les gradins peuvent être disposés de cinq manières différentes. Le dossier avait été étudié pour s’adapter aux exigences actuelles en termes de confort acoustique, de matériaux utilisés et de performance énergétique. En outre, un nouveau foyer moderne accueillant les visiteurs à l’entrée, un bar ainsi qu’une salle polyvalente ont également été construits.

Depuis lors, la salle visétoise, située en plein centre-ville de la Cité de l’Oie, rue de la Chinstrée, propose une programmation riche et variée. Concerts en tout genre (classique, jazz, rock, chanson française…), pièces de théâtre, spectacles à destination de la jeunesse, comédies musicales… L’entièreté du programme des prochains mois est disponible et détaillée sur le site web des Tréteaux.

“La programmation proposée est de grande qualité”, sourit Viviane Dessart, la bourgmestre de la Ville de Visé, “et la fréquentation est également au rendez-vous. La culture mérite notre investissement financier. Nous sommes très fiers de la rénovation de cette salle. Les Tréteaux sont un formidable outil culturel pour notre Ville”.',
            'img' => 'event-2.jpg',
            'alt' => 'description de l\'image',
            'published_at' => '2019-05-13 18:33:01',
            'tag_id' => 3,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'title' => 'La nouvelle saison est arrivée',
            'slug' => 'la-nouvelle-saison-est-arrivee-2',
            'content' => '## La salle visétoise, rénovée, va accueillir beaucoup de spectacles au cours des prochains mois.

Inaugurée en janvier dernier, la salle de spectacle Les Tréteaux, qui a fait l’objet d’une rénovation, va proposer une programmation variée pour cette saison 2019-2020. Petit tour d’horizon en compagnie de Daniel Hakier, programmateur de la salle.

Le 28 septembre prochain, ce sera Thierry Luthers qui ouvrira le bal, en chantant et racontant Johnny. Onofrio Palumbo et Bénédicte Vignol proposeront quant à eux un spectacle de guitare classique et de chant le 12 octobre.

Du 18 au 20 octobre, "place au Festival de Visé 2019, consacré à la musique classique et au jazz, organisé par Michaël Grailet, qui se déroulera à la salle des Tréteaux et à l’église Notre-Dame du Mont-Carmel de Devant-le-Pont. Le 26 octobre, ce sera au tour du rock’n’roll avec le Blue Moon Festival , au cours duquel plusieurs groupes viendront se produire " , détaille Daniel Haskier.

Alors que Guy Lukowski fera résonner les cordes du Sud de sa guitare le 18 décembre, l’Orchestre d’Harmonie royale Saint-Martin se produira le 19 janvier en terres visétoises. Il faudra attendre le 29 février pour voir se produire le quatuor à cordes Strings 4ever, composé de quatre musiciennes. Christophe Celen, Christophe Genette et Madeleine Jacques présenteront leur spectacle Goldman Confidentiel à Visé le 24 avril pour faire découvrir au public les morceaux les plus intimistes du chanteur français, tandis que le groupe de jazz Delta, où l’on retrouve le talentueux Igor Gehenot, se produira le 29 mai prochain. Plusieurs autres concerts de jazz sont prévus pour cette saison, avec notamment O Juliette le 11 juin prochain et Mark Frankinet Quarter le lendemain.

## Différentes pièces de théâtre

Côté théâtre, de nombreuses pièces sont prévues. Ni dieux ni maître mais du rouge le 8 novembre , L’Âge de bière, le spectacle qui mousse le 9 novembre , Migraaaants (On est trop nombreux sur ce putain de bateau) du 14 au 17 novembre , Les Poissons vert pâle le 7 décembre, Isabelle Hauban a des caractères le 10 janvier, Callas, Il était une voix le 30 janvier, L’Invité le 14 février, et bien sûr le Festival de théâtre en wallon Marcelle Martin du 24 au 26 janvier…

Sans oublier les spectacles jeune public (Drôles de Zoziaux le 3 novembre ou Qui Vive le 15 décembre), ou les comédies musicales (C’était au temps consacré au répertoire de Jacques Brel le 8 février ou La Scatola le 7 mars, présenté par un groupe vocal polyphonique italien). Pierre Kroll occupera pour sa part la scène des Tréteaux pour un spectacle le 29 novembre, avec de l’interactivité, des surprises en direct, beaucoup d’éclats de rire et de réflexions diverses.',
            'img' => 'eD9gVFbVLZ94Y7VZW8gSglPZjnoNJ9hEjS3HrJJc.jpeg',
            'alt' => 'description de l\'image',
            'published_at' => '2020-05-13 18:33:01',
            'tag_id' => 2,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'title' => 'Annulation de spectacles',
            'slug' => 'annulation-de-spectacles-2',
            'content' => 'Face à la crise du coronavirus et à l\'incertitude dans laquelle se trouve le milieu de la culture, l\'équipe des Tréteaux a choisi de travailler avec optimisme sans pour autant négliger la sécurité de tous !

**Suivant les recommandations des pouvoirs publics, notre saison 2019-2020 est donc malheureusement officiellement terminée.**

Mais notre enthousiasme reste intact ! Notre volonté reste de vous proposer un maximum de spectacles de qualité et donc, dans la mesure du possible, de pouvoir inclure les spectacles qui ne pourront avoir lieu dans la prochaine saison.

Aujourd\'hui, nous pouvons annoncer que le concert de Goldman Confidentiel fera partie de la saison 2020-2021 !! Il aura lieu le jeudi 24 septembre 2020 (si les conditions de sécurité sanitaire le permettent). Les places du 24 avril restent valables à la nouvelle date pour les personnes qui le désirent. Les autres pourront se faire rembourser (plus d\'infos : culture@vise.be).

Pour des raisons pratiques, les remboursements ne pourront débuter qu\'à la sortie du confinement.

Les conditions de remboursement sont similaires pour les autres spectacles annulés.

Nous vous remercions de votre compréhension suite à cette crise inédite et nous espérons vous revoir le plus tôt possible en toute sécurité pour une saison 2020-2021 qui est fin prête et que nous avons hâte de vous présenter dans son entièreté.

Restez-en contact',
            'img' => 'oATJj18c7OvMSFhKJdcuxScAgYVkdz1EThgl2UF8.jpeg',
            'alt' => 'description de l\'image',
            'published_at' => '2020-05-14 08:33:01',
            'tag_id' => 2,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'title' => 'Inauguration des Tréteaux',
            'slug' => 'inauguration-des-tréteaux-2',
            'content' => '## Inaugurée en janvier dernier, la salle de spectacle est un véritable poumon culturel pour la Ville de Visé.

La salle de spectacle Les Tréteaux, propriété de la Ville de Visé et située dans l’ancien gymnase de l’athénée, fonctionnait depuis les années 80. Ne disposant pas de budget d’aménagement, les spectacles se bricolaient au gré des possibilités. Une ancienne scène était utilisée, des barres soutenaient les projecteurs, des podestres artisanaux et des chaises étaient déplacés pour réaliser diverses dispositions.

Cela faisait de très nombreuses années que les autorités visétoises souhaitent rénover en profondeur cette salle. C’est finalement en 2015, grâce au subside d’un million d’euros octroyé par la province de Liège dans le cadre de la supracommunalité et des projets de Liège Europe Métropole, que la Ville de Visé a pu relancer ce projet de transformation. Au total, plus de 2,9 millions d’euros ont été investis dans la rénovation des lieux.

**Les travaux avaient démarré en 2017, et la salle fraîchement rénovée a été inaugurée à la fin du mois de janvier dernier.**

La salle de spectacle a été complètement transformée, avec une nouvelle capacité de 320 places. Elle est en outre adaptable selon le spectacle proposé. La scène est modifiable, et les gradins peuvent être disposés de cinq manières différentes. Le dossier avait été étudié pour s’adapter aux exigences actuelles en termes de confort acoustique, de matériaux utilisés et de performance énergétique. En outre, un nouveau foyer moderne accueillant les visiteurs à l’entrée, un bar ainsi qu’une salle polyvalente ont également été construits.

Depuis lors, la salle visétoise, située en plein centre-ville de la Cité de l’Oie, rue de la Chinstrée, propose une programmation riche et variée. Concerts en tout genre (classique, jazz, rock, chanson française…), pièces de théâtre, spectacles à destination de la jeunesse, comédies musicales… L’entièreté du programme des prochains mois est disponible et détaillée sur le site web des Tréteaux.

“La programmation proposée est de grande qualité”, sourit Viviane Dessart, la bourgmestre de la Ville de Visé, “et la fréquentation est également au rendez-vous. La culture mérite notre investissement financier. Nous sommes très fiers de la rénovation de cette salle. Les Tréteaux sont un formidable outil culturel pour notre Ville”.',
            'img' => 'event-2.jpg',
            'alt' => 'description de l\'image',
            'published_at' => '2019-05-13 18:33:01',
            'tag_id' => 3,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
