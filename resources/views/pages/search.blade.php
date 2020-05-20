@extends('layout')
@section('title', 'Recherche')
@section('main')
    @include('partials.heroBasic', [
        'color' => 'grey',
        'title' => 'Recherche',
        'intro' => '',
        'img' => '',
        'type' => ''
    ])
    <main class="main">
        @if(count($events))
        <section class="allEvents">
            <div class="wrapper">
                <h2 class="sro">Résultat de recherche dans les spectacles</h2>
                <div class="allEvents__container">
                    @foreach($events as $event)
                        @include('parts.eventCard', [
                            'event' => $event,
                            'class' => ''
                        ])
                    @endforeach
                </div>
                <div class="pag pag--pink">
                    {{ $events->links() }}
                </div>
            </div>
        </section>
        @else
        <div class="wrapper">
            <p>Aucun spectacles ne correspond à la recherche&nbsp;! <a href="{{ route('agenda', ['season' => $latestSeason]) }}">Allez voir l'agenda</a></p>
        </div>
        @endif

        @if(count($posts))
        <section class="allPosts">
            <div class="wrapper">
                <h2 class="sro">Toutes les actus</h2>
                <div class="allPosts__container">
                    @foreach($posts as $post)
                        @include('parts.newsCard', [
                            'post' => $post,
                            'class' => ''
                        ])
                    @endforeach
                </div>
                <div class="pag pag--green">
                    {{ $posts->links() }}
                </div>
            </div>
        </section>
         @else
         <div class="wrapper">
            <p>Aucun articles ne correspond à la recherche&nbsp;! <a href="{{ route('post') }}">Voir toutes les actualites</a></p>
         </div>
        @endif
    </main>
@endsection
