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
            'intro' => 'Révélé au sein de son trio avec deux albums, "Road Story", et "Motion", le jeune pianiste belge Igor Gehenot se met au service d\'une musique riche en poésie et en couleur',
            'img' => '1aZVvmOKYUXwWbT7HtS5lnZCHkQKOk1oVG3fRmpR.jpeg',
            'alt' => 'description de l\'image',
            'description' => '**Révélé au sein de son trio avec deux albums, "Road Story", et "Motion", le jeune pianiste belge Igor Gehenot se met au service d\'une musique riche en poésie et en couleur en laissant à chaque note la place de s\'épanouir pour arriver à l\'essentiel.**

Il revient cette fois-ci avec son tout nouveau quartet. Entouré du bugliste breton Alex Tassel, lauréat des Talents Jazz Adami en 2011, et figure de proue de la scène française tant en matière de jazz électrique qu\'acoustique, Igor Gehenot choisit une section rythmique de haut vol composée du jeune contrebassiste suédois Viktor Nyberg et du batteur luxembourgeois Jéröme Klein.

Ce nouveau projet s\'inscrit dans la lignée mélodique de Gehenot, alternant mélodies fortes, grooves ancrés, et swings élégants.',

            'distribution' => '[{"key": "KBCjguAxO5qfDBKI", "layout": "people", "attributes": {"name": "Renée Blanche", "role": "Guitare solo"}}, {"key": "8u6X0765FbhdO5jG", "layout": "people", "attributes": {"name": "Arnaud Rosoux", "role": "Guitare Rythmique"}}, {"key": "ZV1bPfUx5QKNZ1vl", "layout": "people", "attributes": {"name": "Jacky Colleau", "role": "Contrebasse"}}]',
            'details' => '[{"key": "zGxE5IbDnRxfszzE", "layout": "block", "attributes": {"text": "2h30", "title": "Durée"}}, {"key": "STzP9RTD4Hd7ajBG", "layout": "block", "attributes": {"text": "Tous public", "title": "Public"}}]',
            'gallery' => '[{"key": "q6vLEY33nlXRDzBy", "layout": "photo", "attributes": {"alt": "Igor qui joue du piano", "photo": "ylv0VZVbmBVqLySIyPEu9FYmErlOVAkipU6IamAW.jpeg"}}, {"key": "U7K5uUSy7XTyuh1d", "layout": "photo", "attributes": {"alt": "Igor", "photo": "jfM1jUSF7Qs6y4Z293M6ZuQbbEt5THPQcgJbcGln.jpeg"}}, {"key": "q3ghHNWZeo8YXHvS", "layout": "photo", "attributes": {"alt": "Igor", "photo": "64nQLZvDoNa9jP1QDrZBr3dTPd0pGOjOYQPAZmb1.jpeg"}}, {"key": "Fzbhhwt81ZM52sr9", "layout": "photo", "attributes": {"alt": "Igor", "photo": "5OZWX3KGaYPzm8KFLoQV5e8yuGxl8wLPq5oB4o0W.jpeg"}}]',
            'press' => '[{"key": "WHFIMYuxvqHfkZt0", "layout": "press", "attributes": {"url": "https://www.rtbf.be/culture/article/detail_cursiv-de-igor-gehenot-de-la-musique-tout-simplement?id=10423659", "title": "\"Cursiv\" de Igor Gehenot, de la Musique tout simplement !", "source": "RTBF", "excerpt": "Igor Gehenot est né à Liège en 1989. Une mère pianiste, un père dessinateur, Igor commence le piano à 6 ans. Bercé par Bach et Stravinsky, Passionné de Hip Hop et de funk, Igor s’intéressera ensuite au jazz avec la découverte de Bill Evans, Keith Jarrett, McCoy Tyner, Chick Corea …", "published_at": "2020-02-11 00:00:00"}}, {"key": "DFDBSyxnic72n9gh", "layout": "press", "attributes": {"url": "https://plus.lesoir.be/275916/article/2020-01-28/igor-gehenot-cursiv", "title": "Igor Gehenot Cursiv", "source": "Le Soir", "excerpt": "C’est un album d’amitié. Igor l’avoue : il était « out » en arrivant au studio d’Alex. Il n’avait plus rien écrit depuis un an. ", "published_at": "2020-02-12 00:00:00"}}]',
            'date' => now(),
            'featured' => true,
            'resto' => true,
            'type_id' => 1,
            'season_id' => 3,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
            'seats' => null,
            'seating' => true,
            'prices' => null,
        ]);

        Event::create([
            'title' => 'Le Sonneur',
            'slug' => 'le-sonneur',
            'intro' => 'Par Les Fous d\'Scène',
            'img' => 'event-2.jpg',
            'alt' => 'description de l\'image',
            'description' => '**Après s\'être régalés de chocolat, après avoir voyagé de planète en planète, après avoir tenté de sauver le monde, Les Fous d\'Scène et les ateliers de théâtre de l\'Asbl Le Tremplin montent sur scène ensemble pour sonner les cloches.**

Suivez Clopin avec nous en l\'An 1482 pour découvrir notre nouveau spectacle musical intergénérationnel : Le Sonneur. Quasimodo, jeune orphelin difforme, est le sonneur de Notre-Dame. Il vit à l\'écart de la société sous la surveillance de son maître, le puissant juge Claude Frollo.

Sous l\'impulsion de ses seuls amis gargouilles, Quasimodo, rêvant de vivre libre au milieu de tous ceux qu\'il observe d\'en haut, profite de la fête des fous pour désobéir à Frollo et se mêler au peuple.

Comment les gitans vont-ils l\'accueillir ? Comment Frollo va-t-il réagir ? Comment Esmeralda va-t-elle intervenir ? Envie de connaître les réponses à ces questions et bien quitter la Cour des Miracles et rejoignez le cœur de la Cité.

L\'homme est-il un monstre ou le monstre un homme ?',

            'distribution' => '[{"key": "KBCjguAxO5qfDBKI", "layout": "people", "attributes": {"name": "Renée Blanche", "role": "Guitare solo"}}, {"key": "8u6X0765FbhdO5jG", "layout": "people", "attributes": {"name": "Arnaud Rosoux", "role": "Guitare Rythmique"}}, {"key": "ZV1bPfUx5QKNZ1vl", "layout": "people", "attributes": {"name": "Jacky Colleau", "role": "Contrebasse"}}]',
            'details' => '[{"key": "zGxE5IbDnRxfszzE", "layout": "block", "attributes": {"text": "2h30", "title": "Durée"}}, {"key": "STzP9RTD4Hd7ajBG", "layout": "block", "attributes": {"text": "Tous public", "title": "Public"}}]',
            'gallery' => '[{"key": "q6vLEY33nlXRDzBy", "layout": "photo", "attributes": {"alt": "Igor qui joue du piano", "photo": "ylv0VZVbmBVqLySIyPEu9FYmErlOVAkipU6IamAW.jpeg"}}, {"key": "U7K5uUSy7XTyuh1d", "layout": "photo", "attributes": {"alt": "Igor", "photo": "jfM1jUSF7Qs6y4Z293M6ZuQbbEt5THPQcgJbcGln.jpeg"}}, {"key": "q3ghHNWZeo8YXHvS", "layout": "photo", "attributes": {"alt": "Igor", "photo": "64nQLZvDoNa9jP1QDrZBr3dTPd0pGOjOYQPAZmb1.jpeg"}}, {"key": "Fzbhhwt81ZM52sr9", "layout": "photo", "attributes": {"alt": "Igor", "photo": "5OZWX3KGaYPzm8KFLoQV5e8yuGxl8wLPq5oB4o0W.jpeg"}}]',
            'press' => '[{"key": "WHFIMYuxvqHfkZt0", "layout": "press", "attributes": {"url": "https://www.rtbf.be/culture/article/detail_cursiv-de-igor-gehenot-de-la-musique-tout-simplement?id=10423659", "title": "\"Cursiv\" de Igor Gehenot, de la Musique tout simplement !", "source": "RTBF", "excerpt": "Igor Gehenot est né à Liège en 1989. Une mère pianiste, un père dessinateur, Igor commence le piano à 6 ans. Bercé par Bach et Stravinsky, Passionné de Hip Hop et de funk, Igor s’intéressera ensuite au jazz avec la découverte de Bill Evans, Keith Jarrett, McCoy Tyner, Chick Corea …", "published_at": "2020-02-11 00:00:00"}}, {"key": "DFDBSyxnic72n9gh", "layout": "press", "attributes": {"url": "https://plus.lesoir.be/275916/article/2020-01-28/igor-gehenot-cursiv", "title": "Igor Gehenot Cursiv", "source": "Le Soir", "excerpt": "C’est un album d’amitié. Igor l’avoue : il était « out » en arrivant au studio d’Alex. Il n’avait plus rien écrit depuis un an. ", "published_at": "2020-02-12 00:00:00"}}]',
            'date' => now(),
            'featured' => true,
            'resto' => true,
            'type_id' => 2,
            'season_id' => 3,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
            'seats' => null,
            'seating' => true,
            'prices' => null,
        ]);

        Event::create([
            'title' => 'O Juliette',
            'slug' => 'o-juliette',
            'intro' => 'C\'est un spectacle qui fait revivre la musique du célèbre " Hot Club de France" de Django Reinhardt et de Stéphane Grapelli : deux à trois sets d\'une heure de jazz manouche alliant émotion et swing vertigineux.',
            'img' => 'SrHRSpnChLzlEumfYjPc6dNZsRHdeSlBcw86iqeo.jpeg',
            'alt' => 'description de l\'image',
            'description' => '**C\'est un spectacle qui fait revivre la musique du célèbre " Hot Club de France" de Django Reinhardt et de Stéphane Grapelli : deux à trois sets d\'une heure de jazz manouche alliant émotion et swing vertigineux.**

Les musiciens aiment parler au public avec un humour de bon aloi et apportent très souvent des précisions et des anecdotes intéressantes sur les compositions et la vie du génie musical que fut Django Reinhardt.

" Ô Juliette " joue la plupart de ses concerts accompagné d\'un violoniste de talent.',

            'distribution' => '[{"key": "KBCjguAxO5qfDBKI", "layout": "people", "attributes": {"name": "Renée Blanche", "role": "Guitare solo"}}, {"key": "8u6X0765FbhdO5jG", "layout": "people", "attributes": {"name": "Arnaud Rosoux", "role": "Guitare Rythmique"}}, {"key": "ZV1bPfUx5QKNZ1vl", "layout": "people", "attributes": {"name": "Jacky Colleau", "role": "Contrebasse"}}]',
            'details' => '[{"key": "zGxE5IbDnRxfszzE", "layout": "block", "attributes": {"text": "2h30", "title": "Durée"}}, {"key": "STzP9RTD4Hd7ajBG", "layout": "block", "attributes": {"text": "Tous public", "title": "Public"}}]',
            'gallery' => '[{"key": "q6vLEY33nlXRDzBy", "layout": "photo", "attributes": {"alt": "Igor qui joue du piano", "photo": "ylv0VZVbmBVqLySIyPEu9FYmErlOVAkipU6IamAW.jpeg"}}, {"key": "U7K5uUSy7XTyuh1d", "layout": "photo", "attributes": {"alt": "Igor", "photo": "jfM1jUSF7Qs6y4Z293M6ZuQbbEt5THPQcgJbcGln.jpeg"}}, {"key": "q3ghHNWZeo8YXHvS", "layout": "photo", "attributes": {"alt": "Igor", "photo": "64nQLZvDoNa9jP1QDrZBr3dTPd0pGOjOYQPAZmb1.jpeg"}}, {"key": "Fzbhhwt81ZM52sr9", "layout": "photo", "attributes": {"alt": "Igor", "photo": "5OZWX3KGaYPzm8KFLoQV5e8yuGxl8wLPq5oB4o0W.jpeg"}}]',
            'press' => '[{"key": "WHFIMYuxvqHfkZt0", "layout": "press", "attributes": {"url": "https://www.rtbf.be/culture/article/detail_cursiv-de-igor-gehenot-de-la-musique-tout-simplement?id=10423659", "title": "\"Cursiv\" de Igor Gehenot, de la Musique tout simplement !", "source": "RTBF", "excerpt": "Igor Gehenot est né à Liège en 1989. Une mère pianiste, un père dessinateur, Igor commence le piano à 6 ans. Bercé par Bach et Stravinsky, Passionné de Hip Hop et de funk, Igor s’intéressera ensuite au jazz avec la découverte de Bill Evans, Keith Jarrett, McCoy Tyner, Chick Corea …", "published_at": "2020-02-11 00:00:00"}}, {"key": "DFDBSyxnic72n9gh", "layout": "press", "attributes": {"url": "https://plus.lesoir.be/275916/article/2020-01-28/igor-gehenot-cursiv", "title": "Igor Gehenot Cursiv", "source": "Le Soir", "excerpt": "C’est un album d’amitié. Igor l’avoue : il était « out » en arrivant au studio d’Alex. Il n’avait plus rien écrit depuis un an. ", "published_at": "2020-02-12 00:00:00"}}]',
            'date' => now(),
            'featured' => true,
            'resto' => true,
            'type_id' => 1,
            'season_id' => 3,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
            'seats' => null,
            'seating' => true,
            'prices' => null,
        ]);

        Event::create([
            'title' => 'Delta',
            'slug' => 'delta-2',
            'intro' => 'Révélé au sein de son trio avec deux albums, "Road Story", et "Motion", le jeune pianiste belge Igor Gehenot se met au service d\'une musique riche en poésie et en couleur',
            'img' => '1aZVvmOKYUXwWbT7HtS5lnZCHkQKOk1oVG3fRmpR.jpeg',
            'alt' => 'description de l\'image',
            'description' => '**Révélé au sein de son trio avec deux albums, "Road Story", et "Motion", le jeune pianiste belge Igor Gehenot se met au service d\'une musique riche en poésie et en couleur en laissant à chaque note la place de s\'épanouir pour arriver à l\'essentiel.**

Il revient cette fois-ci avec son tout nouveau quartet. Entouré du bugliste breton Alex Tassel, lauréat des Talents Jazz Adami en 2011, et figure de proue de la scène française tant en matière de jazz électrique qu\'acoustique, Igor Gehenot choisit une section rythmique de haut vol composée du jeune contrebassiste suédois Viktor Nyberg et du batteur luxembourgeois Jéröme Klein.

Ce nouveau projet s\'inscrit dans la lignée mélodique de Gehenot, alternant mélodies fortes, grooves ancrés, et swings élégants.',

            'distribution' => '[{"key": "KBCjguAxO5qfDBKI", "layout": "people", "attributes": {"name": "Renée Blanche", "role": "Guitare solo"}}, {"key": "8u6X0765FbhdO5jG", "layout": "people", "attributes": {"name": "Arnaud Rosoux", "role": "Guitare Rythmique"}}, {"key": "ZV1bPfUx5QKNZ1vl", "layout": "people", "attributes": {"name": "Jacky Colleau", "role": "Contrebasse"}}]',
            'details' => '[{"key": "zGxE5IbDnRxfszzE", "layout": "block", "attributes": {"text": "2h30", "title": "Durée"}}, {"key": "STzP9RTD4Hd7ajBG", "layout": "block", "attributes": {"text": "Tous public", "title": "Public"}}]',
            'gallery' => '[{"key": "q6vLEY33nlXRDzBy", "layout": "photo", "attributes": {"alt": "Igor qui joue du piano", "photo": "ylv0VZVbmBVqLySIyPEu9FYmErlOVAkipU6IamAW.jpeg"}}, {"key": "U7K5uUSy7XTyuh1d", "layout": "photo", "attributes": {"alt": "Igor", "photo": "jfM1jUSF7Qs6y4Z293M6ZuQbbEt5THPQcgJbcGln.jpeg"}}, {"key": "q3ghHNWZeo8YXHvS", "layout": "photo", "attributes": {"alt": "Igor", "photo": "64nQLZvDoNa9jP1QDrZBr3dTPd0pGOjOYQPAZmb1.jpeg"}}, {"key": "Fzbhhwt81ZM52sr9", "layout": "photo", "attributes": {"alt": "Igor", "photo": "5OZWX3KGaYPzm8KFLoQV5e8yuGxl8wLPq5oB4o0W.jpeg"}}]',
            'press' => '[{"key": "WHFIMYuxvqHfkZt0", "layout": "press", "attributes": {"url": "https://www.rtbf.be/culture/article/detail_cursiv-de-igor-gehenot-de-la-musique-tout-simplement?id=10423659", "title": "\"Cursiv\" de Igor Gehenot, de la Musique tout simplement !", "source": "RTBF", "excerpt": "Igor Gehenot est né à Liège en 1989. Une mère pianiste, un père dessinateur, Igor commence le piano à 6 ans. Bercé par Bach et Stravinsky, Passionné de Hip Hop et de funk, Igor s’intéressera ensuite au jazz avec la découverte de Bill Evans, Keith Jarrett, McCoy Tyner, Chick Corea …", "published_at": "2020-02-11 00:00:00"}}, {"key": "DFDBSyxnic72n9gh", "layout": "press", "attributes": {"url": "https://plus.lesoir.be/275916/article/2020-01-28/igor-gehenot-cursiv", "title": "Igor Gehenot Cursiv", "source": "Le Soir", "excerpt": "C’est un album d’amitié. Igor l’avoue : il était « out » en arrivant au studio d’Alex. Il n’avait plus rien écrit depuis un an. ", "published_at": "2020-02-12 00:00:00"}}]',
            'date' => now(),
            'featured' => true,
            'resto' => true,
            'type_id' => 1,
            'season_id' => 3,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
            'seats' => null,
            'seating' => true,
            'prices' => null,
        ]);

    }
}
