<form class="contact__form form" method="POST" action="{{ route('contactForm') }}">
    @csrf
    {!! Honeypot::generate('my_name', 'my_time') !!}
    <div class="form__control form__control--margin @error('name') form__control--error @enderror">
        <input type="text" name="name" id="name" class="form__input" placeholder="Votre nom" value="{{ old('name') }}">
        <label class="form__label" for="name">Nom</label>

        @error('name')
            <p class="form__error">{{ $message }}</p>
        @enderror
    </div>
    <div class="form__control form__control--margin @error('email') form__control--error @enderror">
        <input type="text" name="email" id="email" class="form__input" placeholder="Votre email" value="{{ old('email') }}">
        <label class="form__label" for="email">Email</label>

        @error('email')
            <p class="form__error">{{ $message }}</p>
        @enderror
    </div>
    <div class="form__control form__control--margin @error('subject') form__control--error @enderror">
        <input type="text" name="subject" id="subject" class="form__input" placeholder="Le sujet de votre message" value="{{ old('subject') }}">
        <label class="form__label" for="subject">Sujet</label>

        @error('subject')
            <p class="form__error">{{ $message }}</p>
        @enderror
    </div>
    <div class="form__control @error('message') form__control--error @enderror">
        <textarea class="form__textarea" name="message" id="message" placeholder="Votre message">{{ old('message') }}</textarea>
        <label class="form__label" for="message">Message</label>

        @error('message')
            <p class="form__error">{{ $message }}</p>
        @enderror
    </div>
    <div class="form__control">
        <input type="checkbox" name="newsl" id="newsl" class="form__checkbox">
        <label class="form__label form__label--checkbox" for="newsl">M'inscrire à la newsletter</label>
    </div>
    <div class="form__control form__btnContainer">
        <button class="link link--big link--line">Envoyer</button>
    </div>
</form>