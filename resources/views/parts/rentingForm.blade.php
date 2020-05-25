<form class="form" method="POST" action="{{ route('rentingSubmit') }}">
    @csrf
    {!! Honeypot::generate('my_name', 'my_time') !!}
    <div class="form__control form__control--margin @error('name') form__control--error @enderror">
        <label class="form__label" for="name">Votre nom</label>
        <input type="text" name="name" id="name" class="form__input" placeholder="Votre nom" value="{{ old('name') }}">
        @error('name')
            <p class="form__error">{{ $message }}</p>
        @enderror
    </div>

    <div class="form__control form__control--margin @error('email') form__control--error @enderror">
        <label class="form__label" for="email">Votre email</label>
        <input type="email" name="email" id="email" class="form__input" placeholder="Votre email" value="{{ old('email') }}">
        @error('email')
            <p class="form__error">{{ $message }}</p>
        @enderror
    </div>

    <div class="form__control form__control--margin @error('date') form__control--error @enderror">
        <label class="form__label" for="date">Date(s) de location</label>
        <input type="text" name="date" id="date" class="form__input" placeholder="Date(s) de location" value="{{ old('date') }}">
        @error('date')
            <p class="form__error">{{ $message }}</p>
        @enderror
    </div>

    <div class="form__control form__control--margin @error('message')form__control--error @enderror">
        <label class="form__label" for="message">Votre message</label>
        <textarea class="form__textarea" name="message" id="message" placeholder="Votre message">{{ old('message') }}</textarea>
        @error('message')
            <p class="form__error">{{ $message }}</p>
        @enderror
    </div>

    <div class="form__btnContainer">
        <button type="submit" class="link link--big link--line">
            Envoyer ma demande
        </button>
    </div>
</form>