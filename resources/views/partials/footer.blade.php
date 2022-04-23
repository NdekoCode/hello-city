<footer>
    &copy; Copyright {{ date('Y') }} &middot; {{ config('app.name') }}
    {{-- Si on est sur la page "About" alors n'affiche pas ce lien --}}
    @if (!Route::is('app_about'))
        <a href="{{ route('app_about') }}">
            About us
        </a>
    @endif
</footer>
</body>

</html>
