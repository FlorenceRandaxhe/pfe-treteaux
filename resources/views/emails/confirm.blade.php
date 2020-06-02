@component('mail::message')
# Votre réservation pour le spectacle {{ $event->title }} à bien été prise en compte

Rappel de votre réservation :

@component('mail::table')
| Catégorie       | Prix         | Siège  |
| :--------------- |------------:| ------:|
@foreach(Session::get('category') as $key => $value)
| {{ Str::ucfirst($value) }}      | {{ $event->prices[$value] }}€      | @if($event->seating == 0) n°{{ Session::get('select')[$key] }} @else placement libre @endif      |
@endforeach
@endcomponent

**Total : {{ Session::get('total') }}€**


Vous trouverez vos tickets en piece jointe.

{{ config('app.name') }}
@endcomponent
