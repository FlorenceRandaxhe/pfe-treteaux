<div class="social">
    <ul class="social__list">
        @if(Page::option('social')->facebook)
        <li class="social__item">
            <a target="_blank" class="social__link social__link--fb" href="{{ Page::option('social')->facebook }}">
                <span class="sro">Facebook</span>
            </a>
        </li>
        @endif
        @if(Page::option('social')->insta)
        <li class="social__item">
            <a target="_blank" class="social__link social__link--insta" href="{{ Page::option('social')->insta }}">
                <span class="sro">Instagram</span>
            </a>
        </li>
        @endif
    </ul>
</div>
