@extends('layout')
@section('title', 'Recherche')
@section('main')
    @include('partials.heroBasic', [
        'color' => 'grey',
        'title' => 'Recherche (' . $q . ')',
        'intro' => '',
        'img' => '',
        'type' => ''
    ])
    <main class="main">
        @if(count($events))
        <section class="allEvents">
            <div class="wrapper">
                <h2 class="allEvents__subtitle">Résultats de recherche dans les spectacles</h2>
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
        <div class="searchResults wrapper">
            <p class="searchResults__text">Aucun spectacle ne correspond à la recherche&nbsp;!</p>
            <a class="btn btn--primary" href="{{ route('agenda', ['season' => $latestSeason]) }}">Voir l'agenda</a>
        </div>
        @endif

        @if(count($posts))
        <section class="allPosts">
            <div class="wrapper">
                <h2 class="allEvents__subtitle">Résultats de recherche dans les actus</h2>
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
         <div class="searchResults wrapper">
            <p class="searchResults__text">Aucune actualité ne correspond à la recherche&nbsp;!</p>
            <a class="btn btn--primary" href="{{ route('post') }}">Voir toutes les actualités</a>
         </div>
        @endif
    </main>
@endsection
