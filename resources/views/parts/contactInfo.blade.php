<div class="contactInfo contactInfo--pin">
    <a class="contactInfo__link" target="_blank" href="https://maps.google.com/?ll={{ Page::option('contact')->lat }},{{ Page::option('contact')->lng }}
"><span class="sro">Voir sur google map</span></a>
    <p class="contactInfo__label">Adresse</p>
    <p class="contactInfo__info">{{ Page::option('contact')->address }}</p>
</div>
<div class="contactInfo contactInfo--mail">
    <a class="contactInfo__link" href="mailto:{{ Page::option('contact')->email }}"><span class="sro">Envoyer un mail</span></a>
    <p class="contactInfo__label">Email</p>
    <p class="contactInfo__info">{{ Page::option('contact')->email }}</p>
</div>
<div class="contactInfo contactInfo--phone">
    <a class="contactInfo__link" href="tel:{{ phone(Page::option('contact')->phone) }}"><span class="sro">Téléphoner</span></a>
    <p class="contactInfo__label">Téléphone</p>
    <p class="contactInfo__info">{{ Page::option('contact')->phone }}</p>
</div>