<dropdown-trigger class="h-9 flex items-center">
    @isset($user->email)
        <svg width="40" height="40" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-right: 10px">
            <path d="M55.5 111C86.1518 111 111 86.1518 111 55.5C111 24.8482 86.1518 0 55.5 0C24.8482 0 0 24.8482 0 55.5C0 86.1518 24.8482 111 55.5 111Z" fill="#292828"/>
            <path d="M82.1235 26L83 48.5313H81.247C78.6175 40.4375 76.2072 35.1875 74.2351 32.125C72.2629 29.2813 69.1952 27.75 65.4701 27.75H64.3745V87.0312H72.0438V89H39.1753V87.0312H46.8446V27.75H45.749C41.8048 27.75 38.9562 29.2813 36.7649 32.3438C34.5737 35.4063 32.3825 40.875 29.753 48.5313H28L28.8765 26H82.1235Z" fill="#F9F9F9"/>
        </svg>

    @endisset

    <span class="text-90">
        {{ $user->name ?? $user->email ?? __('Nova User') }}
    </span>
</dropdown-trigger>

<dropdown-menu slot="menu" width="200" direction="rtl">
    <ul class="list-reset">
        <li>
            <a href="{{ route('nova.logout') }}" class="block no-underline text-90 hover:bg-30 p-3">
                {{ __('Se déconnecter') }}
            </a>
        </li>
    </ul>
</dropdown-menu>
