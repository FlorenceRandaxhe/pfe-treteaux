@component('mail::message')

**Nom**: {{ $data->name }}

**E-mail**: [{{ $data->email }}](mailto:{{ $data->email }})

**Date(s) de location**: {{ $data->date }}

**Message**:

{!! nl2br(htmlentities($data->message)) !!}

--

@component('mail::button', ['url' => 'mailto:' . $data->email . '?body=' . str_replace(PHP_EOL, "%0D%0A", PHP_EOL . PHP_EOL . $data->name . ' a dit:' . PHP_EOL . PHP_EOL . $data->message)])
Répondre
@endcomponent

@endcomponent