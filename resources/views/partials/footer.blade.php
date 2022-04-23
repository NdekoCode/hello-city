<footer>
    &copy; Copyright {{ date('Y') }} &middot; {{ config('app.name') }}
    {{ dump(Route::has('app_about')) }}
    @if (!Route::has('app_about'))
        <a href="{{ route('app_about') }}">
            About us
        </a>
    @endif
</footer>
</body>

</html>
