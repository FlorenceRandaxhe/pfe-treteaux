<form class="form" method="POST" action="#">
    <div class="form__control">
        <label class="form__label" form="r_name">Votre nom</label>
        <input type="text" name="r_name" id="r_name" class="form__input" placeholder="Votre nom">
    </div>

    <div class="form__control">
        <label class="form__label" form="r_email">Votre email</label>
        <input type="email" name="r_email" id="r_email" class="form__input" placeholder="Votre email">
    </div>

    <div class="form__control">
        <label class="form__label" form="r_date">Date(s) de location</label>
        <input type="text" name="r_date" id="r_date" class="form__input" placeholder="Date(s) de location">
    </div>

    <div class="form__control">
        <label class="form__label" form="r_message">Votre message</label>
        <textarea class="form__textarea" name="r_message" id="r_message" placeholder="Votre message"></textarea>
    </div>

    <div>
        <button type="submit" class="btn link link--line">
            Envoyer ma demande
        </button>
    </div>
</form>