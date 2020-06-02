<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lato:ital,wght@0,700;1,700&display=swap');

.page-break {
    page-break-after: always;
}
body{
    margin: 0;
}
header{
    padding: 50px 0;
}
main{
    padding: 45px 30px;
}
h1{
    font-size: 90px;
    font-family: 'Abril Fatface', cursive;
}

p{
    font-family: 'Lato', sans-serif;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
}
.italic{
    font-style: italic;
}
.line{
    padding-bottom: 30px;
    margin-bottom: 30px;
    border-bottom: 3px solid #000;
}
footer{
    padding: 30px;
}
footer p {
    max-width: 700px;
    padding-bottom: 70px;
}
li{
    font-family: 'Lato', sans-serif;
    text-align: right;
    list-style: none;
    font-weight: bold;
}
</style>
</head>
<body>
    @foreach($category as $key => $value)
    <header>
        <figure>
            <img src="{{ asset('img/logoPdf.svg') }}">
        </figure>
    </header>
    <main>
        <h1 style="font-family: 'Abril Fatface', 'Playfair Display', cursive;">{{ $event->title }}</h1>
        <p  style="font-family: 'Lato','Open Sans', 'Helvetica Neue', sans-serif; font-weight: bold; font-style: italic;" class="italic">Salle des Tréteaux</p>
        <p  style="font-family: 'Lato','Open Sans', 'Helvetica Neue', sans-serif; font-weight: bold; font-style: italic;" class="italic line">Rue du Collège 31 4600 Visé</p>

        <p  style="font-family: 'Lato','Open Sans', 'Helvetica Neue', sans-serif; font-weight: bold;">Le {{ $event->date->isoFormat('DD/MM/YYYY') }} à {{ $event->date->isoFormat('HH\hmm') }}</p>
        <p  style="font-family: 'Lato','Open Sans', 'Helvetica Neue', sans-serif; font-weight: bold;">{{ $client['firstName'] }} {{ $client['lastName'] }}</p>
        <p  style="font-family: 'Lato','Open Sans', 'Helvetica Neue', sans-serif; font-weight: bold;">{{ Str::ucfirst($value) }}</p>
        @if($event->seating == 0)
        <p  style="font-family: 'Lato','Open Sans', 'Helvetica Neue', sans-serif; font-weight: bold;">Siège n°{{ Session::get('select')[$key] }}</p>
        @else
        <p  style="font-family: 'Lato','Open Sans', 'Helvetica Neue', sans-serif; font-weight: bold;">Placement libre</p>
        @endif
    </main>
    <footer>
        <p  style="font-family: 'Lato','Open Sans', 'Helvetica Neue', sans-serif; font-weight: bold; max-width: 700px;">La présentation de l’E-ticket devra se faire à l’entrée sous la forme d’une impression de qualité suffisante ou via smartphone sous réserve d’un écran en bon état
        </p>

        <ul>
            <li  style="font-family: 'Lato','Open Sans', 'Helvetica Neue', sans-serif; font-weight: bold;">04 374 85 50</li>
            <li  style="font-family: 'Lato','Open Sans', 'Helvetica Neue', sans-serif; font-weight: bold;">culture@vise.be</li>
            <li  style="font-family: 'Lato','Open Sans', 'Helvetica Neue', sans-serif; font-weight: bold;">www.lestreteaux.be</li>
        </ul>
    </footer>
    <div class="page-break"></div>
    @endforeach
</body>
</html>