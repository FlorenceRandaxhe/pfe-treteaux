<form class="form" method="POST" action="{{ route('rentingSubmit') }}">
    @csrf
    <div class="form__control @error('r_name') form__control--error @enderror">
        <label class="form__label" form="r_name">Votre nom</label>
        <input type="text" name="r_name" id="r_name" class="form__input" placeholder="Votre nom" value="{{ old('r_name') }}">
        @error('r_name')
            <p class="form__error">{{ $message }}</p>
        @enderror
    </div>

    <div class="form__control @error('r_email') form__control--error @enderror">
        <label class="form__label" form="r_email">Votre email</label>
        <input type="email" name="r_email" id="r_email" class="form__input" placeholder="Votre email" value="{{ old('r_email') }}">
        @error('r_email')
            <p class="form__error">{{ $message }}</p>
        @enderror
    </div>

    <div class="form__control @error('r_date') form__control--error @enderror">
        <label class="form__label" form="r_date">Date(s) de location</label>
        <input type="text" name="r_date" id="r_date" class="form__input" placeholder="Date(s) de location" value="{{ old('r_date') }}">
        @error('r_date')
            <p class="form__error">{{ $message }}</p>
        @enderror
    </div>

    <div class="form__control @error('r_message')form__control--error @enderror">
        <label class="form__label" form="r_message">Votre message</label>
        <textarea class="form__textarea" name="r_message" id="r_message" placeholder="Votre message">{{ old('r_message') }}</textarea>
        @error('r_message')
            <p class="form__error">{{ $message }}</p>
        @enderror
    </div>

    <div class="form__btnContainer">
        <button type="submit" class="link link--big link--line">
            Envoyer ma demande
        </button>
    </div>
</form>